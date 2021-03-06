@extends('layouts.layout')
@section('mainContent')
    <div class="site-blocks-cover overlay" style="background-image:  url('{{ asset('images/hero_bg_03.jpg')}}')"  data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="bg-text-line">Login for more functionality</h1>
                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-first">
                <div class="col-md-7">
                    @if($errors->any())
                        <div class="alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/login_to_site" class="bg-white">
                        @csrf
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label class="text-black"><span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="login" class="text-black">Login <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="login" name="login" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password" class="text-black">Password </label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" value="Login">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-5">
                    <div class="p-4 border mb-3 bg-white">
                        <p class="mb-0">Address</p>
                        <p class="mb-4">123 Manas St. Almaty, Kazakhstan, KZ</p>

                        <p class="mb-0">Phone</p>
                        <p class="mb-4"><a href="#">+7 747 635 7934</a></p>

                        <p class="mb-0">Email Address</p>
                        <p class="mb-4"><a href="#">myrzanbekzat@gmail.com</a></p>

                    </div>

                </div>

            </div>
        </div>
    </div>



@endsection

