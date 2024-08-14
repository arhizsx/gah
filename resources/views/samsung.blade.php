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


        <style>
            body {
                font-size: .8em;
            }
            input[type=checkbox] {
                transform: scale(1.5);
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
                                    <label for="province">Province</label>
                                    <select class="form-control mb-3 checker location_filters" data-filter='province' data-parent='#collapseTwo' data-checker="required" name="province" id="province">
                                        <option value="" selected>Select Province</option>
                                        @foreach($provinces as $option)
                                        <option value="{{ $option->PROVINCE }}">{{ $option->PROVINCE }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-row">
                                    <label for="city">City</label>
                                    <select class="form-control mb-3 checker location_filters" data-filter='city' data-parent='#collapseTwo' data-checker="required" name="city" id="city">
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
                                    <select class="form-control mb-3 checker flex-fill  ms-1" data-checker="required" name="schedule_hour" id="schedule_hour">
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
                                    <select class="form-control checker" data-checker="required" name="store" id="store">
                                        <option value="" selected>Store item was purchased</option>
                                        <option value='ABENSON_ABENSON_ABREEZA_2F_DAVAO_0515'>ABENSON_ABENSON_ABREEZA_2F_DAVAO_0515</option>
                                        <option value='ABENSON_ABENSON_AGUINALDO HWY__DASMARINAS_0515'>ABENSON_ABENSON_AGUINALDO HWY__DASMARINAS_0515</option>
                                        <option value='ABENSON_ABENSON_AYALA CENTER CEBU_3F_CEBU_0515'>ABENSON_ABENSON_AYALA CENTER CEBU_3F_CEBU_0515</option>
                                        <option value='ABENSON_ABENSON_AYALA MALL__BACOLOD_1218'>ABENSON_ABENSON_AYALA MALL__BACOLOD_1218</option>
                                        <option value='ABENSON_ABENSON_CENTRIO MALL_2F_CAGAYAN DE ORO_0515'>ABENSON_ABENSON_CENTRIO MALL_2F_CAGAYAN DE ORO_0515</option>
                                        <option value='ABENSON_ABENSON_LIMKETKAI MALL_2F_CAGAYAN DE ORO_1216'>ABENSON_ABENSON_LIMKETKAI MALL_2F_CAGAYAN DE ORO_1216</option>
                                        <option value='ABENSON_ABENSON_LOTUS MALL_UGF_IMUS_0515'>ABENSON_ABENSON_LOTUS MALL_UGF_IMUS_0515</option>
                                        <option value='ABENSON_ABENSON_MARQUEE MALL_3F_ANGELES_0515'>ABENSON_ABENSON_MARQUEE MALL_3F_ANGELES_0515</option>
                                        <option value='ABENSON_ABENSON_NE PACIFIC MALL_1F_CABANATUAN_0515'>ABENSON_ABENSON_NE PACIFIC MALL_1F_CABANATUAN_0515</option>
                                        <option value='ABENSON_ABENSON_NEPO MALL ANGELES_GF_ANGELES_0515'>ABENSON_ABENSON_NEPO MALL ANGELES_GF_ANGELES_0515</option>
                                        <option value='ABENSON_ABENSON_NUCITI MALL BATANGAS_2F_BATANGAS_0515'>ABENSON_ABENSON_NUCITI MALL BATANGAS_2F_BATANGAS_0515</option>
                                        <option value='ABENSON_ABENSON_PAVILION MALL_1F_BINAN_0515'>ABENSON_ABENSON_PAVILION MALL_1F_BINAN_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD BACOOR_UGF_BACOOR_0515'>ABENSON_ABENSON_PUREGOLD BACOOR_UGF_BACOOR_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD IMUS__IMUS_0515'>ABENSON_ABENSON_PUREGOLD IMUS__IMUS_0515</option>
                                        <option value='ABENSON_ABENSON_PUREGOLD_SAN PEDRO_LAGUNA_1019'>ABENSON_ABENSON_PUREGOLD_SAN PEDRO_LAGUNA_1019</option>
                                        <option value='ABENSON_ABENSON_ROBINSONS PLACE IMUS_3F_IMUS_0515'>ABENSON_ABENSON_ROBINSONS PLACE IMUS_3F_IMUS_0515</option>
                                        <option value='ABENSON_ABENSON_SERIN MALL_UGF_SILANG_0515'>ABENSON_ABENSON_SERIN MALL_UGF_SILANG_0515</option>
                                        <option value='ABENSON_ABENSON_SHOPWISE SAN PEDRO SUPERMARKET _GF_SAN PEDRO_0515'>ABENSON_ABENSON_SHOPWISE SAN PEDRO SUPERMARKET _GF_SAN PEDRO_0515</option>
                                        <option value='ABENSON_ABENSON_SOLENAD NUVALI_2F_SANTA ROSA_0816'>ABENSON_ABENSON_SOLENAD NUVALI_2F_SANTA ROSA_0816</option>
                                        <option value='ABENSON_ABENSON_VERANZA GENSAN__GENERAL SANTOS_0515'>ABENSON_ABENSON_VERANZA GENSAN__GENERAL SANTOS_0515</option>
                                        <option value='ABENSON_ABENSON_VICTORY CENTRAL MALL _STA ROSA_LAGUNA_1119'>ABENSON_ABENSON_VICTORY CENTRAL MALL _STA ROSA_LAGUNA_1119</option>
                                        <option value='ABENSON_ABENSON_WALTER MART BEL AIR_1F_SANTA ROSA_0515'>ABENSON_ABENSON_WALTER MART BEL AIR_1F_SANTA ROSA_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART CABANATUAN_2F_CABANATUAN_1215'>ABENSON_ABENSON_WALTER MART CABANATUAN_2F_CABANATUAN_1215</option>
                                        <option value='ABENSON_ABENSON_WALTER MART GENERAL TRIAS_UGF_GENERAL TRIAS_0515'>ABENSON_ABENSON_WALTER MART GENERAL TRIAS_UGF_GENERAL TRIAS_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART MAKILING_2F_CALAMBA_0515'>ABENSON_ABENSON_WALTER MART MAKILING_2F_CALAMBA_0515</option>
                                        <option value='ABENSON_ABENSON_WALTER MART STA ROSA_1F_SANTA ROSA_0515'>ABENSON_ABENSON_WALTER MART STA ROSA_1F_SANTA ROSA_0515</option>
                                        <option value='ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTRE_AYALA CENTER CEBU_3F_CEBU_0716'>ABENSON_AUTOMATIC CENTRE_AUTOMATIC CENTRE_AYALA CENTER CEBU_3F_CEBU_0716</option>
                                        <option value='ABENSON_AVANT_AYALA CENTER CEBU_3F_CEBU_0515'>ABENSON_AVANT_AYALA CENTER CEBU_3F_CEBU_0515</option>
                                        <option value='ABENSON_DUMAGUETE CITY_0524'>ABENSON_DUMAGUETE CITY_0524</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY CALAMBA_2F_CALAMBA_0515'>ABENSON_ELECTROWORLD_SM CITY CALAMBA_2F_CALAMBA_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY CEBU_2F_CEBU_0515'>ABENSON_ELECTROWORLD_SM CITY CEBU_2F_CEBU_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY DASMARIÑAS_2F_DASMARINAS_0515'>ABENSON_ELECTROWORLD_SM CITY DASMARIÑAS_2F_DASMARINAS_0515</option>
                                        <option value='ABENSON_ELECTROWORLD_SM CITY SAN JOSE DEL MONTE_LGF_SAN JOSE DEL MONTE_0816'>ABENSON_ELECTROWORLD_SM CITY SAN JOSE DEL MONTE_LGF_SAN JOSE DEL MONTE_0816</option>
                                        <option value='ABENSON_GAISANO GRAND CITY_BACOLOD_1023'>ABENSON_GAISANO GRAND CITY_BACOLOD_1023</option>
                                        <option value='ABENSON_GMALL_CEBU_1122'>ABENSON_GMALL_CEBU_1122</option>
                                        <option value='ABENSON_SOUTHWOODS_BINAN_LAGUNA_0521'>ABENSON_SOUTHWOODS_BINAN_LAGUNA_0521</option>
                                        <option value='ABENSON_WALTERMART_ALTARAZA_BULACAN_0522'>ABENSON_WALTERMART_ALTARAZA_BULACAN_0522</option>
                                        <option value='ABENSON_WALTERMART_BACOOR_CAVITE CITY_1021'>ABENSON_WALTERMART_BACOOR_CAVITE CITY_1021</option>
                                        <option value='ABENSON_ZAMBOANGA_1023'>ABENSON_ZAMBOANGA_1023</option>
                                        <option value='ABENSON-G-MALL DAVAO'>ABENSON-G-MALL DAVAO</option>
                                        <option value='ABENSON-NCCC MALL_BUHANGIN_DAVAO_1118'>ABENSON-NCCC MALL_BUHANGIN_DAVAO_1118</option>
                                        <option value='ABENSON-WALTERMART_CALICANTO_BATANGAS CITY_1119'>ABENSON-WALTERMART_CALICANTO_BATANGAS CITY_1119</option>
                                        <option value='ADDESSA_ADDESSA_13 MARINA BLDG__NAGUILIAN_0615'>ADDESSA_ADDESSA_13 MARINA BLDG__NAGUILIAN_0615</option>
                                        <option value='ADDESSA_ADDESSA_69 HALILI BLDG_UGF_BAGUIO_0615'>ADDESSA_ADDESSA_69 HALILI BLDG_UGF_BAGUIO_0615</option>
                                        <option value='ADDESSA_ADDESSA_BUNTUN_TUGUEGARAO_1218'>ADDESSA_ADDESSA_BUNTUN_TUGUEGARAO_1218</option>
                                        <option value='ADDESSA_ADDESSA_GARCIA BLDG_1F_SAN FERNANDO_0515'>ADDESSA_ADDESSA_GARCIA BLDG_1F_SAN FERNANDO_0515</option>
                                        <option value='ADDESSA_ADDESSA_MARCELA BLDG__ROSARIO_0615'>ADDESSA_ADDESSA_MARCELA BLDG__ROSARIO_0615</option>
                                        <option value='ADDESSA_ADDESSA_PANDAN ANGELES CITY_PAMPANGA_1020'>ADDESSA_ADDESSA_PANDAN ANGELES CITY_PAMPANGA_1020</option>
                                        <option value='ADDESSA_ADDESSA_RUFINA BLDG__SAN FERNANDO_0815'>ADDESSA_ADDESSA_RUFINA BLDG__SAN FERNANDO_0815</option>
                                        <option value='ADDESSA_HENSON_ANGELES PAMPANGA_0323'>ADDESSA_HENSON_ANGELES PAMPANGA_0323</option>
                                        <option value='ADDESSA_SJDM_BULACAN_0323'>ADDESSA_SJDM_BULACAN_0323</option>
                                        <option value='ADDESSA-AGOO LA UNION'>ADDESSA-AGOO LA UNION</option>
                                        <option value='ADDESSA-TUGUEGARAO'>ADDESSA-TUGUEGARAO</option>
                                        <option value='ALL HOME-BACOLOD_NEGROS OCCIDENTAL_0221'>ALL HOME-BACOLOD_NEGROS OCCIDENTAL_0221</option>
                                        <option value='ALL HOME-BUTUAN CITY_AGUSAN DEL NORTE_1219'>ALL HOME-BUTUAN CITY_AGUSAN DEL NORTE_1219</option>
                                        <option value='ALL HOME-CAGAYAN DE ORO'>ALL HOME-CAGAYAN DE ORO</option>
                                        <option value='ALL HOME-DASMARINAS_CAVITE_0719'>ALL HOME-DASMARINAS_CAVITE_0719</option>
                                        <option value='ALL HOME-GENERAL TRIAS_0818'>ALL HOME-GENERAL TRIAS_0818</option>
                                        <option value='ALL HOME-ILOILO'>ALL HOME-ILOILO</option>
                                        <option value='ALL HOME-IMUSCAVITE'>ALL HOME-IMUSCAVITE</option>
                                        <option value='ALL HOME-SAN JOSE DEL MONTE'>ALL HOME-SAN JOSE DEL MONTE</option>
                                        <option value='ALL HOME-SILANG_CAVITE_1119'>ALL HOME-SILANG_CAVITE_1119</option>
                                        <option value='ALL HOME-STA ROSA'>ALL HOME-STA ROSA</option>
                                        <option value='ALL HOME-TUGBOK_DAVAO CITY_0422'>ALL HOME-TUGBOK_DAVAO CITY_0422</option>
                                        <option value='ALSONS TRADING-DASMARIÑAS CAVITE'>ALSONS TRADING-DASMARIÑAS CAVITE</option>
                                        <option value='ANSONS EMPORIUM_ANSONS NUVALI STA. ROSA'>ANSONS EMPORIUM_ANSONS NUVALI STA. ROSA</option>
                                        <option value='APPLIANCE CENTRUM-DUMAGUETE CITY'>APPLIANCE CENTRUM-DUMAGUETE CITY</option>
                                        <option value='ASIAN HOME_ASIAN HOME_GAISANO GRAND MALL MACTAN_2F_LAPU-LAPU_0515'>ASIAN HOME_ASIAN HOME_GAISANO GRAND MALL MACTAN_2F_LAPU-LAPU_0515</option>
                                        <option value='ASIAN HOME-AYALA CENTER MALL 3F CEBU'>ASIAN HOME-AYALA CENTER MALL 3F CEBU</option>
                                        <option value='ASIAN HOME-AYALA MALL CAPITOL_BACOLOD_0419'>ASIAN HOME-AYALA MALL CAPITOL_BACOLOD_0419</option>
                                        <option value='ASIAN HOME-AYALA PLUS_CEBU CITY_1223'>ASIAN HOME-AYALA PLUS_CEBU CITY_1223</option>
                                        <option value='ASIAN HOME-CENTER BLOC _0123'>ASIAN HOME-CENTER BLOC _0123</option>
                                        <option value='ASIAN HOME-CENTRIO AYALA MALL CDO'>ASIAN HOME-CENTRIO AYALA MALL CDO</option>
                                        <option value='ASIAN HOME-GRAND MALL LILOAN CEBU'>ASIAN HOME-GRAND MALL LILOAN CEBU</option>
                                        <option value='ASIAN HOME-STO.NIÑO BRGY CEBU'>ASIAN HOME-STO.NIÑO BRGY CEBU</option>
                                        <option value='AVID SALES_AV SURFER_AYALA CENTER CEBU_3F_CEBU_1116'>AVID SALES_AV SURFER_AYALA CENTER CEBU_3F_CEBU_1116</option>
                                        <option value='AVID SALES_AV SURFER_KCC MALL OF GENERAL SANTOS_2F_GENERAL SANTOS_0615'>AVID SALES_AV SURFER_KCC MALL OF GENERAL SANTOS_2F_GENERAL SANTOS_0615</option>
                                        <option value='AVID SALES_AV SURFER_KCC MALL ZAMBONGA'>AVID SALES_AV SURFER_KCC MALL ZAMBONGA</option>
                                        <option value='AVID SALES_AV SURFER_LIMKETKAI MALL_GF_CAGAYAN DE ORO_0615'>AVID SALES_AV SURFER_LIMKETKAI MALL_GF_CAGAYAN DE ORO_0615</option>
                                        <option value='AVID SALES-BAGUIO CITY'>AVID SALES-BAGUIO CITY</option>
                                        <option value='CAGAYAN APPLIANCE-TUGUEGARAO'>CAGAYAN APPLIANCE-TUGUEGARAO</option>
                                        <option value='CELLCOM_CELLCOM_SIMNES BLDG_GF_TACLOBAN_0515'>CELLCOM_CELLCOM_SIMNES BLDG_GF_TACLOBAN_0515</option>
                                        <option value='CONPINCO TRADING - M. CONPINCO HOME IMPROVEMENT_DAVAO CITY'>CONPINCO TRADING - M. CONPINCO HOME IMPROVEMENT_DAVAO CITY</option>
                                        <option value='DES APPLIANCE - MOLAVE'>DES APPLIANCE - MOLAVE</option>
                                        <option value='DES APPLIANCE-ARGAO CEBU'>DES APPLIANCE-ARGAO CEBU</option>
                                        <option value='DES APPLIANCE-AURORA'>DES APPLIANCE-AURORA</option>
                                        <option value='DES APPLIANCE-BALAMBAM'>DES APPLIANCE-BALAMBAM</option>
                                        <option value='DES APPLIANCE-CALAMBA MISAMIS OCCIDENTAL'>DES APPLIANCE-CALAMBA MISAMIS OCCIDENTAL</option>
                                        <option value='DES APPLIANCE-CAMINO NUEVO'>DES APPLIANCE-CAMINO NUEVO</option>
                                        <option value='DES APPLIANCE-IMELDA ZAMBOANGA SIBUGAY'>DES APPLIANCE-IMELDA ZAMBOANGA SIBUGAY</option>
                                        <option value='DES APPLIANCE-KABASALAN ZAMBOANGA SIBUGAY'>DES APPLIANCE-KABASALAN ZAMBOANGA SIBUGAY</option>
                                        <option value='DES APPLIANCE-LILOAN CEBU'>DES APPLIANCE-LILOAN CEBU</option>
                                        <option value='DES APPLIANCE-MANDAUE CITY'>DES APPLIANCE-MANDAUE CITY</option>
                                        <option value='DES APPLIANCE-MARANDING'>DES APPLIANCE-MARANDING</option>
                                        <option value='DES APPLIANCE-MEDELLIN CEBU'>DES APPLIANCE-MEDELLIN CEBU</option>
                                        <option value='DES APPLIANCE-NUÑEZ II'>DES APPLIANCE-NUÑEZ II</option>
                                        <option value='DES APPLIANCE-PUTIK ZAMBOANGA'>DES APPLIANCE-PUTIK ZAMBOANGA</option>
                                        <option value='DES APPLIANCE-ROXAS AVENUE_ILIGAN CITY_0719'>DES APPLIANCE-ROXAS AVENUE_ILIGAN CITY_0719</option>
                                        <option value='DES APPLIANCE-SUCABON ZAMBOANGA'>DES APPLIANCE-SUCABON ZAMBOANGA</option>
                                        <option value='DES APPLIANCE-TALAMBAN CEBU CITY'>DES APPLIANCE-TALAMBAN CEBU CITY</option>
                                        <option value='DES APPLIANCE-VITALI_ZAMBOANGA CITY_1223'>DES APPLIANCE-VITALI_ZAMBOANGA CITY_1223</option>
                                        <option value='DESMARK-CALINAN'>DESMARK-CALINAN</option>
                                        <option value='DESMARK-SAN PEDRO DAVAO'>DESMARK-SAN PEDRO DAVAO</option>
                                        <option value='DESMARK-TORIL 2_0224'>DESMARK-TORIL 2_0224</option>
                                        <option value='DIMDI-SAN PEDRO DAVAO'>DIMDI-SAN PEDRO DAVAO</option>
                                        <option value='DU EK SAM-ARGAO_CEBU_0519'>DU EK SAM-ARGAO_CEBU_0519</option>
                                        <option value='DU EK SAM-BACOLODSINGCANG'>DU EK SAM-BACOLODSINGCANG</option>
                                        <option value='DU EK SAM-BANTAYAN'>DU EK SAM-BANTAYAN</option>
                                        <option value='DU EK SAM-BUTUAN CITY'>DU EK SAM-BUTUAN CITY</option>
                                        <option value='DU EK SAM-CONSOLACION'>DU EK SAM-CONSOLACION</option>
                                        <option value='DU EK SAM-DALAGUETE'>DU EK SAM-DALAGUETE</option>
                                        <option value='DU EK SAM-ESTANCIA APP'>DU EK SAM-ESTANCIA APP</option>
                                        <option value='DU EK SAM-JAKOSALEM CEBU'>DU EK SAM-JAKOSALEM CEBU</option>
                                        <option value='DU EK SAM-JANIUAY'>DU EK SAM-JANIUAY</option>
                                        <option value='DU EK SAM-LAPASAN'>DU EK SAM-LAPASAN</option>
                                        <option value='DU EK SAM-LAPU-LAPU_CEBU_1020'>DU EK SAM-LAPU-LAPU_CEBU_1020</option>
                                        <option value='DU EK SAM-LAPU-LAPU1'>DU EK SAM-LAPU-LAPU1</option>
                                        <option value='DU EK SAM-MABINI ILOILO'>DU EK SAM-MABINI ILOILO</option>
                                        <option value='DU EK SAM-MAMBUSAO'>DU EK SAM-MAMBUSAO</option>
                                        <option value='DU EK SAM-OTON_ILOILO CITY_0721'>DU EK SAM-OTON_ILOILO CITY_0721</option>
                                        <option value='DU EK SAM-REAL ST. DUMAGUETE'>DU EK SAM-REAL ST. DUMAGUETE</option>
                                        <option value='DU EK SAM-STA.BARBARA'>DU EK SAM-STA.BARBARA</option>
                                        <option value='DU EK SAM-TACLOBAN LEYTE'>DU EK SAM-TACLOBAN LEYTE</option>
                                        <option value='DU EK SAM-TAGBAC_1221'>DU EK SAM-TAGBAC_1221</option>
                                        <option value='ECHO ELECTRICAL-BANILAD CEBU'>ECHO ELECTRICAL-BANILAD CEBU</option>
                                        <option value='ECHO ELECTRICAL-MAGALLANES CEBU'>ECHO ELECTRICAL-MAGALLANES CEBU</option>
                                        <option value='ECHO ELECTRICAL-SAVEMORE CARCAR'>ECHO ELECTRICAL-SAVEMORE CARCAR</option>
                                        <option value='EMCOR-AGDAO ST DAVAO'>EMCOR-AGDAO ST DAVAO</option>
                                        <option value='EMCOR-ALUBIJID'>EMCOR-ALUBIJID</option>
                                        <option value='EMCOR-ANDUHOL BLDG IPIL'>EMCOR-ANDUHOL BLDG IPIL</option>
                                        <option value='EMCOR-ARANETA AVE BACOLOD'>EMCOR-ARANETA AVE BACOLOD</option>
                                        <option value='EMCOR-BALAMBAN CEBU'>EMCOR-BALAMBAN CEBU</option>
                                        <option value='EMCOR-BALINGASAG'>EMCOR-BALINGASAG</option>
                                        <option value='EMCOR-BANSALAN'>EMCOR-BANSALAN</option>
                                        <option value='EMCOR-BANTAYAN CEBU'>EMCOR-BANTAYAN CEBU</option>
                                        <option value='EMCOR-BAYAWAN'>EMCOR-BAYAWAN</option>
                                        <option value='EMCOR-BINALBAGAN'>EMCOR-BINALBAGAN</option>
                                        <option value='EMCOR-BUILDING MALL 3F DAVAO'>EMCOR-BUILDING MALL 3F DAVAO</option>
                                        <option value='EMCOR-CALAMBA'>EMCOR-CALAMBA</option>
                                        <option value='EMCOR-CALINAN'>EMCOR-CALINAN</option>
                                        <option value='EMCOR-DELGADO ILOILO'>EMCOR-DELGADO ILOILO</option>
                                        <option value='EMCOR-DIVERSION RD ILOILO'>EMCOR-DIVERSION RD ILOILO</option>
                                        <option value='EMCOR-DUMAGUETE'>EMCOR-DUMAGUETE</option>
                                        <option value='EMCOR-DUMASAPAL BLDG GF LILOY'>EMCOR-DUMASAPAL BLDG GF LILOY</option>
                                        <option value='EMCOR-GAID BLDG GF MARANDING LALA'>EMCOR-GAID BLDG GF MARANDING LALA</option>
                                        <option value='EMCOR-GUIWAN ZAMBOANGA'>EMCOR-GUIWAN ZAMBOANGA</option>
                                        <option value='EMCOR-IMELDA'>EMCOR-IMELDA</option>
                                        <option value='EMCOR-IPONAN VALEZ_CAGAYAN DE ORO_0119'>EMCOR-IPONAN VALEZ_CAGAYAN DE ORO_0119</option>
                                        <option value='EMCOR-ISULAN'>EMCOR-ISULAN</option>
                                        <option value='EMCOR-JALDON ST ZAMBOANGA'>EMCOR-JALDON ST ZAMBOANGA</option>
                                        <option value='EMCOR-JR BORJA ST GF CAGAYAN DE ORO'>EMCOR-JR BORJA ST GF CAGAYAN DE ORO</option>
                                        <option value='EMCOR-JVR BLDG NATIONAL HWAY GENSAN'>EMCOR-JVR BLDG NATIONAL HWAY GENSAN</option>
                                        <option value='EMCOR-KABANKALAN'>EMCOR-KABANKALAN</option>
                                        <option value='EMCOR-KABASALAN'>EMCOR-KABASALAN</option>
                                        <option value='EMCOR-LEGASPI CEBU'>EMCOR-LEGASPI CEBU</option>
                                        <option value='EMCOR-LUPON'>EMCOR-LUPON</option>
                                        <option value='EMCOR-MANBAO BLDG BOGO'>EMCOR-MANBAO BLDG BOGO</option>
                                        <option value='EMCOR-MARINA MALL GF LAPULAPU'>EMCOR-MARINA MALL GF LAPULAPU</option>
                                        <option value='EMCOR-MATINA CROSSING MALL DAVAO'>EMCOR-MATINA CROSSING MALL DAVAO</option>
                                        <option value='EMCOR-MC ARTHUR HWAY TORIL'>EMCOR-MC ARTHUR HWAY TORIL</option>
                                        <option value='EMCOR-MOLAVE'>EMCOR-MOLAVE</option>
                                        <option value='EMCOR-MONTILLA BLVD BUTUAN'>EMCOR-MONTILLA BLVD BUTUAN</option>
                                        <option value='EMCOR-NABUNTURAN HIGHWAY'>EMCOR-NABUNTURAN HIGHWAY</option>
                                        <option value='EMCOR-NATIONAL HWAY GF GINGOOG'>EMCOR-NATIONAL HWAY GF GINGOOG</option>
                                        <option value='EMCOR-NUÑEZ EXT ZAMBOANGA'>EMCOR-NUÑEZ EXT ZAMBOANGA</option>
                                        <option value='EMCOR-PANABO HIGHWAY'>EMCOR-PANABO HIGHWAY</option>
                                        <option value='EMCOR-PASSI'>EMCOR-PASSI</option>
                                        <option value='EMCOR-RECODO'>EMCOR-RECODO</option>
                                        <option value='EMCOR-RIZAL AVE SINDANGAN'>EMCOR-RIZAL AVE SINDANGAN</option>
                                        <option value='EMCOR-ROXAS AVE COR CONSUNJI ST GF ILIGAN'>EMCOR-ROXAS AVE COR CONSUNJI ST GF ILIGAN</option>
                                        <option value='EMCOR-SAN PEDRO ST GF DAVAO'>EMCOR-SAN PEDRO ST GF DAVAO</option>
                                        <option value='EMCOR-SANTA CECELIA GUSA ST GF CAGAYAN DE ORO'>EMCOR-SANTA CECELIA GUSA ST GF CAGAYAN DE ORO</option>
                                        <option value='EMCOR-TOLEDO CEBU'>EMCOR-TOLEDO CEBU</option>
                                        <option value='EMCOR-VETERANS ZAMBOANGA'>EMCOR-VETERANS ZAMBOANGA</option>
                                        <option value='EMCOR-VILLENA ST CADIZ'>EMCOR-VILLENA ST CADIZ</option>
                                        <option value='EMCOR-YKS BLDG TACLOBAN'>EMCOR-YKS BLDG TACLOBAN</option>
                                        <option value='FIESTA APPLIANCE-BUHANGIN DAVAO CITY'>FIESTA APPLIANCE-BUHANGIN DAVAO CITY</option>
                                        <option value='FIESTA APPLIANCE-CALUMPANG'>FIESTA APPLIANCE-CALUMPANG</option>
                                        <option value='FIESTA APPLIANCE-GENERAL SANTOS'>FIESTA APPLIANCE-GENERAL SANTOS</option>
                                        <option value='FIESTA APPLIANCE-POLOMOLOK SOUTH COTABATO'>FIESTA APPLIANCE-POLOMOLOK SOUTH COTABATO</option>
                                        <option value='FIRST FAMILY-GAISANO GRAND PLAZA_MACTAN_LAPULAPU_1223'>FIRST FAMILY-GAISANO GRAND PLAZA_MACTAN_LAPULAPU_1223</option>
                                        <option value='IMPERIAL - BAJADA'>IMPERIAL - BAJADA</option>
                                        <option value='IMPERIAL - LEGASPI'>IMPERIAL - LEGASPI</option>
                                        <option value='IMPERIAL - MEGA SHOWROOM'>IMPERIAL - MEGA SHOWROOM</option>
                                        <option value='IMPERIAL-AGDAO DAVAO DEL SUR'>IMPERIAL-AGDAO DAVAO DEL SUR</option>
                                        <option value='IMPERIAL-BAROTAC VIEJO'>IMPERIAL-BAROTAC VIEJO</option>
                                        <option value='IMPERIAL-BAROTAC_NUEVO_0120'>IMPERIAL-BAROTAC_NUEVO_0120</option>
                                        <option value='IMPERIAL-BATANGAS'>IMPERIAL-BATANGAS</option>
                                        <option value='IMPERIAL-BUENAVISTA_GUIMARAS_1122'>IMPERIAL-BUENAVISTA_GUIMARAS_1122</option>
                                        <option value='IMPERIAL-CABANATUAN CITY NUEVA ECIJA'>IMPERIAL-CABANATUAN CITY NUEVA ECIJA</option>
                                        <option value='IMPERIAL-CADIZ NEGROS OCCIDENTAL'>IMPERIAL-CADIZ NEGROS OCCIDENTAL</option>
                                        <option value='IMPERIAL-CALAMBA LAGUNA'>IMPERIAL-CALAMBA LAGUNA</option>
                                        <option value='IMPERIAL-CALINAN'>IMPERIAL-CALINAN</option>
                                        <option value='IMPERIAL-CALINOG ILOILO'>IMPERIAL-CALINOG ILOILO</option>
                                        <option value='IMPERIAL-CALUMPANG_GENERAL SANTOS_1119'>IMPERIAL-CALUMPANG_GENERAL SANTOS_1119</option>
                                        <option value='IMPERIAL-CARMEN CDO'>IMPERIAL-CARMEN CDO</option>
                                        <option value='IMPERIAL-CLARK_PAMPANGA_1122'>IMPERIAL-CLARK_PAMPANGA_1122</option>
                                        <option value='IMPERIAL-DASMARINAS SALAWAG'>IMPERIAL-DASMARINAS SALAWAG</option>
                                        <option value='IMPERIAL-ESTANCIA'>IMPERIAL-ESTANCIA</option>
                                        <option value='IMPERIAL-GALLERIA DELGADO ILOILO CITY'>IMPERIAL-GALLERIA DELGADO ILOILO CITY</option>
                                        <option value='IMPERIAL-GINGOOG'>IMPERIAL-GINGOOG</option>
                                        <option value='IMPERIAL-GMA CAVITE'>IMPERIAL-GMA CAVITE</option>
                                        <option value='IMPERIAL-ILIGAN'>IMPERIAL-ILIGAN</option>
                                        <option value='IMPERIAL-IMUS CAVITE'>IMPERIAL-IMUS CAVITE</option>
                                        <option value='IMPERIAL-JC AQUINO AVE._BUTUAN_AGUSAN DEL NORTE_0220'>IMPERIAL-JC AQUINO AVE._BUTUAN_AGUSAN DEL NORTE_0220</option>
                                        <option value='IMPERIAL-KCC MALL GENERAL SANTOS'>IMPERIAL-KCC MALL GENERAL SANTOS</option>
                                        <option value='IMPERIAL-KCC MALL ZAMBOANGA'>IMPERIAL-KCC MALL ZAMBOANGA</option>
                                        <option value='IMPERIAL-LA CARLOTA'>IMPERIAL-LA CARLOTA</option>
                                        <option value='IMPERIAL-LAGAO_GENSAN_0622'>IMPERIAL-LAGAO_GENSAN_0622</option>
                                        <option value='IMPERIAL-LAPU-LAPU CEBU'>IMPERIAL-LAPU-LAPU CEBU</option>
                                        <option value='IMPERIAL-M.CALO ST. BUTUAN'>IMPERIAL-M.CALO ST. BUTUAN</option>
                                        <option value='IMPERIAL-MANDALAGAN'>IMPERIAL-MANDALAGAN</option>
                                        <option value='IMPERIAL-MIAG-AO'>IMPERIAL-MIAG-AO</option>
                                        <option value='IMPERIAL-PASSI ILOILO'>IMPERIAL-PASSI ILOILO</option>
                                        <option value='IMPERIAL-PLAZA (DELGADO)'>IMPERIAL-PLAZA (DELGADO)</option>
                                        <option value='IMPERIAL-POLOMOLOK SOUTH COTABATO'>IMPERIAL-POLOMOLOK SOUTH COTABATO</option>
                                        <option value='IMPERIAL-POTOTAN ILOILO'>IMPERIAL-POTOTAN ILOILO</option>
                                        <option value='IMPERIAL-REAL ST. DUMAGUETE'>IMPERIAL-REAL ST. DUMAGUETE</option>
                                        <option value='IMPERIAL-SAN CARLOS'>IMPERIAL-SAN CARLOS</option>
                                        <option value='IMPERIAL-SAN PEDRO LAGUNA'>IMPERIAL-SAN PEDRO LAGUNA</option>
                                        <option value='IMPERIAL-SANTIAGO STREET GENSAN'>IMPERIAL-SANTIAGO STREET GENSAN</option>
                                        <option value='IMPERIAL-SARA'>IMPERIAL-SARA</option>
                                        <option value='IMPERIAL-STA. BARBARA_ILOILO_0719'>IMPERIAL-STA. BARBARA_ILOILO_0719</option>
                                        <option value='IMPERIAL-STO. NIÑO CEBU'>IMPERIAL-STO. NIÑO CEBU</option>
                                        <option value='IMPERIAL-TACLOBAN'>IMPERIAL-TACLOBAN</option>
                                        <option value='IMPERIAL-TECHNOFLEX'>IMPERIAL-TECHNOFLEX</option>
                                        <option value='IMPERIAL-TORIL'>IMPERIAL-TORIL</option>
                                        <option value='IMPERIAL-VELEZ ST. CAGAYAN DE ORO'>IMPERIAL-VELEZ ST. CAGAYAN DE ORO</option>
                                        <option value='IMPERIAL-ZAMBOANGA DOS'>IMPERIAL-ZAMBOANGA DOS</option>
                                        <option value='K SERVICO-KDC ARAYAT'>K SERVICO-KDC ARAYAT</option>
                                        <option value='K SERVICO-KDC STA ROSA'>K SERVICO-KDC STA ROSA</option>
                                        <option value='K SERVICO-LAGUNDI BRGY MEXICO'>K SERVICO-LAGUNDI BRGY MEXICO</option>
                                        <option value='K SERVICO-MARAVILLA BLDG TALAVERA'>K SERVICO-MARAVILLA BLDG TALAVERA</option>
                                        <option value='K SERVICO-STO. DOMINGO_0319'>K SERVICO-STO. DOMINGO_0319</option>
                                        <option value='K-SERVICO-ABULUG CAGAYAN'>K-SERVICO-ABULUG CAGAYAN</option>
                                        <option value='K-SERVICO-AGOO'>K-SERVICO-AGOO</option>
                                        <option value='K-SERVICO-BALIBAGO COMPLEX STA. ROSA CITY'>K-SERVICO-BALIBAGO COMPLEX STA. ROSA CITY</option>
                                        <option value='K-SERVICO-BUCANA SAN VICENTE GAPAN'>K-SERVICO-BUCANA SAN VICENTE GAPAN</option>
                                        <option value='K-SERVICO-BUNTUN'>K-SERVICO-BUNTUN</option>
                                        <option value='K-SERVICO-CABANATUAN NUEVA ECIJA'>K-SERVICO-CABANATUAN NUEVA ECIJA</option>
                                        <option value='K-SERVICO-CENTRO LASAM'>K-SERVICO-CENTRO LASAM</option>
                                        <option value='K-SERVICO-DAU ANGELES'>K-SERVICO-DAU ANGELES</option>
                                        <option value='K-SERVICO-FLORIDABLANCA'>K-SERVICO-FLORIDABLANCA</option>
                                        <option value='K-SERVICO-GATTARAN'>K-SERVICO-GATTARAN</option>
                                        <option value='K-SERVICO-GONZAGA'>K-SERVICO-GONZAGA</option>
                                        <option value='K-SERVICO-LA TRINIDAD BAGUIO'>K-SERVICO-LA TRINIDAD BAGUIO</option>
                                        <option value='K-SERVICO-MAGALANG'>K-SERVICO-MAGALANG</option>
                                        <option value='K-SERVICO-MOLINO'>K-SERVICO-MOLINO</option>
                                        <option value='K-SERVICO-PENGUE TUGUEGARAO'>K-SERVICO-PENGUE TUGUEGARAO</option>
                                        <option value='K-SERVICO-PORAC'>K-SERVICO-PORAC</option>
                                        <option value='K-SERVICO-SAN JOSE'>K-SERVICO-SAN JOSE</option>
                                        <option value='K-SERVICO-SILANG'>K-SERVICO-SILANG</option>
                                        <option value='K-SERVICO-TUAO'>K-SERVICO-TUAO</option>
                                        <option value='K-SERVICO-TUDDAO-CHUA BLDG BALZAIN CAGAYAN'>K-SERVICO-TUDDAO-CHUA BLDG BALZAIN CAGAYAN</option>
                                        <option value='KCC - GENSAN_0923'>KCC - GENSAN_0923</option>
                                        <option value='KCC - ZAMBOANGA_0923'>KCC - ZAMBOANGA_0923</option>
                                        <option value='MAGIC APPLIANCE-SAN FERNANDO LA UNION_0222'>MAGIC APPLIANCE-SAN FERNANDO LA UNION_0222</option>
                                        <option value='METRO PLAZA-BAJADA ST. DAVAO'>METRO PLAZA-BAJADA ST. DAVAO</option>
                                        <option value='METRO PLAZA-CONCEPT SHOP GAISANO MALL DAVAO'>METRO PLAZA-CONCEPT SHOP GAISANO MALL DAVAO</option>
                                        <option value='POS MARKETING-ARANETA ST. BACOLOD'>POS MARKETING-ARANETA ST. BACOLOD</option>
                                        <option value='PRICEWISE-STA. MARIA_ZAMBOANGA_0320'>PRICEWISE-STA. MARIA_ZAMBOANGA_0320</option>
                                        <option value='QUALITY APPLIANCE - DUMAGUETE'>QUALITY APPLIANCE - DUMAGUETE</option>
                                        <option value='QUALITY APPLIANCE-CDO_MISAMIS ORIENTAL_0723'>QUALITY APPLIANCE-CDO_MISAMIS ORIENTAL_0723</option>
                                        <option value='QUALITY APPLIANCE-Central lifestyle'>QUALITY APPLIANCE-Central lifestyle</option>
                                        <option value='QUALITY APPLIANCE-DAVAO CITY_0723'>QUALITY APPLIANCE-DAVAO CITY_0723</option>
                                        <option value='QUALITY APPLIANCE-FELCRIS CENTRALE DAVAO'>QUALITY APPLIANCE-FELCRIS CENTRALE DAVAO</option>
                                        <option value='QUALITY APPLIANCE-GENERAL SANTOS HI-WAY'>QUALITY APPLIANCE-GENERAL SANTOS HI-WAY</option>
                                        <option value='QUALITY APPLIANCE-MAGALLANES COR.AMAT ST. SURIGAO'>QUALITY APPLIANCE-MAGALLANES COR.AMAT ST. SURIGAO</option>
                                        <option value='QUALITY APPLIANCE-MAIN CDO'>QUALITY APPLIANCE-MAIN CDO</option>
                                        <option value='QUALITY APPLIANCE-MARANDING'>QUALITY APPLIANCE-MARANDING</option>
                                        <option value='QUALITY APPLIANCE-MONTILLA BLVD. BUTUAN'>QUALITY APPLIANCE-MONTILLA BLVD. BUTUAN</option>
                                        <option value='QUALITY APPLIANCE-RAINBOW APPLIANCE CAPISTRANO ST. CAGAYAN DE ORO'>QUALITY APPLIANCE-RAINBOW APPLIANCE CAPISTRANO ST. CAGAYAN DE ORO</option>
                                        <option value='QUALITY APPLIANCE-SABAYLE ST. ILIGAN'>QUALITY APPLIANCE-SABAYLE ST. ILIGAN</option>
                                        <option value='QUALITY APPLIANCE-SPECIAL APPLIANCE CARMEN CAGAYAN DE ORO'>QUALITY APPLIANCE-SPECIAL APPLIANCE CARMEN CAGAYAN DE ORO</option>
                                        <option value='QUALITY APPLIANCE-SPECIAL APPLIANCE QUEZON AVE. EXT. ILIGAN CITY'>QUALITY APPLIANCE-SPECIAL APPLIANCE QUEZON AVE. EXT. ILIGAN CITY</option>
                                        <option value='QUALITY APPLIANCE-TACLOBAN LEYTE'>QUALITY APPLIANCE-TACLOBAN LEYTE</option>
                                        <option value='QUALITY APPLIANCE-ZAMBOANGA'>QUALITY APPLIANCE-ZAMBOANGA</option>
                                        <option value='RJ HOMES-ILIGAN'>RJ HOMES-ILIGAN</option>
                                        <option value='RJ HOMES-LEGASPI ST. DAVAO'>RJ HOMES-LEGASPI ST. DAVAO</option>
                                        <option value='RL APPLIANCE-TACLOBAN LEYTE'>RL APPLIANCE-TACLOBAN LEYTE</option>
                                        <option value='ROBINSON APPLIANCE-ILIGAN'>ROBINSON APPLIANCE-ILIGAN</option>
                                        <option value='ROBINSONS APPLIANCES - AYALA MALLS CENTRIO CDO_0124'>ROBINSONS APPLIANCES - AYALA MALLS CENTRIO CDO_0124</option>
                                        <option value='ROBINSONS APPLIANCES - SAN FERNANDO LA UNION'>ROBINSONS APPLIANCES - SAN FERNANDO LA UNION</option>
                                        <option value='ROBINSONS APPLIANCES - SHOPWISE_LANCASTER_IMUS_1123'>ROBINSONS APPLIANCES - SHOPWISE_LANCASTER_IMUS_1123</option>
                                        <option value='ROBINSONS APPLIANCES- ROBINSONS GEN. TRIAS CAVITE_2F'>ROBINSONS APPLIANCES- ROBINSONS GEN. TRIAS CAVITE_2F</option>
                                        <option value='ROBINSONS APPLIANCES-ABREEZA'>ROBINSONS APPLIANCES-ABREEZA</option>
                                        <option value='ROBINSONS APPLIANCES-ANGELES PAMPANGA'>ROBINSONS APPLIANCES-ANGELES PAMPANGA</option>
                                        <option value='ROBINSONS APPLIANCES-ARVO DASMARIÑAS'>ROBINSONS APPLIANCES-ARVO DASMARIÑAS</option>
                                        <option value='ROBINSONS APPLIANCES-BACOLOD MALL 2F'>ROBINSONS APPLIANCES-BACOLOD MALL 2F</option>
                                        <option value='ROBINSONS APPLIANCES-BUTUAN MALL'>ROBINSONS APPLIANCES-BUTUAN MALL</option>
                                        <option value='ROBINSONS APPLIANCES-CABANATUAN MALL'>ROBINSONS APPLIANCES-CABANATUAN MALL</option>
                                        <option value='ROBINSONS APPLIANCES-CAGAYAN DE ORO MALL'>ROBINSONS APPLIANCES-CAGAYAN DE ORO MALL</option>
                                        <option value='ROBINSONS APPLIANCES-CENTER MALL  BAGUIO'>ROBINSONS APPLIANCES-CENTER MALL  BAGUIO</option>
                                        <option value='ROBINSONS APPLIANCES-CENTERPOINT PLAZA  BAGUIO'>ROBINSONS APPLIANCES-CENTERPOINT PLAZA  BAGUIO</option>
                                        <option value='ROBINSONS APPLIANCES-DUMAGUETE MALL LGF'>ROBINSONS APPLIANCES-DUMAGUETE MALL LGF</option>
                                        <option value='ROBINSONS APPLIANCES-GAISANO MALL TORIL DAVAO'>ROBINSONS APPLIANCES-GAISANO MALL TORIL DAVAO</option>
                                        <option value='ROBINSONS APPLIANCES-GENERAL SANTOS MALL'>ROBINSONS APPLIANCES-GENERAL SANTOS MALL</option>
                                        <option value='ROBINSONS APPLIANCES-IMALL CANLUBANG LAGUNA'>ROBINSONS APPLIANCES-IMALL CANLUBANG LAGUNA</option>
                                        <option value='ROBINSONS APPLIANCES-MARQUEE MALL ANGELES'>ROBINSONS APPLIANCES-MARQUEE MALL ANGELES</option>
                                        <option value='ROBINSONS APPLIANCES-NORTH TACLOBAN'>ROBINSONS APPLIANCES-NORTH TACLOBAN</option>
                                        <option value='ROBINSONS APPLIANCES-PERDICES SUPERMARKET LGF DUMAGUE'>ROBINSONS APPLIANCES-PERDICES SUPERMARKET LGF DUMAGUE</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS DASMARIÑAS'>ROBINSONS APPLIANCES-ROBINSONS DASMARIÑAS</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS GALLERIA CEBU'>ROBINSONS APPLIANCES-ROBINSONS GALLERIA CEBU</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS GALLERIA SOUTH_LAGUNA_0519'>ROBINSONS APPLIANCES-ROBINSONS GALLERIA SOUTH_LAGUNA_0519</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS ILOILO'>ROBINSONS APPLIANCES-ROBINSONS ILOILO</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS IMUS'>ROBINSONS APPLIANCES-ROBINSONS IMUS</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS JARO'>ROBINSONS APPLIANCES-ROBINSONS JARO</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS PLACE CEBU MALL'>ROBINSONS APPLIANCES-ROBINSONS PLACE CEBU MALL</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS SILANG CAVITE'>ROBINSONS APPLIANCES-ROBINSONS SILANG CAVITE</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS STARMILLS PAMPANGA'>ROBINSONS APPLIANCES-ROBINSONS STARMILLS PAMPANGA</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS TACLOBAN'>ROBINSONS APPLIANCES-ROBINSONS TACLOBAN</option>
                                        <option value='ROBINSONS APPLIANCES-ROBINSONS TUGUEGARAO'>ROBINSONS APPLIANCES-ROBINSONS TUGUEGARAO</option>
                                        <option value='ROBINSONS APPLIANCES-TAGAYTAY'>ROBINSONS APPLIANCES-TAGAYTAY</option>
                                        <option value='ROBINSONS APPLIANCES-TOWNVILLE IMUS'>ROBINSONS APPLIANCES-TOWNVILLE IMUS</option>
                                        <option value='ROYAL STAR-CALAMBA LAGUNA'>ROYAL STAR-CALAMBA LAGUNA</option>
                                        <option value='ROYAL STAR-PACITA'>ROYAL STAR-PACITA</option>
                                        <option value='ROYAL STAR-SAN ANTONIO SAN PEDRO LAGUNA'>ROYAL STAR-SAN ANTONIO SAN PEDRO LAGUNA</option>
                                        <option value='SAVERS - LAPU LAPU CITY_CEBU_0524'>SAVERS - LAPU LAPU CITY_CEBU_0524</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS MART_DON BONIFACIO BLDG_UGF_ANGELES_0815'>SAVERS ELECTRONICS_SAVERS MART_DON BONIFACIO BLDG_UGF_ANGELES_0815</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_CABANATUAN_NUEVA ECIJA'>SAVERS ELECTRONICS_SAVERS_CABANATUAN_NUEVA ECIJA</option>
                                        <option value='SAVERS ELECTRONICS_SAVERS_PENGUE'>SAVERS ELECTRONICS_SAVERS_PENGUE</option>
                                        <option value='SAVERS- LA UNION SAN FERNANDO'>SAVERS- LA UNION SAN FERNANDO</option>
                                        <option value='SAVERS-BAGUIO'>SAVERS-BAGUIO</option>
                                        <option value='SAVERS-BALIBAGO ANGELES PAMPANGA'>SAVERS-BALIBAGO ANGELES PAMPANGA</option>
                                        <option value='SAVERS-HENSON ST. ANGELES PAMPANGA'>SAVERS-HENSON ST. ANGELES PAMPANGA</option>
                                        <option value='SAVERS-MARQUEE MALL ANGELES PAMPANGA'>SAVERS-MARQUEE MALL ANGELES PAMPANGA</option>
                                        <option value='SAVERS-PLARIDEL ST. ANGELES PAMPANGA'>SAVERS-PLARIDEL ST. ANGELES PAMPANGA</option>
                                        <option value='SAVERS-STA. MARIA I_BALIBAGO_ANGELES CITY_PAMPANGA_0524'>SAVERS-STA. MARIA I_BALIBAGO_ANGELES CITY_PAMPANGA_0524</option>
                                        <option value='SAVERS-UGAC HIGHWAY TUGUEGARAO CITY'>SAVERS-UGAC HIGHWAY TUGUEGARAO CITY</option>
                                        <option value='SES - 8TELCOM - SM LANANG PREMIER - 3F_DAVAO_0515'>SES - 8TELCOM - SM LANANG PREMIER - 3F_DAVAO_0515</option>
                                        <option value='SES - FONE STYLE - SM CITY STA ROSA - 2F_SANTA ROSA_0515'>SES - FONE STYLE - SM CITY STA ROSA - 2F_SANTA ROSA_0515</option>
                                        <option value='SES - PRESNET - SM CITY DASMARIÑAS - 2F_DASMARINAS_0615'>SES - PRESNET - SM CITY DASMARIÑAS - 2F_DASMARINAS_0615</option>
                                        <option value='SM APPLIANCE-SM BACOOR'>SM APPLIANCE-SM BACOOR</option>
                                        <option value='SM APPLIANCE-SM BAGUIO'>SM APPLIANCE-SM BAGUIO</option>
                                        <option value='SM APPLIANCE-SM BATANGAS'>SM APPLIANCE-SM BATANGAS</option>
                                        <option value='SM APPLIANCE-SM DASMARIÑAS'>SM APPLIANCE-SM DASMARIÑAS</option>
                                        <option value='SM APPLIANCE-SM DAVAO'>SM APPLIANCE-SM DAVAO</option>
                                        <option value='SM APPLIANCE-SM HYPERMARKET_LAPU-LAPU CITY_0219'>SM APPLIANCE-SM HYPERMARKET_LAPU-LAPU CITY_0219</option>
                                        <option value='SM APPLIANCE-SM IMUS'>SM APPLIANCE-SM IMUS</option>
                                        <option value='SM APPLIANCE-SM TACLOBAN'>SM APPLIANCE-SM TACLOBAN</option>
                                        <option value='SOLIDMARK_SOLIDMARK_BODEGA LAPASAN__CAGAYAN DE ORO_0316'>SOLIDMARK_SOLIDMARK_BODEGA LAPASAN__CAGAYAN DE ORO_0316</option>
                                        <option value='SOLIDMARK_SOLIDMARK_GARCIA BLDG__ILIGAN_0717'>SOLIDMARK_SOLIDMARK_GARCIA BLDG__ILIGAN_0717</option>
                                        <option value='SOLIDMARK_SOLIDMARK_J C AQUINO AQUINO__BUTUAN_0515'>SOLIDMARK_SOLIDMARK_J C AQUINO AQUINO__BUTUAN_0515</option>
                                        <option value='SOLIDMARK_SOLIDMARK_LIMKETKAI MALL_GF_CAGAYAN DE ORO_0515'>SOLIDMARK_SOLIDMARK_LIMKETKAI MALL_GF_CAGAYAN DE ORO_0515</option>
                                        <option value='SOLIDMARK_SOLIDMARK_MONTILLA BLVD__BUTUAN_0519'>SOLIDMARK_SOLIDMARK_MONTILLA BLVD__BUTUAN_0519</option>
                                        <option value='SOLIDMARK_SOLIDMARK_SOLIDMARK BLDG_GF_CAGAYAN DE ORO_0515'>SOLIDMARK_SOLIDMARK_SOLIDMARK BLDG_GF_CAGAYAN DE ORO_0515</option>
                                        <option value='SOLU TRADING_PALA PALA_DASMARINAS CITY_1023'>SOLU TRADING_PALA PALA_DASMARINAS CITY_1023</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_BUTUAN CITY_AGUSAN DEL NORTE_0819'>STAR APPLIANCE_SM APPLIANCE_BUTUAN CITY_AGUSAN DEL NORTE_0819</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_MINDPRO_ZAMBOANGA CITY_0819'>STAR APPLIANCE_SM APPLIANCE_MINDPRO_ZAMBOANGA CITY_0819</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CABANATUAN_1F_CABANATUAN_0716'>STAR APPLIANCE_SM APPLIANCE_SM CITY CABANATUAN_1F_CABANATUAN_0716</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CAGAYAN DE ORO_GF_CAGAYAN DE ORO_0615'>STAR APPLIANCE_SM APPLIANCE_SM CITY CAGAYAN DE ORO_GF_CAGAYAN DE ORO_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CALAMBA_2F_CALAMBA_0615'>STAR APPLIANCE_SM APPLIANCE_SM CITY CALAMBA_2F_CALAMBA_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY CONSOLACION_GF_CONSOLACION_0515'>STAR APPLIANCE_SM APPLIANCE_SM CITY CONSOLACION_GF_CONSOLACION_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY DELGADO_GF_ILOILO_0515'>STAR APPLIANCE_SM APPLIANCE_SM CITY DELGADO_GF_ILOILO_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY GENERAL SANTOS_2F_GENERAL SANTOS_0515'>STAR APPLIANCE_SM APPLIANCE_SM CITY GENERAL SANTOS_2F_GENERAL SANTOS_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY ILOILO_GF_ILOILO_0515'>STAR APPLIANCE_SM APPLIANCE_SM CITY ILOILO_GF_ILOILO_0515</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY SAN JOSE DEL MONTE__SAN JOSE DEL MONTE_0616'>STAR APPLIANCE_SM APPLIANCE_SM CITY SAN JOSE DEL MONTE__SAN JOSE DEL MONTE_0616</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM CITY STA ROSA__SANTA ROSA_0615'>STAR APPLIANCE_SM APPLIANCE_SM CITY STA ROSA__SANTA ROSA_0615</option>
                                        <option value='STAR APPLIANCE_SM APPLIANCE_SM LANANG PREMIER_3F_DAVAO_0615'>STAR APPLIANCE_SM APPLIANCE_SM LANANG PREMIER_3F_DAVAO_0615</option>
                                        <option value='STAR APPLIANCE_SM CARITAN TUGUEGARAO_0822'>STAR APPLIANCE_SM CARITAN TUGUEGARAO_0822</option>
                                        <option value='STAR APPLIANCE_SM CENTER SAN PEDRO_0423'>STAR APPLIANCE_SM CENTER SAN PEDRO_0423</option>
                                        <option value='STAR APPLIANCE_SM DOWNTOWN CENTER TUGUEGARAO'>STAR APPLIANCE_SM DOWNTOWN CENTER TUGUEGARAO</option>
                                        <option value='STAR APPLIANCE- CENTERSM BACOLOD MALL GF BACOLOD'>STAR APPLIANCE- CENTERSM BACOLOD MALL GF BACOLOD</option>
                                        <option value='STAR APPLIANCE- CENTERSM CEBU MALL UGF CEBU'>STAR APPLIANCE- CENTERSM CEBU MALL UGF CEBU</option>
                                        <option value='TARLAC MAC_ MEGA SAVER_SAN JOSE DEL MONTE_BULACAN_0919'>TARLAC MAC_ MEGA SAVER_SAN JOSE DEL MONTE_BULACAN_0919</option>
                                        <option value='TARLAC MAC_ MEGA SAVER_TUGUEGARAO_0719'>TARLAC MAC_ MEGA SAVER_TUGUEGARAO_0719</option>
                                        <option value='TARLAC MAC_ANGELES_STO ROSARIO_0522'>TARLAC MAC_ANGELES_STO ROSARIO_0522</option>
                                        <option value='TARLAC MAC_HENSON_0522'>TARLAC MAC_HENSON_0522</option>
                                        <option value='TARLAC MAC_MEGA SAVER_ANGELES_0718'>TARLAC MAC_MEGA SAVER_ANGELES_0718</option>
                                        <option value='TARLAC MAC_MEGA SAVER_SAVERS BLDG__CABANATUAN_0616'>TARLAC MAC_MEGA SAVER_SAVERS BLDG__CABANATUAN_0616</option>
                                        <option value='TARLAC MAC_MEGA SAVERS-SAN FERNANDO LA UNION'>TARLAC MAC_MEGA SAVERS-SAN FERNANDO LA UNION</option>
                                        <option value='TARLAC MAC_SAVERS_ABANAO ST__BAGUIO_0516'>TARLAC MAC_SAVERS_ABANAO ST__BAGUIO_0516</option>
                                        <option value='TARLAC MAC_SAVERS_JUMBO JENRA SINDALAN__SAN FERNANDO_0717'>TARLAC MAC_SAVERS_JUMBO JENRA SINDALAN__SAN FERNANDO_0717</option>
                                        <option value='TARLAC MAC_SAVERS_MARCOS DISTRICT BRGY__TALAVERA_1116'>TARLAC MAC_SAVERS_MARCOS DISTRICT BRGY__TALAVERA_1116</option>
                                        <option value='TARLAC MAC_STO. ROSARIO_ANGELES_PAMPANGA_0321'>TARLAC MAC_STO. ROSARIO_ANGELES_PAMPANGA_0321</option>
                                        <option value='TIONGSAN-HARRISON BAGUIO'>TIONGSAN-HARRISON BAGUIO</option>
                                        <option value='TIONGSAN-LA TRINIDAD'>TIONGSAN-LA TRINIDAD</option>
                                        <option value='VIC IMPERIAL CORP.-ARANETA ST BACOLOD'>VIC IMPERIAL CORP.-ARANETA ST BACOLOD</option>
                                        <option value='VIC IMPERIAL CORP.-IZNART ST ILOILO'>VIC IMPERIAL CORP.-IZNART ST ILOILO</option>
                                        <option value='WESTERN-IMUS ANABU'>WESTERN-IMUS ANABU</option>
                                        <option value='WESTERN-PUREGOLD BATANGAS'>WESTERN-PUREGOLD BATANGAS</option>
                                        <option value='WILKRIS-MIAG-AO'>WILKRIS-MIAG-AO</option>
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
        <div id="registration_successful" class="d-none" style="max-width: 640px; min-width: 400px; margin: auto;">
            <img src="/images/finish.png" width="100%" />


            <div class="border rounded-3 p-5 mt-4">
                <H5>Registration Successful</H5>
                <p>Please wait for the feedback of our installer.</p>
                <a href="/samsung">New Application</a>
            </div>
            <div class="d-flex justify-content-center my-5">
                <small>Globe At Home 2024</small>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        @vite(['resources/js/location.js'])

    </body>

</html>

<script>


    $(".form-check-label").click(function(){

        $("#agree_policy").prop('checked', true);

    });

    $(document).on("click", ".action_button", function(e){

        e.preventDefault();

        if( Checker() ) {

            let form = new FormData( $("#samsung_form")[0] );

            $.ajax({
                type: 'post',
                url: "/supervendor/ajax-public",
                data: form,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                success: function(resp){

                    console.log(resp) ;

                    if( resp.error == false ){
                        $(document).find("#registration_form").addClass("d-none");
                        $(document).find("#registration_successful").removeClass("d-none");
                    } else {
                    }
                },
                error: function(){
                    console.log("Error in AJAX");
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

    function SubmitData(){


    }


</script>
