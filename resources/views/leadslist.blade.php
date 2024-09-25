<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leads List') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">

        <div id="gridContainer"></div>

        </div>
    </x-slot>
</x-app-layout>

<script> 

let x= "";
let modal = "";
let datagrid = "#gridContainer";
let datasource = '/supervendor/data/leadslist';
let columns = ['campaign', 'complete_name', 'mobile_number', 'province', 'city', 'street', 'brgy_village', 'vendor', 'SGT Name', 'status', 'Registration Date', 'Last Update', "schedule_date", "Aging"];

$(() => {

    $(datagrid).setDatagrid( modal, datasource, columns );

});



</script>
