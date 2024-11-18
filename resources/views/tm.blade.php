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
                                    <label for="complete_name">Complete Name</label>
                                    <input type="text" class="form-control mb-3 checker" data-checker="required" name="complete_name" id="complete_name">
                                </div>
                                <div class="form-row">
                                    <label for="mobile_number">Mobile Number</label>
                                    <input type="text" class="form-control mb-3 checker" data-checker="required" name="mobile_number" id="mobile_number">
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
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <H5>Proof of Purchase or Receipt</H5>
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="form-row">
                                    <input type="file" class="form-control checker mb-3" data-checker="required" name="receipt" id="receipt">
                                </div>
                                <div class="form-row">
                                    <label for="store">Store</label>
                                    <select class="form-control checker select2" data-checker="required" name="store" id="store">
                                        <option value="" selected>Store item was purchased</option>
                                        <option value='8TELCOM' data-city='8TELCOM'>8TELCOM</option>
                                        <option value='ABENSON' data-city='ABENSON'>ABENSON</option>
                                        <option value='ADDESSA' data-city='ADDESSA'>ADDESSA</option>
                                        <option value='AEROPHONE' data-city='AEROPHONE'>AEROPHONE</option>
                                        <option value='ALL_HOME' data-city='ALL_HOME'>ALL HOME</option>
                                        <option value='ALSONS_TRADING' data-city='ALSONS_TRADING'>ALSONS TRADING</option>
                                        <option value='ANSONS_EMPORIUM' data-city='ANSONS_EMPORIUM'>ANSONS EMPORIUM</option>
                                        <option value='APPLIANCE_CENTRUM' data-city='APPLIANCE_CENTRUM'>APPLIANCE CENTRUM</option>
                                        <option value='ASIAN_HOME' data-city='ASIAN_HOME'>ASIAN HOME</option>
                                        <option value='AVID_SALES' data-city='AVID_SALES'>AVID SALES</option>
                                        <option value='CAGAYAN_APPLIANCE' data-city='CAGAYAN_APPLIANCE'>CAGAYAN APPLIANCE</option>
                                        <option value='CONPINCO_TRADING' data-city='CONPINCO_TRADING'>CONPINCO TRADING</option>
                                        <option value='CSI_APPLIANCE' data-city='CSI_APPLIANCE'>CSI APPLIANCE</option>
                                        <option value='DAVAO_IMPORT' data-city='DAVAO_IMPORT'>DAVAO IMPORT</option>
                                        <option value='DES_APPLIANCE' data-city='DES_APPLIANCE'>DES APPLIANCE</option>
                                        <option value='DESMARK_CORP' data-city='DESMARK_CORP'>DESMARK CORP</option>
                                        <option value='DU_EK_SAM,_INC.' data-city='DU_EK_SAM,_INC.'>DU EK SAM, INC.</option>
                                        <option value='ECHO_ELECTRICAL' data-city='ECHO_ELECTRICAL'>ECHO ELECTRICAL</option>
                                        <option value='EMCOR' data-city='EMCOR'>EMCOR</option>
                                        <option value='FAIR_N_SQUARE' data-city='FAIR_N_SQUARE'>FAIR N SQUARE</option>
                                        <option value='FIESTA_APPLIANCE' data-city='FIESTA_APPLIANCE'>FIESTA APPLIANCE</option>
                                        <option value='FIRST_FAMILY' data-city='FIRST_FAMILY'>FIRST FAMILY</option>
                                        <option value='FURNITURE_ARTS_&_APPLIANCES' data-city='FURNITURE_ARTS_&_APPLIANCES'>FURNITURE ARTS & APPLIANCES</option>
                                        <option value='K_SERVICO_TRADE_INC.' data-city='K_SERVICO_TRADE_INC.'>K SERVICO TRADE INC.</option>
                                        <option value='KCC' data-city='KCC'>KCC</option>
                                        <option value='LANDERS' data-city='LANDERS'>LANDERS</option>
                                        <option value='MAGIC_APPLIANCE' data-city='MAGIC_APPLIANCE'>MAGIC APPLIANCE</option>
                                        <option value='MAJOR_BRAND' data-city='MAJOR_BRAND'>MAJOR BRAND</option>
                                        <option value='METRO_PLAZA' data-city='METRO_PLAZA'>METRO PLAZA</option>
                                        <option value='NORTHERN_MARKETING' data-city='NORTHERN_MARKETING'>NORTHERN MARKETING</option>
                                        <option value='POS_MARKETING' data-city='POS_MARKETING'>POS MARKETING</option>
                                        <option value='PRICEWISE' data-city='PRICEWISE'>PRICEWISE</option>
                                        <option value='QUALITY_APPLIANCE_PLAZA' data-city='QUALITY_APPLIANCE_PLAZA'>QUALITY APPLIANCE PLAZA</option>
                                        <option value='RJ_HOMES' data-city='RJ_HOMES'>RJ HOMES</option>
                                        <option value='RL_APPLIANCE' data-city='RL_APPLIANCE'>RL APPLIANCE</option>
                                        <option value='ROBINSONS_APPLIANCES' data-city='ROBINSONS_APPLIANCES'>ROBINSONS APPLIANCES</option>
                                        <option value='ROYAL_STAR' data-city='ROYAL_STAR'>ROYAL STAR</option>
                                        <option value='S_&_R' data-city='S_&_R'>S & R</option>
                                        <option value='SAVERS_ELECTRONICS' data-city='SAVERS_ELECTRONICS'>SAVERS ELECTRONICS</option>
                                        <option value='SOLIDMARK' data-city='SOLIDMARK'>SOLIDMARK</option>
                                        <option value='SOLU_TRADING_CORPORATION' data-city='SOLU_TRADING_CORPORATION'>SOLU TRADING CORPORATION</option>
                                        <option value='STAR_APPLIANCE' data-city='STAR_APPLIANCE'>STAR APPLIANCE</option>
                                        <option value='TARLAC_MAC' data-city='TARLAC_MAC'>TARLAC MAC</option>
                                        <option value='TIONGSAN_BAZAAR' data-city='TIONGSAN_BAZAAR'>TIONGSAN BAZAAR</option>
                                        <option value='VIC_IMPERIAL_CORP.' data-city='VIC_IMPERIAL_CORP.'>VIC IMPERIAL CORP.</option>
                                        <option value='VPR_MARKETING' data-city='VPR_MARKETING'>VPR MARKETING</option>
                                        <option value='WESTERN_MARKETING' data-city='WESTERN_MARKETING'>WESTERN MARKETING</option>
                                        <option value='WILKRIS_APPLIANCE_CORPORATION' data-city='WILKRIS_APPLIANCE_CORPORATION'>WILKRIS APPLIANCE CORPORATION</option>
                                        <option value='WILLY_&_SONS' data-city='WILLY_&_SONS'>WILLY & SONS</option>
                                        <option value='WORLDWIDE' data-city='WORLDWIDE'>WORLDWIDE</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border rounded-3 p-3 mt-4" style="font-size: 10px">
                        <H5 style="font-size: 14px">Disclaimer</H5>
                        <p>This Samsung bundle offer is subject to the fiber serviceability of your nominated address. The value of this bundle cannot be converted to cash in case of unsuccessful installation. <a href="https://www.globe.com.ph/website-terms-conditions?_gl=1*11wvnk5*_gcl_aw*R0NMLjE3MTEyNzIzOTEuQ2p3S0NBandudi12QmhCZEVpd0FCQ1lRQS1BUFZtcmp6OWw5TXI4a2xWS0J2cDg4MFlBbDN3cDIzNWlwamtwNWZBdHQ4SXByV2daWGdob0NVakFRQXZEX0J3RQ..*_gcl_au*MTk1NTAzMjE4NS4xNzE4OTI5MDEw*_ga*NzMwMDM2NDYzLjE2NTc1MTk0MjM.*_ga_TD2ZL4WC9D*MTcxODkzOTQ5MC43LjAuMTcxODkzOTQ5My41Ny4wLjA.&_ga=2.129421836.1270274114.1718929010-730036463.1657519423">Terms and conditions</a> apply.</p>

                        <H5 style="font-size: 14px">Privacy Notice</H5>
                        <p>By completing and submitting this form, I allow GLOBE to collect and process the personal data I will provide for GFiber Prepaid and Samsung partnership, until October 2024, in accordance with the <a target="_blank" href="https://www.globe.com.ph/privacy-policy.html">Privacy Policy of Globe</a>.</p>
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
                    <button class='btn btn-primary action_button' data-action="submit_form">Submit</button>
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
