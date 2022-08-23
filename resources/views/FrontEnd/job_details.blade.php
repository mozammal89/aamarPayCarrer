@extends('FrontEnd.layout')

@section('content')

<!--body content wrap start-->
<div class="main">
    <!-- Header Section Start -->
    @foreach($job_details as $all_jobs)
    <section class="hero-section ptb-100 gradient-overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0"
                        style="margin-top: 50px !important;">
                        <h1 class="text-white mb-0">{{$all_jobs->job_title}}</h1>
                        <p>{{$all_jobs->employment_status}} | {{$all_jobs->job_location}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Section End -->

    <!-- Job Section Start -->
    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-12">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h2>About Us</h2>
                        <p>{{$all_jobs->job_description}}</p>
                        <div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs mb-3 border-bottom-0 feature-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" href="#feature-tab-1"
                                        data-toggle="tab">
                                        <h6 class="mb-0">Basic Informartion</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-2"
                                        data-toggle="tab">
                                        <h6 class="mb-0">Job Responsibilities</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-3"
                                        data-toggle="tab">
                                        <h6 class="mb-0">Requirements</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-4"
                                        data-toggle="tab">
                                        <h6 class="mb-0">Other Benefits</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-5"
                                        data-toggle="tab">
                                        <h6 class="mb-0">Application Note</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane active" id="feature-tab-1">
                                    <p>Objectively monetize resource sucking testing procedures vis-a-vis standards
                                        compliant ROI. Proactively disintermediate virtual sources before wireless
                                        alignments.</p>

                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span
                                                class="ti-control-forward mr-2 color-secondary"></span><strong>Job Title:</strong>
                                            {{$all_jobs->job_title}}</li>
                                        <li class="py-1"><span
                                                class="ti-control-forward mr-2 color-secondary"></span><strong>Department:</strong>
                                            {{$all_jobs->department}}</li>
                                        <li class="py-1"><span
                                                class="ti-control-forward mr-2 color-secondary"></span><strong>Location:</strong>
                                            {{$all_jobs->job_location}}</li>
                                            <li class="py-1"><span
                                                class="ti-control-forward mr-2 color-secondary"></span><strong>Employment Status:</strong>
                                            {{$all_jobs->employment_status}}</li>
                                        <li class="py-1"><span
                                                class="ti-control-forward mr-2 color-secondary"></span><strong>Salary:</strong>
                                            {{$all_jobs->salary}}</li>
                                        <li class="py-1"><span
                                                class="ti-control-forward mr-2 color-secondary"></span><strong>Vacancy:</strong>
                                            {{$all_jobs->vacancy}}</li>
                                        <li class="py-1"><span
                                                class="ti-control-forward mr-2 color-secondary"></span><strong>Post Date:</strong>
                                            {{$all_jobs->job_post_date}}</li>
                                        <li class="py-1"><span
                                                class="ti-control-forward mr-2 color-secondary"></span><strong>Deadline:</strong>
                                            {{$all_jobs->applicaion_deadline}}</li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="feature-tab-2">
                                    <p>{!! nl2br($all_jobs->job_responsibilities)!!}</p>
                                </div>
                                <div class="tab-pane" id="feature-tab-3">
                                	<p><span><b>Educational Requirements:</b></span><br>{!! nl2br($all_jobs->educational_requirements)!!}</p>
                                	<p><span><b>Additional Requirements:</b></span><br>{!! nl2br($all_jobs->additional_requirements)!!}</p>
                                </div>
                                <div class="tab-pane" id="feature-tab-4">
                                	<p>{!! nl2br($all_jobs->other_benifits)!!}</p>
                                </div>
                                <div class="tab-pane" id="feature-tab-5">
                                    <p>{!! nl2br($all_jobs->application_note)!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <button type="button" class="btn stil-solid-btn disabled" style="pointer-events: all; cursor: pointer; margin-left: 120px;" data-toggle="modal" data-target="#basicModalLong_{{$all_jobs->id}}">Apply This Job</button>

    <!-- Modal -->
    <div class="modal fade" id="basicModalLong_{{$all_jobs->id}}" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
        	<form method="POST" action="{{route('career.applyjobs',$all_jobs->id)}}" enctype="multipart/form-data">
			@csrf
                <input type="text" name="id" value="{{$all_jobs->id}}" hidden="">

	            <div class="modal-content">
	                <div class="modal-header">
	                    <h5 class="modal-title">Please Fill Up the Form</h5>
	                    <button type="button" class="close" data-dismiss="modal">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="modal-body">
						<div class="form-group-inner">
	                        <div class="form-row">
	                        	<div class="col-md-6">
	                        		<div class="form-group">
	                        			<label>Name</label>
	                                    <input type="text" class="form-control" name="name" placeholder="Enter your full name"
	                                        required="required">
	                                </div>
	                        	</div>
	                        	<div class="col-md-6">
	                        		<div class="form-group">
	                        			<label>Email</label>
	                                    <input type="email" class="form-control" name="email"
	                                        placeholder="Enter email" required="required">
	                                </div>
	                        	</div>
	                        </div>
	                        <div class="form-row">
	                        	<div class="col-md-6">
	                        		<div class="form-group">
	                        			<label>Address</label>
	                                    <input type="text" class="form-control" name="address" placeholder="Enter your address"
	                                        required="required">
	                                </div>
	                        	</div>
	                        	<div class="col-md-6">
	                        		<div class="form-group">
	                        			<label>Phone Number</label>
	                                    <input type="text" class="form-control" name="phone"
	                                        placeholder="Enter your phone number" required="required">
	                                </div>
	                        	</div>
	                        </div>
	                        <div class="form-row">
	                        	<div class="col-md-12">
	                        		<div class="form-group" style="margin-bottom: 3px !important">
                        			<label>Upload your CV</label>
                        			</div>
	                        		<div class="custom-file">
										<input type="file" class="custom-file-input" name="file" id="customFile">
										<label class="custom-file-label" for="customFile">Choose file</label>
									</div>
	                        	</div>
	                        </div>
	                    </div>
	                    <div class="modal-footer">
	                        <button type="submit" class="btn btn-warning" id="btnContactUs">Apply</button>
	                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                    </div>
	                </div>
	            </div>
            </form>
        </div>
    </div>
    <!-- Modal End -->
    @endforeach
    <!-- Job Section Start -->
</div>
<!--body content wrap end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

@endsection

@push('js')

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

@endpush