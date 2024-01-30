@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-5">
                    <h3 class="card-header"> <b> Sunkvezimis {{$truck->brand}} {{$truck->plate}} </b></h3>

                    <div class="card-body">
                        <p> Priziurintis mechanikas <a href="{{route('mechanics-show', $truck->mechanic->id)}}"> {{$truck->mechanic->name}} {{$truck->mechanic->surname}} </a> </p>
                       

                        <a href="{{ route('trucks-index') }}" class="btn btn-secondary m-1">Visi Sunkvezimiai</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Sunkvezimio informacija')
