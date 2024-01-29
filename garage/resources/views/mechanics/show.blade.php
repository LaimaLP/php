@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-5">
                    <h3 class="card-header">Mechanikas {{$mechanic->name}} {{$mechanic->surname}}</h3>

                    <div class="card-body">
                       

                        <a href="{{ route('mechanics-index') }}" class="btn btn-secondary m-1">Visi mechanikai</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Mechaniko informacija')