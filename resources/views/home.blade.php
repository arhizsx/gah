<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <style>
            h1 {
                font-size: 2rem;
                font-weight: bold;
            }
            .counter-box {
            padding: 20px;
            border-radius: 8px;
            background-color: #f8f9fa;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            }

            .counter-box:hover {
            transform: scale(1.05);
            }

            .counter-box i {
            font-size: 2rem;
            color: #4e73df;
            margin-bottom: 10px;
            }

            .counter-box h3 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #343a40;
            }

            .counter-box p {
            font-size: 1.25rem;
            color: #6c757d;
            }
        </style>
        <div class="container-fluid" style="height:auto; margin-top:50px;">
            @if( \Auth::user()->company == null )

            @endif
        </div>

    </x-slot>
</x-app-layout>
