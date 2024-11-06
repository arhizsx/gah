import mysql.connector
from google.oauth2 import service_account
from googleapiclient.discovery import build

# Google Sheets setup
SPREADSHEET_ID = 'YOUR_SPREADSHEET_ID'
RANGE_NAME = 'Sheet1!A1'  # Change to your target sheet and cell range
CREDENTIALS_FILE = 'credentials.json'

# MySQL database setup
DB_HOST = 'your_database_host'
DB_USER = 'your_username'
DB_PASSWORD = 'your_password'
DB_NAME = 'your_database_name'

def fetch_data_from_mysql():
    """Fetch data from MySQL database."""
    try:
        connection = mysql.connector.connect(
            host=DB_HOST,
            user=DB_USER,
            password=DB_PASSWORD,
            database=DB_NAME
        )
        cursor = connection.cursor()
        cursor.execute("SELECT * FROM your_table_name")  # Change to your query
        data = cursor.fetchall()
        cursor.close()
        connection.close()
        return data
    except mysql.connector.Error as err:
        print(f"Error: {err}")
        return []

def update_google_sheet(data):
    """Update Google Sheet with MySQL data."""
    credentials = service_account.Credentials.from_service_account_file(
        CREDENTIALS_FILE,
        scopes=["https://www.googleapis.com/auth/spreadsheets"]
    )
    service = build('sheets', 'v4', credentials=credentials)
    sheet = service.spreadsheets()
    
    # Prepare data for Google Sheets API
    values = [list(row) for row in data]  # Convert tuples to lists
    body = {'values': values}

    # Clear existing data in the range before updating (optional)
    sheet.values().clear(spreadsheetId=SPREADSHEET_ID, range=RANGE_NAME).execute()

    # Update Google Sheet
    result = sheet.values().update(
        spreadsheetId=SPREADSHEET_ID,
        range=RANGE_NAME,
        valueInputOption='RAW',
        body=body
    ).execute()
    
    print(f"{result.get('updatedCells')} cells updated.")

if __name__ == "__main__":
    # Step 1: Fetch data from MySQL
    data = fetch_data_from_mysql()
    if data:
        # Step 2: Update Google Sheet with the data
        update_google_sheet(data)
    else:
        print("No data retrieved from MySQL.")
