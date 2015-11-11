<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ env('SITE_NAME', 'Setup in .ENV') }}</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/freelancer.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    {{-- NAVIGATION --}}
    @include('layout.partials.navigation')
    {{-- NAVIGATION --}}


    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="{{ asset('assets/images/tutelage-unity-small.png') }}" alt="">
                    <div class="intro-text">
                        <span class="name">Start Bootstrap</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>
                        <a href="http://www.bootstrapzero.com/bootstrap-template/freelancer-one-page-theme">
                            Built with Freelancer.
                        </a>
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>Chat: Kingston Developers Group</p>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    @include('layout.partials.footer')
    {{-- FOOTER --}}

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- Vuejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.7/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.1.17/vue-resource.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('assets/js/classie.js') }}"></script>
    <script src="{{ asset('assets/js/cbpAnimatedHeader.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('assets/js/freelancer.js') }}"></script>

    @yield('script')

</body>

</html>
