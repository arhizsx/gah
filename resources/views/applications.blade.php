<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applications') }}
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
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="house_floor_bldg">House no., Floor no., Bldg</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="house_floor_bldg" id="house_floor_bldg" placeholder="House no., Floor no., Bldg">
                        </div>
                    </div>
                    {{-- <div class="section-title">Secondary Installation Address</div>
                    <div class="row mt-3 mb-3">
                        <div class="col-3">
                            <label for="province">Province</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="province2" id="province2" placeholder="Province">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="city">City</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="city2" id="city2" placeholder="City">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="brgy_village">Barangay / Village</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="brgy_village2" id="brgy_village2" placeholder="Barangay / Village">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="street">Street</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="street" id="street2" placeholder="Street">
                        </div>
                    </div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="house_floor_bldg">House no., Floor no., Bldg</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-sm" type="text" value="" name="house_floor_bldg2" id="house_floor_bldg2" placeholder="House no., Floor no., Bldg">
                        </div>
                    </div> --}}
                    <div class="section-title">Attachments</div>
                    <div class="row">
                        <div class="col">
                            <div  class="border" style="height: 180px; width: 100%;">
                                <img src="" alt-text="one"/>
                            </div>
                            <input class="form-control" type="text" name='serviceability_check'>

                        </div>
                        {{-- <div class="col">
                            <div  class="border" style="height: 180px; width: 100%;">
                                <img src="" alt-text="one"/>
                            </div>
                            <input class="form-control" type="text" name='serviceability_check2'>
                        </div> --}}
                        <div class="col">
                            <div  class="border" style="height: 180px; width: 100%;">
                                <img src="" alt-text="one"/>
                            </div>
                            <input class="form-control" type="text" name='receipt'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-action" data-action="application_installed" data-id="">Installed</button>
            </div>
        </div>
    </div>
</div>

<script>

let modal = "#application_details";
let datagrid = "#gridContainer";
let datasource = '/supervendor/data/applications';
let columns = ['campaign', 'complete_name', 'mobile_number', 'province', 'city', 'supervendor'];
let callback = 'applicationSetImage';


$(() => {

    $(datagrid).setDatagrid( modal, datasource, columns, callback );

});

$(document).on("click", ".btn-action", function(){
    let action = $(this).data("action");

    $.ajax({
        url: "/supervendor/ajax",
        method: "POST",
        data: {
            "action" : "application_installed",
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

function applicationSetImage(data){

    console.log(data.receipt);
    console.log(data.serviceability_check);
}


</script>
