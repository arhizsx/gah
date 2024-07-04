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
    <div class="modal-dialog modal-xl modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Application Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <H5>Details</H5>
                        </div>
                        <div class="col-lg-4">
                            <H5>Attachments</H5>
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
