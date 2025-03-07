<x-system-blank-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unauthorized Access') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="shadow-lg mt-5 mb-5 p-5 bg-white" style="margin: 25vw; border-radius: 25px; border: 3px solid red;">

            <H1 style="font-size: 2.5em; font-weight: bolder; margin-bottom: 15px;">Unauthorized Access</h1>
            <p>You do not have permission to access this module. Your access attempt has been logged.</p>
            <div class="p-4">
                <a class="btn btn-primary form-control" href="/chooser">Your Modules</a>
            </div>
        </div>
    </x-slot>
</x-system-blank-layout>
