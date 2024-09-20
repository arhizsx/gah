<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <x-slot name="slot">

        <div class="container-fluid" style="height:auto; margin-top:50px;">
            <div class="row">
                @foreach( $data as $d )
                    @if( $d->campaign == "SAMSUNG" )
                        <div class="col">
                            {{ $d->status }}
                            {{ $d->count }}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </x-slot>
</x-app-layout>
