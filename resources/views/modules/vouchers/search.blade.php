<x-vouchers-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 450px)">
            <div class="border shadow-lg bg-white p-5 rounded-5 w-100" style="max-width: 600px;">
                <label class="mb-3" >Mobile Number</label>
                <input type="text" class="form-control w-100 mb-3" style="font-size: 2em;">
                <button class="btn btn-primary round-3 px-5">Search</button>
            </div>
        </div>
    </x-slot>
</x-app-layout>

