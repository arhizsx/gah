<x-vouchers-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg bg-white" style="margin-left: 30%; margin-right: 30%; padding: 30px; margin-top: auto; margin-bottom: auto; border-radius: 30px;">
            <input type="text" class="form-control w-100">
        </div>
    </x-slot>
</x-app-layout>

