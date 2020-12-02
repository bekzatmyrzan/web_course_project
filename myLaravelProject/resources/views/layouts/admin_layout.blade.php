<!DOCTYPE html>
<html lang="en">
<head>
    <title>SportQ &mdash; Course work</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" type="text/css">


    <link rel="stylesheet" href="{{asset('css/aos.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">


</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-logo">
                <a href="#"><img src="{{ asset('images/logo.png')}}" alt="Image"></a>
            </div>
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar absolute transparent" role="banner">
        <div class="py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-3">
                        <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
                        <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
                        <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
                    </div>
                    <div class="col-6 col-md-9 text-right">
                        <div class="d-inline-block"><a href="#"
                                                       class="text-secondary p-2 d-flex align-items-center"><span
                                    class="icon-envelope mr-3"></span> <span class="d-none d-md-block">myrzanbekzat@gmail.com</span></a>
                        </div>
                        <div class="d-inline-block"><a href="#"
                                                       class="text-secondary p-2 d-flex align-items-center"><span
                                    class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+7 747 635 7934</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
            <div class="container position-relative">
                <div class="site-logo">
                    <a href="#"><img src="" alt=""></a>
                </div>

                <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#"
                                                                              class="site-menu-toggle js-menu-toggle text-white"><span
                            class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-md-block">
                    <li><a href="/">Home</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/matches">Matches</a></li>
                    <li><a href="/teams">Teams</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/registration">Registration</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/login">Login</a></li>
                    <?php
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    if (isset($_SESSION['currentUser'])) {
                        echo '<li><a href="/profile">Profile</a></li>';
                    }
                    ?>
                    <li><a href="/admin">Admin</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item" style="background-color: #17A2B8;color: white"><a>Models</a>
                    <li class="list-group-item">
                        <a href="/admin/stadiums">Stadiums</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/cities">Cities</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/clubs">Clubs</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/positions">Positions</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/players">Players</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/rounds">Rounds</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/matches">Matches</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/matches_players">Matches Players</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/roles">Roles</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/users">Users</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/news">News</a>
                    </li>
                </ul>
            </div>
            <div class="col-9">
                @yield('mainContent')
            </div>
        </div>
    </div>


    <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">About SportQ</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero
                            atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis
                            blanditiis, minima minus odio!</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Quick Menu</h3>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Matches</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Team</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Membership</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Follow Us</h3>

                            <div>
                                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">Watch Video</h3>

                        <div class="block-16">
                            <iframe width="460" height="315" src="https://www.youtube.com/embed/IT3JikWtcrA"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="mb-5">
                        <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

                        <form action="#" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent"
                                       placeholder="Enter Email" aria-label="Enter Email"
                                       aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        Copyright &copy;<script data-cfasync="false"
                                                src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>document.write(new Date().getFullYear());</script>
                        All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
