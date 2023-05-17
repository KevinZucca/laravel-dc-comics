@extends('layouts/main')

@section('content')

<div class="single-container">
    <img src="{{$comic->thumb}}" alt="img">
    <div class="single-description-container">
        <h3>{{$comic->title}}</h3>
        <p>{{$comic->description}}</p>
        <p>{{$comic->price}}</p>
        <p>Series: {{$comic->series}}</p>
        <p>Sale date: {{$comic->sale_date}}</p>
        <p>Artists: {{$comic->artists}}</p>
        <p>Writers: {{$comic->writers}}</p>

        <a href="{{route('comics.edit', $comic->id)}}">edit comic</a>

    </div>

</div>

@endsection