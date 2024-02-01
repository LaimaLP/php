@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-5">
                    <h3 class="card-header">Redaguoti mechaniko duomenis</h3>

                    <div class="card-body">
                        <form action="{{ route('mechanics-update', $mechanic) }}" method="post">
                            <div class="form-group mb-3">
                                <label>Vardas</label>
                                <input type="text" name="name" class="form-control" value="{{old('name', $mechanic->name)}}">
                                <small class="form-text text-muted">Įveskite nauja mechaniko vardą</small>
                            </div>
                            <div class="form-group mb-3">
                                <label>Pavardė</label>
                                <input type="text" name="surname" class="form-control" value="{{old('surname', $mechanic->surname)}}">
                                <small class="form-text text-muted">Įveskite nauja mechaniko pavardę</small>
                            </div>
                            <button type="submit" class="btn btn-primary m-">Keisti</button>
                            <a href="{{ route('mechanics-index') }}" class="btn btn-secondary m-1">Atšaukti</a>
                            @csrf 
                            @method('put')
                            {{-- jei sito neuzrasome forma siuncia i 419 --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Mechaniko duomenu keitimas')
