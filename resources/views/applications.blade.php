<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Work Orders') }}
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
                            <input disabled class="form-control form-control-sm" type="text" value="" name="complete_name" id="complete_name" placeholder="Customer Name">
                        </div>
                    </div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="mobile_number">Mobile Number</label>
                        </div>
                        <div class="col-9">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="section-title">Installation Address</div>
                    <div class="row mt-3 mb-3">
                        <div class="col-3">
                            <label for="province">Province</label>
                        </div>
                        <div class="col-9">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="province" id="province" placeholder="Province">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="city">City</label>
                        </div>
                        <div class="col-9">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="city" id="city" placeholder="City">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="brgy_village">Barangay / Village</label>
                        </div>
                        <div class="col-9">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="brgy_village" id="brgy_village" placeholder="Barangay / Village">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="street">Street</label>
                        </div>
                        <div class="col-9">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="street" id="street" placeholder="Street">
                        </div>
                    </div>
                    <div class="row mb-3     pb-3">
                        <div class="col-3">
                            <label for="house_floor_bldg">House no., Floor no., Bldg</label>
                        </div>
                        <div class="col-9">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="house_floor_bldg" id="house_floor_bldg" placeholder="House no., Floor no., Bldg">
                        </div>
                    </div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="house_floor_bldg">Schedule</label>
                        </div>
                        <div class="col-5">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="schedule_date" id="schedule_date" placeholder="Schedule Date">
                        </div>
                        <div class="col-4">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="schedule_hour" id="schedule_hour" placeholder="Schedule Hour">
                        </div>
                    </div>
                    <div class="section-title">Attachments</div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col text-center">
                            <div  class="border" style="width: 100%;">
                                <a target="_blank" href="" id="href_receipt"><img src="" id="img_receipt" alt-text="receipt"/></a>
                            </div>
                            <small>Proof of Purchase</small>
                        </div>
                        <div class="col text-center">
                            <div  class="border" style="width: 100%;">
                                <a target="_blank" href="" id="href_serviceability_check"><img src=""  id="img_serviceability_check" alt-text="serviceability_check"/></a>
                            </div>
                            <small>Serviceability</small>
                        </div>
                    </div>
                    <div class="section-title">Remarks</div>
                    <div class="row">
                        <div class="col-12">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="remarks" id="remarks" placeholder="Remarks">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                @if( \Auth::user()->company == null )

                {{-- <button type="button" class="btn btn-success btn-action" data-user_mode="gt" data-action="application_endorsed" data-id="">Endorse to SV</button>
                <button type="button" class="btn btn-warning btn-action" data-user_mode="gt" data-action="application_pending" data-id="">Pending</button>
                <button type="button" class="btn btn-danger btn-action" data-user_mode="gt" data-action="application_dropped" data-id="">Drop</button> --}}

                @else


                <button type="button" class="btn btn-danger btn-action" data-user_mode="vendor" data-action="application_cancelled" data-id="">Cancelled</button>
                <button type="button" class="btn btn-primary btn-action" data-user_mode="vendor" data-action="application_installed" data-id="">Installed</button>

                @endif

            </div>
        </div>
    </div>
</div>

<script>

let modal = "#application_details";
let datagrid = "#gridContainer";
let datasource = '/supervendor/data/applications';
let columns = ['campaign', 'complete_name', 'mobile_number', 'province', 'city', 'vendor', 'SGT Name', 'status', 'Registration Date', 'Last Update'];
let callback = 'callbackAction';


$(() => {

    $(datagrid).setDatagrid( modal, datasource, columns, callback );

});

$(document).on("click", ".btn-action", function(){
    let action = $(this).data("action");

    $.ajax({
        url: "/supervendor/ajax",
        method: "POST",
        data: {
            "action" : action,
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

});

function callbackAction(data){

    applicationSetImage(data);

    if( data.campaign == "XIAOMI" ){

    }

    var show_vendor = ["ENDORSED"];
    var vendor_btns = $(document).find(modal).find(".btn-action[data-user_mode='vendor']");

    if( $.inArray( data.status, show_vendor ) >= 0){
        vendor_btns.removeClass("d-none");
    } else {
        vendor_btns.addClass("d-none");
    }

    var show_gt = ["REGISTERED", "PENDING", "DROPPED"];
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
