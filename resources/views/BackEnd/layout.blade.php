<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendors Min CSS -->
        <link rel="stylesheet" href="{{asset('BackEnd/assets/css/vendors.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('BackEnd/assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('BackEnd/assets/css/responsive.css')}}">

        <title>@yield('title','Soft Tech Innovation Ltd')</title>

        <link rel="icon" type="image/png" href="{{asset('FrontEnd/images/logo_main.png')}}">
        <!-- Data Table Start -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
        <!-- Data Table End -->
        <!-- Toastr -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 

        @stack('css')
        
    </head>

    <body>

        <!-- Start Sidemenu Area -->
        @include('BackEnd.partial.sidebar')
        <!-- End Sidemenu Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content d-flex flex-column">

            <!-- Top Navbar Area -->
            @include('BackEnd.partial.header')
            <!-- End Top Navbar Area -->
            
            <!-- Breadcrumb Area -->
	            <!-- <div class="breadcrumb-area">
	                <h1>Dashboard</h1>

	                <ol class="breadcrumb">
	                    <li class="item"><a href="dashboard-analytics.html"><i class='bx bx-home-alt'></i></a></li>

	                    <li class="item">Dashboard</li>

	                    <li class="item">Home</li>
	                </ol>
	            </div> -->
            <!-- End Breadcrumb Area -->

            @yield('content')

            <!-- Start Footer End -->
            @include('BackEnd.partial.footer')
            <!-- End Footer End -->

        </div>
        <!-- End Main Content Wrapper Area -->

        <!-- Vendors Min JS -->
        <script src="{{asset('BackEnd/assets/js/vendors.min.js')}}"></script>

        <!-- ApexCharts JS -->
        <script src="{{asset('BackEnd/assets/js/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apexcharts-stock-prices.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apexcharts-irregular-data-series.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apex-custom-line-chart.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apex-custom-pie-donut-chart.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apex-custom-area-charts.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apex-custom-column-chart.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apex-custom-bar-charts.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apex-custom-mixed-charts.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apex-custom-radialbar-charts.js')}}"></script>
        <script src="{{asset('BackEnd/assets/js/apexcharts/apex-custom-radar-chart.js')}}"></script>

        <!-- ChartJS -->
        <script src="{{asset('BackEnd/assets/js/chartjs/chartjs.min.js')}}"></script>
        <div class="chartjs-colors"> <!-- To use template colors with Javascript -->
            <div class="bg-primary"></div>
            <div class="bg-primary-light"></div>
            <div class="bg-secondary"></div>
            <div class="bg-info"></div>
            <div class="bg-success"></div>
            <div class="bg-success-light"></div>
            <div class="bg-danger"></div>
            <div class="bg-warning"></div>
            <div class="bg-purple"></div>
            <div class="bg-pink"></div>
        </div>
        
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
        <!-- jvectormap Min JS -->
        <script src="{{asset('BackEnd/assets/js/jvectormap-1.2.2.min.js')}}"></script>
        <!-- jvectormap World Mil JS -->
        <script src="{{asset('BackEnd/assets/js/jvectormap-world-mill-en.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('BackEnd/assets/js/custom.js')}}"></script>
        
        <!-- Data Table Start -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <!-- Data Table End -->
        <!-- Toastr -->
        <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

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
        </script>

        @stack('js')
        
    </body>
</html>