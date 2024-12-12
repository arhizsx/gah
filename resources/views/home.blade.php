@php 
    $types = [
        "REGISTERED",
        "PENDING",
        "ENDORSED",
        "INSTALLED",
        "CANCELLED",
        "DROPPED"                                                              
    ];

@endphp

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
                    <div class="row">
                        <div class="col-xl-6">
                            @php 
                                $allowed = ["AMY", "REID", "CURTIS" ];
                            @endphp 
                            @foreach($projects_list as $pl )

                                @if( in_array($pl->project, $allowed ) )
                                <div class="col">
                                    <div class="card mb-3">
                                        <div class="card-header"><H1>{{ $pl->project }}</H1></div>
                                        <div class="card-body">
                                            @foreach($project_campaigns as $pc)
                                                @if( $pc->project == $pl->project )
                                                    <div class="mb-3 p-3">
                                                    <H2 style="font-weight: bold; font-size:1.5em;">{{  $pc->alias }}</H2>
                                                    <div class="container-fluid">
                                                            <div class="row p-0 border">
                                                                @foreach($types as $t)

                                                                @php 
                                                                    $val = 0;
                                                                    foreach($data as $d){
                                                                        if( $d->campaign == $pc->campaign && $d->status == $t ){
                                                                            $val = $d->count;
                                                                        }
                                                                    }    
                                                                @endphp 
                                                                
                                                                <div class="col border text-center p-2">
                                                                    <H2 style="font-weight: bold; font-size: 1.4em;" data-campaign="{{  $pc->campaign }}" data-type="{{ $t }}">{{ $val }}</H2>
                                                                    <card-subtitle style="font-size: .7em">{{ $t }}</card-subtitle>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                    </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endif

                            @endforeach
                        </div>
                        <div class="col-xl-6">
                            @php 
                                $allowed = ["DRAKE" ];
                            @endphp 

                            @if( in_array($pl->project, $allowed ) )
                                <div class="col">
                                    <div class="card mb-3">
                                        <div class="card-header"><H1>{{ $pl->project }}</H1></div>
                                        <div class="card-body">
                                            @foreach($project_campaigns as $pc)
                                                @if( $pc->project == $pl->project )
                                                    <div class="mb-3 p-3">
                                                    <H2 style="font-weight: bold; font-size:1.5em;">{{  $pc->alias }}</H2>
                                                    <div class="container-fluid">
                                                            <div class="row p-0 border">
                                                                @foreach($types as $t)

                                                                @php 
                                                                    $val = 0;
                                                                    foreach($data as $d){
                                                                        if( $d->campaign == $pc->campaign && $d->status == $t ){
                                                                            $val = $d->count;
                                                                        }
                                                                    }    
                                                                @endphp 
                                                                
                                                                <div class="col border text-center p-2">
                                                                    <H2 style="font-weight: bold; font-size: 1.4em;" data-campaign="{{  $pc->campaign }}" data-type="{{ $t }}">{{ $val }}</H2>
                                                                    <card-subtitle style="font-size: .7em">{{ $t }}</card-subtitle>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                    </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endif
                            
                        </div>


                    </div>

                <!-- @foreach($campaigns as $campaign)
                <div class="row">
                    <div class="col mb-2">
                        <H1>{{ $campaign->campaign }}</H1>
                    </div>
                </div>
                <div class="row">
                    @php 
                        $total = 0;
                    @endphp
                    @foreach( $data as $d )
                        @if( $d->campaign == $campaign->campaign )
                            @php 
                            $total = $total + $d->count; 
                            @endphp         
                            <div class="col-md-3 mb-4">
                                <div class="counter-box">
                                <i class="bi bi-graph-up"></i>
                                <h3>{{ $d->count }}</h3>
                                <p>{{ $d->status }}</p>
                                </div>
                            </div>           
                        @endif
                    @endforeach
                    <div class="col-md-3 mb-4">
                        <div class="counter-box">
                        <i class="bi bi-graph-up"></i>
                        <h3>{{ $total }}</h3>
                        <p>TOTAL</p>
                        </div>
                    </div>           
                </div>
                @endforeach -->

                @endif

        </div>

    </x-slot>
</x-app-layout>
