<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>FREE GFiber Prepaid for our TM Raket & GoEarn Retailers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

        <style>
            body {
                font-size: .8em;
            }
            input[type=checkbox] {
                transform: scale(1.5);
            }
            .select2-container {
                width: 100% !important;
                margin-bottom: 15px;
            }
            .select2-selection__rendered, .select2-selection__arrow, .select2-selection--single{
                height: 40px !important;
            }
            .select2-selection__rendered {
                line-height: 40px !important;
                font-size: 14px;
            }

        </style>
    </head>

    <body  class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div id="registration" style="max-width: 640px; min-width: 400px; margin-left: auto; margin-right: auto;">
            <form id="registration_form" action="/retailerexclusive/check" method="post">
                @csrf

                <input type="hidden"  name="action" id="action" value='check'>
                <input type="hidden"  name="campaign" id="campaign" value='TM'>

                <img src="/images/finish.png" width="100%" />
                <div class="border rounded-3 p-3 mt-4">
                    <H4>FREE GFiber Prepaid for our TM Raket & GoEarn Retailers</H4>
                    <p>Hello, Retailer! Please fill out this form to claim your free GFiber Prepaid Kit.</p>
                    <H4>What is GFiber Prepaid?</H4>
                    <p>GFiber Prepaid offers reloadable UNLI Internet with speeds up to 50Mbps. No monthly bills—just reload anytime you need!</p>
                    <H4>Reminders:</H4>
                    <ul>
                        <li>Use only the mobile number linked to your TM Raket or GoEarn account. Eligible for selected TM Raket/GoEarn retailers only.</li>
                        <li>Availability is subject to service coverage in your area.</li>
                        <li>Expect an SMS confirmation from us regarding your application.</li>
                    </ul>
                </div>

                <div class="border rounded-3 p-3 mt-4">
                    <label class="mb-3">Mobile number used for TM EasyRaket / Globe Prepaid GoEarn</label>
                    <div style="font-size: 48px; text-align: center; display: flex; align-items: center; justify-content: center;">
                        <span style="margin-right: 5px;">0</span>
                        <input 
                            type="text" 
                            name="cellnumber" 
                            class="form-control" 
                            style="font-size: 48px; text-align: left; flex: 1;" 
                            maxlength="10" 
                            placeholder="9774793907" 
                            required>
                    </div>
                    <p class="mt-3">
                        Use only the mobile number linked to your TM EasyRaket/ Globe Prepaid GoEarn account. Eligible for selected retailers only. 
                        We will contact you with this number as well. (Ex. 09171234567) 
                        Turn on screen reader support                        
                    </p>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <button class='btn btn-outline-dark'>Clear Form</button>
                    <button type="submit" class='btn btn-primary action_button' data-action="submit_form">Submit</button>
                </div>

                <div class="d-flex justify-content-center my-5">
                    <small>Globe At Home 2024</small>
                </div>
            </form>
        </div>
        <div id="loading" class="d-none text-center" style="max-width: 640px; min-width: 400px; margin: auto; padding-top: 150px;">
            <H1>Submitting Data...</H1>
        </div>
        <div id="registration_successful" class="d-none" style="max-width: 640px; min-width: 400px; margin: auto;">
            <!-- <img src="/images/finish.png" width="100%" /> -->
            <div class="border rounded-3 p-5 mt-4">
                <H5>Registration Successful</H5>
                <p>Please wait for the feedback of our installer.</p>
            </div>
            <div class="d-flex justify-content-center my-5">
                <small>Globe At Home 2024</small>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @vite(['resources/js/location.js'])

    </body>

</html>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Focus on the input field when the page loads
    document.querySelector('input[name="cellnumber"]').focus();
});

document.querySelector('input[name="cellnumber"]').addEventListener('input', function (e) {
    const input = e.target;
    input.value = input.value.replace(/[^0-9]/g, ''); // Allow only numeric input
    if (input.value.length > 10) {
        input.value = input.value.slice(0, 10); // Limit to 10 digits
    }
});

document.querySelector('button[type="submit"]').addEventListener('click', function (e) {

    e.preventDefault();
    
    const input = document.querySelector('input[name="cellnumber"]');
    if (input.value.length !== 10) {
        alert("Please enter a valid 10-digit cellphone number.");
        return; // Prevent submission
    } else {

        console.log("Checking...")

    }
});
</script>