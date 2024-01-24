@extends('layout')
@section('body')

{{-- kuomet neturim rezultato nerodom. kai nelygu tusciam rodom rezultata --}}
    @if ($result !== '')
        <h1> Result: {{ $result }} </h1>
    @endif


    <form action="{{ route('do-count') }}" method='post'>
        <input type='text' name='count1'>
        <input type='text' name='count2'>
        <button type='submit'>Submit</button>
        @csrf
    </form>
    
@endsection


@section('title', 'Magix Couner')
