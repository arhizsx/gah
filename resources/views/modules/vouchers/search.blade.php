<x-vouchers-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Voucher Search') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 500px)">
            <div class="border shadow-lg bg-white p-4 rounded-4 w-100" style="max-width: 600px;">
                <label>Search</label>
                <input type="text" class="form-control w-100" style="font-size: 2em;">
            </div>
        </div>
    </x-slot>
</x-app-layout>

