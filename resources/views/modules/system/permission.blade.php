<x-vouchers-blank-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unauthorized Access') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="shadow-lg mt-5 mb-5 p-5 bg-white" style="margin: 25vw; border-radius: 25px; border: 3px solid red;">

            <H1 style="font-size: 2.5em; font-weight: bolder; margin-bottom: 15px;">Unauthorized Access</h1>
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
            <p>If you need access to this module please press the button below</p>
        </div>
    </x-slot>
</x-app-layout>
