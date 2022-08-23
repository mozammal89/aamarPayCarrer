<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
        content="Soft Tech Innovation ltd. is a software developing company. It was established in 2005. We have two wings under soft Tech Innovation Ltd. These are aamarPay and MuthoFun.">
    <meta name="author" content="Md. Rafat Hossain">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Soft Tech Innovation Ltd." /> <!-- website name -->
    <meta property="og:site" content="www.softbd.com" /> <!-- website link -->
    <meta property="og:title" content="Soft Tech Innovation Ltd." /> <!-- title shown in the actual shared post -->
    <meta property="og:description"
        content="Soft Tech Innovation ltd. is a software developing company. It was established in 2005. We have two wings under soft Tech Innovation Ltd. These are aamarPay and MuthoFun." />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="www.softbd.com" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="company" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/bootstrap.min.css')}}">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&display=swap"
        rel="stylesheet">

    <!--Themify icon css-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/themify-icons.css')}}">

    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/all.min.css')}}">

    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/magnific-popup.css')}}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/themify-icons.css')}}">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/all.min.css')}}">
    <!--animated css-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/animate.min.css')}}">

    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontEnd/css/owl.theme.default.min.css')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/style.css')}}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{asset('FrontEnd/css/responsiv.css')}}">

    <link rel="icon" href="{{asset('FrontEnd/images/logo_main.png')}}" type="image/gif" sizes="16x16">
    <!-- Toastr -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 

    <title>Soft Tech Innovation Ltd.</title>
</head>

<body>
    <!-- Header Start Here -->
    @include('FrontEnd.partial.header')
    <!-- Header Ends Here -->

    @yield('content')

    <!-- Footer Start Here -->
    @include('FrontEnd.partial.footer')
    <!-- Footer Ends Here -->

    <!-- Optional JavaScript -->
    <!--jQuery-->
    <script src="{{asset('FrontEnd/js/jquery-3.4.1.min.js')}}"></script>
    <!--Popper js-->
    <script src="{{asset('FrontEnd/js/popper.min.js')}}"></script>
    <!--Bootstrap js-->
    <script src="{{asset('FrontEnd/js/bootstrap.min.js')}}"></script>
    <!--Magnific popup js-->
    <script src="{{asset('FrontEnd/js/jquery.magnific-popup.min.js')}}"></script>
    <!--jquery easing js-->
    <script src="{{asset('FrontEnd/js/jquery.easing.min.js')}}"></script>
    <!--Isotope filter js-->
    <script src="{{asset('FrontEnd/js/mixitup.min.js')}}"></script>
    <!--wow js-->
    <script src="{{asset('FrontEnd/js/wow.min.js')}}"></script>
    <!--owl carousel js-->
    <script src="{{asset('FrontEnd/js/owl.carousel.min.js')}}"></script>
    <!--countdown js-->
    <script src="{{asset('FrontEnd/js/jquery.countdown.min.js')}}"></script>
    <!--custom js-->
    <script src="{{asset('FrontEnd/js/script.js')}}"></script>
    <!-- Toastr -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {{-- {!! Toastr::message() !!}

    <script type="text/javascript">
        @if ($errors->any()) {
             @foreach ($errors->all() as $error)
                toastr.error(' {{$error}} ','Error',{
                    closeButton : true,
                    progressBar : true,
                });
             @endforeach
        }
        @endif
    </script> --}}

    @stack('js')
</body>

</html>