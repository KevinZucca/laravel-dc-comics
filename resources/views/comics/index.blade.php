
@extends('layouts/main')

@section('content')
<div id="main-section-container" class="my-container">

    <a id="new-comic" href="{{route('comics.create')}}">Add a new Comic <span>&rightarrow;</span></a>


    {{-- comics --}}
    <div id="card-container" class="container-centered">
        @foreach ($comics as $singleComic)
            <div class="my-card">
                <img class="comic-img" src="{{$singleComic->thumb}}" alt="cover-img">
                <a href="{{route('comics.show', $singleComic->id)}}">{{$singleComic->title}}</a>
            </div>
        @endforeach

        <div id="comics-title">
            <h2>CURRENT SERIES</h2>
        </div>
    </div>

    <button class="blue-button">
        <a href="#">LOAD MORE</a>
    </button>
    


    {{-- shop section --}}
    <div id="shop-container" class="my-container">
        <div id="shop-links-container" class="container-centered">
            <div id="shop-links-container" class="container-centered">
                <img src="http://[::1]:5173/resources/img/images/buy-comics-digital-comics.png" alt="shop-img">
                    <a href="#">digital comics</a>
                <img src="http://[::1]:5173/resources/img/images/buy-comics-merchandise.png" alt="shop-img">
                    <a href="#">dc merchandise</a>
                <img src="http://[::1]:5173/resources/img/images/buy-comics-subscriptions.png" alt="shop-img">
                    <a href="#">subscription</a>
                <img src="http://[::1]:5173/resources/img/images/buy-comics-shop-locator.png" alt="shop-img">
                    <a href="#">comic shop locator</a>
                <img src="http://[::1]:5173/resources/img/images/buy-dc-power-visa.svg" alt="shop-img">
                    <a href="#">dc power visa</a>
            </div>
        </div>
    </div>

</div>
@endsection