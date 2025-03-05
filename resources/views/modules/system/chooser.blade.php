<x-system-blank-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Choose Module') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
    <div class="container justify-content-center align-items-center px-3 d-flex" style="min-height: calc(100vh - 30vh)">

        <div class="row">   
        @foreach( $modules as $module )
            <div class="border mx-3 text-center shadow-lg bg-white  p-2 rounded-5 col" style="width: calc( 100vw / 4 );  min-width: 300px;;">
                <div> <img width="100%" src="{{ $module->image }}" class="rounded-5" /> </div>
                <div style="font-size: 1.25em; font-weight: bolder;"> {{ $module->label }} </div>
            </div>
        @endforeach
        </div>

    </div>
    </x-slot>
    
</x-system-blank-layout>
