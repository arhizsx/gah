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
                    <H1><strong>Personal Information</strong></H1>
                    <div class="row mt-3 mb-3">
                        <div class="col-3">
                            <label for="province">Customer Name</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" value="" name="province" id="province" placeholder="Customer Name">
                        </div>
                    </div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="province">Mobile Number</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" value="" name="province" id="province" placeholder="Mobile Number">
                        </div>
                    </div>
                    <H1><strong>Primary Installation Address</strong></H1>
                    <div class="row mt-3 mb-3">
                        <div class="col-3">
                            <label for="province">Province</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" value="" name="province" id="province" placeholder="Province">
                        </div>
                    </div>
                    <div class="row mb-4 border-bottom pb-3">
                        <div class="col-3">
                            <label for="city">City</label>
                        </div>
                        <div class="col-9">
                            <input class="form-control" type="text" value="" name="city" id="city" placeholder="City">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Installed</button>
            </div>
        </div>
    </div>
</div>

<script>

let modal = "#application_details";
let datagrid = "#gridContainer";
let datasource = '/supervendor/data/applications';
let columns = ['campaign', 'name', 'email', 'action'];


$(() => {

    $(datagrid).setDatagrid( modal, datasource, columns );

});

</script>
