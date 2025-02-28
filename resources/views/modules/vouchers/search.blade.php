<x-vouchers-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search') }}
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
let datasource = '/vouchers/data/vouchers';
let columns = [
    "Reference Number",
    "First Name",
    "Middle Name",
    "Last Name",
    "Suffix",
    "Mobile Number",
    "Email",
    "Report/Lead Type",
    "Product SKU",
    "Purchased At (Date+Time)",
    "Payment Method",
    "Payment Status",
    "Acqui Channel",
    "Revenue",
    "Payment Transaction ID",
    "Expired At (Date)",
    "Expired At (Time)",
    "Voucher Type",
    "Date Emailed",
    "Voucher Assigned",
    "Email Sent Date",
    "Viber/SMS Sent Date",
    "Viber/SMS  Status",
    "Redemption Date",
    ];

$(() => {

    $(datagrid).setDatagrid( modal, datasource, columns );

});



</script>
