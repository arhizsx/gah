<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <x-slot name="slot">

        <div class="container-fluid" style="height:auto; margin-top:50px;">
            <div class="row">
                @php 
                    print_r($data);
                @endphp 
            </div>
        </div>

    </x-slot>
</x-app-layout>
