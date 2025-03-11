<x-administrator-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('File Import') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <style>
            .componentTitle {
                font-size: 1.5em;
                font-weight: bolder;
                margin-bottom: .5em;
            }
        </style>
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded" style="overflow-x:auto;">
            <div class="d-flex justify-content-between">
                <div class="componentTitle">
                    <i class="fa-solid fa-file-import mr-2"></i>{{ $file }}
                </div>
                <div class="ml-auto">
                    <button class="btn btn-secondary btn-action" data-action="sql">
                        <i class="fa-solid fa-database mr-2"></i> SQL
                    </button>
                </div>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        @foreach( $data[0] as $k => $d )
                            <th>{{ $d }}</th>
                        @endforeach
                    </tr>
                <tbody>
                    @foreach( $data as $k => $d )                    
                        @php 
                            if( $k > 0){
                                echo '<tr>';
                                    foreach($d as $key => $value) {
                                        echo '<td>' . $value . '</td>';
                                    }
                                echo '</tr>';
                            }
                        @endphp
                    @endforeach
                </tbody>    
            </table>                            
        </div>
    </x-slot>
</x-administrator-layout>

