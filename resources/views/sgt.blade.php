<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SGT') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">

            <div id="gridContainer"></div>

        </div>
    </x-slot>


</x-app-layout>

<!-- Modal -->
<div class="modal fade" id="application_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Application Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="section-title">Personal Information</div>
                    <div class="row mt-3 mb-3">
                        <div class="col-3">
                            <label for="complete_name">Complete Name</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="complete_name" id="complete_name" placeholder="Customer Name">
                        </div>
                    </div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="mobile_number">Mobile Number</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="section-title">Installation Address</div>
                    <div class="row mt-3 mb-3">
                        <div class="col-3">
                            <label for="province">Province</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="province" id="province" placeholder="Province">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="city">City</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="city" id="city" placeholder="City">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="brgy_village">Barangay / Village</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="brgy_village" id="brgy_village" placeholder="Barangay / Village">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="street">Street</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="street" id="street" placeholder="Street">
                        </div>
                    </div>
                    <div class="row mb-3 pb-3">
                        <div class="col-3">
                            <label for="house_floor_bldg">House no., Floor no., Bldg</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="house_floor_bldg" id="house_floor_bldg" placeholder="House no., Floor no., Bldg">
                        </div>
                    </div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="house_floor_bldg">Schedule</label>
                        </div>
                        <div class="col-5">
                            <input class="form-control form-control-sm" type="text" value="" name="schedule_date" id="schedule_date" placeholder="Schedule Date">
                        </div>
                        <div class="col-4">
                            <input class="form-control form-control-sm" type="text" value="" name="schedule_hour" id="schedule_hour" placeholder="Schedule Hour">
                        </div>
                    </div>
                    <div class="section-title">Attachments</div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col text-center" id="proof_of_purchase_col">
                            <div  class="border" style="width: 100%;">
                                <a target="_blank" href="" id="href_receipt"><img src="" id="img_receipt" alt-text="receipt"/></a>
                            </div>
                            <small>Proof of Purchase</small>
                        </div>
                        <div class="col text-center" id="serviceability_col">
                            <div  class="border" style="width: 100%;">
                                <a target="_blank" href="" id="href_serviceability_check"><img src=""  id="img_serviceability_check" alt-text="serviceability_check"/></a>
                            </div>
                            <small>Serviceability</small>
                        </div>
                    </div>
                    <div class="section-title">Remarks</div>
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control form-control-sm" name="remarks" id="remarks" placeholder="Remarks"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                @if( \Auth::user()->company == null )

                <button type="button" class="btn btn-success btn-action" data-user_mode="gt" data-action="application_endorsed" data-confirm="yes" data-id="">Endorse to SV</button>
                <button type="button" class="btn btn-warning btn-action" data-user_mode="gt" data-action="application_pending" data-confirm="yes" data-id="">Pending</button>
                <button type="button" class="btn btn-danger btn-action" data-user_mode="gt" data-action="application_dropped" data-confirm="yes" data-id="">Drop</button>

                <button type="button" class="btn btn-dark btn-action" data-user_mode="gt" data-action="application_cancelled" data-confirm="yes" data-id="">Cancelled</button>
                <button type="button" class="btn btn-primary btn-action" data-user_mode="gt" data-action="application_installed" data-confirm="yes" data-id="">Installed</button>

                @else 

                <!-- <button type="button" class="btn btn-dark btn-action" data-user_mode="vendor" data-action="application_cancelled" data-confirm="yes" data-id="">Cancelled</button>
                <button type="button" class="btn btn-primary btn-action" data-user_mode="vendor" data-action="application_installed" data-confirm="yes" data-id="">Installed</button> -->

                @endif

            </div>
        </div>
    </div>
</div>

<!-- Confirm Modal -->
<div class="modal fade" id="confirm_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Are You Sure?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-center p-5">
                            Are you sure you want to set this to <strong><span class="new_status"></span></strong>
                        </div>
                    </div>
                    <div id="custom_field">

                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-3">
                            <label for="confirm_complete_name">Complete Name</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="confirm_complete_name" id="confirm_complete_name" placeholder="Customer Name">
                        </div>
                    </div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="confirm_mobile_number">Mobile Number</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="confirm_mobile_number" id="confirm_mobile_number" placeholder="Mobile Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button id="confirm_btn" type="button" class="confirm_btn btn btn-success btn-action" data-user_mode="gt" data-action="confirm_action" data-confirm_type="confirm_pending" data-next_action="" data-id="">Yes</button>
            </div>
        </div>
    </div>
</div>



<script>
let svar = "sample variable 101";
let modal = "#application_details";
let datagrid = "#gridContainer";
let datasource = '/supervendor/data/sgt';
let columns = [
    'campaign', 
    'complete_name', 
    'mobile_number', 
    'province', 
    'city', 
    'street', 
    'brgy_village', 
    'house_floor_bldg', 
    'vendor', 
    'SGT Name', 
    'status', 
    'Registration Date', 
    'Last Update', 
    "Aging",
    {
        dataField: "area_head_name",
        caption: "Area Head",
        visible: false,
    },
    {
        dataField: "area_head_email",
        caption: "Area Head Email",
        visible: false,
    },
    {
        dataField: "cge_name",
        caption: "CGE",
        visible: false,
    },
    {
        dataField: "cge_email",
        caption: "CGE Email",
        visible: false,
    }
];
let callback = 'callbackAction';


$(() => {

    $(datagrid).setDatagrid( modal, datasource, columns, callback);

});

$(document).on("click", ".btn-action", function(){

    if (typeof $(this).data('confirm') !== 'undefined') {

        $(document).find(".confirm_btn").attr("disabled", false);

        if( $(this).data('confirm') == "yes" ){

            $(document).find("#confirm_modal").modal("show");
            $(document).find("#application_details").modal("hide");

            var new_status = "";
            $(document).find("#custom_field").html('');

            switch(  $(this).data("action") ){

                case "application_endorsed":
                    new_status = "ENDORSED";
                break;

                case "application_pending":
                    new_status = "PENDING";

                    $(document).find("#custom_field").html(
                        '<div class="row mt-3 mb-3">' +
                            '<div class="col-3">' +
                                '<label for="confirm_complete_name">Pending Type</label>' +
                            '</div>' +
                            '<div class="col-9">' +
                                '<select name="pending_type" class="form-control selectType" id="pendingType">' +
                                    '<option value="">Select Pending Type</option>' +
                                    '<option value="Pending - Customer Availability">Pending - Customer Availability</option>' +
                                    '<option value="Pending - SV Capacity Issue">Pending - SV Capacity Issue</option>' +
                                    '<option value="Pending - Adverse Weather">Pending - Adverse Weather</option>' +
                                    '<option value="Pending - Customer Uncontacted">Pending - Customer Uncontacted</option>' +
                                    '<option value="Pending - Customer Undecided / On Hold by Subs">Pending - Customer Undecided / On Hold by Subs</option>' +
                                    '<option value="Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)">Pending - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)</option>' +
                                    '<option value="Pending - OSS / DGT System Issue">Pending - OSS / DGT System Issue</option>' +
                                    '<option value="Pending - Permit Access Issue VG / Subdivision / Barangay">Pending - Permit Access Issue VG / Subdivision / Barangay</option>' +
                                '</select>' +
                            '</div>' +
                        '</div>'
                    )

                    $(document).find(".confirm_btn").attr("data-confirm_type", "pending_confirm");
                    $(document).find(".confirm_btn").attr("disabled", "disabled");

                break;

                case "application_dropped":
                    new_status = "DROPPED";
                break;

                case "application_cancelled":
                    new_status = "CANCELLED";

                    $(document).find("#custom_field").html(
                        '<div class="row mt-3 mb-3">' +
                            '<div class="col-3">' +
                                '<label for="confirm_complete_name">Cancellation Type</label>' +
                            '</div>' +
                            '<div class="col-9">' +
                                '<select name="cancellation_type" class="form-control selectType" id="cancellationType">' +
                                    '<option value="">Select Cancellation Type</option>' +
                                    '<option value="Cancelled - Customer Uncontacted and Address Cant Be Located">Cancelled - Customer Uncontacted and Address Cant Be Located</option>' +
                                    '<option value="Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)">Cancelled - Last Mile Issue (OVS, Roadblocked, ROW, High Risk)</option>' +
                                    '<option value="Cancelled - Customer Does not want to avail anymore">Cancelled - Customer Does not want to avail anymore</option>' +
                                    '<option value="Cancelled - Permit Access Issue VG / Subdivision / Barangay">Cancelled - Permit Access Issue VG / Subdivision / Barangay</option>' +
                                '</select>' +
                            '</div>' +
                        '</div>'
                    )
                    
                    $(document).find(".confirm_btn").attr("data-confirm_type", "cancellation_confirm");
                    $(document).find(".confirm_btn").attr("disabled", "disabled");

                break;

                case "application_installed":
                    new_status = "INSTALLED";
                break;

            }

            $(document).find(".new_status").text(new_status);

            $(document).find("#confirm_btn").attr("data-next_action", $(this).data("action"));
            $(document).find("#confirm_btn").attr("data-id", $(this).data("id"));

            var complete_name = $(modal).find("[name='complete_name']").val();
            var mobile_number = $(modal).find("[name='mobile_number']").val();

            $(document).find("#confirm_modal").find("[name='confirm_complete_name']").val(complete_name);
            $(document).find("#confirm_modal").find("[name='confirm_mobile_number']").val(mobile_number);


        }
        
    } else {

        var action = "";

        if( $(this).data("action")  == "confirm_action"){
            action = $(this).data("next_action");
        } else {
            action = $(this).data("action");
        }

        $.ajax({
            url: "/supervendor/ajax",
            method: "POST",
            data: {
                "action" : action,
                "remarks": $(document).find(modal).find("[name='remarks']").val(),
                "id": $(this).data("id")
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(resp){
                if(resp.error == false){
                    location.reload();
                }
            },
            error: function(){
                console.log("Error in AJAX");
            }
        });

    }


});

$(document).on('change', '.selectType', function() {

    if($(this).val() != "" ){
        $(document).find(".confirm_btn").attr("disabled", false)
        $(document).find(".confirm_btn").attr("data-next_action", $(this).val());

    } else {
        $(document).find(".confirm_btn").attr("disabled", "disabled")
    }

});

function callbackAction(data){

    applicationSetImage(data);

    if( data.campaign == "XIAOMI" ){

        $(document).find("#proof_of_purchase_col").addClass("d-none");

    }
    else if( data.campaign == "TM" ){

        $(document).find("#proof_of_purchase_col").addClass("d-none");

    }
    else if( data.campaign == "SAMSUNG" ){

    }


    var show_vendor = [];
    var vendor_btns = $(document).find(modal).find(".btn-action[data-user_mode='vendor']");

    if( $.inArray( data.status, show_vendor ) >= 0){
        vendor_btns.removeClass("d-none");
    } else {
        vendor_btns.addClass("d-none");
    }

    var show_gt = ["REGISTERED", "PENDING", "Pending - Customer Availability", "Pending - SV Capacity Issue", "Pending - Adverse Weather", "Pending - Customer Uncontacted", "DROPPED", "ENDORSED"];
    var gt_btns = $(document).find(modal).find(".btn-action[data-user_mode='gt']");

    if( $.inArray( data.status, show_gt ) >= 0){
        gt_btns.removeClass("d-none");
    } else {
        gt_btns.addClass("d-none");
    }

}


function applicationSetImage(data){

    $("#img_receipt").attr("src", "/files/" + data.receipt);
    $("#img_serviceability_check").attr("src",  "/files/" + data.serviceability_check);

    $("#href_receipt").attr("href", "/files/" + data.receipt);
    $("#href_serviceability_check").attr("href",  "/files/" + data.serviceability_check);

}

</script>
