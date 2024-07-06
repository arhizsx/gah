@extends("layouts.email")

@section("headerText")
    NEW APPLICATION RECEIVED
@endsection

@section("greetings")
    <p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#666666;text-align:center">
        HI,&nbsp;%COMPANY% TEAM
    </p>
@endsection

@section("firstContent")
    <p style="padding-top: 30px; padding-bottom: 30px; Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#666666;text-align:center">
        We assigned a new GFiber Installation Application to your company.
    </p>
@endsection

@section("secondContent")
    <table width="100%">
        <tr>
            <td>Campaign</td>
            <td>{{ $campaignRegistration->campaign }}</td>
        </tr>
        <tr>
            <td>Complete Name</td>
            <td>{{ $campaignRegistration->complete_name }}</td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td>{{ $campaignRegistration->mobile_number }}</td>
        </tr>
        <tr>
            <td>Province</td>
            <td>{{ $campaignRegistration->province }}</td>
        </tr>
        <tr>
            <td>City</td>
            <td>{{ $campaignRegistration->city }}</td>
        </tr>
    </table>
@endsection

@section("thirdContent")
    <p style="padding-top: 30px;Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#666666">
        To view all the applications assigned to your team please click on the button below
    </p>
@endsection

@section("fourthContent")
    <span class="es-button-border" style="border-style:solid;border-color:#3D5CA3;background:#FFFFFF;border-width:2px;display:inline-block;border-radius:10px;width:auto">
        <a href="https://www.globeathome.online/supervendor/applications" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;font-size:14px;color:#3D5CA3;border-style:solid;border-color:#FFFFFF;border-width:15px 20px 15px 20px;display:inline-block;background:#FFFFFF;border-radius:10px;font-weight:bold;font-style:normal;line-height:17px;width:auto;text-align:center">
            VIEW APPLICATIONS
        </a>
    </span>
@endsection
