@extends('layouts.layout')
@section('mainContent')

    <div class="slide-one-item home-slider owl-carousel">
        <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('images/hero_bg_01.jpeg')}}')" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="bg-text-line">Qazaqstan Premier League</h1>
                        <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('images/hero_bg_02.jpg')}}')" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="bg-text-line">Qazaqstan Premier League</h1>
                        <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('images/hero_bg_03.jpg')}}')" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="bg-text-line">Qazaqstan Premier League</h1>
                        <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4" >
                    <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('{{ asset('images/hero_bg_03.jpg')}}')">
                        <div class="text">
                            <h2 class="h5 text-white">Qazaqstan Premier League</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('{{ asset('images/hero_bg_02.jpg')}}')">
                        <div class="text">
                            <h2 class="h5 text-white">Qazaqstan Premier League</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('{{ asset('images/img_01.jpg')}}')">
                        <div class="text">
                            <h2 class="h5 text-white">Qazaqstan Premier League</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-blocks-vs site-section bg-light">
        <div class="container">

            <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">

                <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                    Next match of <ins>favourite</ins>
                    <div id="date-countdown"></div>
                </div>

                <div class="ml-auto pr-4 order-md-2">
                    <div class="h5 text-black text-uppercase text-center text-lg-left">
                        <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                            <img src="{{ asset('images/team3.png')}}" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Tobol </span>
                        </div>
                        <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span>
                        <div class="d-block d-md-inline-block">
                            <img src="{{ asset('images/team1.png')}}" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0"><ins>Kairat</ins></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-image overlay-success rounded mb-5" style="background-image: url('{{ asset('images/hero_bg_02.jpg')}}')" data-stellar-background-ratio="0.5">

                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                        <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                                <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                                    <img src="{{ asset('images/team2.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h3 class="h5 mb-0 text-black">Astana</h3>
                                    <span class="text-uppercase small country text-black">Nur-Sultan</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
                        <div class="d-inline-block">
                            <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">Qazaqstan Premier League Live &mdash; Round 10</small></p>
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">3:2</span></div>
                            <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">20 October / 14:30</small></p>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4 text-center text-lg-right">
                        <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                                <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                                    <img src="{{ asset('images/team7.png')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="text order-1">
                                    <h3 class="h5 mb-0 text-black">Oqshetpes</h3>
                                    <span class="text-uppercase small country text-black">Pavlodar</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">Previous Rounds</h2>
                    <div class="site-block-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Round 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Round 2</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                <div class="row align-items-center">
                                    <div class="col-md-12">


                                        <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                                            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                                <div class="text-center text-lg-left">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                            <img src="{{ asset('images/team4.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="h5 mb-0 text-black">Taraz</h3>
                                                            <span class="text-uppercase small country">Taraz</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                                <div class="d-inline-block">
                                                    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">0:2</span></div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                                <div class="">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                            <img src="{{ asset('images/team8.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text order-1 w-100">
                                                            <h3 class="h5 mb-0 text-black">Ordabasy</h3>
                                                            <span class="text-uppercase small country">Shymkent</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- END row -->

                                        <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                                            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                                <div class="text-center text-lg-left">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                            <img src="{{ asset('images/team5.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="h5 mb-0 text-black">Shakhter</h3>
                                                            <span class="text-uppercase small country">Karaganda</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                                <div class="d-inline-block">
                                                    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:1</span></div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                                <div class="">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                            <img src="{{ asset('images/team6.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text order-1 w-100">
                                                            <h3 class="h5 mb-0 text-black">Zhetisu</h3>
                                                            <span class="text-uppercase small country">Taldykorgan</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- END row -->

                                        <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                                            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                                <div class="text-center text-lg-left">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                            <img src="{{ asset('images/team9.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="h5 mb-0 text-black">Kaysar</h3>
                                                            <span class="text-uppercase small country">Atyrau</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                                <div class="d-inline-block">
                                                    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">1:1</span></div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                                <div class="">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                            <img src="{{ asset('images/team10.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text order-1 w-100">
                                                            <h3 class="h5 mb-0 text-black">Aktobe</h3>
                                                            <span class="text-uppercase small country">Aqtobe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- END row -->

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row align-items-center">
                                    <div class="col-md-12">


                                        <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                                            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                                <div class="text-center text-lg-left">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                            <img src="{{ asset('images/team12.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="h5 mb-0 text-black">Kaspi</h3>
                                                            <span class="text-uppercase small country">Atyrau</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                                <div class="d-inline-block">
                                                    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">4:1</span></div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                                <div class="">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                            <img src="{{ asset('images/team3.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text order-1 w-100">
                                                            <h3 class="h5 mb-0 text-black">Tobol</h3>
                                                            <span class="text-uppercase small country">Qostanai</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- END row -->

                                        <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                                            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                                <div class="text-center text-lg-left">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                            <img src="{{ asset('images/team1.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="h5 mb-0 text-black">Kairat</h3>
                                                            <span class="text-uppercase small country">Almaty</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                                <div class="d-inline-block">
                                                    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">2:2</span></div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                                <div class="">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                            <img src="{{ asset('images/team2.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text order-1 w-100">
                                                            <h3 class="h5 mb-0 text-black">Astana</h3>
                                                            <span class="text-uppercase small country">Nur-Sultan</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- END row -->

                                        <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                                            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                                <div class="text-center text-lg-left">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                            <img src="{{ asset('images/team4.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="h5 mb-0 text-black">Taraz</h3>
                                                            <span class="text-uppercase small country">Taraz</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                                <div class="d-inline-block">
                                                    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">0:0</span></div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                                <div class="">
                                                    <div class="d-block d-lg-flex align-items-center">
                                                        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                            <img src="{{ asset('images/team11.png')}}" alt="Image" class="img-fluid">
                                                        </div>
                                                        <div class="text order-1 w-100">
                                                            <h3 class="h5 mb-0 text-black">Atyrau</h3>
                                                            <span class="text-uppercase small country">Atyrau</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- END row -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('{{ asset('images/img_01.jpg')}}')"  data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-white">More Game Highlights</h2>
                </div>
            </div>

            <div class="row">
                <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                        <!-- uses .block-12 -->
                        <div class="block-12">
                            <figure>
                                <img src="{{ asset('images/hero_bg_01.jpeg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="meta">October 20th 2020</span>
                                <div class="text-inner">
                                    <h2 class="heading mb-3"><a href="#" class="text-black">QPL Round 10</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="block-12">
                            <figure>
                                <img src="{{ asset('images/hero_bg_02.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="meta">October 20th 2020</span>
                                <div class="text-inner">
                                    <h2 class="heading mb-3"><a href="#" class="text-black">QPL Round 10</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="block-12">
                            <figure>
                                <img src="{{ asset('images/hero_bg_03.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="meta">October 21th 2020</span>
                                <div class="text-inner">
                                    <h2 class="heading mb-3"><a href="#" class="text-black">QPL Round 10</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="block-12">
                            <figure>
                                <img src="{{ asset('images/img_01.jpg')}}" alt="Image" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="meta">October 21th 2020</span>
                                <div class="text-inner">
                                    <h2 class="heading mb-3"><a href="#" class="text-black">QPL Round 10</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-black">Latest News</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="post-entry">
                        <div class="image">
                            <img src="{{ asset('images/hero_bg_03.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="text p-4">
                            <h2 class="h5 text-black"><a href="#">Replace coach of Kaisar</a></h2>
                            <span class="text-uppercase date d-block mb-3"><small>NUR.KZ&bullet; OCT 20, 2020</small></span>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="post-entry">
                        <div class="image">
                            <img src="{{ asset('images/img_01.jpg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="text p-4">
                            <h2 class="h5 text-black"><a href="#">Shakter vs Ordabasy Who will win?</a></h2>
                            <span class="text-uppercase date d-block mb-3"><small>Sky Sports &bullet; OCT 20, 2020</small></span>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="post-entry">
                        <div class="image">
                            <img src="{{ asset('images/hero_bg_01.jpeg')}}" alt="Image" class="img-fluid">
                        </div>
                        <div class="text p-4">
                            <h2 class="h5 text-black"><a href="#">Astana leading table</a></h2>
                            <span class="text-uppercase date d-block mb-3"><small>TengriNews &bullet; OCT 21, 2020</small></span>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

