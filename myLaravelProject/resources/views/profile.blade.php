@extends('layouts.layout')
@section('mainContent')
    <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('images/hero_bg_03.jpg')}}')"
         data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="bg-text-line">Profile</h1>
                    <p class="mt-4">Welcome <?php
                        if (isset($_SESSION['currentUser'])) {
                            echo $_SESSION["currentUser"];
                        }
                        ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                @if($news!=null)
                    @foreach($news as $item)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="post-entry">
                                <div class="image">
                                    <img src="{{ asset('images/hero_bg_03.jpg')}}" alt="Image" class="img-fluid">
                                </div>
                                <div class="text p-4">
                                    <h2 class="h5 text-black"><a href="#">{{$item->title}}</a></h2>
                                    <span
                                        class="text-uppercase date d-block mb-3"><small>{{$item->author->login}} &bullet; {{$item->posted_date}}</small></span>
                                    <p class="mb-0">{{$item->text}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

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
            <form method="post" action="/profile/add_news">
                @csrf
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" placeholder="Title of news" class="form-control">

                <label for="text">Text:</label>
                <textarea name="text" id="text" placeholder="Text of news" class="form-control"></textarea>

                <br>
                <button type="submit" class="btn btn-success">Add news</button>
            </form>
        </div>
    </div>
@endsection

