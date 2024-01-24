@extends('layout')

{{-- blade kintamieji dvigubuose skliaustuose --}}
{{-- kad vaikas eitu po tevo, reikia pazymeti, kad cia yra sekcija, priesingu atveju spausdins auksciau nei body --}}

@section('body')
    <h1 style="
    color:{{ $color }};
    font-size:{{ $size }}px;
    ">
        {{ $word }}, Bebrai iš konteinerio!
    </h1>
@endsection

@section('title', 'Bebrai')
