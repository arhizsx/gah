<x-vouchers-blank-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unauthorized Access') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg mt-5 mb-5 p-5 bg-white rounded" style="margin: 25vw">

            <H1 style="font-size: 2.5em; font-weight: bolder; margin-bottom: 15px;">You Are Not Allowed</h1>
            <!-- <table class="table-bordered table">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>IP Address</td>
                        <td>{{ $requestDetails["ip"] }}</td>
                    </tr>
                    <tr>
                        <td>User Agent</td>
                        <td>{{ $requestDetails["user_agent"] }}</td>
                    </tr>
                    <tr>
                        <td>Method</td>
                        <td>{{ $requestDetails["method"] }}</td>
                    </tr>
                    <tr>
                        <td>URL</td>
                        <td>{{ $requestDetails["url"] }}</td>
                    </tr>
                    <tr>
                        <td>Timestamp</td>
                        <td>{{ now() }}</td>
                    </tr>
                </tbody>
            </table> -->
            <p>If you need an access to the Vouchers Module please press the button below</p>
            <div class="col-12 mt-4">
                <button class="btn btn-primary form-control">Request Access to Vouchers</button>
            </div>
        </div>
    </x-slot>
</x-app-layout>
