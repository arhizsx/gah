<x-vouchers-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Search') }}
        </h2>
    </x-slot>

    <x-slot name="slot">

        <style>
        /* Style for the X button */
        #clear_search {
        font-size: 1.3em;
        color: blue; /* Make it stand out */
        z-index: 1000; /* Ensure it's on top */
        }   
        
        #clear_search:hover {
            color: #333;
        }    
        .search_info {
            font-size: 1.2em;
        }
        </style>
        <div class="container d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 30vh)">
            <x-dynamic-component :component="'search-' . $position" />
        </div>

        <div id="results_box" class="container-fluid d-none">
            <div class="border shadow-lg bg-white p-4 rounded-4 w-100 mb-4">
                <div class="row">
                    <div class="col border-bottom">
                        <H1 style="font-size: 2em; font-weight: bolder;">Result(s)</H1>
                    </div>
                </div>
                <div class="row" id="results_list">

                </div>
            </div>
        </div>
    </x-slot>
    
</x-app-layout>