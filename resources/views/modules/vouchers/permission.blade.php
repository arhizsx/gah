<x-vouchers-blank-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Unauthorized Access') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <div class="border shadow-lg p-3 mx-3 mt-3 mb-5 bg-white rounded">

            <H1 style="font-size: 1.5em">User Details</h1>
            <table class="table-bordered table">
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
                </tbody>
            </table>

        </div>
    </x-slot>
</x-app-layout>
