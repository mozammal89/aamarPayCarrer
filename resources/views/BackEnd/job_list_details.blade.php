@extends('BackEnd.layout')


@section('content')
                
<div class="card">
    <div class="card-body">
        <form method="get" action="{{route('admin.joblistDetails',$job_list_details->id)}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Job Title</label>
                <input type="text" class="form-control" value="{{$job_list_details->job_title}}" readonly="">
            </div>
            <div class="form-group col-md-4">
                <label>Job Location</label>
                <input type="text" class="form-control" value="{{$job_list_details->job_location}}" readonly="">
            </div>
            <div class="form-group col-md-4">
                <label>salary</label>
                <input type="text" class="form-control" value="{{$job_list_details->salary}}" readonly="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Department</label>
                <input type="text" class="form-control" value="{{$job_list_details->department}}" readonly="">
            </div>
            <div class="form-group col-md-4">
                <label>Vacancy</label>
                <input type="text" class="form-control" value="{{$job_list_details->vacancy}}" readonly="">
            </div>
            <div class="form-group col-md-4">
                <label>Employment Status</label>
                <input type="text" class="form-control" value="{{$job_list_details->employment_status}}" readonly="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Job Post Date</label>
                <input type="text" class="form-control" value="{{$job_list_details->job_post_date}}" readonly="">
            </div>
            <div class="form-group col-md-6">
                <label>Application Deadline</label>
                <input type="text" class="form-control" value="{{$job_list_details->application_deadline}}" readonly="">
            </div>
        </div>
        <div class="form-group">
            <label>Job Description</label>
            <textarea class="form-control" rows="3" readonly="">{!!$job_list_details->job_description!!}</textarea>
        </div>
        <div class="form-group">
            <label>Job Responsibilities</label>
            <textarea class="form-control" rows="3" readonly="">{!!$job_list_details->job_responsibilities!!}</textarea>
        </div>
        <div class="form-group">
            <label>Educational Requirements</label>
            <textarea class="form-control" rows="3" readonly="">{!!$job_list_details->educational_requirements!!}</textarea>
        </div>
        <div class="form-group">
            <label>Additional Requirements</label>
            <textarea class="form-control" rows="3" readonly="">{!!$job_list_details->additional_requirements!!}</textarea>
        </div>
        <div class="form-group">
            <label>Other Benifits</label>
            <textarea class="form-control" rows="3" readonly="">{!!$job_list_details->other_benifits!!}</textarea>
        </div>
        <div class="form-group">
            <label>Application Note</label>
            <textarea class="form-control" rows="3" readonly="">{!!$job_list_details->application_note!!}</textarea>
        </div>
        </form>
    </div>
</div>
           

@endsection