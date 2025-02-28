<x-vouchers-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-5 bg-white rounded" style="margin-left: 20%vh; margin-right: 20%vh; margin-top: autol margin-bottom: auto;">
            <input type="text" class="search_input forn-control" >
        </div>
    </x-slot>
</x-app-layout>

