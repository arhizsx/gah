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

<script>

let datagrid = "#gridContainer";
let datasource = '/supervendor/data/applications';
let columns = ['campaign', 'name', 'email', 'action'];


$(() => {

    $(datagrid).setDatagrid( datasource, columns );

});

</script>
