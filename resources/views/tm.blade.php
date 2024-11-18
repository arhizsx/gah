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
            <form id="registration_form">
                @csrf

                <input type="hidden"  name="action" id="action" value='register'>
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
                    <label class="mb-3">Mobile number used for TM Raket / GoEarn</label>
                    <div style="font-size: 36px; text-align: center; display: flex; align-items: center; justify-content: center;">
                        <span style="margin-right: 5px;">+63</span>
                        <input 
                            type="text" 
                            name="cellnumber" 
                            class="form-control checker" 
                            style="font-size: 36px; text-align: left; flex: 1;" 
                            maxlength="10" 
                            placeholder="9175379140" 
                            required
                            data-checker="required"
                            >
                    </div>
                    <p class="mt-3">Use only the mobile number linked to your TM Raket or GoEarn account. Eligible for selected TM Raket or GoEarn retailers only. We will contact you with this number as well</p>
                </div>
                <div class="border rounded-3 p-3 mt-4">
                    <H4>Personal Information</H4>
                    <div class="form-row">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control mb-3 checker" data-checker="required" name="lastname" id="lastname">
                    </div>
                    <div class="form-row">
                        <label for="firstname">Firstname</label>
                        <input type="text" class="form-control mb-3 checker" data-checker="required" name="firstname" id="firstname">
                    </div>
                </div>
                <div class="border rounded-3 p-3 mt-4">
                    <H4>Installation Address</H4>
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

                <div class="border rounded-3 p-3 mt-4">
                    <H4>Installation Schedule</H4>
                    <div class="form-row">
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
// document.addEventListener('DOMContentLoaded', function () {
//     // Focus on the input field when the page loads
//     document.querySelector('input[name="cellnumber"]').focus();
// });

// document.querySelector('input[name="cellnumber"]').addEventListener('input', function (e) {
//     const input = e.target;
//     input.value = input.value.replace(/[^0-9]/g, ''); // Allow only numeric input
//     if (input.value.length > 10) {
//         input.value = input.value.slice(0, 10); // Limit to 10 digits
//     }
// });

// document.querySelector('button[type="submit"]').addEventListener('click', function () {
//     const input = document.querySelector('input[name="cellnumber"]');
//     if (input.value.length !== 10) {
//         alert("Please enter a valid 10-digit cellphone number.");
//     } else {
//         alert("Number submitted: +63" + input.value);
//         // You can handle form submission here (e.g., send the data to a server).
//     }
// });

</script>

<script>
    $('.select2').select2();

    $(document).on("input", ".checker", function(){

        Checker();

    });

    function Checker(){

        let to_check = $(document).find(".checker");
        let error_cnt = 0;

        $.each(to_check, function( k, v){

            if( to_check.eq( k ).data("checker") == "required" ){
                if( $(v).is("input") ){

                    var type = to_check.eq( k ).attr( "type" );
                    var value = "";

                    switch( type ){

                        case "text":

                            value = to_check.eq( k ).val();
                            break;

                        case "date":

                            value = to_check.eq( k ).val();
                            break;

                        case "checkbox":


                            value = to_check.eq( k ).is(":checked");
                            break;

                        case "file":

                            value = to_check.eq( k ).val();
                            break;

                        default:
                            console.log( type );

                    }

                    if( value == false ){

                        if( type != "checkbox"){

                            $(to_check).eq( k ).css("background-color","#FFEFEF");
                            $(to_check).eq( k ).addClass("checker-error");

                        } else {

                            $(to_check).eq( k ).css("border-color","red");
                        }

                        $(to_check).eq( k ).addClass("checker-error");
                        error_cnt = error_cnt + 1;

                    } else {

                        if( type != "checkbox"){

                            $(to_check).eq( k ).css("background","#ffffff");

                        } else {

                            $(to_check).eq( k ).css("border-color","gray");

                        }

                        $(to_check).eq( k ).removeClass("checker-error");


                    }

                }
                else if( $(v).is("select") ){


                    $(v).parent().find(".select2-selection--single").css("background","#FFEFEF");

                    if( $(v).find("option:selected").val() == false ){

                        $(to_check).eq( k ).css("background","#FFEFEF");
                        $(to_check).eq( k ).addClass("checker-error");

                        error_cnt = error_cnt + 1;


                    }
                    else {
                        $(to_check).eq( k ).css("background","#ffffff");
                        $(to_check).eq( k ).removeClass("checker-error");

                    }

                }
            }

        } );

        if( error_cnt > 0 ){

            // OpenAccordion();
            return false;
        }

        return true;

    }

</script>
