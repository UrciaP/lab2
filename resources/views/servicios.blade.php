@extends('layout')

@section('titulo', 'Servicios')


@section('content')
    <h2>Servicios</h2>
    <ul>
        @if($servicios)
            @foreach ($servicios as $item)
                <li>{{$item['titulo']}}</li>
            @endforeach
        @else
            <p>nada</p>
        @endif
    </ul>
@endsection
