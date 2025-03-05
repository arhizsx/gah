<x-system-blank-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Choose Module') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
    <div class="container d-flex justify-content-center align-items-center px-3" style="min-height: calc(100vh - 30vh)">


        @foreach( $modules as $module )
            <div class="border shadow-lg bg-white px-5 py-3 rounded-5" style="min-width: 25vw;">
            {{ $module->label }}
            </div>
        @endforeach
    </div>
    </x-slot>
    
</x-system-blank-layout>
