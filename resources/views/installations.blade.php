<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Processed') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">

        <div id="gridContainer"></div>

        </div>
    </x-slot>
</x-app-layout>

<!-- Modal -->
<div class="modal fade" id="installation_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Installation Details</h1>
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
                    <div class="section-title">Remarks</div>
                    <div class="row">
                        <div class="col-12">
                            <input disabled class="form-control form-control-sm" type="text" value="" name="remarks" id="remarks" placeholder="Remarks">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-action" data-user_mode="gt" data-action="application_registered" data-id="">Back to Registered</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script> 

let modal = "#installation_details";
let datagrid = "#gridContainer";

let datasource = new DevExpress.data.CustomStore({
    key: "id", // Primary key for data tracking
    load: function () {
        return $.getJSON("/supervendor/data/installations");
    },
});

let columns = [
    {
        dataField: 'id',
        caption: 'ID',
        width: '60',
    },
    {
        dataField: 'campaign',
        caption: 'campaign',
        width: '100',
    },
    {
        dataField: 'source',
        caption: 'source',
        width: '100',
    },
    {
        dataField: 'complete_name',
        caption: 'Complete Name',
        width: '250',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.complete_name} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'mobile_number',
        caption: 'Mobile No',
        width: '120',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.mobile_number} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'province',
        caption: 'Province',
        width: '189',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.province} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'city',
        caption: 'City',
        width: '189',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.city} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: "street",
        caption: "Street",
        visible: false,
    },
    {
        dataField: "brgy_village",
        caption: "Brgy / Village",
        visible: false,
    },
    {
        dataField: "house_floor_bldg",
        caption: "House Flr / Bldg",
        visible: false,
    },
    {
        dataField: "schedule_date",
        caption: "Sched Date",
        visible: true,
    },
    {
        dataField: 'status',
        caption: 'Status',
        width: '180',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.status} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'vendor',
        caption: 'Vendor',
        width: '190',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data.vendor} `)
                        .appendTo(container);
            }
        },
    },
    {
        dataField: 'SGT Name',
        caption: 'Area Head',
        width: '190',
        cellTemplate(container, options) {
            if (options.data != null)  {

                $('<div>')
                        .css({
                            "white-space": "normal",  // Allows wrapping to new lines
                            "word-wrap": "break-word", // Breaks long words
                            "overflow": "visible",     // No overflow restriction
                        })
                        .append(`${options.data['SGT Name']} `)
                        .appendTo(container);
            }
        },
    },

    'Registration Date', 
    'Last Update', 
    "Aging",
];

$(() => {

    $(datagrid).setDatagrid( modal, datasource, columns );

});


$(document).on("click", ".btn-action", function(){
    let action = $(this).data("action");

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

});

function applicationSetImage(data){

$("#img_receipt").attr("src",  "");
$("#href_receipt").attr("href", "");

$("#img_serviceability_check").attr("src",  "");
$("#href_serviceability_check").attr("href", "");

$.ajax({
    url: "/supervendor/gcsExists/" + data.receipt,
    method: "GET",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(resp){
        $("#img_receipt").attr("src",  resp.url);
        $("#href_receipt").attr("href", resp.url);
    },
    error: function(){
    }
});

$.ajax({
    url: "/supervendor/gcsExists/" + data.serviceability_check,
    method: "GET",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function(resp){
        $("#img_serviceability_check").attr("src",  resp.url);
        $("#href_serviceability_check").attr("href",  resp.url);
    },
    error: function(){
    }
});


}


</script>
