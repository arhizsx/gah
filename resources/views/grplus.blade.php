<?php 
   $campaign = "GR+";
   $header_banner = "/images/temp.png";

   $mobile_number_label = "GR+ Member's mobile number";
   $mobile_number_subtext = "Use the mobile number associated with your Globe Rewards+ account. Only selected Globe Rewards+ customers are eligible for this offer. (Example: +639171234567)";

   $title = "Exclusive FREE GFiber Prepaid for being a Globe Rewards+ member!";
   
   $numbercheck_html = 
   "<p>Please fill out this form to claim your free GFiber Prepaid Installation!</p>" . 
   "<H4>What is GFiber Prepaid?</H4>" . 
   "<p>GFiber Prepaid offers reloadable UNLI fiber internet speeds up to 100Mbps. No monthly bills - reload only when you need to!</p>" . 
   "<H4>Reminders:</H4>" . 
   "<ul>" . 
       "<li>This offer is for selected GR+ members, subject to validation</li>" . 
       "<li>Subject to fiber serviceability in your area</li>" . 
       "<li>Expect an SMS confirmation regarding your application within 2 working days</li>" . 
   "</ul>";

   $error_html = 
    "<H5>Oops, an error occured... Please retry again later...</H5>";

    $submitted_html = 
    "<H5>You’ve already submitted an application. We’ll be reaching out to you soon</H5>";

    $registered_html = 
    "<H5>Thank you for choosing GFiber Prepaid! We’ve received your installation details, and our Globe At Home Broadband Specialist will contact you within 2 working days to kickstart the next steps</H5>";

    $registration_confirmation_message_html =
    "<p>Please confirm that all details are correct before submitting. Proceed?</p>";

    $privacy_html = 
    "<p>By completing and submitting this form, I allow GLOBE to collect and process the personal data I will provide to claim my free GFiber Prepaid installation as a GoEarn or GP-TM Raket retailer in accordance with the <a target='_blank' href='https://www.globe.com.ph/privacy-policy'>Privacy Policy of Globe.</a></p>";

    $disclaimer_html = 
    "<p>This offer is subject to the fiber serviceability of your nominated address. The value of this bundle cannot be converted to cash in case of unsuccessful installation. <a target='_blank' href='https://www.globe.com.ph/website-terms-conditions'>Terms and conditions</a> apply.</p>"        
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>{{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <script src="https://kit.fontawesome.com/65ee368307.js" crossorigin="anonymous"></script>

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
            <img src="{{ $header_banner }}" width="100%" />
            <div id="registration_allowed">
                <form id="register_form">
                    @csrf

                    <input type="hidden"  name="action" id="action" value='register'>
                    <input type="hidden"  name="campaign" id="campaign" value='{{ $campaign }}'>
                    <input type="hidden"  name="mobile_number" id="mobile_number" value=''>
                    <input type="hidden"  name="complete_name" id="complete_name" value=''>

                    <div class="border rounded-3 p-3 mt-4">
                        <H4>{{ $title }}</H4>
                        {!! $numbercheck_html !!}
                    </div>

                    <div class="border rounded-3 p-3 mt-4">
                        <label class="mb-3">{{ $mobile_number_label }}</label>
                        <div style="font-size: 48px; text-align: center; display: flex; align-items: center; justify-content: center;">
                            <span style="margin-right: 5px;">+63</span>
                            <input 
                                type="text" 
                                name="mobile_number"
                                id="mobile_number"
                                class="form-control checker" 
                                style="font-size: 48px; text-align: left; flex: 1;" 
                                maxlength="10" 
                                placeholder="9171234567" 
                                data-checker="cellnumber"
                                required>
                        </div>
                        <p class="mt-3">
                            {{ $mobile_number_subtext }}
                        </p>
                    </div>
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
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <H5>Installation Address</H5>
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse show">
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
                                    <div class="form-row">
                                        <a class="mt-4" target="_blank" href="https://gfiberprepaid.globe.com.ph/serviceability/">Check Address Serviceability</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <H5>Installation Schedule</H5>
                            </button>
                            </h2>
                            <div id="collapseThree" class="-collapse show">
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
                            {!! $disclaimer_html !!} 

                            <H5 style="font-size: 14px">Privacy Notice</H5>
                            {!! $privacy_html !!}
                            
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
            <div id="registration_error" class="d-none">
                <div class="border rounded-3 p-5 mt-4">
                    {!! $error_html !!}                    
                </div>
            </div>
            <div id="registration_multiple" class="d-none">
                <div class="border rounded-3 p-5 mt-4">
                    {!!  $submitted_html !!}
                </div>
            </div>
            <div id="registration_success" class="d-none">
                <div class="border rounded-3 p-5 mt-4">
                    {!! $registered_html !!}
                </div>
            </div>
            <div id="loading" class="d-none text-center">
                <div class="border rounded-3 p-5 mt-4">
                    <H1 class="mt-5 mb-5">Please wait...</H1>
                    <div class="mb-5">
                    <i class="fa-solid fa-spinner fa-10x fa-spin-pulse"></i>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-5">
                <small>Globe At Home 2024</small>
            </div>
        </div>


        <div class="modal" tabindex="-1" id="confirm-register-modal">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Registration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-5">
                        {!! $registration_confirmation_message_html !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary action_button" data-action="confirm_registration">Yes</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @vite(['resources/js/location.js'])

    </body>

</html>
<script>
    
    $(document).ready(function(){
        $(document).find("[name='province']").val("").change();
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Focus on the input field when the page loads
        document.querySelector('input[name="mobile_number"]').focus();
    });

    document.querySelector('input[name="mobile_number"]').addEventListener('input', function (e) {
        const input = e.target;
        input.value = input.value.replace(/[^0-9]/g, ''); // Allow only numeric input
        if (input.value.length > 10) {
            input.value = input.value.slice(0, 10); // Limit to 10 digits
        }
    });

    $('.action_button[data-action="checker"]').on('click', function (e) {

        e.preventDefault();

        const input = document.querySelector('input[name="mobile_number"]');

        $("#checking").addClass("d-none");
        $("#loading").removeClass("d-none");

        if (input.value.length !== 10) {
            alert("Please enter a valid 10-digit cellphone number.");

            $("#checking").removeClass("d-none");
            $("#loading").addClass("d-none");

            document.querySelector('input[name="mobile_number"]').focus();

            return; // Prevent submission

        } else {


            let form = new FormData( $("#check_form")[0] );
            var checking = CheckData( form );

            $.when( checking ).done( function( checking ){

                if( checking.error == false ){
                    
                    $("#loading").addClass("d-none");

                    if( checking.status == 'Allowed' ){
                        $("#registration_allowed").removeClass("d-none");  

                        $(document).find("#mobile_number").val( $(document).find("#mobile_number").val() );

                        document.querySelector('input[name="firstname"]').focus();
                
                    }
                    else if( checking.status == 'NotAllowed' ){
                        $("#registration_not_allowed").removeClass("d-none");                    
                    }
                    else if( checking.status == 'Multiple' ){
                        $("#registration_multiple").removeClass("d-none");                    
                    }
                    else if( checking.status == 'Error' ){
                        $("#registration_error").removeClass("d-none");                    
                    } 

                    
                } else {

                    $("#loading").addClass("d-none");
                    $("#registration_error").removeClass("d-none");                    

                }

            });

            console.log("Checking");

        }

    });

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

    $('.action_button[data-action="register"]').on('click', function (e) {

        e.preventDefault();

        if( Checker() ) {

            $("#confirm-register-modal").modal("show");

        } else {

            $(document).find('.checker-error').eq(0).focus();
            
        }

    });

    $('.action_button[data-action="confirm_registration"]').on('click', function (e) {

        e.preventDefault();

        $("#confirm-register-modal").modal("hide");

        $("#loading").removeClass("d-none");
        $("#registration_allowed").addClass("d-none");

        $("#complete_name").val( $("#firstname").val() + " " + $("#lastname").val() );

        let form = new FormData( $("#register_form")[0] );
        var registration = CheckData( form );

        $.when( registration ).done( function( registration ){

            if( registration.error == false ){
                
                $("#loading").addClass("d-none");
                $("#registration_success").removeClass("d-none");        
                
            } else {

                $("#loading").addClass("d-none");
                $("#registration_allowed").removeClass("d-none");

            }

        });

        console.log("Registered");

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
            else if( to_check.eq( k ).data("checker") == "cellnumber" ){


                if( $(to_check).eq( k ).val().length < 10 ){
                    $(to_check).eq( k ).css("background","#FFEFEF");
                    $(to_check).eq( k ).addClass("checker-error");
                    error_cnt = error_cnt + 1;
                }
                else {
                    $(to_check).eq( k ).css("background","#ffffff");
                    $(to_check).eq( k ).removeClass("checker-error");
                }


            }

        } );

        if( error_cnt > 0 ){

            return false;
        }

        return true;

    }

</script>