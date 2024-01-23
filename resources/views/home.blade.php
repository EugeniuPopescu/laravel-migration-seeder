@extends('layouts.app')

@section('content')
    {{-- container --}}
    <div class="container">
        {{-- train cards --}}
        <div class="">
            <div class="d-flex flex-wrap">
                @foreach ($trains as $train)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train["society"] }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $train["departure_station"] }} - {{ $train["arrival_station"] }}</h6>
                            <h6 class="card-subtitle mb-2 text-body-primary">Departure Date: {{ $train["departure_time"] }}</h6>
                            <h6 class="card-subtitle mb-2 text-body-primary">Arrival Date: {{ $train["arrival_time"] }}</h6>
                            <p class="card-text text-info">N° carriages: {{ $train["number_carriages"] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection