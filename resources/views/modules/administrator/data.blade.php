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
            <div class="d-flex justify-content-between">
                <div class="componentTitle">
                    <i class="fa-solid fa-file-import"></i> File Imports
                </div>
                <div class="ml-auto">
                    <button class="btn btn-primary btn-action" data-action="uploadFile">
                        <i class="fa-solid fa-upload"></i> Upload File
                    </button>
                    <button class="btn btn-secondary btn-action" data-action="sql">
                        <i class="fa-solid fa-database"></i> SQL
                    </button>
                </div>
                
            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Path</th>
                        <th>Timestamp</th>
                        <th>File Type</th>
                        <th class='text-end'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($imports as $import)
                        <tr class="table-row">
                            <td>{{ $import["path"] }}</td>   
                            <td>{{ $import["timestamp"] }}</td>   
                            <td>{{ $import["mimeType"] }}</td>   
                            <td class='text-end'>
                                <a href='/administrator/data/import/?file={{ urlencode($import["path"]) }}' target="_blank" class="btn btn-dark">View</a>
                                <a href='/administrator/data/delete/?file={{ urlencode($import["path"]) }}' target="_blank" class="btn btn-danger">Delete</a>
                            </td>   
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal" id="serviceModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="serviceModallLabel" style="font-size: 1.3em; font-weight: bolder;">
                            Select File to Upload                    
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-main">
                            <div class="row">
                                <div class="col-12">
                                    <label>File</label>
                                    <input type="file" class="form-control mb-3" name="file" id="file">
                                </div>
                            </div>
                        </div>
                        <div class="modal-loading d-none">
                            <div class="p-5 text-center">
                                <i class="fa-solid text-primary fa-spinner fa-spin fa-10x"></i> 
                                <div class="p-3">Please wait...</div>
                            </div>
                        </div>
                        <div class="modal-success d-none">
                            <div class="p-5 text-center">
                                <i class="fa-regular text-success fa-circle-check fa-10x"></i>
                                <div class="p-3">Success</div>
                            </div>
                        </div>
                        <div class="modal-error d-none">
                            <div class="p-5 text-center">
                                <i class="fa-solid text-danger fa-triangle-exclamation fa-10x"></i>
                                <div class="p-3 error-message">Error Encountered</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Upload File</button>
                    </div>
                </div>
            </div>
        </div>

        <script>

            $(document).on("click", ".btn-action", function() {
                var action = $(this).data("action");

                if( action == "uploadFile" ) {
                    $("#serviceModal").modal("show");
                }
            });

        </script>

    </x-slot>    
</x-administrator-layout>

