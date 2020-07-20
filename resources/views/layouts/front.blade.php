<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ruang Kelas</title>
    <link rel="icon" href="{{ asset('frontemplate') }}/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('frontemplate') }}/css/style.css">
    <link href="{{ asset('swal/dist/sweetalert2.min.css') }}" rel="stylesheet">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> Ruang Kelas </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('kelas') }}">Kelas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('podcast') }}">Podcast</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html">About</a>
                                </li>
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="{{ route('register') }}">Daftar</a>
                                </li>
                                @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hi {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('akun') }}">Akun</a>
                                        @if (Auth::user()->role == 'regular')
                                        <a class="dropdown-item" href="{{ route('upgradepremium') }}">Upgrade
                                            Premium</a>
                                        @endif
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    @yield('content')

    <!-- footer part start-->
    <footer class="footer-area mt-4">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <b>
                                <h2>Ruang Kelas</h2>
                            </b></a>
                        <p>Platform belajar online nomor 1 di Indonesia</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Sosial Media</h4>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Kontak Kami</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Indonesia </p>
                            <p><span> Phone :</span> +62 8123 1234 567</p>
                            <p><span> Email : </span>ruangkelas@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="ti-heart"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a> & Developed Apps By <a
                                        href="https:://github/fikrisuheri">Fikri Suheri</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('frontemplate') }}/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{ asset('frontemplate') }}/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('frontemplate') }}/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="{{ asset('frontemplate') }}/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontemplate') }}/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontemplate') }}/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="{{ asset('frontemplate') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontemplate') }}/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="{{ asset('frontemplate') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontemplate') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontemplate') }}/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('frontemplate') }}/js/custom.js"></script>
    <script src="{{ asset('swal/dist/sweetalert2.min.js') }}"></script>
    @if(session('status'))
    <script type="text/javascript">
        Swal.fire({
      title: 'Sukses ...',
      icon: 'success',
      text: '{{ session("status") }}',
      showClass: {
        popup: 'animated bounceInDown slow'
      },
      hideClass: {
        popup: 'animated bounceOutDown slow'
      }
    })
    </script>
    @endif
</body>

</html>