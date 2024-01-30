@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-5">
                    <h3 class="card-header">Ar tikrai norite nurasyti suknvezimi?</h3>

                    <div class="card-body">
                        {{-- cia duoda kolekcija su visai truckais. o jei uzdesime (), pasiimam priklausomybe ir joje paskaiciuoti. Duomenu bazes uzklausos countas ...  --}}
                     
                            <form action="{{ route('trucks-destroy', $truck) }}" method="post">
                                <p> Nurasyti {{ $truck->brand }} {{ $truck->plate }} </p>

                                <button type="submit" class="btn btn-danger m-1">Nurasyti</button>
                                <a href="{{ route('trucks-index') }}" class="btn btn-secondary m-1">Grizti</a>
                                @csrf
                                @method('delete')
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Patvirtinti sukvezimo nurasyma')
