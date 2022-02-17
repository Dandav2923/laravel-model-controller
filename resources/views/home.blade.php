@extends('layouts.blade')

@section('content')
    @foreach ($movies as $item)
        <div class="container">
            <h2>{{$item->title}}</h2>
            <h2>{{$item->original_title}}</h2>
            <h3>{{$item->nationality}}</h3>
            <span>{{$item->date}} Voto medio {{$item->vote}}</span>
        </div>
    @endforeach
@endsection