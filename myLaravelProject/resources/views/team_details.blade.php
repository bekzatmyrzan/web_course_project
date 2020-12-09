@extends('layouts.layout')
@section('mainContent')
    <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('images/about_2.jpg')}}')" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="bg-text-line">@if($data['club']!=null){{$data['club']->name}}@endif</h1>
                    <p class="mt-4">Founded in {{$data['club']->founded_year}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/about_1.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 pl-md-5">
                    <h2 class="text-black">{{$data['club']->stadium->name}}</h2>
                    <p class="lead">{{$data['club']->name}} stadium - {{$data['club']->stadium->name}} was built in {{$data['club']->stadium->builded_year}} and has capacity {{$data['club']->stadium->capacity}}</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h2 class="text-black">Players</h2>
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Position</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data['players'] as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->surname}}</td>
                        <td>{{$item->birthday}}</td>
                        <td>{{$item->position->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="site-section feature-blocks-1 no-margin-top">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-black">Match Highlights</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="100">
                    <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('{{ asset('images/img_01.jpg')}}')">
                        <div class="text">
                            <h2 class="h5 text-white">Qazaqstan Premier League</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="200">
                    <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('{{ asset('images/hero_bg_02.jpg')}}')">
                        <div class="text">
                            <h2 class="h5 text-white">Qazaqstan Premier League</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="300">
                    <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('{{ asset('images/hero_bg_03.jpg')}}')">
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

@endsection

