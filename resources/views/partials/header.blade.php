<header>
  <div id="blue-bar" class="my-container">
    <div id="blue-content" class="container-centered">
      <p>dc power visa</p>
      <p>additional dc sites  <span><i class="fa-solid fa-chevron-down"></i></span></p>
    </div>
  </div>


    {{-- navbar  --}}
    <nav class="my-container">
      <div id="nav-content" class="container-centered">
        <a href="/">
          <img src="{{Vite::asset("/resources/img/images/dc-logo.png")}}" alt="big_logo">
        </a>
  
        @foreach ($headerLinks as $key => $value)
           <a class="header-links" href="{{$key}}">{{$value}}</a>
        @endforeach

        <div id="input-container">
          <input id="nav-search" type="search" placeholder="Search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
    </nav>


    {{-- jumbo --}}
    <div id="jumbo" class="my-container">
      <img src="{{Vite::asset('/resources/img/images/jumbotron.jpg')}}" alt="jumbo">
    </div>
</header>