<x-vouchers-blank-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unauthorized Access') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">

            <H1>Permission Denied</H1>
            <hr>
            {{ Auth::user()->email }}

        </div>
    </x-slot>
</x-app-layout>
