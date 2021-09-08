@extends('layouts.app')
@section('main')
        <div class="card-group">
            @foreach ($trips as $trip)
            <div class="card my-5">
                <div class="card-body">
                    <h4 class="card-title">Pacco viaggio</h4>
                    <h5 class="card-title">{{$trip->name_owner}} {{$trip->surname_owner}}</h5>
                    <p class="card-text"><strong> giorno di partenza : </strong>{{$trip->deperture_time}} da {{$trip->deperture_city}}</p>
                    <p class="card-text"><strong> giorno di arrivo : </strong>{{$trip->arrival_time}} a {{$trip->arrival_city}}</p>
                    <p class="card-text">{{$trip->description}}</p>
                    <p class="card-text"><strong>nome dell'hotel : </strong>{{$trip->hotel_name}}</p>
                    <p class="card-text"><small class="text-muted">{{$trip->price}} €</small></p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $trips->links() }}
            </div>
        </div>
@endsection