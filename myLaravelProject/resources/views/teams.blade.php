@extends('layouts.layout')
@section('mainContent')
    <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('images/hero_bg_03.jpg')}}')" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="bg-text-line">Meet The Team</h1>
                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="text-black">Teams</h2>
                </div>
            </div>

            <div class="row">
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team1.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Қайрат</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team2.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Астана</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team3.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Тобол</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team4.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Тараз</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team5.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Шахтер</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team6.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Жетісу</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team7.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Оқжетпес</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team8.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Ордабасы</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team9.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Қайсар</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team10.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Ақтөбе</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team11.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Атырау</h2>
                    </div>
                </div>
                <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                    <div class="player mb-5">
                        <img src="{{ asset('images/team12.png')}}" alt="Image" class="img-fluid image rounded-circle">
                        <h2>Каспий</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection

