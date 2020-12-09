@extends('layouts.layout')
@section('mainContent')

    <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('images/hero_bg_03.jpg')}}')"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="bg-text-line">Match</h1>
                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum
                        praesentium voluptatem. Mollitia perferendis dolore dolores.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section site-blocks-vs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-image overlay-success rounded mb-5"
                         style="background-image: url('{{ asset('images/about_1.jpg')}}')"
                         data-stellar-background-ratio="0.5">

                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                                <div class="text-center text-lg-left">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                                            <img src="{{ asset('images/team1.png')}}" alt="Image" class="img-fluid">
                                        </div>
                                        <div class="text">
                                            <h3 class="h5 mb-0 text-black">Kairat</h3>
                                            <span class="text-uppercase small country text-black">Almaty</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
                                <div class="d-inline-block">
                                    <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">Qazaqstan
                                            Premier League &mdash; Round 10</small></p>
                                    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span
                                            class="h3">3:2</span></div>
                                    <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">20 October
                                            / 14:30</small></p>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-4 text-center text-lg-right">
                                <div class="">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                                            <img src="{{ asset('images/team2.png')}}" alt="Image" class="img-fluid">
                                        </div>
                                        <div class="text order-1">
                                            <h3 class="h5 mb-0 text-black">Astana</h3>
                                            <span class="text-uppercase small country text-black">Nur-Sultan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
                        <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                            Next match
                            <div id="date-countdown"></div>
                        </div>

                        <div class="ml-auto pr-4 order-md-2">
                            <div class="h5 text-black text-uppercase text-center text-lg-left">
                                <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                                    <img src="{{ asset('images/team3.png')}}" alt="Image" class="mr-3 image"><span
                                        class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Tobol </span>
                                </div>
                                <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span>
                                <div class="d-block d-md-inline-block">
                                    <img src="{{ asset('images/team8.png')}}" alt="Image" class="mr-3 image"><span
                                        class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Ordabasy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-md-12">
                    @foreach($data['matches'] as $item)
                        <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                                <div class="text-center text-lg-left">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                            <img src="{{ $item->home_club->club_logo_picture}}" alt="Image"
                                                 class="img-fluid">
                                        </div>
                                        <div class="text">
                                            <h3 class="h5 mb-0 text-black">{{$item->home_club->name}}</h3>
                                            <span
                                                class="text-uppercase small country">{{$item->home_club->city->name}}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                                <div class="d-inline-block">
                                    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span
                                            class="h5">
                                            <?php
                                            $home_goals = 0;
                                            $guest_goals = 0;
                                            ?>
                                            @foreach($data['matches_players'] as $match_player)
                                                @if($match_player->match->id == $item->id)
                                                    @if($match_player->scored_player->club->id==$item->home_club->id)
                                                        <?php $home_goals = $home_goals + 1 ?>
                                                    @endif
                                                    @if($match_player->scored_player->club->id==$item->guest_club->id)
                                                            <?php $guest_goals = $guest_goals + 1 ?>
                                                    @endif
                                                @endif
                                            @endforeach
                                            <?php echo $home_goals; echo ":"; echo $guest_goals?>
                                        </span></div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-4 text-center text-lg-right">
                                <div class="">
                                    <div class="d-block d-lg-flex align-items-center">
                                        <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                            <img src="{{ $item->guest_club->club_logo_picture}}" alt="Image"
                                                 class="img-fluid">
                                        </div>
                                        <div class="text order-1 w-100">
                                            <h3 class="h5 mb-0 text-black">{{$item->guest_club->name}}</h3>
                                            <span
                                                class="text-uppercase small country">{{$item->guest_club->city->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">4:1</span>
                                </div>
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
                                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">4:1</span>
                                </div>
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
                                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">4:1</span>
                                </div>
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
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showGoals(matchId) {
            let home_goals = 0;
            let guest_goals = 0;
            @foreach($data['matches'] as $match)
            if ({{$match}})

                @endforeach
                alert('Всем привет!');
        }
    </script>
@endsection

