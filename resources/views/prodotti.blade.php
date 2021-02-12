@extends('layouts.app')

@section('title')
prodotti
@endsection

@section('main')
<main>
    
    <h2>le lunghe</h2>
    <div class="container">
        @foreach($pasta_lunga as $key => $pastaL)
        <a href="{{ route('prodotto', ['id' => $key]) }}" class="box">
            <img src="{{$pastaL['src']}}" alt="">
            <div class="box_int">
                <h4>{{$pastaL['titolo']}}</h4>
                <img src="{{ asset('img/icon.svg') }}" alt="">
            </div>
        </a>
        @endforeach
    </div>

    <h2>le corte</h2>
    <div class="container">
        @foreach($pasta_corta as $key => $pastaC)
        <a href="{{ route('prodotto', ['id' => $key]) }}" class="box">
            <img src="{{$pastaC['src']}}" alt="">
            <div class="box_int">
                <h4>{{$pastaC['titolo']}}</h4>
                <img src="{{ asset('img/icon.svg') }}" alt="">
            </div>
        </a>
        @endforeach
    </div>

    <h2>le cortissime</h2>
    <div class="container">
        @foreach($pasta_cortissima as $key => $pastaCi)
        <a href="{{ route('prodotto', ['id' => $key]) }}" class="box">
            <img src="{{$pastaCi['src']}}" alt="">
            <div class="box_int">
                <h4>{{$pastaCi['titolo']}}</h4>
                <img src="{{ asset('img/icon.svg') }}" alt="">
            </div>
        </a>
        @endforeach
    </div>

</main>

@endsection