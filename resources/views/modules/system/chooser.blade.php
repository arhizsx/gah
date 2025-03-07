<x-system-blank-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Choose Module') }}
        </h2>
    </x-slot>

    <x-slot name="slot">
    <div class="container justify-content-center align-items-center px-3 d-flex" style="min-height: calc(100vh - 10vh)">

        <div class="row">   
        @php  

          $counter =  count( $modules );

          if( $counter == 1 ){
            $col = 12;
          }
          elseif( $counter == 2 ){
            $col = 6;
          }
          elseif( $counter == 3 ){
            $col = 4;
          }
          elseif( $counter == 4 ){
            $col = 3;
          } 
          else {
            $col = 3;
          }

        @endphp 

        @foreach( $modules as $module )
            <a href="{{ $module->link }}" class="col-xl-{{ $col }}">
                <div class="border m-2 text-center shadow-lg bg-white  p-3 rounded-5">
                    <div> <img width="100%" src="{{ $module->image }}" class="rounded-5" /> </div>
                    <div style="font-size: 1.25em; font-weight: bolder;"> {{ $module->label }} </div>
                </div>
            </a>
        @endforeach
        </div>

    </div>
    </x-slot>
    
</x-system-blank-layout>
