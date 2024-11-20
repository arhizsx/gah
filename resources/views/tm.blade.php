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
            <img src="/images/finish.png" width="100%" />
            <div id="checking">
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
                <form id="check_form">
                    @csrf

                    <input type="hidden"  name="action" id="action" value='tmcheck'>
                    <input type="hidden"  name="campaign" id="campaign" value='TM'>

                    <div class="border rounded-3 p-3 mt-4">
                        <label class="mb-3">Mobile number used for TM EasyRaket / Globe Prepaid GoEarn</label>
                        <div style="font-size: 48px; text-align: center; display: flex; align-items: center; justify-content: center;">
                            <span style="margin-right: 5px;">+63</span>
                            <input 
                                type="text" 
                                name="cellnumber" 
                                class="form-control" 
                                style="font-size: 48px; text-align: left; flex: 1;" 
                                maxlength="10" 
                                placeholder="9171234567" 
                                required>
                        </div>
                        <p class="mt-3">
                            Use only the mobile number linked to your TM EasyRaket/ Globe Prepaid GoEarn account. Eligible for selected retailers only. 
                            We will contact you with this number as well. (Ex. +639171234567) 
                            Turn on screen reader support                        
                        </p>
                    </div>

                    <div class="d-flex justify-content-between mt-3">
                        <button class='btn btn-outline-dark'>Clear Form</button>
                        <button type="submit" class='btn btn-primary action_button' data-action="checker">Next</button>
                    </div>
                </form>
            </div>
            <div id="loading" class="d-none text-center">
                <H1 class="mt-5 mb-5">Checking...</H1>
            </div>
            <div id="registration_allowed" class="d-none">
                <form id="register_form">
                    @csrf

                    <input type="hidden"  name="action" id="action" value='tmcheck'>
                    <input type="hidden"  name="campaign" id="campaign" value='TM'>

                    <div class="accordion  mt-4" id="information">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>Personal Information</h5>
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="form-row">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control mb-3 checker" data-checker="required" name="lastname" id="lastname">
                                    </div>
                                    <div class="form-row">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control mb-3 checker" data-checker="required" name="firstname" id="firstname">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <H5>Installation Address</H5>
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="form-row">
                                        <label for="house_floor_bldg">House no., Floor no., Bldg</label>
                                        <input type="text" class="form-control mb-3 checker" data-checker="required" name="house_floor_bldg" id="house_floor_bldg">
                                    </div>
                                    <div class="form-row">
                                        <label for="street">Street</label>
                                        <input type="text" class="form-control mb-3 checker" data-checker="required" name="street" id="street">
                                    </div>
                                    <div class="form-row">
                                        <label for="brgy_village">Barangay / Village</label>
                                        <input type="text" class="form-control mb-3 checker" data-checker="required" name="brgy_village" id="brgy_village">
                                    </div>
                                    <div class="form-row">
                                        <label for="province">Province</label><br>
                                        <select class="form-control mb-3 checker location_filters select2"  data-filter='province' data-parent='#collapseTwo' data-checker="required" name="province" id="province" style="width=100%;">
                                            <option value="" selected>Select Province</option>
                                            @foreach($provinces as $option)
                                            <option value="{{ $option->PROVINCE }}">{{ $option->PROVINCE }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <label for="city">City</label><br>
                                        <select class="form-control mb-3 checker location_filters select2" data-filter='city' data-parent='#collapseTwo' data-checker="required" name="city" id="city" style="width=100%;">
                                            <option value="" selected>Select City</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <label for="zipcode">Zip Code</label>
                                        <input type="text" class="form-control mb-3 checker" data-checker="required" name="zipcode" id="zipcode">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <H5>Serviceability Check</H5>
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="form-row">
                                        <label for="serviceability_check">Serviceability Screenshot</label>
                                        <input type="file" class="form-control mb-3 checker" data-checker="required" name="serviceability_check" id="serviceability_check">
                                        <a target="_blank" href="https://gfiberprepaid.globe.com.ph/serviceability/">Check Address Serviceability</a>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <H5>Installation Schedule</H5>
                            </button>
                            </h2>
                            <div id="collapseThree" class="-collapse collapse">
                                <div class="accordion-body"accordion>

                                    <div class="form-row">
                                        <label for="schedule">Installation Schedule</label>
                                        <div id="scchedule" class="d-flex">
                                        <input type="date" class="form-control mb-3 checker flex-fill me-1" data-checker="required" name="schedule_date" id="schedule_date">
                                        <select class="form-control mb-3 checker flex-fill ms-1 select2" data-checker="required" name="schedule_hour" id="schedule_hour">
                                            <option value="" selected>Select Time</option>
                                            <option value="08:00 AM">08:00 AM</option>
                                            <option value="09:00 AM">09:00 AM</option>
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="12:00 PM">12:00 PM</option>
                                            <option value="01:00 PM">01:00 PM</option>
                                            <option value="02:00 PM">02:00 PM</option>
                                            <option value="03:00 PM">03:00 PM</option>
                                            <option value="04:00 PM">04:00 PM</option>
                                            <option value="05:00 PM">05:00 PM</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded-3 p-3 mt-4" style="font-size: 10px">

                            <H5 style="font-size: 14px">Disclaimer</H5>
                            <p>This offer is subject to the fiber serviceability of your nominated address. The value of this bundle cannot be converted to cash in case of unsuccessful installation. Terms and conditions apply.</p>

                            <H5 style="font-size: 14px">Privacy Notice</H5>
                            <p>By completing and submitting this form, I allow GLOBE to collect and process the personal data I will provide to claim my free GFiber Prepaid installation as a GoEarn or TM Raket retailer in accordance with the Privacy Policy of Globe.</p>
                            
                            <div class="form-row">
                                <div class="form-check">
                                    <input class="form-check-input checker me-3" data-checker="required" type="checkbox" value="" id="agree_policy">
                                    <label class="form-check-label" for="agree_policy">
                                        I understand and agree with the Privacy notice
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button class='btn btn-outline-dark'>Clear Form</button>
                        <button type="submit" class='btn btn-primary action_button' data-action="register">Submit</button>
                    </div>

                </form>
            </div>
            <div id="registration_not_allowed" class="d-none">
                <div class="border rounded-3 p-5 mt-4">
                    <H5>Sorry, it looks like you’re not eligible to proceed</H5>
                </div>
            </div>
            <div id="registration_multiple" class="d-none">
                <div class="border rounded-3 p-5 mt-4">
                    <H5>You’ve already submitted an application. We’ll be reaching out to you soon</H5>
                </div>
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

$('.action_button[data-action="checker"]').on('click', function (e) {

    e.preventDefault();

    const input = document.querySelector('input[name="cellnumber"]');

    $("#checking").addClass("d-none");
    $("#loading").removeClass("d-none");

    if (input.value.length !== 10) {
        alert("Please enter a valid 10-digit cellphone number.");

        $("#checking").removeClass("d-none");
        $("#loading").addClass("d-none");

        document.querySelector('input[name="cellnumber"]').focus();

        return; // Prevent submission

    } else {


        let form = new FormData( $("#check_form")[0] );
        var checking = CheckData( form );

        $.when( checking ).done( function( checking ){

            if( checking.error == false ){
                
                $("#loading").addClass("d-none");

                if( checking.status == 'Allowed' ){
                    $("#registration_allowed").removeClass("d-none");                    
                }
                else if( checking.status == 'NotAllowed' ){
                    $("#registration_not_allowed").removeClass("d-none");                    
                }
                else if( checking.status == 'Multiple' ){
                    $("#registration_multiple").removeClass("d-none");                    
                }

                
            } else {
                $("#loading").addClass("d-none");
                $("#registration_not_allowed").removeClass("d-none");
            }

        });

        console.log("Checking");

    }

    function CheckData(form){

        var defObject = $.Deferred();  // create a deferred object.

        $.ajax({
            type: 'post',
            url: "/supervendor/ajax-public",
            data: form,
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            success: function(resp){

                console.log(resp) ;

                defObject.resolve(resp);    //resolve promise and pass the response.

            },
            error: function(){
                console.log("Error in AJAX");
            }
        });

        return defObject.promise();

    }

});

$('.action_button[data-action="register"]').on('click', function (e) {

    e.preventDefault();

    alert("Test");

});
</script>