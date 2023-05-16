<div id="footer-container" class="my-container">
    <div id="footer-links-container" class="container-centered">
        @foreach ($footerLinks as $list)
        <ul>
            @foreach ($list as $singleLink)
                <li>{{$singleLink}}</li>  
            @endforeach
        </ul>
        @endforeach

        <img id="big-logo" src="{{Vite::asset("/resources/img/images/dc-logo-bg.png")}}" alt="big-logo">

    </div>
</div>

<div id="info-container" class="my-container">
    <div id="footer-info-content" class="container-centered">
        <button id="sign-up">
            SIGN-UP NOW!
        </button>


        <div id="footer-links-container">
            <button id="follow-us">
                FOLLOW US
            </button>
            <ul id="footer-links">
                <li>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>   <li>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>   <li>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                </li>
            </ul>
        </div>

    </div>
</div>