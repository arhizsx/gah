<x-administrator-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data') }}
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
        <div class="border rounded-3 shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded" style="overflow-x:auto;">
            <div class="componentTitle"><i class="fa-solid fa-file-import"></i> File Imports</div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Path</th>
                        <th>Timestamp</th>
                        <th>File Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($imports as $import)
                        <tr class="table-row">
                            <td>{{ $import["path"] }}</td>   
                            <td>{{ $import["timestamp"] }}</td>   
                            <td>{{ $import["mimeType"] }}</td>   
                            <td>
                                <a href='/administrator/data/import/?file={{ urlencode($import["path"]) }}' target="_blank" class="btn btn-primary">View</a>
                            </td>   
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-administrator-layout>

