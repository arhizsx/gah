<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Samsung with GFiber Prepaid Bundle Promo</title>
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
        <div id="registration_form" style="max-width: 640px; min-width: 400px; margin-left: auto; margin-right: auto;">
            <form id="samsung_form">
                @csrf

                <input type="hidden"  name="action" id="action" value='register'>
                <input type="hidden"  name="campaign" id="campaign" value='SAMSUNG'>

                <img src="/images/finish.png" width="100%" />
                <div class="border rounded-3 p-3 mt-4">
                    <H3>Samsung with GFiber Prepaid Bundle Promo</H3>
                    <p>Kindly fill out this form for your Free GFiber Prepaid</p>
                    <p>*Bundle of GFiber Prepaid will be on the serviceability of the nominated address</p>
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
                                        <option value='ABENSON_MASINAG_ANTIPOLO CITY_0724' data-city='ANTIPOLO'>ABENSON_MASINAG_ANTIPOLO CITY_0724</option>
                                        <option value='ABENSON - FTI TAGUIG' data-city='TAGUIG'>ABENSON - FTI TAGUIG</option>
                                        <option value='ABENSON_ABENSON HOME_MARKET MARKET_0322' data-city='TAGUIG'>ABENSON_ABENSON HOME_MARKET MARKET_0322</option>
                                        <option value='ABENSON_ABENSON WALTER MART CONCEPCION _TARLAC' data-city='TARLAC'>ABENSON_ABENSON WALTER MART CONCEPCION _TARLAC</option>
                                        <option value='ABENSON_ABENSON_296 REAL ST__LAS PINAS_0615' data-city='LAS PIÑAS'>ABENSON_ABENSON_296 REAL ST__LAS PINAS_0615</option>
                                        <option value='ABENSON_ABENSON_ABREEZA_2F_DAVAO_0515' data-city='DAVAO'>ABENSON_ABENSON_ABREEZA_2F_DAVAO_0515</option>
                                        <option value='ABENSON_ABENSON_AGUINALDO HWY__DASMARINAS_0515' data-city='DASMARIÑAS'>ABENSON_ABENSON_AGUINALDO HWY__DASMARINAS_0515</option>
                                        <option value='ABENSON_ABENSON_ALABANG TOWN CENTER__MUNTINLUPA_0515' data-city='MUNTINLUPA'>ABENSON_ABENSON_ALABANG TOWN CENTER__MUNTINLUPA_0515</option>
                                        <option value='ABENSON_ABENSON_ASCOTT BLDG_UGF_TAGUIG_0515' data-city='TAGUIG'>ABENSON_ABENSON_ASCOTT BLDG_UGF_TAGUIG_0515</option>
                                        <option value='ABENSON_ABENSON_AYALA CENTER CEBU_3F_CEBU_0515' data-city='CEBU'>ABENSON_ABENSON_AYALA CENTER CEBU_3F_CEBU_0515</option>
                                        <option value='ABENSON_ABENSON_AYALA FELIZ_PASIG_0918' data-city='PASIG'>ABENSON_ABENSON_AYALA FELIZ_PASIG_0918</option>
                                        <option value='ABENSON_ABENSON_AYALA MALL__BACOLOD_1218' data-city='BACOLOD'>ABENSON_ABENSON_AYALA MALL__BACOLOD_1218</option>
                                        <option value='ABENSON_ABENSON_AYALA MARIKINA_2F_MARIKINA_1217' data-city='MARIKINA'>ABENSON_ABENSON_AYALA MARIKINA_2F_MARIKINA_1217</option>
                                        <option value='ABENSON_ABENSON_CABUYAO POBLACION__CABUYAO_0515' data-city='CABUYAO'>ABENSON_ABENSON_CABUYAO POBLACION__CABUYAO_0515</option>
                                        <option value='ABENSON_ABENSON_CENTRIO MALL_2F_CAGAYAN DE ORO_0515' data-city='CAGAYAN DE ORO'>ABENSON_ABENSON_CENTRIO MALL_2F_CAGAYAN DE ORO_0515</option>
                                        <option value='ABENSON_ABENSON_CIG WAREHOUSE__CEBU_0816' data-city='CEBU'>ABENSON_ABENSON_CIG WAREHOUSE__CEBU_0816</option>
                                        <option value='ABENSON_ABENSON_CIRCLE C CENTER__QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ABENSON_CIRCLE C CENTER__QUEZON_0515</option>
                                        <option value='ABENSON_ABENSON_ELLIMAC BLDG_GF_VALENZUELA_0515' data-city='VALENZUELA'>ABENSON_ABENSON_ELLIMAC BLDG_GF_VALENZUELA_0515</option>
                                        <option value='ABENSON_ABENSON_EVER GOTESCO COMMONWEALTH CENTER_GF_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ABENSON_EVER GOTESCO COMMONWEALTH CENTER_GF_QUEZON_0515</option>
                                        <option value='ABENSON_ABENSON_FAIRVIEW TERRACES_UGF_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ABENSON_FAIRVIEW TERRACES_UGF_QUEZON_0515</option>
                                        <option value='ABENSON_ABENSON_FESTIVAL ALABANG_UGF_MUNTINLUPA_0615' data-city='MUNTINLUPA'>ABENSON_ABENSON_FESTIVAL ALABANG_UGF_MUNTINLUPA_0615</option>
                                        <option value='ABENSON_ABENSON_FISHER MALL_MALABON_0419' data-city='MALABON'>ABENSON_ABENSON_FISHER MALL_MALABON_0419</option>
                                        <option value='ABENSON_ABENSON_GF PUREGOLD_SAN PABLO_0419' data-city='SAN PABLO'>ABENSON_ABENSON_GF PUREGOLD_SAN PABLO_0419</option>
                                        <option value='ABENSON_ABENSON_GLORIETTA 1_3F_MAKATI_0515' data-city='MAKATI'>ABENSON_ABENSON_GLORIETTA 1_3F_MAKATI_0515</option>
                                        <option value='ABENSON_ABENSON_GREENHILLS SHOPPING CENTER_2F_SAN JUAN_0515' data-city='SAN JUAN'>ABENSON_ABENSON_GREENHILLS SHOPPING CENTER_2F_SAN JUAN_0515</option>
                                        <option value='ABENSON_ABENSON_JAKA PLAZA_UGF_PARANAQUE_0615' data-city='PARAÑAQUE'>ABENSON_ABENSON_JAKA PLAZA_UGF_PARANAQUE_0615</option>
                                        <option value='ABENSON_ABENSON_LCC CENTRAL MALL NAGA_UGF_NAGA_0515' data-city='NAGA'>ABENSON_ABENSON_LCC CENTRAL MALL NAGA_UGF_NAGA_0515</option>
                                        <option value='ABENSON_ABENSON_LIMKETKAI MALL_2F_CAGAYAN DE ORO_1216' data-city='CAGAYAN DE ORO'>ABENSON_ABENSON_LIMKETKAI MALL_2F_CAGAYAN DE ORO_1216</option>
                                        <option value='ABENSON_ABENSON_LOTUS MALL_UGF_IMUS_0515' data-city='IMUS'>ABENSON_ABENSON_LOTUS MALL_UGF_IMUS_0515</option>
                                        <option value='ABENSON_ABENSON_MADRIGAL ALABANG BIZPARK__MUNTINLUPA_0515' data-city='MUNTINLUPA'>ABENSON_ABENSON_MADRIGAL ALABANG BIZPARK__MUNTINLUPA_0515</option>
                                        <option value='ABENSON_ABENSON_MALABON CITISQUARE_UGF_MALABON_0515' data-city='MALABON'>ABENSON_ABENSON_MALABON CITISQUARE_UGF_MALABON_0515</option>
                                        <option value='ABENSON_ABENSON_MARKET! MARKET!_3F_TAGUIG_0515' data-city='TAGUIG'>ABENSON_ABENSON_MARKET! MARKET!_3F_TAGUIG_0515</option>
                                        <option value='ABENSON_ABENSON_MARQUEE MALL_3F_ANGELES_0515' data-city='ANGELES'>ABENSON_ABENSON_MARQUEE MALL_3F_ANGELES_0515</option>
                                        <option value='ABENSON_ABENSON_MONTALBAN TOWN CENTER_UGF_RODRIGUEZ_0515' data-city='MONTALBAN'>ABENSON_ABENSON_MONTALBAN TOWN CENTER_UGF_RODRIGUEZ_0515</option>
                                        <option value='ABENSON_ABENSON_NAIC STADIUM_CAVITE_1218' data-city='NAIC'>ABENSON_ABENSON_NAIC STADIUM_CAVITE_1218</option>
                                        <option value='ABENSON_ABENSON_NE PACIFIC MALL_1F_CABANATUAN_0515' data-city='CABANATUAN'>ABENSON_ABENSON_NE PACIFIC MALL_1F_CABANATUAN_0515</option>
                                        <option value='ABENSON_ABENSON_NEPO MALL ANGELES_GF_ANGELES_0515' data-city='ANGELES'>ABENSON_ABENSON_NEPO MALL ANGELES_GF_ANGELES_0515</option>
                                        <option value='ABENSON_ABENSON_NUCITI MALL BATANGAS_2F_BATANGAS_0515' data-city='BATANGAS'>ABENSON_ABENSON_NUCITI MALL BATANGAS_2F_BATANGAS_0515</option>
                                        <option value='ABENSON_ABENSON_PACIFIC MALL MANDAUE_2F_MANDAUE_0616' data-city='MANDAUE'>ABENSON_ABENSON_PACIFIC MALL MANDAUE_2F_MANDAUE_0616</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD ALDP PLAZA_UGF_NAGA_0615' data-city='NAGA'>ABENSON_ABENSON_PUREGOLD ALDP PLAZA_UGF_NAGA_0615</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD BACOOR_UGF_BACOOR_0515' data-city='BACOOR'>ABENSON_ABENSON_PUREGOLD BACOOR_UGF_BACOOR_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD CALOOCAN_2F_CALOOCAN_0515' data-city='CALOOCAN'>ABENSON_ABENSON_PUREGOLD CALOOCAN_2F_CALOOCAN_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD E.ROD_GF_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ABENSON_PUREGOLD E.ROD_GF_QUEZON_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD FAIRVIEW__QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ABENSON_PUREGOLD FAIRVIEW__QUEZON_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD IMUS__IMUS_0515' data-city='IMUS'>ABENSON_ABENSON_PUREGOLD IMUS__IMUS_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD PRICE CLUB DAU_UGF_MABALACAT_0515' data-city='MABALACAT'>ABENSON_ABENSON_PUREGOLD PRICE CLUB DAU_UGF_MABALACAT_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD PRICE CLUB PASIG__PASIG_0515' data-city='PASIG'>ABENSON_ABENSON_PUREGOLD PRICE CLUB PASIG__PASIG_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD PRICE CLUB PASIG__PASIG_0815' data-city='PASIG'>ABENSON_ABENSON_PUREGOLD PRICE CLUB PASIG__PASIG_0815</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD PRICE CLUB PASIG_UGF_PASIG_0515' data-city='PASIG'>ABENSON_ABENSON_PUREGOLD PRICE CLUB PASIG_UGF_PASIG_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD PRICE CLUB TANZA_UGF_TANZA_0515' data-city='CAVITE'>ABENSON_ABENSON_PUREGOLD PRICE CLUB TANZA_UGF_TANZA_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD TAYTAY_2F_TAYTAY_0515' data-city='TAYTAY'>ABENSON_ABENSON_PUREGOLD TAYTAY_2F_TAYTAY_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD TAYUMAN_UGF_MANILA_0615' data-city='MANILA'>ABENSON_ABENSON_PUREGOLD TAYUMAN_UGF_MANILA_0615</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD_SAN PEDRO_LAGUNA_1019' data-city='SAN PEDRO'>ABENSON_ABENSON_PUREGOLD_SAN PEDRO_LAGUNA_1019</option>
                                        <option value='ABENSON_ABENSON_RDC BLDG__LIPA_0316' data-city='LIPA'>ABENSON_ABENSON_RDC BLDG__LIPA_0316</option>
                                        <option value='ABENSON_ABENSON_ROBINSONS GALLERIA_UGF_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ABENSON_ROBINSONS GALLERIA_UGF_QUEZON_0515</option>
                                        <option value='ABENSON_ABENSON_ROBINSONS PLACE IMUS_3F_IMUS_0515' data-city='IMUS'>ABENSON_ABENSON_ROBINSONS PLACE IMUS_3F_IMUS_0515</option>
                                        <option value='ABENSON_ABENSON_ROBINSONS PLACE MANILA_3F_MANILA_1215' data-city='MANILA'>ABENSON_ABENSON_ROBINSONS PLACE MANILA_3F_MANILA_1215</option>
                                        <option value='ABENSON_ABENSON_SERIN MALL_UGF_SILANG_0515' data-city='SILANG'>ABENSON_ABENSON_SERIN MALL_UGF_SILANG_0515</option>
                                        <option value='ABENSON_ABENSON_SHANGRI-LA PLAZA_GF_MANDALUYONG_0515' data-city='MANDALUYONG'>ABENSON_ABENSON_SHANGRI-LA PLAZA_GF_MANDALUYONG_0515</option>
                                        <option value='ABENSON_ABENSON_SHOPWISE SAN PEDRO SUPERMARKET _GF_SAN PEDRO_0515' data-city='SAN PEDRO'>ABENSON_ABENSON_SHOPWISE SAN PEDRO SUPERMARKET _GF_SAN PEDRO_0515</option>
                                        <option value='ABENSON_ABENSON_SM CITY EAST ORTIGAS__PASIG_1216' data-city='PASIG'>ABENSON_ABENSON_SM CITY EAST ORTIGAS__PASIG_1216</option>
                                        <option value='ABENSON_ABENSON_SM CITY NORTH EDSA_5F_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ABENSON_SM CITY NORTH EDSA_5F_QUEZON_0515</option>
                                        <option value='ABENSON_ABENSON_SOLENAD NUVALI_2F_SANTA ROSA_0816' data-city='SANTA ROSA'>ABENSON_ABENSON_SOLENAD NUVALI_2F_SANTA ROSA_0816</option>
                                        <option value='ABENSON_ABENSON_STA LUCIA EAST GRAND MALL_2F_CAINTA_0515' data-city='CAINTA'>ABENSON_ABENSON_STA LUCIA EAST GRAND MALL_2F_CAINTA_0515</option>
                                        <option value='ABENSON_ABENSON_STA LUCIA EAST GRAND MALL_UGF_CAINTA_0515' data-city='CAINTA'>ABENSON_ABENSON_STA LUCIA EAST GRAND MALL_UGF_CAINTA_0515</option>
                                        <option value='ABENSON_ABENSON_SUPIMA COMMERCIAL COMPLEX_GF_MEYCAUAYAN_0515' data-city='MEYCAUAYAN'>ABENSON_ABENSON_SUPIMA COMMERCIAL COMPLEX_GF_MEYCAUAYAN_0515</option>
                                        <option value='ABENSON_ABENSON_U.P. TOWN CENTER__QUEZON_0516' data-city='QUEZON CITY'>ABENSON_ABENSON_U.P. TOWN CENTER__QUEZON_0516</option>
                                        <option value='ABENSON_ABENSON_ULTIMART SHOPPING PLAZA_1F_SAN PABLO_0515' data-city='SAN PABLO'>ABENSON_ABENSON_ULTIMART SHOPPING PLAZA_1F_SAN PABLO_0515</option>
                                        <option value='ABENSON_ABENSON_VERANZA GENSAN__GENERAL SANTOS_0515' data-city='GENERAL SANTOS'>ABENSON_ABENSON_VERANZA GENSAN__GENERAL SANTOS_0515</option>
                                        <option value='ABENSON_ABENSON_VICTORY CENTRAL MALL _STA ROSA_LAGUNA_1119' data-city='SANTA ROSA'>ABENSON_ABENSON_VICTORY CENTRAL MALL _STA ROSA_LAGUNA_1119</option>
                                        <option value='ABENSON_ABENSON_WALTER MART BEL AIR_1F_SANTA ROSA_0515' data-city='SANTA ROSA'>ABENSON_ABENSON_WALTER MART BEL AIR_1F_SANTA ROSA_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART CABANATUAN_2F_CABANATUAN_1215' data-city='CABANATUAN'>ABENSON_ABENSON_WALTER MART CABANATUAN_2F_CABANATUAN_1215</option>
                                        <option value='ABENSON_ABENSON_WALTER MART GENERAL TRIAS_UGF_GENERAL TRIAS_0515' data-city='GENERAL TRIAS'>ABENSON_ABENSON_WALTER MART GENERAL TRIAS_UGF_GENERAL TRIAS_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART MAKATI_4F_MAKATI_0515' data-city='MAKATI'>ABENSON_ABENSON_WALTER MART MAKATI_4F_MAKATI_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART MAKILING_2F_CALAMBA_0515' data-city='CALAMBA'>ABENSON_ABENSON_WALTER MART MAKILING_2F_CALAMBA_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART NORTH EDSA_UGF_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ABENSON_WALTER MART NORTH EDSA_UGF_QUEZON_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART SAN FERNANDO_UGF_SAN FERNANDO_0515' data-city='SAN FERNANDO'>ABENSON_ABENSON_WALTER MART SAN FERNANDO_UGF_SAN FERNANDO_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART STA MARIA__SANTA MARIA_0615' data-city='SANTA MARIA'>ABENSON_ABENSON_WALTER MART STA MARIA__SANTA MARIA_0615</option>
                                        <option value='ABENSON_ABENSON_WALTER MART STA ROSA_1F_SANTA ROSA_0515' data-city='SANTA ROSA'>ABENSON_ABENSON_WALTER MART STA ROSA_1F_SANTA ROSA_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART SUCAT_3F_PARANAQUE_0515' data-city='PARAÑAQUE'>ABENSON_ABENSON_WALTER MART SUCAT_3F_PARANAQUE_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART TRECE MARTIRES_UGF_TRECE MARTIRES_0615' data-city='TRECE MARTIRES'>ABENSON_ABENSON_WALTER MART TRECE MARTIRES_UGF_TRECE MARTIRES_0615</option>
                                        <option value='ABENSON_ABENSON_WALTERMART BICUTAN__PARANAQUE_0515' data-city='PARAÑAQUE'>ABENSON_ABENSON_WALTERMART BICUTAN__PARANAQUE_0515</option>
                                        <option value='ABENSON_ABENSON_WALTERMART TAYTAY_GF_TAYTAY_1216' data-city='TAYTAY'>ABENSON_ABENSON_WALTERMART TAYTAY_GF_TAYTAY_1216</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_ALABANG TOWN CENTER_3F_MUNTINLUPA_0515' data-city='MUNTINLUPA'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_ALABANG TOWN CENTER_3F_MUNTINLUPA_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_EASTWOOD MALL__QUEZON_0515' data-city='QUEZON CITY'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_EASTWOOD MALL__QUEZON_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_GLORIETTA PLUS_3F_MAKATI_0515' data-city='MAKATI'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_GLORIETTA PLUS_3F_MAKATI_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_MARKET! MARKET!_3F_TAGUIG_0515' data-city='TAGUIG'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_MARKET! MARKET!_3F_TAGUIG_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_SM CITY NORTH EDSA_UGF_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_SM CITY NORTH EDSA_UGF_QUEZON_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_TRINOMA_LM1_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_TRINOMA_LM1_QUEZON_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_TUTUBAN CENTER__MANILA_0515' data-city='MANILA'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTER_TUTUBAN CENTER__MANILA_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTRE_AYALA CENTER CEBU_3F_CEBU_0716' data-city='CEBU'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTRE_AYALA CENTER CEBU_3F_CEBU_0716</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTRE_FESTIVAL ALABANG_2F_MUNTINLUPA_0615' data-city='MUNTINLUPA'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTRE_FESTIVAL ALABANG_2F_MUNTINLUPA_0615</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTRE_GATEWAY MALL_3F_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTRE_GATEWAY MALL_3F_QUEZON_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE-AUTOMATIC CENTER STA.LUCIA' data-city='CAINTA'>ABENSON_AUTOMATIC CENTRE-AUTOMATIC CENTER STA.LUCIA</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE-AUTOMATIC CENTER(ALI MALL__QUEZON)0515' data-city='QUEZON CITY'>ABENSON_AUTOMATIC CENTRE-AUTOMATIC CENTER(ALI MALL__QUEZON)0515</option>
                                        <option value='ABENSON_AVANT_AYALA CENTER CEBU_3F_CEBU_0515' data-city='CEBU'>ABENSON_AVANT_AYALA CENTER CEBU_3F_CEBU_0515</option>
                                        <option value='ABENSON_AVANT_TRINOMA_2F_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_AVANT_TRINOMA_2F_QUEZON_0515</option>
                                        <option value='ABENSON_AYALA MALL_MAKATI_0923' data-city='MAKATI'>ABENSON_AYALA MALL_MAKATI_0923</option>
                                        <option value='ABENSON_CBD_NAGA_1022' data-city='NAGA'>ABENSON_CBD_NAGA_1022</option>
                                        <option value='ABENSON_CLOVERLEAF BALINTAWAK' data-city='VALENZUELA'>ABENSON_CLOVERLEAF BALINTAWAK</option>
                                        <option value='ABENSON_COLONNADE_MANDAUE_0823' data-city='MANDAUE'>ABENSON_COLONNADE_MANDAUE_0823</option>
                                        <option value='ABENSON_DUMAGUETE CITY_0524' data-city='DUMAGUETE'>ABENSON_DUMAGUETE CITY_0524</option>
                                        <option value='ABENSON_ELECTROWORLD_FARMERS PLAZA__QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ELECTROWORLD_FARMERS PLAZA__QUEZON_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_GLORIETTA 2_3F_MAKATI_0515' data-city='MAKATI'>ABENSON_ELECTROWORLD_GLORIETTA 2_3F_MAKATI_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_LUCKY CHINATOWN_3F_MANILA_0515' data-city='MANILA'>ABENSON_ELECTROWORLD_LUCKY CHINATOWN_3F_MANILA_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY BICUTAN_2F_PARANAQUE_0515' data-city='PARAÑAQUE'>ABENSON_ELECTROWORLD_SM CITY BICUTAN_2F_PARANAQUE_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY CALAMBA_2F_CALAMBA_0515' data-city='CALAMBA'>ABENSON_ELECTROWORLD_SM CITY CALAMBA_2F_CALAMBA_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY CEBU_2F_CEBU_0515' data-city='CEBU'>ABENSON_ELECTROWORLD_SM CITY CEBU_2F_CEBU_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY DASMARIÑAS_2F_DASMARINAS_0515' data-city='DASMARIÑAS'>ABENSON_ELECTROWORLD_SM CITY DASMARIÑAS_2F_DASMARINAS_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY FAIRVIEW__QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ELECTROWORLD_SM CITY FAIRVIEW__QUEZON_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY LIPA_2F_LIPA_0515' data-city='LIPA'>ABENSON_ELECTROWORLD_SM CITY LIPA_2F_LIPA_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY MANILA_UGF_MANILA_0515' data-city='MANILA'>ABENSON_ELECTROWORLD_SM CITY MANILA_UGF_MANILA_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY MARIKINA_UGF_MARIKINA_0515' data-city='MARIKINA'>ABENSON_ELECTROWORLD_SM CITY MARIKINA_UGF_MARIKINA_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY NORTH EDSA_5F_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ELECTROWORLD_SM CITY NORTH EDSA_5F_QUEZON_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY PAMPANGA_UGF_MEXICO_0515' data-city='MEXICO'>ABENSON_ELECTROWORLD_SM CITY PAMPANGA_UGF_MEXICO_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY SAN JOSE DEL MONTE_LGF_SAN JOSE DEL MONTE_0816' data-city='SAN JOSE DEL MONTE'>ABENSON_ELECTROWORLD_SM CITY SAN JOSE DEL MONTE_LGF_SAN JOSE DEL MONTE_0816</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY SAN LAZARO_3F_MANILA_0615' data-city='MANILA'>ABENSON_ELECTROWORLD_SM CITY SAN LAZARO_3F_MANILA_0615</option>
                                        <option value='ABENSON_ELECTROWORLD_SM MEGAMALL__MANDALUYONG_0515' data-city='MANDALUYONG'>ABENSON_ELECTROWORLD_SM MEGAMALL__MANDALUYONG_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_TRINOMA_2F_QUEZON_0515' data-city='QUEZON CITY'>ABENSON_ELECTROWORLD_TRINOMA_2F_QUEZON_0515</option>
                                        <option value='ABENSON_ELECTROWORLD2_SM MALL OF ASIA_2F_PASAY_0515' data-city='PASAY'>ABENSON_ELECTROWORLD2_SM MALL OF ASIA_2F_PASAY_0515</option>
                                        <option value='ABENSON_GAISANO GRAND CITY_BACOLOD_1023' data-city='BACOLOD'>ABENSON_GAISANO GRAND CITY_BACOLOD_1023</option>
                                        <option value='ABENSON_GMALL_CEBU_1122' data-city='CEBU'>ABENSON_GMALL_CEBU_1122</option>
                                        <option value='ABENSON_GMALL_TAGUM_1222' data-city='TAGUM'>ABENSON_GMALL_TAGUM_1222</option>
                                        <option value='ABENSON_KAI MALL_CALOOCAN_1022' data-city='CALOOCAN'>ABENSON_KAI MALL_CALOOCAN_1022</option>
                                        <option value='ABENSON_LUCKY CHINA TOWN_MANILA_0923' data-city='MANILA'>ABENSON_LUCKY CHINA TOWN_MANILA_0923</option>
                                        <option value='ABENSON_MADISON_ORTIGAS_1122' data-city='SAN JUAN'>ABENSON_MADISON_ORTIGAS_1122</option>
                                        <option value='ABENSON_PUREGOLD PAGASA_BINANGONAN_RIZAL_0521' data-city='BINANGONAN'>ABENSON_PUREGOLD PAGASA_BINANGONAN_RIZAL_0521</option>
                                        <option value='ABENSON_QUEZON AVENUE_QUEZON CITY_0521' data-city='QUEZON CITY'>ABENSON_QUEZON AVENUE_QUEZON CITY_0521</option>
                                        <option value='ABENSON_W MALL 3F PASAY' data-city='PASAY'>ABENSON_W MALL 3F PASAY</option>
                                        <option value='ABENSON_WALTERMART E. RODRIGUEZ_QUEZON CITY_0521' data-city='QUEZON CITY'>ABENSON_WALTERMART E. RODRIGUEZ_QUEZON CITY_0521</option>
                                        <option value='ABENSON_WALTERMART_ALTARAZA_BULACAN_0522' data-city='SAN JOSE DEL MONTE'>ABENSON_WALTERMART_ALTARAZA_BULACAN_0522</option>
                                        <option value='ABENSON_WALTERMART_ANTIPOLO_RIZAL_0521' data-city='ANTIPOLO'>ABENSON_WALTERMART_ANTIPOLO_RIZAL_0521</option>
                                        <option value='ABENSON_WALTERMART_BACOOR_CAVITE CITY_1021' data-city='BACOOR'>ABENSON_WALTERMART_BACOOR_CAVITE CITY_1021</option>
                                        <option value='ABENSON_WALTERMART_BALIUAG_0922' data-city='BALIUAG'>ABENSON_WALTERMART_BALIUAG_0922</option>
                                        <option value='ABENSON_WALTERMART_CALOOCAN_0523' data-city='CALOOCAN'>ABENSON_WALTERMART_CALOOCAN_0523</option>
                                        <option value='ABENSON_WALTERMART_JUNCTION_0522' data-city='QUEZON CITY'>ABENSON_WALTERMART_JUNCTION_0522</option>
                                        <option value='ABENSON_WALTERMART_MALOLOS_BULACAN_1120' data-city='MALOLOS'>ABENSON_WALTERMART_MALOLOS_BULACAN_1120</option>
                                        <option value='ABENSON_WALTERMART_MUNTINLUPA_0822' data-city='MUNTINLUPA'>ABENSON_WALTERMART_MUNTINLUPA_0822</option>
                                        <option value='ABENSON_WAREHOUSE_MEXICO_PAMPANGA_0521' data-city='MEXICO'>ABENSON_WAREHOUSE_MEXICO_PAMPANGA_0521</option>
                                        <option value='ABENSON_ZAMBOANGA_1023' data-city='ZAMBOANGA'>ABENSON_ZAMBOANGA_1023</option>
                                        <option value='ABENSON-ABENSON (HP_CABUYAO)0515' data-city='CABUYAO'>ABENSON-ABENSON (HP_CABUYAO)0515</option>
                                        <option value='ABENSON-ABENSON (SB_MAKATI)0515' data-city='MAKATI'>ABENSON-ABENSON (SB_MAKATI)0515</option>
                                        <option value='ABENSON-ABENSON(HP_DASMARINAS)0515' data-city='DASMARIÑAS'>ABENSON-ABENSON(HP_DASMARINAS)0515</option>
                                        <option value='ABENSON-CIRCUIT MAKATI_0718' data-city='MAKATI'>ABENSON-CIRCUIT MAKATI_0718</option>
                                        <option value='ABENSON-G-MALL DAVAO' data-city='DAVAO'>ABENSON-G-MALL DAVAO</option>
                                        <option value='ABENSON-NCCC MALL_BUHANGIN_DAVAO_1118' data-city='DAVAO'>ABENSON-NCCC MALL_BUHANGIN_DAVAO_1118</option>
                                        <option value='ABENSON-WALTERMART SAN JOSE_NUEVA ECIJA_0718' data-city='SAN JOSE'>ABENSON-WALTERMART SAN JOSE_NUEVA ECIJA_0718</option>
                                        <option value='ABENSON-WALTERMART_CALICANTO_BATANGAS CITY_1119' data-city='BATANGAS'>ABENSON-WALTERMART_CALICANTO_BATANGAS CITY_1119</option>
                                        <option value='ADDESSA_ADDESSA___BALIUAG_0816' data-city='BALIUAG'>ADDESSA_ADDESSA___BALIUAG_0816</option>
                                        <option value='ADDESSA_ADDESSA_13 MARINA BLDG__NAGUILIAN_0615' data-city='SAN FERNANDO'>ADDESSA_ADDESSA_13 MARINA BLDG__NAGUILIAN_0615</option>
                                        <option value='ADDESSA_ADDESSA_69 HALILI BLDG_UGF_BAGUIO_0615' data-city='BAGUIO'>ADDESSA_ADDESSA_69 HALILI BLDG_UGF_BAGUIO_0615</option>
                                        <option value='ADDESSA_ADDESSA_ADDESSA BLDG__CAUAYAN_0515' data-city='CAUAYAN'>ADDESSA_ADDESSA_ADDESSA BLDG__CAUAYAN_0515</option>
                                        <option value='ADDESSA_ADDESSA_BONIFACIO ST__SAN JOSE_0515' data-city='SAN JOSE'>ADDESSA_ADDESSA_BONIFACIO ST__SAN JOSE_0515</option>
                                        <option value='ADDESSA_ADDESSA_BUNTUN_TUGUEGARAO_1218' data-city='TUGUEGARAO'>ADDESSA_ADDESSA_BUNTUN_TUGUEGARAO_1218</option>
                                        <option value='ADDESSA_ADDESSA_FTANEDO ST_1F_TARLAC_0515' data-city='TARLAC'>ADDESSA_ADDESSA_FTANEDO ST_1F_TARLAC_0515</option>
                                        <option value='ADDESSA_ADDESSA_GARCIA BLDG_1F_SAN FERNANDO_0515' data-city='SAN FERNANDO'>ADDESSA_ADDESSA_GARCIA BLDG_1F_SAN FERNANDO_0515</option>
                                        <option value='ADDESSA_ADDESSA_MALOLOS_1118' data-city='MALOLOS'>ADDESSA_ADDESSA_MALOLOS_1118</option>
                                        <option value='ADDESSA_ADDESSA_MARCELA BLDG__ROSARIO_0615' data-city='SAN FERNANDO'>ADDESSA_ADDESSA_MARCELA BLDG__ROSARIO_0615</option>
                                        <option value='ADDESSA_ADDESSA_MCARTHUR HWY_1F_MONCADA_0515' data-city='TARLAC'>ADDESSA_ADDESSA_MCARTHUR HWY_1F_MONCADA_0515</option>
                                        <option value='ADDESSA_ADDESSA_PANDAN ANGELES CITY_PAMPANGA_1020' data-city='ANGELES'>ADDESSA_ADDESSA_PANDAN ANGELES CITY_PAMPANGA_1020</option>
                                        <option value='ADDESSA_ADDESSA_RUFINA BLDG__SAN FERNANDO_0815' data-city='SAN FERNANDO'>ADDESSA_ADDESSA_RUFINA BLDG__SAN FERNANDO_0815</option>
                                        <option value='ADDESSA_ADDESSA_STA MARIA_0818' data-city='SANTA MARIA'>ADDESSA_ADDESSA_STA MARIA_0818</option>
                                        <option value='ADDESSA_HENSON_ANGELES PAMPANGA_0323' data-city='ANGELES'>ADDESSA_HENSON_ANGELES PAMPANGA_0323</option>
                                        <option value='ADDESSA_MEXICO_PAMPANGA_0523' data-city='MEXICO'>ADDESSA_MEXICO_PAMPANGA_0523</option>
                                        <option value='ADDESSA_PAN APPLIANCE_MEXICO_PAMPANGA_0723' data-city='MEXICO'>ADDESSA_PAN APPLIANCE_MEXICO_PAMPANGA_0723</option>
                                        <option value='ADDESSA_SJDM_BULACAN_0323' data-city='SAN JOSE DEL MONTE'>ADDESSA_SJDM_BULACAN_0323</option>
                                        <option value='ADDESSA-AGOO LA UNION' data-city='SAN FERNANDO'>ADDESSA-AGOO LA UNION</option>
                                        <option value='ADDESSA-MABALACAT PAMPANGA' data-city='MABALACAT'>ADDESSA-MABALACAT PAMPANGA</option>
                                        <option value='ADDESSA-ROXAS ISABELA' data-city='ROXAS'>ADDESSA-ROXAS ISABELA</option>
                                        <option value='ADDESSA-TUGUEGARAO' data-city='TUGUEGARAO'>ADDESSA-TUGUEGARAO</option>
                                        <option value='SPS - AEROPHONE - ONE AYALA - 4F_MAKATI_0623' data-city='MAKATI'>SPS - AEROPHONE - ONE AYALA - 4F_MAKATI_0623</option>
                                        <option value='ALL HOME- ANTIPOLO' data-city='ANTIPOLO'>ALL HOME- ANTIPOLO</option>
                                        <option value='ALL HOME- PAMPANGA' data-city='SAN FERNANDO'>ALL HOME- PAMPANGA</option>
                                        <option value='ALL HOME-AGRO MUNTINLUPA' data-city='MUNTINLUPA'>ALL HOME-AGRO MUNTINLUPA</option>
                                        <option value='ALL HOME-BACOLOD_NEGROS OCCIDENTAL_0221' data-city='BACOLOD'>ALL HOME-BACOLOD_NEGROS OCCIDENTAL_0221</option>
                                        <option value='ALL HOME-BUTUAN CITY_AGUSAN DEL NORTE_1219' data-city='BUTUAN'>ALL HOME-BUTUAN CITY_AGUSAN DEL NORTE_1219</option>
                                        <option value='ALL HOME-CAGAYAN DE ORO' data-city='CAGAYAN DE ORO'>ALL HOME-CAGAYAN DE ORO</option>
                                        <option value='ALL HOME-CAUAYAN CITY_ISABELA_1220' data-city='CAUAYAN'>ALL HOME-CAUAYAN CITY_ISABELA_1220</option>
                                        <option value='ALL HOME-DASMARINAS_CAVITE_0719' data-city='DASMARIÑAS'>ALL HOME-DASMARINAS_CAVITE_0719</option>
                                        <option value='ALL HOME-EVIA' data-city='MUNTINLUPA'>ALL HOME-EVIA</option>
                                        <option value='ALL HOME-GENERAL TRIAS_0818' data-city='GENERAL TRIAS'>ALL HOME-GENERAL TRIAS_0818</option>
                                        <option value='ALL HOME-GLOBAL SOUTH' data-city='MUNTINLUPA'>ALL HOME-GLOBAL SOUTH</option>
                                        <option value='ALL HOME-ILOILO' data-city='ILOILO'>ALL HOME-ILOILO</option>
                                        <option value='ALL HOME-IMUSCAVITE' data-city='IMUS'>ALL HOME-IMUSCAVITE</option>
                                        <option value='ALL HOME-LAS PINAS' data-city='LAS PIÑAS'>ALL HOME-LAS PINAS</option>
                                        <option value='ALL HOME-LIBIS' data-city='TAGUIG'>ALL HOME-LIBIS</option>
                                        <option value='ALL HOME-MALOLOS_BULACAN_0719' data-city='MALOLOS'>ALL HOME-MALOLOS_BULACAN_0719</option>
                                        <option value='ALL HOME-NAGA' data-city='NAGA'>ALL HOME-NAGA</option>
                                        <option value='ALL HOME-SAN JOSE DEL MONTE' data-city='SAN JOSE DEL MONTE'>ALL HOME-SAN JOSE DEL MONTE</option>
                                        <option value='ALL HOME-SHAW' data-city='MANDALUYONG'>ALL HOME-SHAW</option>
                                        <option value='ALL HOME-SILANG_CAVITE_1119' data-city='SILANG'>ALL HOME-SILANG_CAVITE_1119</option>
                                        <option value='ALL HOME-STA ROSA' data-city='STA. ROSA'>ALL HOME-STA ROSA</option>
                                        <option value='ALL HOME-STA. MARIA_BULACAN_0320' data-city='SANTA MARIA'>ALL HOME-STA. MARIA_BULACAN_0320</option>
                                        <option value='ALL HOME-TAGUIG CITY' data-city='TAGUIG'>ALL HOME-TAGUIG CITY</option>
                                        <option value='ALL HOME-TALISAY CEBU' data-city='TALISAY'>ALL HOME-TALISAY CEBU</option>
                                        <option value='ALL HOME-TANZA_0818' data-city='TANZA'>ALL HOME-TANZA_0818</option>
                                        <option value='ALL HOME-TUGBOK_DAVAO CITY_0422' data-city='DAVAO'>ALL HOME-TUGBOK_DAVAO CITY_0422</option>
                                        <option value='ALL HOME-WCC_SHAW_1121' data-city='MANDALUYONG'>ALL HOME-WCC_SHAW_1121</option>
                                        <option value='ALL HOME-WILTOWER' data-city='QUEZON CITY'>ALL HOME-WILTOWER</option>
                                        <option value='ALSONS TRADING-DASMARIÑAS CAVITE' data-city='DASMARIÑAS'>ALSONS TRADING-DASMARIÑAS CAVITE</option>
                                        <option value='ALSONS TRADING-INDANG RD. TRECE MARTIRES CAVITE' data-city='TRECE MARTIRES'>ALSONS TRADING-INDANG RD. TRECE MARTIRES CAVITE</option>
                                        <option value='ALSONS TRADING-JAYSON NAGA' data-city='NAGA'>ALSONS TRADING-JAYSON NAGA</option>
                                        <option value='ALSONS TRADING-LIPA BATANGAS' data-city='LIPA'>ALSONS TRADING-LIPA BATANGAS</option>
                                        <option value='ALSONS TRADING-NAIC CAVITE' data-city='NAIC'>ALSONS TRADING-NAIC CAVITE</option>
                                        <option value='ANSONS EMPORIUM_ANSONS NUVALI STA. ROSA' data-city='SANTA ROSA'>ANSONS EMPORIUM_ANSONS NUVALI STA. ROSA</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_ALABANG TOWN CENTER_2F_MUNTINLUPA_0515' data-city='MUNTINLUPA'>ANSONS EMPORIUM_ANSONS_ALABANG TOWN CENTER_2F_MUNTINLUPA_0515</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_BGC_TAGUIG_0523' data-city='TAGUIG'>ANSONS EMPORIUM_ANSONS_BGC_TAGUIG_0523</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_CASH & CARRY_2F_MAKATI_0515' data-city='MAKATI'>ANSONS EMPORIUM_ANSONS_CASH & CARRY_2F_MAKATI_0515</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_LANDMARK MALL_UGF_MAKATI_0515' data-city='MAKATI'>ANSONS EMPORIUM_ANSONS_LANDMARK MALL_UGF_MAKATI_0515</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_PASONG TAMO AVE__MAKATI_0515' data-city='MAKATI'>ANSONS EMPORIUM_ANSONS_PASONG TAMO AVE__MAKATI_0515</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_Q PLAZA BLDG_GF_CAINTA_0615' data-city='CAINTA'>ANSONS EMPORIUM_ANSONS_Q PLAZA BLDG_GF_CAINTA_0615</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_SALAZAR ST_UGF_MANILA_0515' data-city='MANILA'>ANSONS EMPORIUM_ANSONS_SALAZAR ST_UGF_MANILA_0515</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_THE LINK BLDG__MAKATI_0615' data-city='MAKATI'>ANSONS EMPORIUM_ANSONS_THE LINK BLDG__MAKATI_0615</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_TRINOMA LANDMARK_2F_QUEZON_0515' data-city='QUEZON CITY'>ANSONS EMPORIUM_ANSONS_TRINOMA LANDMARK_2F_QUEZON_0515</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_TRINOMA LANDMARK_COMPLEX M5_0718' data-city='QUEZON CITY'>ANSONS EMPORIUM_ANSONS_TRINOMA LANDMARK_COMPLEX M5_0718</option>
                                        <option value='ANSONS EMPORIUM_ANSONS_UNIMART CAPITOLS COMMON_0818' data-city='PASIG'>ANSONS EMPORIUM_ANSONS_UNIMART CAPITOLS COMMON_0818</option>
                                        <option value='ANSONS EMPORIUM-ANSONS LANDMARK FILINVEST' data-city='MUNTINLUPA'>ANSONS EMPORIUM-ANSONS LANDMARK FILINVEST</option>
                                        <option value='ANSONS EMPORIUM-ANSONS UNIMART GREENHILLS' data-city='SAN JUAN'>ANSONS EMPORIUM-ANSONS UNIMART GREENHILLS</option>
                                        <option value='ANSONS EMPORIUM-ORTIGAS PASIG' data-city='PASIG'>ANSONS EMPORIUM-ORTIGAS PASIG</option>
                                        <option value='ANSONS EMPORIUM-TRINOMA' data-city='QUEZON CITY'>ANSONS EMPORIUM-TRINOMA</option>
                                        <option value='APPLIANCE CENTRUM-DUMAGUETE CITY' data-city='DUMAGUETE'>APPLIANCE CENTRUM-DUMAGUETE CITY</option>
                                        <option value='ASIAN HOME_ASIAN HOME_GAISANO GRAND MALL MACTAN_2F_LAPU-LAPU_0515' data-city='LAPU-LAPU'>ASIAN HOME_ASIAN HOME_GAISANO GRAND MALL MACTAN_2F_LAPU-LAPU_0515</option>
                                        <option value='ASIAN HOME-AYALA CENTER MALL 3F CEBU' data-city='CEBU'>ASIAN HOME-AYALA CENTER MALL 3F CEBU</option>
                                        <option value='ASIAN HOME-AYALA MALL CAPITOL_BACOLOD_0419' data-city='BACOLOD'>ASIAN HOME-AYALA MALL CAPITOL_BACOLOD_0419</option>
                                        <option value='ASIAN HOME-AYALA PLUS_CEBU CITY_1223' data-city='CEBU'>ASIAN HOME-AYALA PLUS_CEBU CITY_1223</option>
                                        <option value='ASIAN HOME-CENTER BLOC _0123' data-city='CEBU'>ASIAN HOME-CENTER BLOC _0123</option>
                                        <option value='ASIAN HOME-CENTRIO AYALA MALL CDO' data-city='CAGAYAN DE ORO'>ASIAN HOME-CENTRIO AYALA MALL CDO</option>
                                        <option value='ASIAN HOME-GAISANO FIESTA MALL 2F TALISAY' data-city='TALISAY'>ASIAN HOME-GAISANO FIESTA MALL 2F TALISAY</option>
                                        <option value='ASIAN HOME-GRAND MALL LILOAN CEBU' data-city='CEBU'>ASIAN HOME-GRAND MALL LILOAN CEBU</option>
                                        <option value='ASIAN HOME-STO.NIÑO BRGY CEBU' data-city='CEBU'>ASIAN HOME-STO.NIÑO BRGY CEBU</option>
                                        <option value='AVID SALES_AV SURFER_1000 J.BACOBO COR KALAW ST__MANILA_0615' data-city='MANILA'>AVID SALES_AV SURFER_1000 J.BACOBO COR KALAW ST__MANILA_0615</option>
                                        <option value='AVID SALES_AV SURFER_AYALA CENTER CEBU_3F_CEBU_1116' data-city='CEBU'>AVID SALES_AV SURFER_AYALA CENTER CEBU_3F_CEBU_1116</option>
                                        <option value='AVID SALES_AV SURFER_FAIRVIEW TERRACES_3F_QUEZON_0515' data-city='QUEZON CITY'>AVID SALES_AV SURFER_FAIRVIEW TERRACES_3F_QUEZON_0515</option>
                                        <option value='AVID SALES_AV SURFER_GLORIETTA 3_3F_MAKATI_0816' data-city='MAKATI'>AVID SALES_AV SURFER_GLORIETTA 3_3F_MAKATI_0816</option>
                                        <option value='AVID SALES_AV SURFER_KCC MALL OF GENERAL SANTOS_2F_GENERAL SANTOS_0615' data-city='GENERAL SANTOS'>AVID SALES_AV SURFER_KCC MALL OF GENERAL SANTOS_2F_GENERAL SANTOS_0615</option>
                                        <option value='AVID SALES_AV SURFER_KCC MALL ZAMBONGA' data-city='ZAMBOANGA'>AVID SALES_AV SURFER_KCC MALL ZAMBONGA</option>
                                        <option value='AVID SALES_AV SURFER_LIMKETKAI MALL_GF_CAGAYAN DE ORO_0615' data-city='CAGAYAN DE ORO'>AVID SALES_AV SURFER_LIMKETKAI MALL_GF_CAGAYAN DE ORO_0615</option>
                                        <option value='AVID SALES_AV SURFER_ROBINSONS METRO EAST_4F_PASIG_0516' data-city='PASIG'>AVID SALES_AV SURFER_ROBINSONS METRO EAST_4F_PASIG_0516</option>
                                        <option value='AVID SALES_AV SURFER_STA LUCIA EAST GRAND MALL_3F_CAINTA_0615' data-city='CAINTA'>AVID SALES_AV SURFER_STA LUCIA EAST GRAND MALL_3F_CAINTA_0615</option>
                                        <option value='AVID SALES_AVID MEGA_CORPORATE__QUEZON_0821' data-city='QUEZON CITY'>AVID SALES_AVID MEGA_CORPORATE__QUEZON_0821</option>
                                        <option value='AVID SALES_AYALA MALL FELIZ_PASIG CITY_0121' data-city='PASIG'>AVID SALES_AYALA MALL FELIZ_PASIG CITY_0121</option>
                                        <option value='AVID SALES_GATEWAY MALL_CUBAO_QUEZON CITY_0121' data-city='QUEZON CITY'>AVID SALES_GATEWAY MALL_CUBAO_QUEZON CITY_0121</option>
                                        <option value='AVID SALES-BAGUIO CITY' data-city='BAGUIO'>AVID SALES-BAGUIO CITY</option>
                                        <option value='Site Name' data-city='City'>Site Name</option>
                                        <option value='CAGAYAN APPLIANCE-ALICIA_CAUAYAN_ISABELA_0420' data-city='CAUAYAN'>CAGAYAN APPLIANCE-ALICIA_CAUAYAN_ISABELA_0420</option>
                                        <option value='CAGAYAN APPLIANCE-CAUAYAN ISABELA' data-city='CAUAYAN'>CAGAYAN APPLIANCE-CAUAYAN ISABELA</option>
                                        <option value='CAGAYAN APPLIANCE-TUGUEGARAO' data-city='TUGUEGARAO'>CAGAYAN APPLIANCE-TUGUEGARAO</option>
                                        <option value='CONPINCO TRADING - M. CONPINCO HOME IMPROVEMENT_DAVAO CITY' data-city='DAVAO'>CONPINCO TRADING - M. CONPINCO HOME IMPROVEMENT_DAVAO CITY</option>
                                        <option value='CONPINCO TRADING_CONPINCO_AS FORTUNA EXT__MANDAUE_0515' data-city='MANDAUE'>CONPINCO TRADING_CONPINCO_AS FORTUNA EXT__MANDAUE_0515</option>
                                        <option value='CSI-LA UNION SAN FERNANDO' data-city='SAN FERNANDO'>CSI-LA UNION SAN FERNANDO</option>
                                        <option value='DIMDI-SAN PEDRO DAVAO' data-city='DAVAO'>DIMDI-SAN PEDRO DAVAO</option>
                                        <option value='DES APPLIANCE - MOLAVE' data-city='ZAMBOANGA'>DES APPLIANCE - MOLAVE</option>
                                        <option value='DES APPLIANCE-ARGAO CEBU' data-city='CEBU'>DES APPLIANCE-ARGAO CEBU</option>
                                        <option value='DES APPLIANCE-AURORA' data-city='ZAMBOANGA'>DES APPLIANCE-AURORA</option>
                                        <option value='DES APPLIANCE-BALAMBAM' data-city='LAPU-LAPU'>DES APPLIANCE-BALAMBAM</option>
                                        <option value='DES APPLIANCE-CALAMBA MISAMIS OCCIDENTAL' data-city='CALAMBA'>DES APPLIANCE-CALAMBA MISAMIS OCCIDENTAL</option>
                                        <option value='DES APPLIANCE-CAMINO NUEVO' data-city='ZAMBOANGA'>DES APPLIANCE-CAMINO NUEVO</option>
                                        <option value='DES APPLIANCE-IMELDA ZAMBOANGA SIBUGAY' data-city='ZAMBOANGA'>DES APPLIANCE-IMELDA ZAMBOANGA SIBUGAY</option>
                                        <option value='DES APPLIANCE-KABASALAN ZAMBOANGA SIBUGAY' data-city='ZAMBOANGA'>DES APPLIANCE-KABASALAN ZAMBOANGA SIBUGAY</option>
                                        <option value='DES APPLIANCE-LILOAN CEBU' data-city='CEBU'>DES APPLIANCE-LILOAN CEBU</option>
                                        <option value='DES APPLIANCE-MANDAUE CITY' data-city='LAPU-LAPU'>DES APPLIANCE-MANDAUE CITY</option>
                                        <option value='DES APPLIANCE-MARANDING' data-city='ILIGAN'>DES APPLIANCE-MARANDING</option>
                                        <option value='DES APPLIANCE-MEDELLIN CEBU' data-city='CEBU'>DES APPLIANCE-MEDELLIN CEBU</option>
                                        <option value='DES APPLIANCE-NUÑEZ II' data-city='ZAMBOANGA'>DES APPLIANCE-NUÑEZ II</option>
                                        <option value='DES APPLIANCE-PAGADIAN' data-city='PAGADIAN'>DES APPLIANCE-PAGADIAN</option>
                                        <option value='DES APPLIANCE-PAGADIAN-DATOC' data-city='PAGADIAN'>DES APPLIANCE-PAGADIAN-DATOC</option>
                                        <option value='DES APPLIANCE-PUTIK ZAMBOANGA' data-city='ZAMBOANGA'>DES APPLIANCE-PUTIK ZAMBOANGA</option>
                                        <option value='DES APPLIANCE-RIZAL AVENUE_PAGADIAN_0220' data-city='PAGADIAN'>DES APPLIANCE-RIZAL AVENUE_PAGADIAN_0220</option>
                                        <option value='DES APPLIANCE-SUCABON ZAMBOANGA' data-city='ZAMBOANGA'>DES APPLIANCE-SUCABON ZAMBOANGA</option>
                                        <option value='DES APPLIANCE-TALAMBAN CEBU CITY' data-city='CEBU'>DES APPLIANCE-TALAMBAN CEBU CITY</option>
                                        <option value='DESMARK-CALINAN' data-city='DAVAO'>DESMARK-CALINAN</option>
                                        <option value='DESMARK-DALISAY_TAGUM_1018' data-city='TAGUM'>DESMARK-DALISAY_TAGUM_1018</option>
                                        <option value='DESMARK-PANABO' data-city='PANABO'>DESMARK-PANABO</option>
                                        <option value='DESMARK-ROXAS ST. TAGUM' data-city='TAGUM'>DESMARK-ROXAS ST. TAGUM</option>
                                        <option value='DESMARK-SAN PEDRO DAVAO' data-city='DAVAO'>DESMARK-SAN PEDRO DAVAO</option>
                                        <option value='DESMARK-TAGUM 2_0224' data-city='TAGUM'>DESMARK-TAGUM 2_0224</option>
                                        <option value='DESMARK-TORIL 2_0224' data-city='DAVAO'>DESMARK-TORIL 2_0224</option>
                                        <option value='DU EK SAM-ARGAO_CEBU_0519' data-city='CEBU'>DU EK SAM-ARGAO_CEBU_0519</option>
                                        <option value='DU EK SAM-BACOLODSINGCANG' data-city='BACOLOD'>DU EK SAM-BACOLODSINGCANG</option>
                                        <option value='DU EK SAM-BANTAYAN' data-city='LAPU-LAPU'>DU EK SAM-BANTAYAN</option>
                                        <option value='DU EK SAM-BAROTAC VIEJO' data-city='ILOILO'>DU EK SAM-BAROTAC VIEJO</option>
                                        <option value='DU EK SAM-BATARAZA' data-city='PUERTO PRINCESA'>DU EK SAM-BATARAZA</option>
                                        <option value='DU EK SAM-BROOKES PT2' data-city='PUERTO PRINCESA'>DU EK SAM-BROOKES PT2</option>
                                        <option value='DU EK SAM-BUTUAN CITY' data-city='BUTUAN'>DU EK SAM-BUTUAN CITY</option>
                                        <option value='DU EK SAM-CONSOLACION' data-city='LAPU-LAPU'>DU EK SAM-CONSOLACION</option>
                                        <option value='DU EK SAM-DALAGUETE' data-city='CEBU'>DU EK SAM-DALAGUETE</option>
                                        <option value='DU EK SAM-DIGOS' data-city='DIGOS'>DU EK SAM-DIGOS</option>
                                        <option value='DU EK SAM-ESTANCIA APP' data-city='ILOILO'>DU EK SAM-ESTANCIA APP</option>
                                        <option value='DU EK SAM-JAKOSALEM CEBU' data-city='CEBU'>DU EK SAM-JAKOSALEM CEBU</option>
                                        <option value='DU EK SAM-JANIUAY' data-city='ILOILO'>DU EK SAM-JANIUAY</option>
                                        <option value='DU EK SAM-LAPASAN' data-city='CAGAYAN DE ORO'>DU EK SAM-LAPASAN</option>
                                        <option value='DU EK SAM-LAPU-LAPU_CEBU_1020' data-city='LAPU-LAPU'>DU EK SAM-LAPU-LAPU_CEBU_1020</option>
                                        <option value='DU EK SAM-LAPU-LAPU1' data-city='LAPU-LAPU'>DU EK SAM-LAPU-LAPU1</option>
                                        <option value='DU EK SAM-LAWAAN_TALISAY CITY_CEBU_0120' data-city='TALISAY'>DU EK SAM-LAWAAN_TALISAY CITY_CEBU_0120</option>
                                        <option value='DU EK SAM-MABINI ILOILO' data-city='ILOILO'>DU EK SAM-MABINI ILOILO</option>
                                        <option value='DU EK SAM-MAMBUSAO' data-city='ILOILO'>DU EK SAM-MAMBUSAO</option>
                                        <option value='DU EK SAM-MANDAUE CEBU' data-city='MANDAUE'>DU EK SAM-MANDAUE CEBU</option>
                                        <option value='DU EK SAM-NAGA MULTIBRAND & APPLIANCE_0822' data-city='NAGA'>DU EK SAM-NAGA MULTIBRAND & APPLIANCE_0822</option>
                                        <option value='DU EK SAM-NARRA' data-city='PUERTO PRINCESA'>DU EK SAM-NARRA</option>
                                        <option value='DU EK SAM-OTON_ILOILO CITY_0721' data-city='ILOILO'>DU EK SAM-OTON_ILOILO CITY_0721</option>
                                        <option value='DU EK SAM-PALO_LEYTE_0122' data-city='PALO'>DU EK SAM-PALO_LEYTE_0122</option>
                                        <option value='DU EK SAM-PUERTO 168 MALL' data-city='PUERTO PRINCESA'>DU EK SAM-PUERTO 168 MALL</option>
                                        <option value='DU EK SAM-QUEZONPAL' data-city='PUERTO PRINCESA'>DU EK SAM-QUEZONPAL</option>
                                        <option value='DU EK SAM-REAL ST. DUMAGUETE' data-city='DUMAGUETE'>DU EK SAM-REAL ST. DUMAGUETE</option>
                                        <option value='DU EK SAM-RIZAL AVE. PUERTO PRINCESA' data-city='PUERTO PRINCESA'>DU EK SAM-RIZAL AVE. PUERTO PRINCESA</option>
                                        <option value='DU EK SAM-ROXAS 2 PANAY' data-city='ROXAS'>DU EK SAM-ROXAS 2 PANAY</option>
                                        <option value='DU EK SAM-ROXAS MINDORO' data-city='SAN JOSE'>DU EK SAM-ROXAS MINDORO</option>
                                        <option value='DU EK SAM-ROXAS PAL' data-city='PUERTO PRINCESA'>DU EK SAM-ROXAS PAL</option>
                                        <option value='DU EK SAM-SAN JOSE ANTIQUE' data-city='SAN JOSE'>DU EK SAM-SAN JOSE ANTIQUE</option>
                                        <option value='DU EK SAM-SAN PEDRO PUERTO PRINCESA' data-city='PUERTO PRINCESA'>DU EK SAM-SAN PEDRO PUERTO PRINCESA</option>
                                        <option value='DU EK SAM-STA.BARBARA' data-city='ILOILO'>DU EK SAM-STA.BARBARA</option>
                                        <option value='DU EK SAM-TACLOBAN LEYTE' data-city='TACLOBAN'>DU EK SAM-TACLOBAN LEYTE</option>
                                        <option value='DU EK SAM-TAGBAC_1221' data-city='ILOILO'>DU EK SAM-TAGBAC_1221</option>
                                        <option value='DU EK SAM-TAGUM' data-city='TAGUM'>DU EK SAM-TAGUM</option>
                                        <option value='DU EK SAM-TALISAY CEBU' data-city='TALISAY'>DU EK SAM-TALISAY CEBU</option>
                                        <option value='DU EK SAM-TAYTAY_PALAWAN_0519' data-city='TAYTAY'>DU EK SAM-TAYTAY_PALAWAN_0519</option>
                                        <option value='ECHO ELECTRICAL-BANILAD CEBU' data-city='CEBU'>ECHO ELECTRICAL-BANILAD CEBU</option>
                                        <option value='ECHO ELECTRICAL-MAGALLANES CEBU' data-city='CEBU'>ECHO ELECTRICAL-MAGALLANES CEBU</option>
                                        <option value='ECHO ELECTRICAL-SAVEMORE CARCAR' data-city='CEBU'>ECHO ELECTRICAL-SAVEMORE CARCAR</option>
                                        <option value='ECHO ELECTRICAL-TABUNOK TALISAY CITY' data-city='TALISAY'>ECHO ELECTRICAL-TABUNOK TALISAY CITY</option>
                                        <option value='EMCOR-AC CORTES ST MALL MANDAUE' data-city='MANDAUE'>EMCOR-AC CORTES ST MALL MANDAUE</option>
                                        <option value='EMCOR-AGDAO ST DAVAO' data-city='DAVAO'>EMCOR-AGDAO ST DAVAO</option>
                                        <option value='EMCOR-ALUBIJID' data-city='CAGAYAN DE ORO'>EMCOR-ALUBIJID</option>
                                        <option value='EMCOR-ANDUHOL BLDG IPIL' data-city='ZAMBOANGA'>EMCOR-ANDUHOL BLDG IPIL</option>
                                        <option value='EMCOR-ARANETA AVE BACOLOD' data-city='BACOLOD'>EMCOR-ARANETA AVE BACOLOD</option>
                                        <option value='EMCOR-BALAMBAN CEBU' data-city='LAPU-LAPU'>EMCOR-BALAMBAN CEBU</option>
                                        <option value='EMCOR-BALINGASAG' data-city='CAGAYAN DE ORO'>EMCOR-BALINGASAG</option>
                                        <option value='EMCOR-BANSALAN' data-city='DAVAO'>EMCOR-BANSALAN</option>
                                        <option value='EMCOR-BANTAYAN CEBU' data-city='LAPU-LAPU'>EMCOR-BANTAYAN CEBU</option>
                                        <option value='EMCOR-BAYAWAN' data-city='DUMAGUETE'>EMCOR-BAYAWAN</option>
                                        <option value='EMCOR-BINALBAGAN' data-city='BACOLOD'>EMCOR-BINALBAGAN</option>
                                        <option value='EMCOR-BROOKES POINT' data-city='PUERTO PRINCESA'>EMCOR-BROOKES POINT</option>
                                        <option value='EMCOR-BUILDING MALL 3F DAVAO' data-city='DAVAO'>EMCOR-BUILDING MALL 3F DAVAO</option>
                                        <option value='EMCOR-CABALUNA ST. PANABO DAVAO' data-city='PANABO'>EMCOR-CABALUNA ST. PANABO DAVAO</option>
                                        <option value='EMCOR-CALAMBA' data-city='CALAMBA'>EMCOR-CALAMBA</option>
                                        <option value='EMCOR-CALINAN' data-city='DAVAO'>EMCOR-CALINAN</option>
                                        <option value='EMCOR-DELGADO ILOILO' data-city='ILOILO'>EMCOR-DELGADO ILOILO</option>
                                        <option value='EMCOR-DIVERSION RD ILOILO' data-city='ILOILO'>EMCOR-DIVERSION RD ILOILO</option>
                                        <option value='EMCOR-DUMAGUETE' data-city='DUMAGUETE'>EMCOR-DUMAGUETE</option>
                                        <option value='EMCOR-DUMALINAO' data-city='PAGADIAN'>EMCOR-DUMALINAO</option>
                                        <option value='EMCOR-DUMASAPAL BLDG GF LILOY' data-city='ZAMBOANGA'>EMCOR-DUMASAPAL BLDG GF LILOY</option>
                                        <option value='EMCOR-ELSIE BLDG. DIGOS' data-city='DIGOS'>EMCOR-ELSIE BLDG. DIGOS</option>
                                        <option value='EMCOR-EMCOR(BRGY TIGUMA__PAGADIAN)0515' data-city='PAGADIAN'>EMCOR-EMCOR(BRGY TIGUMA__PAGADIAN)0515</option>
                                        <option value='EMCOR-GAID BLDG GF MARANDING LALA' data-city='ILIGAN'>EMCOR-GAID BLDG GF MARANDING LALA</option>
                                        <option value='EMCOR-GUIWAN ZAMBOANGA' data-city='ZAMBOANGA'>EMCOR-GUIWAN ZAMBOANGA</option>
                                        <option value='EMCOR-IMELDA' data-city='ZAMBOANGA'>EMCOR-IMELDA</option>
                                        <option value='EMCOR-IPONAN VALEZ_CAGAYAN DE ORO_0119' data-city='CAGAYAN DE ORO'>EMCOR-IPONAN VALEZ_CAGAYAN DE ORO_0119</option>
                                        <option value='EMCOR-ISULAN' data-city='GENERAL SANTOS'>EMCOR-ISULAN</option>
                                        <option value='EMCOR-JALDON ST ZAMBOANGA' data-city='ZAMBOANGA'>EMCOR-JALDON ST ZAMBOANGA</option>
                                        <option value='EMCOR-JR BORJA ST GF CAGAYAN DE ORO' data-city='CAGAYAN DE ORO'>EMCOR-JR BORJA ST GF CAGAYAN DE ORO</option>
                                        <option value='EMCOR-JVR BLDG NATIONAL HWAY GENSAN' data-city='GENERAL SANTOS'>EMCOR-JVR BLDG NATIONAL HWAY GENSAN</option>
                                        <option value='EMCOR-KABANKALAN' data-city='BACOLOD'>EMCOR-KABANKALAN</option>
                                        <option value='EMCOR-KABASALAN' data-city='ZAMBOANGA'>EMCOR-KABASALAN</option>
                                        <option value='EMCOR-LEGASPI CEBU' data-city='CEBU'>EMCOR-LEGASPI CEBU</option>
                                        <option value='EMCOR-LUPON' data-city='DAVAO'>EMCOR-LUPON</option>
                                        <option value='EMCOR-MALITA' data-city='MATI'>EMCOR-MALITA</option>
                                        <option value='EMCOR-MAMBUSAO' data-city='ROXAS'>EMCOR-MAMBUSAO</option>
                                        <option value='EMCOR-MANBAO BLDG BOGO' data-city='LAPU-LAPU'>EMCOR-MANBAO BLDG BOGO</option>
                                        <option value='EMCOR-MARINA MALL GF LAPULAPU' data-city='LAPU-LAPU'>EMCOR-MARINA MALL GF LAPULAPU</option>
                                        <option value='EMCOR-MATI DAVAO ORIENTAL' data-city='MATI'>EMCOR-MATI DAVAO ORIENTAL</option>
                                        <option value='EMCOR-MATINA CROSSING MALL DAVAO' data-city='DAVAO'>EMCOR-MATINA CROSSING MALL DAVAO</option>
                                        <option value='EMCOR-MC ARTHUR HWAY TORIL' data-city='DAVAO'>EMCOR-MC ARTHUR HWAY TORIL</option>
                                        <option value='EMCOR-MOLAVE' data-city='ZAMBOANGA'>EMCOR-MOLAVE</option>
                                        <option value='EMCOR-MONTILLA BLVD BUTUAN' data-city='BUTUAN'>EMCOR-MONTILLA BLVD BUTUAN</option>
                                        <option value='EMCOR-NABUNTURAN HIGHWAY' data-city='DAVAO'>EMCOR-NABUNTURAN HIGHWAY</option>
                                        <option value='EMCOR-NARRA' data-city='PUERTO PRINCESA'>EMCOR-NARRA</option>
                                        <option value='EMCOR-NATIONAL HWAY GF GINGOOG' data-city='CAGAYAN DE ORO'>EMCOR-NATIONAL HWAY GF GINGOOG</option>
                                        <option value='EMCOR-NUÑEZ EXT ZAMBOANGA' data-city='ZAMBOANGA'>EMCOR-NUÑEZ EXT ZAMBOANGA</option>
                                        <option value='EMCOR-PANABO HIGHWAY' data-city='DAVAO'>EMCOR-PANABO HIGHWAY</option>
                                        <option value='EMCOR-PASSI' data-city='ILOILO'>EMCOR-PASSI</option>
                                        <option value='EMCOR-RECODO' data-city='ZAMBOANGA'>EMCOR-RECODO</option>
                                        <option value='EMCOR-RIZAL AVE PAGADIAN' data-city='PAGADIAN'>EMCOR-RIZAL AVE PAGADIAN</option>
                                        <option value='EMCOR-RIZAL AVE PUERTO PRINCESA' data-city='PUERTO PRINCESA'>EMCOR-RIZAL AVE PUERTO PRINCESA</option>
                                        <option value='EMCOR-RIZAL AVE SINDANGAN' data-city='ZAMBOANGA'>EMCOR-RIZAL AVE SINDANGAN</option>
                                        <option value='EMCOR-RIZAL ST TAGUM' data-city='TAGUM'>EMCOR-RIZAL ST TAGUM</option>
                                        <option value='EMCOR-ROXAS AVE COR CONSUNJI ST GF ILIGAN' data-city='ILIGAN'>EMCOR-ROXAS AVE COR CONSUNJI ST GF ILIGAN</option>
                                        <option value='EMCOR-ROXAS CITY_CAPIZ_0119' data-city='ROXAS'>EMCOR-ROXAS CITY_CAPIZ_0119</option>
                                        <option value='EMCOR-SAN PEDRO PUERTO PRINCESA' data-city='PUERTO PRINCESA'>EMCOR-SAN PEDRO PUERTO PRINCESA</option>
                                        <option value='EMCOR-SAN PEDRO ST GF DAVAO' data-city='DAVAO'>EMCOR-SAN PEDRO ST GF DAVAO</option>
                                        <option value='EMCOR-SANTA CECELIA GUSA ST GF CAGAYAN DE ORO' data-city='CAGAYAN DE ORO'>EMCOR-SANTA CECELIA GUSA ST GF CAGAYAN DE ORO</option>
                                        <option value='EMCOR-SURIGAO' data-city='SURIGAO'>EMCOR-SURIGAO</option>
                                        <option value='EMCOR-TABUNOK TALISAY CITY CEBU' data-city='TALISAY'>EMCOR-TABUNOK TALISAY CITY CEBU</option>
                                        <option value='EMCOR-TANDAG' data-city='SURIGAO'>EMCOR-TANDAG</option>
                                        <option value='EMCOR-TOLEDO CEBU' data-city='LAPU-LAPU'>EMCOR-TOLEDO CEBU</option>
                                        <option value='EMCOR-VETERANS ZAMBOANGA' data-city='ZAMBOANGA'>EMCOR-VETERANS ZAMBOANGA</option>
                                        <option value='EMCOR-VILLENA ST CADIZ' data-city='BACOLOD'>EMCOR-VILLENA ST CADIZ</option>
                                        <option value='EMCOR-VISAYAN VILLAGE NATIONAL HWAY TAGUM' data-city='TAGUM'>EMCOR-VISAYAN VILLAGE NATIONAL HWAY TAGUM</option>
                                        <option value='EMCOR-YKS BLDG TACLOBAN' data-city='TACLOBAN'>EMCOR-YKS BLDG TACLOBAN</option>
                                        <option value='FAIR N SQUARE-BALIUAG_0122' data-city='BALIUAG'>FAIR N SQUARE-BALIUAG_0122</option>
                                        <option value='FAIR N SQUARE-BINONDO' data-city='MANILA'>FAIR N SQUARE-BINONDO</option>
                                        <option value='FAIR N SQUARE-CALOOCAN' data-city='CALOOCAN'>FAIR N SQUARE-CALOOCAN</option>
                                        <option value='FIESTA APPLIANCE_TAGUM FIESTA APPLIANCES_TAGUM FIESTA BLDG_GF_TAGUM_0516' data-city='TAGUM'>FIESTA APPLIANCE_TAGUM FIESTA APPLIANCES_TAGUM FIESTA BLDG_GF_TAGUM_0516</option>
                                        <option value='FIESTA APPLIANCE-BUHANGIN DAVAO CITY' data-city='DAVAO'>FIESTA APPLIANCE-BUHANGIN DAVAO CITY</option>
                                        <option value='FIESTA APPLIANCE-CALUMPANG' data-city='GENERAL SANTOS'>FIESTA APPLIANCE-CALUMPANG</option>
                                        <option value='FIESTA APPLIANCE-GENERAL SANTOS' data-city='GENERAL SANTOS'>FIESTA APPLIANCE-GENERAL SANTOS</option>
                                        <option value='FIESTA APPLIANCE-PANABO CITY DAVAO' data-city='PANABO'>FIESTA APPLIANCE-PANABO CITY DAVAO</option>
                                        <option value='FIESTA APPLIANCE-POLOMOLOK SOUTH COTABATO' data-city='GENERAL SANTOS'>FIESTA APPLIANCE-POLOMOLOK SOUTH COTABATO</option>
                                        <option value='FIRST FAMILY-CONCEPT SHOP PARKMALL' data-city='MANDAUE'>FIRST FAMILY-CONCEPT SHOP PARKMALL</option>
                                        <option value='FIRST FAMILY-GAISANO GRAND PLAZA_MACTAN_LAPULAPU_1223' data-city='LAPU-LAPU'>FIRST FAMILY-GAISANO GRAND PLAZA_MACTAN_LAPULAPU_1223</option>
                                        <option value='FIRST FAMILY-PARKMALL MANDAUE CEBU' data-city='MANDAUE'>FIRST FAMILY-PARKMALL MANDAUE CEBU</option>
                                        <option value='FURNITURE ARTS & APPLIANCES_PAGADIAN_1221' data-city='PAGADIAN'>FURNITURE ARTS & APPLIANCES_PAGADIAN_1221</option>
                                        <option value='K SERVICO - ANTIPOLO_2_0123' data-city='ANTIPOLO'>K SERVICO - ANTIPOLO_2_0123</option>
                                        <option value='K SERVICO-111 JVR BLDG CUBAO QUEZON' data-city='QUEZON CITY'>K SERVICO-111 JVR BLDG CUBAO QUEZON</option>
                                        <option value='K SERVICO-A. MABINI AVE TANAUAN' data-city='LIPA'>K SERVICO-A. MABINI AVE TANAUAN</option>
                                        <option value='K SERVICO-ALICIA' data-city='CAUAYAN'>K SERVICO-ALICIA</option>
                                        <option value='K SERVICO-CAUAYAN 2' data-city='CAUAYAN'>K SERVICO-CAUAYAN 2</option>
                                        <option value='K SERVICO-K SERVICO BLDG ILAGAN' data-city='CAUAYAN'>K SERVICO-K SERVICO BLDG ILAGAN</option>
                                        <option value='K SERVICO-KDC ARAYAT' data-city='ANGELES'>K SERVICO-KDC ARAYAT</option>
                                        <option value='K SERVICO-KDC STA ROSA' data-city='SANTA ROSA'>K SERVICO-KDC STA ROSA</option>
                                        <option value='K SERVICO-L.E. BENIGNO ST. AQUINO AVE GF BALIUAG' data-city='BALIUAG'>K SERVICO-L.E. BENIGNO ST. AQUINO AVE GF BALIUAG</option>
                                        <option value='K SERVICO-LAGUNDI BRGY MEXICO' data-city='ANGELES'>K SERVICO-LAGUNDI BRGY MEXICO</option>
                                        <option value='K SERVICO-LAS PIÑAS COMMERCIAL BLDG ALABANG LAS PIÑAS' data-city='LAS PIÑAS'>K SERVICO-LAS PIÑAS COMMERCIAL BLDG ALABANG LAS PIÑAS</option>
                                        <option value='K SERVICO-MARAVILLA BLDG TALAVERA' data-city='CABANATUAN'>K SERVICO-MARAVILLA BLDG TALAVERA</option>
                                        <option value='K SERVICO-MASALONG_CAMARINES NORTE_1119' data-city='LABO'>K SERVICO-MASALONG_CAMARINES NORTE_1119</option>
                                        <option value='K SERVICO-RIZAL ST GOA' data-city='NAGA'>K SERVICO-RIZAL ST GOA</option>
                                        <option value='K SERVICO-STO. DOMINGO_0319' data-city='CABANATUAN'>K SERVICO-STO. DOMINGO_0319</option>
                                        <option value='K SERVICO-TRECE MARTIRES_CAVITE_0820' data-city='TRECE MARTIRES'>K SERVICO-TRECE MARTIRES_CAVITE_0820</option>
                                        <option value='K-SERVICO-ABULUG CAGAYAN' data-city='TUGUEGARAO'>K-SERVICO-ABULUG CAGAYAN</option>
                                        <option value='K-SERVICO-ACASIA MALABON CITY' data-city='MALABON'>K-SERVICO-ACASIA MALABON CITY</option>
                                        <option value='K-SERVICO-AGOO' data-city='SAN FERNANDO'>K-SERVICO-AGOO</option>
                                        <option value='K-SERVICO-ALDEA TANAY RIZAL' data-city='ANTIPOLO'>K-SERVICO-ALDEA TANAY RIZAL</option>
                                        <option value='K-SERVICO-AURORA' data-city='CAUAYAN'>K-SERVICO-AURORA</option>
                                        <option value='K-SERVICO-BAGGAO' data-city='TUGUEGARAO'>K-SERVICO-BAGGAO</option>
                                        <option value='K-SERVICO-BALAYAN' data-city='LIPA'>K-SERVICO-BALAYAN</option>
                                        <option value='K-SERVICO-BALIBAGO COMPLEX STA. ROSA CITY' data-city='SANTA ROSA'>K-SERVICO-BALIBAGO COMPLEX STA. ROSA CITY</option>
                                        <option value='K-SERVICO-BALINTAWAK LIPA' data-city='LIPA'>K-SERVICO-BALINTAWAK LIPA</option>
                                        <option value='K-SERVICO-BAYANAN ALABANG' data-city='MUNTINLUPA'>K-SERVICO-BAYANAN ALABANG</option>
                                        <option value='K-SERVICO-BINANGONAN RIZAL' data-city='BINANGONAN'>K-SERVICO-BINANGONAN RIZAL</option>
                                        <option value='K-SERVICO-BUCANA SAN VICENTE GAPAN' data-city='CABANATUAN'>K-SERVICO-BUCANA SAN VICENTE GAPAN</option>
                                        <option value='K-SERVICO-BUNTUN' data-city='TUGUEGARAO'>K-SERVICO-BUNTUN</option>
                                        <option value='K-SERVICO-CABANATUAN NUEVA ECIJA' data-city='CABANATUAN'>K-SERVICO-CABANATUAN NUEVA ECIJA</option>
                                        <option value='K-SERVICO-CARAMOAN' data-city='NAGA'>K-SERVICO-CARAMOAN</option>
                                        <option value='K-SERVICO-CAUAYAN ISABELA' data-city='CAUAYAN'>K-SERVICO-CAUAYAN ISABELA</option>
                                        <option value='K-SERVICO-CENTRO LASAM' data-city='TUGUEGARAO'>K-SERVICO-CENTRO LASAM</option>
                                        <option value='K-SERVICO-CIRCUMFERENTIAL RD. ANTIPOLO CITY' data-city='ANTIPOLO'>K-SERVICO-CIRCUMFERENTIAL RD. ANTIPOLO CITY</option>
                                        <option value='K-SERVICO-COMMONWEALTH AVENUE FAIRVIEW' data-city='QUEZON CITY'>K-SERVICO-COMMONWEALTH AVENUE FAIRVIEW</option>
                                        <option value='K-SERVICO-DAU ANGELES' data-city='ANGELES'>K-SERVICO-DAU ANGELES</option>
                                        <option value='K-SERVICO-EAST REMBO MAKATI CITY' data-city='MAKATI'>K-SERVICO-EAST REMBO MAKATI CITY</option>
                                        <option value='K-SERVICO-FLORIDABLANCA' data-city='ANGELES'>K-SERVICO-FLORIDABLANCA</option>
                                        <option value='K-SERVICO-GATTARAN' data-city='TUGUEGARAO'>K-SERVICO-GATTARAN</option>
                                        <option value='K-SERVICO-GONZAGA' data-city='TUGUEGARAO'>K-SERVICO-GONZAGA</option>
                                        <option value='K-SERVICO-LA TRINIDAD BAGUIO' data-city='BAGUIO'>K-SERVICO-LA TRINIDAD BAGUIO</option>
                                        <option value='K-SERVICO-MAGALANG' data-city='ANGELES'>K-SERVICO-MAGALANG</option>
                                        <option value='K-SERVICO-Mandaluyong Pasig' data-city='PASIG'>K-SERVICO-Mandaluyong Pasig</option>
                                        <option value='K-SERVICO-MASINAG ANTIPOLO CITY' data-city='ANTIPOLO'>K-SERVICO-MASINAG ANTIPOLO CITY</option>
                                        <option value='K-SERVICO-MEYCAUAYAN' data-city='MEYCAUAYAN'>K-SERVICO-MEYCAUAYAN</option>
                                        <option value='K-SERVICO-MOLINO' data-city='DASMARIÑAS'>K-SERVICO-MOLINO</option>
                                        <option value='K-SERVICO-MONTILLANO (MCSP)' data-city='MUNTINLUPA'>K-SERVICO-MONTILLANO (MCSP)</option>
                                        <option value='K-SERVICO-NAGA' data-city='NAGA'>K-SERVICO-NAGA</option>
                                        <option value='K-SERVICO-PACO MANILA' data-city='MANILA'>K-SERVICO-PACO MANILA</option>
                                        <option value='K-SERVICO-PENGUE TUGUEGARAO' data-city='TUGUEGARAO'>K-SERVICO-PENGUE TUGUEGARAO</option>
                                        <option value='K-SERVICO-POBLACION SAN MATEO ISABELA' data-city='SAN MATEO'>K-SERVICO-POBLACION SAN MATEO ISABELA</option>
                                        <option value='K-SERVICO-PORAC' data-city='ANGELES'>K-SERVICO-PORAC</option>
                                        <option value='K-SERVICO-ROSARIO RODRIGUEZ RIZAL' data-city='ANTIPOLO'>K-SERVICO-ROSARIO RODRIGUEZ RIZAL</option>
                                        <option value='K-SERVICO-ROXAS' data-city='CAUAYAN'>K-SERVICO-ROXAS</option>
                                        <option value='K-SERVICO-SAN FERNANDO PAMPANGA' data-city='SAN FERNANDO'>K-SERVICO-SAN FERNANDO PAMPANGA</option>
                                        <option value='K-SERVICO-SAN JOSE' data-city='CABANATUAN'>K-SERVICO-SAN JOSE</option>
                                        <option value='K-SERVICO-SIGNAL TAGUIG' data-city='TAGUIG'>K-SERVICO-SIGNAL TAGUIG</option>
                                        <option value='K-SERVICO-SILANG' data-city='SILANG'>K-SERVICO-SILANG</option>
                                        <option value='K-SERVICO-STA. ANA CAGAYAN' data-city='SAN MATEO'>K-SERVICO-STA. ANA CAGAYAN</option>
                                        <option value='K-SERVICO-SUSANO RD. NOVALICHES CITY' data-city='QUEZON CITY'>K-SERVICO-SUSANO RD. NOVALICHES CITY</option>
                                        <option value='K-SERVICO-TAYTAY' data-city='TAYTAY'>K-SERVICO-TAYTAY</option>
                                        <option value='K-SERVICO-TUAO' data-city='TUGUEGARAO'>K-SERVICO-TUAO</option>
                                        <option value='K-SERVICO-TUDDAO-CHUA BLDG BALZAIN CAGAYAN' data-city='TUGUEGARAO'>K-SERVICO-TUDDAO-CHUA BLDG BALZAIN CAGAYAN</option>
                                        <option value='K-SERVICO-TUMAUINI' data-city='CAUAYAN'>K-SERVICO-TUMAUINI</option>
                                        <option value='K-SERVICO-VICTORIA' data-city='TARLAC'>K-SERVICO-VICTORIA</option>
                                        <option value='K-SERVICO-ZAPOTE RD. LAS PINAS' data-city='LAS PIÑAS'>K-SERVICO-ZAPOTE RD. LAS PINAS</option>
                                        <option value='KCC - GENSAN_0923' data-city='GENERAL SANTOS'>KCC - GENSAN_0923</option>
                                        <option value='KCC - ZAMBOANGA_0923' data-city='ZAMBOANGA'>KCC - ZAMBOANGA_0923</option>
                                        <option value='LANDERS - ARCA SOUTH_TAGUIG CITY_0524' data-city='TAGUIG'>LANDERS - ARCA SOUTH_TAGUIG CITY_0524</option>
                                        <option value='LANDERS - OTIS_0524' data-city='MANILA'>LANDERS - OTIS_0524</option>
                                        <option value='MAGIC APPLIANCE-SAN FERNANDO LA UNION_0222' data-city='SAN FERNANDO'>MAGIC APPLIANCE-SAN FERNANDO LA UNION_0222</option>
                                        <option value='MAGIC-SAN JOSE NUEVA ECIJA' data-city='SAN JOSE'>MAGIC-SAN JOSE NUEVA ECIJA</option>
                                        <option value='MJS-STA.CRUZ MANILA' data-city='MANILA'>MJS-STA.CRUZ MANILA</option>
                                        <option value='METRO PLAZA-BAJADA ST. DAVAO' data-city='DAVAO'>METRO PLAZA-BAJADA ST. DAVAO</option>
                                        <option value='METRO PLAZA-CONCEPT SHOP GAISANO MALL DAVAO' data-city='DAVAO'>METRO PLAZA-CONCEPT SHOP GAISANO MALL DAVAO</option>
                                        <option value='NORTHERN MARKETING-TANEDO TARLAC' data-city='TARLAC'>NORTHERN MARKETING-TANEDO TARLAC</option>
                                        <option value='POS MARKETING-ARANETA ST. BACOLOD' data-city='BACOLOD'>POS MARKETING-ARANETA ST. BACOLOD</option>
                                        <option value='PRICEWISE-STA. MARIA_ZAMBOANGA_0320' data-city='ZAMBOANGA'>PRICEWISE-STA. MARIA_ZAMBOANGA_0320</option>
                                        <option value='QUALITY APPLIANCE - DUMAGUETE' data-city='DUMAGUETE'>QUALITY APPLIANCE - DUMAGUETE</option>
                                        <option value='QUALITY APPLIANCE - ORO HOLIDAY_CAGAYAN DE ORO_0819' data-city='CAGAYAN DE ORO'>QUALITY APPLIANCE - ORO HOLIDAY_CAGAYAN DE ORO_0819</option>
                                        <option value='QUALITY APPLIANCE-CDO_MISAMIS ORIENTAL_0723' data-city='CAGAYAN DE ORO'>QUALITY APPLIANCE-CDO_MISAMIS ORIENTAL_0723</option>
                                        <option value='QUALITY APPLIANCE-Central lifestyle' data-city='CAGAYAN DE ORO'>QUALITY APPLIANCE-Central lifestyle</option>
                                        <option value='QUALITY APPLIANCE-DAVAO CITY_0723' data-city='DAVAO'>QUALITY APPLIANCE-DAVAO CITY_0723</option>
                                        <option value='QUALITY APPLIANCE-FELCRIS CENTRALE DAVAO' data-city='DAVAO'>QUALITY APPLIANCE-FELCRIS CENTRALE DAVAO</option>
                                        <option value='QUALITY APPLIANCE-GENERAL SANTOS HI-WAY' data-city='GENERAL SANTOS'>QUALITY APPLIANCE-GENERAL SANTOS HI-WAY</option>
                                        <option value='QUALITY APPLIANCE-MAGALLANES COR.AMAT ST. SURIGAO' data-city='CAGAYAN DE ORO'>QUALITY APPLIANCE-MAGALLANES COR.AMAT ST. SURIGAO</option>
                                        <option value='QUALITY APPLIANCE-MAIN CDO' data-city='CAGAYAN DE ORO'>QUALITY APPLIANCE-MAIN CDO</option>
                                        <option value='QUALITY APPLIANCE-MARANDING' data-city='ILIGAN'>QUALITY APPLIANCE-MARANDING</option>
                                        <option value='QUALITY APPLIANCE-MONTILLA BLVD. BUTUAN' data-city='BUTUAN'>QUALITY APPLIANCE-MONTILLA BLVD. BUTUAN</option>
                                        <option value='QUALITY APPLIANCE-PAGADIAN' data-city='PAGADIAN'>QUALITY APPLIANCE-PAGADIAN</option>
                                        <option value='QUALITY APPLIANCE-RAINBOW APPLIANCE CAPISTRANO ST. CAGAYAN DE ORO' data-city='CAGAYAN DE ORO'>QUALITY APPLIANCE-RAINBOW APPLIANCE CAPISTRANO ST. CAGAYAN DE ORO</option>
                                        <option value='QUALITY APPLIANCE-SABAYLE ST. ILIGAN' data-city='ILIGAN'>QUALITY APPLIANCE-SABAYLE ST. ILIGAN</option>
                                        <option value='QUALITY APPLIANCE-SPECIAL APPLIANCE CARMEN CAGAYAN DE ORO' data-city='CAGAYAN DE ORO'>QUALITY APPLIANCE-SPECIAL APPLIANCE CARMEN CAGAYAN DE ORO</option>
                                        <option value='QUALITY APPLIANCE-SPECIAL APPLIANCE QUEZON AVE. EXT. ILIGAN CITY' data-city='ILIGAN'>QUALITY APPLIANCE-SPECIAL APPLIANCE QUEZON AVE. EXT. ILIGAN CITY</option>
                                        <option value='QUALITY APPLIANCE-TACLOBAN LEYTE' data-city='TACLOBAN'>QUALITY APPLIANCE-TACLOBAN LEYTE</option>
                                        <option value='QUALITY APPLIANCE-TALISAY CEBU' data-city='TALISAY'>QUALITY APPLIANCE-TALISAY CEBU</option>
                                        <option value='QUALITY APPLIANCE-TAYTAY' data-city='TAYTAY'>QUALITY APPLIANCE-TAYTAY</option>
                                        <option value='QUALITY APPLIANCE-ZAMBOANGA' data-city='ZAMBOANGA'>QUALITY APPLIANCE-ZAMBOANGA</option>
                                        <option value='RJ HOMES-ILIGAN' data-city='ILIGAN'>RJ HOMES-ILIGAN</option>
                                        <option value='RJ HOMES-LEGASPI ST. DAVAO' data-city='DAVAO'>RJ HOMES-LEGASPI ST. DAVAO</option>
                                        <option value='RL APPLIANCE-TACLOBAN LEYTE' data-city='TACLOBAN'>RL APPLIANCE-TACLOBAN LEYTE</option>
                                        <option value='ROBINSON APPLIANCE-ILIGAN' data-city='ILIGAN'>ROBINSON APPLIANCE-ILIGAN</option>
                                        <option value='ROBINSON APPLIANCE-NAGA' data-city='NAGA'>ROBINSON APPLIANCE-NAGA</option>
                                        <option value='ROBINSONS APPLIANCES - AYALA MALLS CENTRIO CDO_0124' data-city='CAGAYAN DE ORO'>ROBINSONS APPLIANCES - AYALA MALLS CENTRIO CDO_0124</option>
                                        <option value='ROBINSONS APPLIANCES - FESTIVAL MALL_ALABANG_MUNTINLUPA_0723' data-city='MUNTINLUPA'>ROBINSONS APPLIANCES - FESTIVAL MALL_ALABANG_MUNTINLUPA_0723</option>
                                        <option value='ROBINSONS APPLIANCES - OPUS_QUEZON CITY_0424' data-city='QUEZON CITY'>ROBINSONS APPLIANCES - OPUS_QUEZON CITY_0424</option>
                                        <option value='ROBINSONS APPLIANCES - SAN FERNANDO LA UNION' data-city='SAN FERNANDO'>ROBINSONS APPLIANCES - SAN FERNANDO LA UNION</option>
                                        <option value='ROBINSONS APPLIANCES - SHOPWISE_ALABANG_MUNTINLUPA_0823' data-city='MUNTINLUPA'>ROBINSONS APPLIANCES - SHOPWISE_ALABANG_MUNTINLUPA_0823</option>
                                        <option value='ROBINSONS APPLIANCES - SHOPWISE_ANTIPOLO_1221' data-city='ANTIPOLO'>ROBINSONS APPLIANCES - SHOPWISE_ANTIPOLO_1221</option>
                                        <option value='ROBINSONS APPLIANCES - SHOPWISE_LANCASTER_IMUS_1123' data-city='IMUS'>ROBINSONS APPLIANCES - SHOPWISE_LANCASTER_IMUS_1123</option>
                                        <option value='ROBINSONS APPLIANCES - SHOPWISE_MAKATI_1221' data-city='MAKATI'>ROBINSONS APPLIANCES - SHOPWISE_MAKATI_1221</option>
                                        <option value='ROBINSONS APPLIANCES - SHOPWISE_SUCAT_0123' data-city='PARAÑAQUE'>ROBINSONS APPLIANCES - SHOPWISE_SUCAT_0123</option>
                                        <option value='ROBINSONS APPLIANCES - WEBSITE_0521' data-city='MANILA'>ROBINSONS APPLIANCES - WEBSITE_0521</option>
                                        <option value='ROBINSONS APPLIANCES- ROBINSONS GEN. TRIAS CAVITE_2F' data-city='SILANG'>ROBINSONS APPLIANCES- ROBINSONS GEN. TRIAS CAVITE_2F</option>
                                        <option value='ROBINSONS APPLIANCES-ABREEZA' data-city='DAVAO'>ROBINSONS APPLIANCES-ABREEZA</option>
                                        <option value='ROBINSONS APPLIANCES-ANGELES PAMPANGA' data-city='ANGELES'>ROBINSONS APPLIANCES-ANGELES PAMPANGA</option>
                                        <option value='ROBINSONS APPLIANCES-ARVO DASMARIÑAS' data-city='DASMARIÑAS'>ROBINSONS APPLIANCES-ARVO DASMARIÑAS</option>
                                        <option value='ROBINSONS APPLIANCES-BACOLOD MALL 2F' data-city='BACOLOD'>ROBINSONS APPLIANCES-BACOLOD MALL 2F</option>
                                        <option value='ROBINSONS APPLIANCES-BUTUAN MALL' data-city='BUTUAN'>ROBINSONS APPLIANCES-BUTUAN MALL</option>
                                        <option value='ROBINSONS APPLIANCES-CABANATUAN MALL' data-city='CABANATUAN'>ROBINSONS APPLIANCES-CABANATUAN MALL</option>
                                        <option value='ROBINSONS APPLIANCES-CAGAYAN DE ORO MALL' data-city='CAGAYAN DE ORO'>ROBINSONS APPLIANCES-CAGAYAN DE ORO MALL</option>
                                        <option value='ROBINSONS APPLIANCES-CENTER MALL  BAGUIO' data-city='BAGUIO'>ROBINSONS APPLIANCES-CENTER MALL  BAGUIO</option>
                                        <option value='ROBINSONS APPLIANCES-CENTERPOINT PLAZA  BAGUIO' data-city='BAGUIO'>ROBINSONS APPLIANCES-CENTERPOINT PLAZA  BAGUIO</option>
                                        <option value='ROBINSONS APPLIANCES-CENTRO MALL GF CABUYAO' data-city='CABUYAO'>ROBINSONS APPLIANCES-CENTRO MALL GF CABUYAO</option>
                                        <option value='ROBINSONS APPLIANCES-CORPORATE LIBS' data-city='QUEZON CITY'>ROBINSONS APPLIANCES-CORPORATE LIBS</option>
                                        <option value='ROBINSONS APPLIANCES-DUMAGUETE MALL LGF' data-city='DUMAGUETE'>ROBINSONS APPLIANCES-DUMAGUETE MALL LGF</option>
                                        <option value='ROBINSONS APPLIANCES-ELISCO RD IBAYO TIPAS TAGUIG' data-city='TAGUIG'>ROBINSONS APPLIANCES-ELISCO RD IBAYO TIPAS TAGUIG</option>
                                        <option value='ROBINSONS APPLIANCES-GAISANO MALL DIGOS CITY' data-city='DIGOS'>ROBINSONS APPLIANCES-GAISANO MALL DIGOS CITY</option>
                                        <option value='ROBINSONS APPLIANCES-GAISANO MALL TORIL DAVAO' data-city='DAVAO'>ROBINSONS APPLIANCES-GAISANO MALL TORIL DAVAO</option>
                                        <option value='ROBINSONS APPLIANCES-GENERAL SANTOS MALL' data-city='GENERAL SANTOS'>ROBINSONS APPLIANCES-GENERAL SANTOS MALL</option>
                                        <option value='ROBINSONS APPLIANCES-IMALL CANLUBANG LAGUNA' data-city='CALAMBA'>ROBINSONS APPLIANCES-IMALL CANLUBANG LAGUNA</option>
                                        <option value='ROBINSONS APPLIANCES-MAGNOLIA MALL' data-city='QUEZON CITY'>ROBINSONS APPLIANCES-MAGNOLIA MALL</option>
                                        <option value='ROBINSONS APPLIANCES-MALOLOS MALL' data-city='MALOLOS'>ROBINSONS APPLIANCES-MALOLOS MALL</option>
                                        <option value='ROBINSONS APPLIANCES-MARQUEE MALL ANGELES' data-city='ANGELES'>ROBINSONS APPLIANCES-MARQUEE MALL ANGELES</option>
                                        <option value='ROBINSONS APPLIANCES-MARQUINTON MARIKINA' data-city='MARIKINA'>ROBINSONS APPLIANCES-MARQUINTON MARIKINA</option>
                                        <option value='ROBINSONS APPLIANCES-NORTH TACLOBAN' data-city='TACLOBAN'>ROBINSONS APPLIANCES-NORTH TACLOBAN</option>
                                        <option value='ROBINSONS APPLIANCES-PERDICES SUPERMARKET LGF DUMAGUE' data-city='DUMAGUETE'>ROBINSONS APPLIANCES-PERDICES SUPERMARKET LGF DUMAGUE</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS ANTIPOLO' data-city='ANTIPOLO'>ROBINSONS APPLIANCES-ROBINSONS ANTIPOLO</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS APPLIANCES(ROBINSONS TAGUM MALL__TAGUM)0716' data-city='TAGUM'>ROBINSONS APPLIANCES-ROBINSONS APPLIANCES(ROBINSONS TAGUM MALL__TAGUM)0716</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS BINANGONAN' data-city='BINANGONAN'>ROBINSONS APPLIANCES-ROBINSONS BINANGONAN</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS CAINTA' data-city='CAINTA'>ROBINSONS APPLIANCES-ROBINSONS CAINTA</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS DASMARIÑAS' data-city='DASMARIÑAS'>ROBINSONS APPLIANCES-ROBINSONS DASMARIÑAS</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS ERMITA' data-city='MANILA'>ROBINSONS APPLIANCES-ROBINSONS ERMITA</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS FAIRVIEW REGALADO' data-city='QUEZON CITY'>ROBINSONS APPLIANCES-ROBINSONS FAIRVIEW REGALADO</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS GALLERIA CEBU' data-city='CEBU'>ROBINSONS APPLIANCES-ROBINSONS GALLERIA CEBU</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS GALLERIA SOUTH_LAGUNA_0519' data-city='SAN PEDRO'>ROBINSONS APPLIANCES-ROBINSONS GALLERIA SOUTH_LAGUNA_0519</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS GALLERIA' data-city='QUEZON CITY'>ROBINSONS APPLIANCES-ROBINSONS GALLERIA</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS ILOILO' data-city='ILOILO'>ROBINSONS APPLIANCES-ROBINSONS ILOILO</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS IMUS' data-city='IMUS'>ROBINSONS APPLIANCES-ROBINSONS IMUS</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS JARO' data-city='ILOILO'>ROBINSONS APPLIANCES-ROBINSONS JARO</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS LAS PIÑAS' data-city='LAS PIÑAS'>ROBINSONS APPLIANCES-ROBINSONS LAS PIÑAS</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS LIPA' data-city='LIPA'>ROBINSONS APPLIANCES-ROBINSONS LIPA</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS MARIKINA RIVERBANKS' data-city='MARIKINA'>ROBINSONS APPLIANCES-ROBINSONS MARIKINA RIVERBANKS</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS METRO EAST PASIG' data-city='PASIG'>ROBINSONS APPLIANCES-ROBINSONS METRO EAST PASIG</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS MEYCAUAYAN BULACAN' data-city='MEYCAUAYAN'>ROBINSONS APPLIANCES-ROBINSONS MEYCAUAYAN BULACAN</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS MONTALBAN TOWN CENTER' data-city='MONTALBAN'>ROBINSONS APPLIANCES-ROBINSONS MONTALBAN TOWN CENTER</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS NOVALICHES' data-city='QUEZON CITY'>ROBINSONS APPLIANCES-ROBINSONS NOVALICHES</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS PLACE CEBU MALL' data-city='CEBU'>ROBINSONS APPLIANCES-ROBINSONS PLACE CEBU MALL</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS PLACE ROXAS MALL' data-city='ROXAS'>ROBINSONS APPLIANCES-ROBINSONS PLACE ROXAS MALL</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS PUERTO PRINCESA MALL' data-city='PUERTO PRINCESA'>ROBINSONS APPLIANCES-ROBINSONS PUERTO PRINCESA MALL</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS SAN JOSE ANTIQUE' data-city='SAN JOSE'>ROBINSONS APPLIANCES-ROBINSONS SAN JOSE ANTIQUE</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS SILANG CAVITE' data-city='SILANG'>ROBINSONS APPLIANCES-ROBINSONS SILANG CAVITE</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS STARMILLS PAMPANGA' data-city='ANGELES'>ROBINSONS APPLIANCES-ROBINSONS STARMILLS PAMPANGA</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS TACLOBAN' data-city='TACLOBAN'>ROBINSONS APPLIANCES-ROBINSONS TACLOBAN</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS TOWN MALL MALABON' data-city='MALABON'>ROBINSONS APPLIANCES-ROBINSONS TOWN MALL MALABON</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS TUGUEGARAO' data-city='TUGUEGARAO'>ROBINSONS APPLIANCES-ROBINSONS TUGUEGARAO</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS VALENZUELA ONE MALL' data-city='QUEZON CITY'>ROBINSONS APPLIANCES-ROBINSONS VALENZUELA ONE MALL</option>
                                        <option value='ROBINSONS APPLIANCES-TAGAYTAY' data-city='TAGAYTAY'>ROBINSONS APPLIANCES-TAGAYTAY</option>
                                        <option value='ROBINSONS APPLIANCES-TOWNVILLE IMUS' data-city='IMUS'>ROBINSONS APPLIANCES-TOWNVILLE IMUS</option>
                                        <option value='ROBINSONS APPLIANCES-XENTRO MALL ROXAS GF ISABELA' data-city='ROXAS'>ROBINSONS APPLIANCES-XENTRO MALL ROXAS GF ISABELA</option>
                                        <option value='ROYAL STAR-CALAMBA LAGUNA' data-city='CALAMBA'>ROYAL STAR-CALAMBA LAGUNA</option>
                                        <option value='ROYAL STAR-MARIKINA STO.NINO' data-city='CAINTA'>ROYAL STAR-MARIKINA STO.NINO</option>
                                        <option value='ROYAL STAR-PACITA' data-city='SAN PEDRO'>ROYAL STAR-PACITA</option>
                                        <option value='ROYAL STAR-SAN ANTONIO SAN PEDRO LAGUNA' data-city='SAN PEDRO'>ROYAL STAR-SAN ANTONIO SAN PEDRO LAGUNA</option>
                                        <option value='S & R-ALABANG ZAPOTE RD. MUNTINLUPA' data-city='MUNTINLUPA'>S & R-ALABANG ZAPOTE RD. MUNTINLUPA</option>
                                        <option value='S & R-ASEANA BACLARAN PARAÑAQUE' data-city='PARAÑAQUE'>S & R-ASEANA BACLARAN PARAÑAQUE</option>
                                        <option value='S & R-C5 BAGUMBAYAN_QUEZON CITY_1119' data-city='QUEZON CITY'>S & R-C5 BAGUMBAYAN_QUEZON CITY_1119</option>
                                        <option value='S & R-CONGRESSIONAL AVE. QUEZON CITY' data-city='QUEZON CITY'>S & R-CONGRESSIONAL AVE. QUEZON CITY</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS APPLIANCE_NORTH CALOOCAN_1220' data-city='CALOOCAN'>SAVERS ELECTRONICS_SAVERS APPLIANCE_NORTH CALOOCAN_1220</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS APPLIANCE_SOUTH CALOOCAN_1123' data-city='CALOOCAN'>SAVERS ELECTRONICS_SAVERS APPLIANCE_SOUTH CALOOCAN_1123</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS MART_DON BONIFACIO BLDG_UGF_ANGELES_0815' data-city='ANGELES'>SAVERS ELECTRONICS_SAVERS MART_DON BONIFACIO BLDG_UGF_ANGELES_0815</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_ANTIPOLO' data-city='ANTIPOLO'>SAVERS ELECTRONICS_SAVERS_ANTIPOLO</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_CABANATUAN_NUEVA ECIJA' data-city='CABANATUAN'>SAVERS ELECTRONICS_SAVERS_CABANATUAN_NUEVA ECIJA</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_LUNA' data-city='TUGUEGARAO'>SAVERS ELECTRONICS_SAVERS_LUNA</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_MACTAN_LAPULAPU' data-city='LAPU-LAPU'>SAVERS ELECTRONICS_SAVERS_MACTAN_LAPULAPU</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_MOONWALK BLDG__LAS PINAS_1116' data-city='LAS PIÑAS'>SAVERS ELECTRONICS_SAVERS_MOONWALK BLDG__LAS PINAS_1116</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_PASO DE BLAS VALENZUELA' data-city='VALENZUELA'>SAVERS ELECTRONICS_SAVERS_PASO DE BLAS VALENZUELA</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_PENGUE' data-city='TUGUEGARAO'>SAVERS ELECTRONICS_SAVERS_PENGUE</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_PUERTO PRINCESA_PALAWAN' data-city='PUERTO PRINCESA'>SAVERS ELECTRONICS_SAVERS_PUERTO PRINCESA_PALAWAN</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_WILCON CITY CENTER__QUEZON_0616' data-city='QUEZON CITY'>SAVERS ELECTRONICS_SAVERS_WILCON CITY CENTER__QUEZON_0616</option>
                                        <option value='SAVERS- LA UNION SAN FERNANDO' data-city='SAN FERNANDO'>SAVERS- LA UNION SAN FERNANDO</option>
                                        <option value='SAVERS-APARRI' data-city='TUGUEGARAO'>SAVERS-APARRI</option>
                                        <option value='SAVERS-BAGUIO' data-city='BAGUIO'>SAVERS-BAGUIO</option>
                                        <option value='SAVERS-BALIBAGO ANGELES PAMPANGA' data-city='ANGELES'>SAVERS-BALIBAGO ANGELES PAMPANGA</option>
                                        <option value='SAVERS-HENSON ST. ANGELES PAMPANGA' data-city='ANGELES'>SAVERS-HENSON ST. ANGELES PAMPANGA</option>
                                        <option value='SAVERS-MABALACAT_SQUARE_PAMPANGA_1022' data-city='MABALACAT'>SAVERS-MABALACAT_SQUARE_PAMPANGA_1022</option>
                                        <option value='SAVERS-MARQUEE MALL ANGELES PAMPANGA' data-city='ANGELES'>SAVERS-MARQUEE MALL ANGELES PAMPANGA</option>
                                        <option value='SAVERS-PLARIDEL ST. ANGELES PAMPANGA' data-city='ANGELES'>SAVERS-PLARIDEL ST. ANGELES PAMPANGA</option>
                                        <option value='SAVERS-ROOSEVELT QUEZON CITY' data-city='QUEZON CITY'>SAVERS-ROOSEVELT QUEZON CITY</option>
                                        <option value='SAVERS-SAN FERNANDO PAMPANGA' data-city='SAN FERNANDO'>SAVERS-SAN FERNANDO PAMPANGA</option>
                                        <option value='SAVERS-SANCHEZ MIRA' data-city='TUGUEGARAO'>SAVERS-SANCHEZ MIRA</option>
                                        <option value='SAVERS-UGAC HIGHWAY TUGUEGARAO CITY' data-city='TUGUEGARAO'>SAVERS-UGAC HIGHWAY TUGUEGARAO CITY</option>
                                        <option value='SOLIDMARK_SOLIDMARK_GARCIA BLDG__ILIGAN_0717' data-city='ILIGAN'>SOLIDMARK_SOLIDMARK_GARCIA BLDG__ILIGAN_0717</option>
                                        <option value='SOLIDMARK_SOLIDMARK_J C AQUINO AQUINO__BUTUAN_0515' data-city='BUTUAN'>SOLIDMARK_SOLIDMARK_J C AQUINO AQUINO__BUTUAN_0515</option>
                                        <option value='SOLIDMARK_SOLIDMARK_LIMKETKAI MALL_GF_CAGAYAN DE ORO_0515' data-city='CAGAYAN DE ORO'>SOLIDMARK_SOLIDMARK_LIMKETKAI MALL_GF_CAGAYAN DE ORO_0515</option>
                                        <option value='SOLIDMARK_SOLIDMARK_MONTILLA BLVD__BUTUAN_0519' data-city='BUTUAN'>SOLIDMARK_SOLIDMARK_MONTILLA BLVD__BUTUAN_0519</option>
                                        <option value='SOLIDMARK_SOLIDMARK_SAN NICOLAS ST__SURIGAO_0515' data-city='SURIGAO'>SOLIDMARK_SOLIDMARK_SAN NICOLAS ST__SURIGAO_0515</option>
                                        <option value='SOLIDMARK_SOLIDMARK_SOLIDMARK BLDG_GF_CAGAYAN DE ORO_0515' data-city='CAGAYAN DE ORO'>SOLIDMARK_SOLIDMARK_SOLIDMARK BLDG_GF_CAGAYAN DE ORO_0515</option>
                                        <option value='SOLIDMARK_SOLIDMARK_ZULUETA BLDG_1F_PAGADIAN_0515' data-city='PAGADIAN'>SOLIDMARK_SOLIDMARK_ZULUETA BLDG_1F_PAGADIAN_0515</option>
                                        <option value='IMPERIAL - SOLU TRADING_CALOOCAN_0423' data-city='CALOOCAN'>IMPERIAL - SOLU TRADING_CALOOCAN_0423</option>
                                        <option value='SOLU TRADING_PALA PALA_DASMARINAS CITY_1023' data-city='DASMARIÑAS'>SOLU TRADING_PALA PALA_DASMARINAS CITY_1023</option>
                                        <option value='SM APPLIANCE-LAPERAL' data-city='MANILA'>SM APPLIANCE-LAPERAL</option>
                                        <option value='SM APPLIANCE-POWERPLANT MALL ROCKWELL MAKATI' data-city='MAKATI'>SM APPLIANCE-POWERPLANT MALL ROCKWELL MAKATI</option>
                                        <option value='SM APPLIANCE-SAN LAZARO' data-city='MANILA'>SM APPLIANCE-SAN LAZARO</option>
                                        <option value='SM APPLIANCE-SM BACOOR' data-city='BACOOR'>SM APPLIANCE-SM BACOOR</option>
                                        <option value='SM APPLIANCE-SM BAGUIO' data-city='BAGUIO'>SM APPLIANCE-SM BAGUIO</option>
                                        <option value='SM APPLIANCE-SM BATANGAS' data-city='BATANGAS'>SM APPLIANCE-SM BATANGAS</option>
                                        <option value='SM APPLIANCE-SM DASMARIÑAS' data-city='DASMARIÑAS'>SM APPLIANCE-SM DASMARIÑAS</option>
                                        <option value='SM APPLIANCE-SM DAVAO' data-city='DAVAO'>SM APPLIANCE-SM DAVAO</option>
                                        <option value='SM APPLIANCE-SM FAIRVIEW QUEZON CITY' data-city='QUEZON CITY'>SM APPLIANCE-SM FAIRVIEW QUEZON CITY</option>
                                        <option value='SM APPLIANCE-SM HYPERMARKET_LAPU-LAPU CITY_0219' data-city='LAPU-LAPU'>SM APPLIANCE-SM HYPERMARKET_LAPU-LAPU CITY_0219</option>
                                        <option value='SM APPLIANCE-SM IMUS' data-city='IMUS'>SM APPLIANCE-SM IMUS</option>
                                        <option value='SM APPLIANCE-SM LIPA BATANGAS' data-city='LIPA'>SM APPLIANCE-SM LIPA BATANGAS</option>
                                        <option value='SM APPLIANCE-SM MAKATI' data-city='MAKATI'>SM APPLIANCE-SM MAKATI</option>
                                        <option value='SM APPLIANCE-SM MALL OF ASIA PASAY CITY' data-city='PASAY'>SM APPLIANCE-SM MALL OF ASIA PASAY CITY</option>
                                        <option value='SM APPLIANCE-SM MANILA' data-city='MANILA'>SM APPLIANCE-SM MANILA</option>
                                        <option value='SM APPLIANCE-SM NORTH EDSA BASEMENT' data-city='QUEZON CITY'>SM APPLIANCE-SM NORTH EDSA BASEMENT</option>
                                        <option value='SM APPLIANCE-SM NORTH EDSA MAIN' data-city='QUEZON CITY'>SM APPLIANCE-SM NORTH EDSA MAIN</option>
                                        <option value='SM APPLIANCE-SM NORTH EDSA THE BLOCK' data-city='QUEZON CITY'>SM APPLIANCE-SM NORTH EDSA THE BLOCK</option>
                                        <option value='SM APPLIANCE-SM SAN MATEO RIZAL' data-city='SAN MATEO'>SM APPLIANCE-SM SAN MATEO RIZAL</option>
                                        <option value='SM APPLIANCE-SM SAN PABLO LAGUNA' data-city='SAN PABLO'>SM APPLIANCE-SM SAN PABLO LAGUNA</option>
                                        <option value='SM APPLIANCE-SM SOUTHMALL LAS PIÑAS' data-city='LAS PIÑAS'>SM APPLIANCE-SM SOUTHMALL LAS PIÑAS</option>
                                        <option value='SM APPLIANCE-SM TACLOBAN' data-city='TACLOBAN'>SM APPLIANCE-SM TACLOBAN</option>
                                        <option value='SM APPLIANCE-VIRRAMALL GREENHILLS' data-city='SAN JUAN'>SM APPLIANCE-VIRRAMALL GREENHILLS</option>
                                        <option value='STAR APPLIANCE- CENTERSM BACOLOD MALL GF BACOLOD' data-city='BACOLOD'>STAR APPLIANCE- CENTERSM BACOLOD MALL GF BACOLOD</option>
                                        <option value='STAR APPLIANCE- CENTERSM CEBU MALL UGF CEBU' data-city='CEBU'>STAR APPLIANCE- CENTERSM CEBU MALL UGF CEBU</option>
                                        <option value='STAR APPLIANCE_MOA_SQUARE_1222' data-city='PASAY'>STAR APPLIANCE_MOA_SQUARE_1222</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_BUTUAN CITY_AGUSAN DEL NORTE_0819' data-city='BUTUAN'>STAR APPLIANCE_SM APPLIANCE_BUTUAN CITY_AGUSAN DEL NORTE_0819</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_FAIRVIEW ANNEX_QUEZON CITY_0819' data-city='QUEZON CITY'>STAR APPLIANCE_SM APPLIANCE_FAIRVIEW ANNEX_QUEZON CITY_0819</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_GRAND CENTRAL_CALOOCAN CITY_0820' data-city='CALOOCAN'>STAR APPLIANCE_SM APPLIANCE_GRAND CENTRAL_CALOOCAN CITY_0820</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_MINDPRO_ZAMBOANGA CITY_0819' data-city='ZAMBOANGA'>STAR APPLIANCE_SM APPLIANCE_MINDPRO_ZAMBOANGA CITY_0819</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_PODIUM' data-city='MANDALUYONG'>STAR APPLIANCE_SM APPLIANCE_PODIUM</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_PUERTO PRINCESA' data-city='PUERTO PRINCESA'>STAR APPLIANCE_SM APPLIANCE_PUERTO PRINCESA</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_ROXAS_CAPIZ_0222' data-city='ROXAS'>STAR APPLIANCE_SM APPLIANCE_ROXAS_CAPIZ_0222</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM AURA PREMIER_UGF_TAGUIG_0515' data-city='TAGUIG'>STAR APPLIANCE_SM APPLIANCE_SM AURA PREMIER_UGF_TAGUIG_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CENTER MUNTINLUPA_GF_MUNTINLUPA_0615' data-city='MUNTINLUPA'>STAR APPLIANCE_SM APPLIANCE_SM CENTER MUNTINLUPA_GF_MUNTINLUPA_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CENTER VALENZUELA__VALENZUELA_0615' data-city='VALENZUELA'>STAR APPLIANCE_SM APPLIANCE_SM CENTER VALENZUELA__VALENZUELA_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY BALIWAG_GF_BALIUAG_0515' data-city='BALIUAG'>STAR APPLIANCE_SM APPLIANCE_SM CITY BALIWAG_GF_BALIUAG_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY BF PARAÑAQUE_2F_PARANAQUE_0615' data-city='PARAÑAQUE'>STAR APPLIANCE_SM APPLIANCE_SM CITY BF PARAÑAQUE_2F_PARANAQUE_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY BICUTAN_2F_PARANAQUE_0615' data-city='PARAÑAQUE'>STAR APPLIANCE_SM APPLIANCE_SM CITY BICUTAN_2F_PARANAQUE_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CABANATUAN_1F_CABANATUAN_0716' data-city='CABANATUAN'>STAR APPLIANCE_SM APPLIANCE_SM CITY CABANATUAN_1F_CABANATUAN_0716</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CAGAYAN DE ORO_GF_CAGAYAN DE ORO_0615' data-city='CAGAYAN DE ORO'>STAR APPLIANCE_SM APPLIANCE_SM CITY CAGAYAN DE ORO_GF_CAGAYAN DE ORO_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CALAMBA_2F_CALAMBA_0615' data-city='CALAMBA'>STAR APPLIANCE_SM APPLIANCE_SM CITY CALAMBA_2F_CALAMBA_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CAUAYAN_GF_CAUAYAN_0515' data-city='CAUAYAN'>STAR APPLIANCE_SM APPLIANCE_SM CITY CAUAYAN_GF_CAUAYAN_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CONSOLACION_GF_CONSOLACION_0515' data-city='CEBU'>STAR APPLIANCE_SM APPLIANCE_SM CITY CONSOLACION_GF_CONSOLACION_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY DELGADO_GF_ILOILO_0515' data-city='ILOILO'>STAR APPLIANCE_SM APPLIANCE_SM CITY DELGADO_GF_ILOILO_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY EAST ORTIGAS__PASIG_1216' data-city='PASIG'>STAR APPLIANCE_SM APPLIANCE_SM CITY EAST ORTIGAS__PASIG_1216</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY GENERAL SANTOS_2F_GENERAL SANTOS_0515' data-city='GENERAL SANTOS'>STAR APPLIANCE_SM APPLIANCE_SM CITY GENERAL SANTOS_2F_GENERAL SANTOS_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY ILOILO_GF_ILOILO_0515' data-city='ILOILO'>STAR APPLIANCE_SM APPLIANCE_SM CITY ILOILO_GF_ILOILO_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY MARIKINA_2F_MARIKINA_0615' data-city='MARIKINA'>STAR APPLIANCE_SM APPLIANCE_SM CITY MARIKINA_2F_MARIKINA_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY MASINAG_LGF_ANTIPOLO_0615' data-city='ANTIPOLO'>STAR APPLIANCE_SM APPLIANCE_SM CITY MASINAG_LGF_ANTIPOLO_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY NAGA_2F_NAGA_0615' data-city='NAGA'>STAR APPLIANCE_SM APPLIANCE_SM CITY NAGA_2F_NAGA_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY NOVALICHES_UGF_QUEZON_0615' data-city='QUEZON CITY'>STAR APPLIANCE_SM APPLIANCE_SM CITY NOVALICHES_UGF_QUEZON_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY SAN FERNANDO__SAN FERNANDO_0615' data-city='SAN FERNANDO'>STAR APPLIANCE_SM APPLIANCE_SM CITY SAN FERNANDO__SAN FERNANDO_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY SAN JOSE DEL MONTE__SAN JOSE DEL MONTE_0616' data-city='SAN JOSE DEL MONTE'>STAR APPLIANCE_SM APPLIANCE_SM CITY SAN JOSE DEL MONTE__SAN JOSE DEL MONTE_0616</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY STA MESA__QUEZON_0615' data-city='QUEZON CITY'>STAR APPLIANCE_SM APPLIANCE_SM CITY STA MESA__QUEZON_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY STA ROSA__SANTA ROSA_0615' data-city='SANTA ROSA'>STAR APPLIANCE_SM APPLIANCE_SM CITY STA ROSA__SANTA ROSA_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY SUCAT_3F_PARANAQUE_0515' data-city='PARAÑAQUE'>STAR APPLIANCE_SM APPLIANCE_SM CITY SUCAT_3F_PARANAQUE_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY TARLAC_2F_TARLAC_0515' data-city='TARLAC'>STAR APPLIANCE_SM APPLIANCE_SM CITY TARLAC_2F_TARLAC_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY TAYTAY_UGF_TAYTAY_0615' data-city='TAYTAY'>STAR APPLIANCE_SM APPLIANCE_SM CITY TAYTAY_UGF_TAYTAY_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CUBAO_2F_QUEZON_0515' data-city='QUEZON CITY'>STAR APPLIANCE_SM APPLIANCE_SM CUBAO_2F_QUEZON_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM LANANG PREMIER_3F_DAVAO_0615' data-city='DAVAO'>STAR APPLIANCE_SM APPLIANCE_SM LANANG PREMIER_3F_DAVAO_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM MEGAMALL_LGF_MANDALUYONG_0615' data-city='MANDALUYONG'>STAR APPLIANCE_SM APPLIANCE_SM MEGAMALL_LGF_MANDALUYONG_0615</option>
                                        <option value='STAR APPLIANCE_SM CARITAN TUGUEGARAO_0822' data-city='TUGUEGARAO'>STAR APPLIANCE_SM CARITAN TUGUEGARAO_0822</option>
                                        <option value='STAR APPLIANCE_SM CENTER SAN PEDRO_0423' data-city='SAN PEDRO'>STAR APPLIANCE_SM CENTER SAN PEDRO_0423</option>
                                        <option value='STAR APPLIANCE_SM CITY_DEPARO_CALOOCAN_0524' data-city='CALOOCAN'>STAR APPLIANCE_SM CITY_DEPARO_CALOOCAN_0524</option>
                                        <option value='STAR APPLIANCE_SM DOWNTOWN CENTER TUGUEGARAO' data-city='TUGUEGARAO'>STAR APPLIANCE_SM DOWNTOWN CENTER TUGUEGARAO</option>
                                        <option value='STAR APPLIANCE_SM TANZA_0722' data-city='TANZA'>STAR APPLIANCE_SM TANZA_0722</option>
                                        <option value='STAR APPLIANCE-SM PAMPANGA' data-city='SAN FERNANDO'>STAR APPLIANCE-SM PAMPANGA</option>
                                        <option value='STAR APPLIANCE-SM SANGANDAAN CALOOCAN' data-city='CALOOCAN'>STAR APPLIANCE-SM SANGANDAAN CALOOCAN</option>
                                        <option value='STAR APPLIANCE-SM TELEBASTAGAN' data-city='SAN FERNANDO'>STAR APPLIANCE-SM TELEBASTAGAN</option>
                                        <option value='TARLAC MAC_ MEGA SAVER_SAN JOSE DEL MONTE_BULACAN_0919' data-city='SAN JOSE DEL MONTE'>TARLAC MAC_ MEGA SAVER_SAN JOSE DEL MONTE_BULACAN_0919</option>
                                        <option value='TARLAC MAC_ MEGA SAVER_TUGUEGARAO_0719' data-city='TUGUEGARAO'>TARLAC MAC_ MEGA SAVER_TUGUEGARAO_0719</option>
                                        <option value='TARLAC MAC_ANGELES_STO ROSARIO_0522' data-city='ANGELES'>TARLAC MAC_ANGELES_STO ROSARIO_0522</option>
                                        <option value='TARLAC MAC_CAUAYAN_ISABELA_0823' data-city='CAUAYAN'>TARLAC MAC_CAUAYAN_ISABELA_0823</option>
                                        <option value='TARLAC MAC_HENSON_0522' data-city='ANGELES'>TARLAC MAC_HENSON_0522</option>
                                        <option value='TARLAC MAC_LUISITA SAN MIGUEL TARLAC' data-city='TARLAC'>TARLAC MAC_LUISITA SAN MIGUEL TARLAC</option>
                                        <option value='TARLAC MAC_MEGA SAVER_ANGELES_0718' data-city='ANGELES'>TARLAC MAC_MEGA SAVER_ANGELES_0718</option>
                                        <option value='TARLAC MAC_MEGA SAVER_DAU_0718' data-city='MABALACAT'>TARLAC MAC_MEGA SAVER_DAU_0718</option>
                                        <option value='TARLAC MAC_MEGA SAVER_SAN FERNANDO_PAMPANGA_1118' data-city='SAN FERNANDO'>TARLAC MAC_MEGA SAVER_SAN FERNANDO_PAMPANGA_1118</option>
                                        <option value='TARLAC MAC_MEGA SAVER_SAVERS BLDG__CABANATUAN_0616' data-city='CABANATUAN'>TARLAC MAC_MEGA SAVER_SAVERS BLDG__CABANATUAN_0616</option>
                                        <option value='TARLAC MAC_MEGA SAVERS_PASIG_1123' data-city='PASIG'>TARLAC MAC_MEGA SAVERS_PASIG_1123</option>
                                        <option value='TARLAC MAC_MEGA SAVERS-SAN FERNANDO LA UNION' data-city='SAN FERNANDO'>TARLAC MAC_MEGA SAVERS-SAN FERNANDO LA UNION</option>
                                        <option value='TARLAC MAC_SAVERS_ABANAO ST__BAGUIO_0516' data-city='BAGUIO'>TARLAC MAC_SAVERS_ABANAO ST__BAGUIO_0516</option>
                                        <option value='TARLAC MAC_SAVERS_ARELLANO ST__CAMILING_0616' data-city='TARLAC'>TARLAC MAC_SAVERS_ARELLANO ST__CAMILING_0616</option>
                                        <option value='TARLAC MAC_SAVERS_BRGY ABAR 1ST__SAN JOSE_0615' data-city='SAN JOSE'>TARLAC MAC_SAVERS_BRGY ABAR 1ST__SAN JOSE_0615</option>
                                        <option value='TARLAC MAC_SAVERS_CONCEPCION TARLAC' data-city='TARLAC'>TARLAC MAC_SAVERS_CONCEPCION TARLAC</option>
                                        <option value='TARLAC MAC_SAVERS_FTANEDO ST_1F_TARLAC_0516' data-city='TARLAC'>TARLAC MAC_SAVERS_FTANEDO ST_1F_TARLAC_0516</option>
                                        <option value='TARLAC MAC_SAVERS_JUMBO JENRA SINDALAN__SAN FERNANDO_0717' data-city='SAN FERNANDO'>TARLAC MAC_SAVERS_JUMBO JENRA SINDALAN__SAN FERNANDO_0717</option>
                                        <option value='TARLAC MAC_SAVERS_MARCOS DISTRICT BRGY__TALAVERA_1116' data-city='CABANATUAN'>TARLAC MAC_SAVERS_MARCOS DISTRICT BRGY__TALAVERA_1116</option>
                                        <option value='TARLAC MAC_SAVERS_MCARTHUR HWY__TARLAC_0616_MAIN' data-city='TARLAC'>TARLAC MAC_SAVERS_MCARTHUR HWY__TARLAC_0616_MAIN</option>
                                        <option value='TARLAC MAC_SAVERS_MH DEL PILAR ST_1F_PANIQUI_1016' data-city='TARLAC'>TARLAC MAC_SAVERS_MH DEL PILAR ST_1F_PANIQUI_1016</option>
                                        <option value='TARLAC MAC_SAVERS_PMARKET__SANTA MARIA_0516' data-city='SANTA MARIA'>TARLAC MAC_SAVERS_PMARKET__SANTA MARIA_0516</option>
                                        <option value='TARLAC MAC_SAVERS_WAREHOUSE C3 ROSARIO__PASIG_0717' data-city='PASIG'>TARLAC MAC_SAVERS_WAREHOUSE C3 ROSARIO__PASIG_0717</option>
                                        <option value='TARLAC MAC_STA MARIA_BULACAN_0124' data-city='SANTA MARIA'>TARLAC MAC_STA MARIA_BULACAN_0124</option>
                                        <option value='TARLAC MAC_STO. ROSARIO_ANGELES_PAMPANGA_0321' data-city='ANGELES'>TARLAC MAC_STO. ROSARIO_ANGELES_PAMPANGA_0321</option>
                                        <option value='TARLAC MAC_VALENZUELA_0723' data-city='VALENZUELA'>TARLAC MAC_VALENZUELA_0723</option>
                                        <option value='TIONGSAN-HARRISON BAGUIO' data-city='BAGUIO'>TIONGSAN-HARRISON BAGUIO</option>
                                        <option value='TIONGSAN-LA TRINIDAD' data-city='BAGUIO'>TIONGSAN-LA TRINIDAD</option>
                                        <option value='IMPERIAL - BAJADA' data-city='DAVAO'>IMPERIAL - BAJADA</option>
                                        <option value='IMPERIAL - LEGASPI' data-city='DAVAO'>IMPERIAL - LEGASPI</option>
                                        <option value='IMPERIAL - MEGA SHOWROOM' data-city='ILOILO'>IMPERIAL - MEGA SHOWROOM</option>
                                        <option value='IMPERIAL-AGDAO DAVAO DEL SUR' data-city='DAVAO'>IMPERIAL-AGDAO DAVAO DEL SUR</option>
                                        <option value='IMPERIAL-BALIUAG BULACAN' data-city='BALIUAG'>IMPERIAL-BALIUAG BULACAN</option>
                                        <option value='IMPERIAL-BAROTAC VIEJO' data-city='ILOILO'>IMPERIAL-BAROTAC VIEJO</option>
                                        <option value='IMPERIAL-BAROTAC_NUEVO_0120' data-city='ILOILO'>IMPERIAL-BAROTAC_NUEVO_0120</option>
                                        <option value='IMPERIAL-BATANGAS' data-city='BATANGAS'>IMPERIAL-BATANGAS</option>
                                        <option value='IMPERIAL-BUENAVISTA_GUIMARAS_1122' data-city='ILOILO'>IMPERIAL-BUENAVISTA_GUIMARAS_1122</option>
                                        <option value='IMPERIAL-CABALUNA ST. PANABO CITY' data-city='PANABO'>IMPERIAL-CABALUNA ST. PANABO CITY</option>
                                        <option value='IMPERIAL-CABANATUAN CITY NUEVA ECIJA' data-city='CABANATUAN'>IMPERIAL-CABANATUAN CITY NUEVA ECIJA</option>
                                        <option value='IMPERIAL-CADIZ NEGROS OCCIDENTAL' data-city='BACOLOD'>IMPERIAL-CADIZ NEGROS OCCIDENTAL</option>
                                        <option value='IMPERIAL-CALAMBA LAGUNA' data-city='CALAMBA'>IMPERIAL-CALAMBA LAGUNA</option>
                                        <option value='IMPERIAL-CALINAN' data-city='DAVAO'>IMPERIAL-CALINAN</option>
                                        <option value='IMPERIAL-CALINOG ILOILO' data-city='ILOILO'>IMPERIAL-CALINOG ILOILO</option>
                                        <option value='IMPERIAL-CALOOCAN_0323' data-city='CALOOCAN'>IMPERIAL-CALOOCAN_0323</option>
                                        <option value='IMPERIAL-CALUMPANG_GENERAL SANTOS_1119' data-city='GENERAL SANTOS'>IMPERIAL-CALUMPANG_GENERAL SANTOS_1119</option>
                                        <option value='IMPERIAL-CARMEN CDO' data-city='CAGAYAN DE ORO'>IMPERIAL-CARMEN CDO</option>
                                        <option value='IMPERIAL-CLARK_PAMPANGA_1122' data-city='ANGELES'>IMPERIAL-CLARK_PAMPANGA_1122</option>
                                        <option value='IMPERIAL-DIGOS' data-city='DIGOS'>IMPERIAL-DIGOS</option>
                                        <option value='IMPERIAL-ESTANCIA' data-city='ILOILO'>IMPERIAL-ESTANCIA</option>
                                        <option value='IMPERIAL-GALLERIA DELGADO ILOILO CITY' data-city='ILOILO'>IMPERIAL-GALLERIA DELGADO ILOILO CITY</option>
                                        <option value='IMPERIAL-GINGOOG' data-city='CAGAYAN DE ORO'>IMPERIAL-GINGOOG</option>
                                        <option value='IMPERIAL-GMA CAVITE' data-city='DASMARIÑAS'>IMPERIAL-GMA CAVITE</option>
                                        <option value='IMPERIAL-ILIGAN' data-city='ILIGAN'>IMPERIAL-ILIGAN</option>
                                        <option value='IMPERIAL-IMUS CAVITE' data-city='IMUS'>IMPERIAL-IMUS CAVITE</option>
                                        <option value='IMPERIAL-JC AQUINO AVE._BUTUAN_AGUSAN DEL NORTE_0220' data-city='BUTUAN'>IMPERIAL-JC AQUINO AVE._BUTUAN_AGUSAN DEL NORTE_0220</option>
                                        <option value='IMPERIAL-KCC MALL GENERAL SANTOS' data-city='GENERAL SANTOS'>IMPERIAL-KCC MALL GENERAL SANTOS</option>
                                        <option value='IMPERIAL-KCC MALL ZAMBOANGA' data-city='ZAMBOANGA'>IMPERIAL-KCC MALL ZAMBOANGA</option>
                                        <option value='IMPERIAL-LA CARLOTA' data-city='BACOLOD'>IMPERIAL-LA CARLOTA</option>
                                        <option value='IMPERIAL-LAGAO_GENSAN_0622' data-city='GENERAL SANTOS'>IMPERIAL-LAGAO_GENSAN_0622</option>
                                        <option value='IMPERIAL-LAPU-LAPU CEBU' data-city='LAPU-LAPU'>IMPERIAL-LAPU-LAPU CEBU</option>
                                        <option value='IMPERIAL-LAS PINAS' data-city='LAS PIÑAS'>IMPERIAL-LAS PINAS</option>
                                        <option value='IMPERIAL-LIPA BATANGAS' data-city='LIPA'>IMPERIAL-LIPA BATANGAS</option>
                                        <option value='IMPERIAL-M.CALO ST. BUTUAN' data-city='BUTUAN'>IMPERIAL-M.CALO ST. BUTUAN</option>
                                        <option value='IMPERIAL-MALOLOS BULACAN' data-city='MALOLOS'>IMPERIAL-MALOLOS BULACAN</option>
                                        <option value='IMPERIAL-MAMBUSAO' data-city='ROXAS'>IMPERIAL-MAMBUSAO</option>
                                        <option value='IMPERIAL-MANDALAGAN' data-city='BACOLOD'>IMPERIAL-MANDALAGAN</option>
                                        <option value='IMPERIAL-MANDAUE CEBU' data-city='MANDAUE'>IMPERIAL-MANDAUE CEBU</option>
                                        <option value='IMPERIAL-MATI_1122' data-city='MATI'>IMPERIAL-MATI_1122</option>
                                        <option value='IMPERIAL-MIAG-AO' data-city='ILOILO'>IMPERIAL-MIAG-AO</option>
                                        <option value='IMPERIAL-MUNTINLUPA CITY_0120' data-city='MUNTINLUPA'>IMPERIAL-MUNTINLUPA CITY_0120</option>
                                        <option value='IMPERIAL-NAIC_CAVITE_0820' data-city='NAIC'>IMPERIAL-NAIC_CAVITE_0820</option>
                                        <option value='IMPERIAL-NARRA PALAWAN' data-city='PUERTO PRINCESA'>IMPERIAL-NARRA PALAWAN</option>
                                        <option value='IMPERIAL-PAGADIAN CITY' data-city='PAGADIAN'>IMPERIAL-PAGADIAN CITY</option>
                                        <option value='IMPERIAL-PARANAQUE CITY_0120' data-city='PARAÑAQUE'>IMPERIAL-PARANAQUE CITY_0120</option>
                                        <option value='IMPERIAL-PASSI ILOILO' data-city='ILOILO'>IMPERIAL-PASSI ILOILO</option>
                                        <option value='IMPERIAL-PLAZA (DELGADO)' data-city='ILOILO'>IMPERIAL-PLAZA (DELGADO)</option>
                                        <option value='IMPERIAL-POLOMOLOK SOUTH COTABATO' data-city='GENERAL SANTOS'>IMPERIAL-POLOMOLOK SOUTH COTABATO</option>
                                        <option value='IMPERIAL-POTOTAN ILOILO' data-city='ILOILO'>IMPERIAL-POTOTAN ILOILO</option>
                                        <option value='IMPERIAL-PUERTO PRINCESA PALAWAN' data-city='PUERTO PRINCESA'>IMPERIAL-PUERTO PRINCESA PALAWAN</option>
                                        <option value='IMPERIAL-QUEZON ST. TAGUM' data-city='TAGUM'>IMPERIAL-QUEZON ST. TAGUM</option>
                                        <option value='IMPERIAL-QUEZON_BUKIDNON_0523' data-city='QUEZON'>IMPERIAL-QUEZON_BUKIDNON_0523</option>
                                        <option value='IMPERIAL-REAL ST. DUMAGUETE' data-city='DUMAGUETE'>IMPERIAL-REAL ST. DUMAGUETE</option>
                                        <option value='IMPERIAL-ROXAS AVE. ROXAS' data-city='ROXAS'>IMPERIAL-ROXAS AVE. ROXAS</option>
                                        <option value='IMPERIAL-ROXAS DOS_0622' data-city='ROXAS'>IMPERIAL-ROXAS DOS_0622</option>
                                        <option value='IMPERIAL-SAN CARLOS' data-city='BACOLOD'>IMPERIAL-SAN CARLOS</option>
                                        <option value='IMPERIAL-SAN FERNANDO PAMPANGA' data-city='SAN FERNANDO'>IMPERIAL-SAN FERNANDO PAMPANGA</option>
                                        <option value='IMPERIAL-SAN PABLO LAGUNA' data-city='SAN PABLO'>IMPERIAL-SAN PABLO LAGUNA</option>
                                        <option value='IMPERIAL-SAN PEDRO LAGUNA' data-city='SAN PEDRO'>IMPERIAL-SAN PEDRO LAGUNA</option>
                                        <option value='IMPERIAL-SAN PEDRO PUERTO PRINCESA PALAWAN' data-city='PUERTO PRINCESA'>IMPERIAL-SAN PEDRO PUERTO PRINCESA PALAWAN</option>
                                        <option value='IMPERIAL-SANTIAGO STREET GENSAN' data-city='GENERAL SANTOS'>IMPERIAL-SANTIAGO STREET GENSAN</option>
                                        <option value='IMPERIAL-SARA' data-city='ILOILO'>IMPERIAL-SARA</option>
                                        <option value='IMPERIAL-SOLU TRADING_DASMARINAS_SALAWAG' data-city='DASMARIÑAS'>IMPERIAL-SOLU TRADING_DASMARINAS_SALAWAG</option>
                                        <option value='IMPERIAL-STA. BARBARA_ILOILO_0719' data-city='ILOILO'>IMPERIAL-STA. BARBARA_ILOILO_0719</option>
                                        <option value='IMPERIAL-STO. NIÑO CEBU' data-city='CEBU'>IMPERIAL-STO. NIÑO CEBU</option>
                                        <option value='IMPERIAL-TACLOBAN' data-city='TACLOBAN'>IMPERIAL-TACLOBAN</option>
                                        <option value='IMPERIAL-TAGUM II_DAVAO DEL NORTE_DAVAO_0121' data-city='TAGUM'>IMPERIAL-TAGUM II_DAVAO DEL NORTE_DAVAO_0121</option>
                                        <option value='IMPERIAL-TARLAC CITY TARLAC' data-city='TARLAC'>IMPERIAL-TARLAC CITY TARLAC</option>
                                        <option value='IMPERIAL-TORIL' data-city='DAVAO'>IMPERIAL-TORIL</option>
                                        <option value='IMPERIAL-VELEZ ST. CAGAYAN DE ORO' data-city='CAGAYAN DE ORO'>IMPERIAL-VELEZ ST. CAGAYAN DE ORO</option>
                                        <option value='IMPERIAL-WASHINGTON SURIGAO' data-city='SURIGAO'>IMPERIAL-WASHINGTON SURIGAO</option>
                                        <option value='IMPERIAL-ZAMBOANGA DOS' data-city='ZAMBOANGA'>IMPERIAL-ZAMBOANGA DOS</option>
                                        <option value='VIC IMPERIAL CORP.-ARANETA ST BACOLOD' data-city='BACOLOD'>VIC IMPERIAL CORP.-ARANETA ST BACOLOD</option>
                                        <option value='VIC IMPERIAL CORP.-IZNART ST ILOILO' data-city='ILOILO'>VIC IMPERIAL CORP.-IZNART ST ILOILO</option>
                                        <option value='VPR MARKETING-SAN JOSE' data-city='SAN JOSE'>VPR MARKETING-SAN JOSE</option>
                                        <option value='WESTERN MARKETING-FAIRVIEW TERRACES MALL 2F QUEZON' data-city='QUEZON CITY'>WESTERN MARKETING-FAIRVIEW TERRACES MALL 2F QUEZON</option>
                                        <option value='WESTERN MARKETING-FARMERS PLAZA MALL 2F QUEZON' data-city='QUEZON CITY'>WESTERN MARKETING-FARMERS PLAZA MALL 2F QUEZON</option>
                                        <option value='WESTERN-ARANETA SQUARE CALOOCAN CITY' data-city='CALOOCAN'>WESTERN-ARANETA SQUARE CALOOCAN CITY</option>
                                        <option value='WESTERN-EVER COMMONWEALTH' data-city='QUEZON CITY'>WESTERN-EVER COMMONWEALTH</option>
                                        <option value='WESTERN-FESTIVAL MALL ALABANG MUNTINLUPA' data-city='MUNTINLUPA'>WESTERN-FESTIVAL MALL ALABANG MUNTINLUPA</option>
                                        <option value='WESTERN-FISHER MALL QUEZON CITY' data-city='QUEZON CITY'>WESTERN-FISHER MALL QUEZON CITY</option>
                                        <option value='WESTERN-IMUS ANABU' data-city='IMUS'>WESTERN-IMUS ANABU</option>
                                        <option value='WESTERN-LAS PINAS' data-city='LAS PIÑAS'>WESTERN-LAS PINAS</option>
                                        <option value='WESTERN-P.TUAZON CUBAO' data-city='QUEZON CITY'>WESTERN-P.TUAZON CUBAO</option>
                                        <option value='WESTERN-PASAY ROAD MAKATI' data-city='MAKATI'>WESTERN-PASAY ROAD MAKATI</option>
                                        <option value='WESTERN-PUREGOLD BATANGAS' data-city='BATANGAS'>WESTERN-PUREGOLD BATANGAS</option>
                                        <option value='WESTERN-RECTO MANILA' data-city='MANILA'>WESTERN-RECTO MANILA</option>
                                        <option value='WESTERN-SAN FERNANDO PAMPANGA' data-city='SAN FERNANDO'>WESTERN-SAN FERNANDO PAMPANGA</option>
                                        <option value='WESTERN-SM MEGAMALL MANDALUYONG' data-city='MANDALUYONG'>WESTERN-SM MEGAMALL MANDALUYONG</option>
                                        <option value='WESTERN-STA. LUCIA MALL CAINTA RIZAL' data-city='CAINTA'>WESTERN-STA. LUCIA MALL CAINTA RIZAL</option>
                                        <option value='WESTERN-TRINOMA QUEZON CITY' data-city='QUEZON CITY'>WESTERN-TRINOMA QUEZON CITY</option>
                                        <option value='WESTERN-UPTOWN PLACE MALL_TAGUIG_0519' data-city='TAGUIG'>WESTERN-UPTOWN PLACE MALL_TAGUIG_0519</option>
                                        <option value='WILKRIS-MIAG-AO' data-city='ILOILO'>WILKRIS-MIAG-AO</option>
                                        <option value='WILLY & SONS-NAGA' data-city='NAGA'>WILLY & SONS-NAGA</option>
                                        <option value='WORLDWIDE-BINONDO MANILA' data-city='MANILA'>WORLDWIDE-BINONDO MANILA</option>                                    </select>
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
            <img src="/images/finish.png" width="100%" />


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

    $('.select2').select2();

    $(".form-check-label").click(function(){

        $("#agree_policy").prop('checked', true);

    });

    $(document).on("click", ".action_button", function(e){

        e.preventDefault();

        $(this).prop("disabled");

        if( Checker() ) {

            let form = new FormData( $("#samsung_form")[0] );
            console.log("Submitting");

            var submission = SubmitData( form );
            $(document).find("#loading").removeClass("d-none");
            $(document).find("#registration_form").addClass("d-none");


            $.when( submission ).done( function( submission ){

                if( submission.error == false ){
                    $(document).find("#loading").addClass("d-none");
                    $(document).find("#registration_successful").removeClass("d-none");

                } else {
                }

            });


        }

    });

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

            OpenAccordion();
            return false;
        }

        return true;

    }

    function OpenAccordion(){

        let accordion = $("#information");

        let accordion_items = accordion.find(".accordion-item");

        $.each( accordion_items, function( k, v ){

               var error = accordion_items.eq( k ).find(".checker-error");

               if( error.length > 0 ){

                accordion_items.eq( k ).find(".accordion-button").removeClass("collapsed");

                var target = accordion_items.eq( k ).find(".accordion-button").data("bs-target");
                accordion_items.eq( k ).find(target).addClass("show");


                console.log( accordion_items.eq( k ).find(".accordion-button").text() );

               }
               else {


               }

        } );



    }


    function SubmitData(form){

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


</script>
