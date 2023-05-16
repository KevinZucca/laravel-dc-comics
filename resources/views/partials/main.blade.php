<div id="main-section-container" class="my-container">

    {{-- comics --}}
    <div id="card-container" class="container-centered">
        @foreach ($comics as $singleComic)
            <div class="my-card">
                <img class="comic-img" src="{{$singleComic['thumb']}}" alt="cover-img">
                <a href="#">{{$singleComic['title']}}</a>
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
            @foreach ($shopLinks as $key => $value)
                <img src="{{Vite::asset($value)}}" alt="shop-img">
                <a href="#">{{$key}}</a>
            @endforeach
        </div>
    </div>

</div>