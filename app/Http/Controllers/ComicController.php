<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::all();

        $headerLinks = [
            "/characters" => "characters",
            "/comics" => "movies",
            "/tv" => "tv",
            "/games" => "games",
            "/collectibles" => "collectibles",
            "/videos" => "videos",
            "/fans" => "fans",
            "/news" => "news",
            "shop" => "shop"
        ];


        $shopLinks = [
            "digital comics" => "resources/img/images/buy-comics-digital-comics.png",
            "dc merchandise" => "resources/img/images/buy-comics-merchandise.png",
            "subscription" => "resources/img/images/buy-comics-subscriptions.png",
            "comic shop locator" => "resources/img/images/buy-comics-shop-locator.png",
            "dc power visa" => "resources/img/images/buy-dc-power-visa.svg"
        ];

        $footerLinks = [
            ["DC COMICS", "Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"],
            ["SHOP", "Shop DC", "Shop DC Colletctibles"],
            ["DC", "Terms Of Use", "Privacy Policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"],
            ["SITES", "DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
        ];

        return view('comics/index', compact('comics', 'shopLinks', 'headerLinks', 'footerLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $headerLinks = [
            "/characters" => "characters",
            "/comics" => "movies",
            "/tv" => "tv",
            "/games" => "games",
            "/collectibles" => "collectibles",
            "/videos" => "videos",
            "/fans" => "fans",
            "/news" => "news",
            "shop" => "shop"
        ];


        $shopLinks = [
            "digital comics" => "resources/img/images/buy-comics-digital-comics.png",
            "dc merchandise" => "resources/img/images/buy-comics-merchandise.png",
            "subscription" => "resources/img/images/buy-comics-subscriptions.png",
            "comic shop locator" => "resources/img/images/buy-comics-shop-locator.png",
            "dc power visa" => "resources/img/images/buy-dc-power-visa.svg"
        ];

        $footerLinks = [
            ["DC COMICS", "Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"],
            ["SHOP", "Shop DC", "Shop DC Colletctibles"],
            ["DC", "Terms Of Use", "Privacy Policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"],
            ["SITES", "DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
        ];
        return view('comics/create', compact('shopLinks', 'headerLinks', 'footerLinks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formdata = $request->all();
        $newSingleComic = new Comic();
        $newSingleComic->fill($formdata);
        $newSingleComic->save();

        return redirect()->route('comics.index', $newSingleComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        $headerLinks = [
            "/characters" => "characters",
            "/comics" => "movies",
            "/tv" => "tv",
            "/games" => "games",
            "/collectibles" => "collectibles",
            "/videos" => "videos",
            "/fans" => "fans",
            "/news" => "news",
            "shop" => "shop"
        ];


        $shopLinks = [
            "digital comics" => "resources/img/images/buy-comics-digital-comics.png",
            "dc merchandise" => "resources/img/images/buy-comics-merchandise.png",
            "subscription" => "resources/img/images/buy-comics-subscriptions.png",
            "comic shop locator" => "resources/img/images/buy-comics-shop-locator.png",
            "dc power visa" => "resources/img/images/buy-dc-power-visa.svg"
        ];

        $footerLinks = [
            ["DC COMICS", "Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"],
            ["SHOP", "Shop DC", "Shop DC Colletctibles"],
            ["DC", "Terms Of Use", "Privacy Policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"],
            ["SITES", "DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
        ];

        return view('comics/show', compact('comic', 'shopLinks', 'headerLinks', 'footerLinks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
