@extends('BackEnd.layout')


@section('content')
                
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('admin.JobsEdit',$jobs->id)}}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Job Title</label>
                <input type="text" class="form-control" name="job_title" value="{{$jobs->job_title}}">
            </div>
            <div class="form-group col-md-4">
                <label>Job Location</label>
                <input type="text" class="form-control" name="job_location" value="{{$jobs->job_location}}">
            </div>
            <div class="form-group col-md-4">
                <label>salary</label>
                <input type="text" class="form-control" name="salary" value="{{$jobs->salary}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Department</label>
                <input type="text" class="form-control" name="department" value="{{$jobs->department}}">
            </div>
            <div class="form-group col-md-4">
                <label>Vacancy</label>
                <input type="text" class="form-control" name="vacancy" value="{{$jobs->vacancy}}">
            </div>
            <div class="form-group col-md-4">
                <label>Employment Status</label>
                <select class="form-control" name="employment_status">
                    <option>{{$jobs->employment_status}}</option>
                    <option value="Part Time Job">Part Time Job</option>
                    <option value="Full Time Job">Full Time Job</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Job Post Date</label>
                <input type="date" class="form-control" name="job_post_date" value="{{$jobs->job_post_date}}">
            </div>
            <div class="form-group col-md-6">
                <label>Application Deadline</label>
                <input type="date" class="form-control" name="application_deadline" value="{{$jobs->application_deadline}}">
            </div>
        </div>
        <div class="form-group">
            <label>Job Description</label>
            <textarea class="form-control" rows="3" name="job_description">{!!$jobs->job_description!!}</textarea>
        </div>
        <div class="form-group">
            <label>Job Responsibilities</label>
            <textarea class="form-control" rows="3" name="job_responsibilities">{!!$jobs->job_responsibilities!!}</textarea>
        </div>
        <div class="form-group">
            <label>Educational Requirements</label>
            <textarea class="form-control" rows="3" name="educational_requirements">{!!$jobs->educational_requirements!!}</textarea>
        </div>
        <div class="form-group">
            <label>Additional Requirements</label>
            <textarea class="form-control" rows="3" name="additional_requirements">{!!$jobs->additional_requirements!!}</textarea>
        </div>
        <div class="form-group">
            <label>Other Benifits</label>
            <textarea class="form-control" rows="3" name="other_benifits">{!!$jobs->other_benifits!!}</textarea>
        </div>
        <div class="form-group">
            <label>Application Note</label>
            <textarea class="form-control" rows="3" name="application_note">{!!$jobs->application_note!!}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Update</button>
        </form>
    </div>
</div>
           

@endsection