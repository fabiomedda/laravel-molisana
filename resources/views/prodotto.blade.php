@extends('layouts.app')

@section('title')
prodotto
@endsection

@section('main')
<div class="prodotto">
    <h3>{{$pasta[$id]['titolo'] }}</h3>
    <p><span>Tipo pasta:</span> {{$pasta[$id]['tipo'] }}</p>
    <p><span>Tempo cottura:</span> {{$pasta[$id]['cottura'] }}</p>
    <p><span>Peso:</span> {{$pasta[$id]['peso'] }} </p>
    <p><span>Descrizione:</span> {{$pasta[$id]['descrizione'] }}</p>
    <div>
        <img src="{{$pasta[$id]['src-p'] }}" alt="">
    </div>
</div>
@endsection