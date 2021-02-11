@extends('layouts.app')

@section('title')
prodotti
@endsection

@section('main')

    @foreach($pasta_corta as $pastaL)
        <h3>{{$pastaL["tipo"]}}</h3>
    @endforeach

@endsection