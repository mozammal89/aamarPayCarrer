@extends('FrontEnd.layout')

@section('content')
<body>
    <!--body content wrap start-->
    <div class="main">
        <!-- Header Section Start -->
        <section class="hero-section ptb-100 gradient-overlay">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0" style="margin-top: 50px !important;">
                            <h1 class="text-white mb-0">Available Jobs</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Header Section End -->

        <!-- Job Section Start -->
        <section class="our-blog-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row">
                	@foreach($job_list as $all_jobs)
                    <div class="col-md-6 col-lg-4">
                        <div class="single-blog-card card border-0 shadow-sm">
                            <div class="blog-img">
                                <a href="#"><span class="category position-absolute">{{$all_jobs->department}}</span></a>
                                <a href="#"><img class="card-img-top position-relative img-fluid" alt="blog"></a>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 mb-2 card-title"><a href="#">{{$all_jobs->department}}</a></h3>
                                <p class="card-text"><b>Vaccancy:</b> {{$all_jobs->vacancy}}<br><b>Employment Status:</b> {{$all_jobs->employment_status}}<br><b>Job location:</b> {{$all_jobs->job_location}}</p>
                            </div>
                            <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                                <div class="author-meta d-flex align-items-center">
                                    <!-- <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span> -->
                                    <div class="author-content">
                                        <a href="#" class="d-block">Application Deadline</a>
                                        <small>{{$all_jobs->application_deadline}}</small>
                                    </div>
                                </div>
                                <div class="author-like">
                                    <a href="{{route('career.jobdetails', $all_jobs->id)}}"><span class="fa fa-arrow-right"></span> Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Job Section Start -->
    </div>
    <!--body content wrap end-->

    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-angle-up"></span>
    </button>
    <!--bottom to top button end-->
</body>


@endsection