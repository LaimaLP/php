@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-5">
                    <h3 class="card-header">Įdarbinti naują mechaniką</h3>

                    <div class="card-body">
                        <form action="{{ route('mechanics-store') }}" method="post">
                            <div class="form-group mb-3">
                                <label>Vardas</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                <small class="form-text text-muted">Įveskite naujo mechaniko vardą</small>
                            </div>
                            <div class="form-group mb-3">
                                <label>Pavardė</label>
                                <input type="text" name="surname" class="form-control" value="{{old('surname')}}">
                                <small class="form-text text-muted">Įveskite naujo mechaniko pavardę</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Įdarbinti</button>
                            @csrf 
                            {{-- jei sito neuzrasome forma siuncia i 419 --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Įdarbinti naują mechaniką')
