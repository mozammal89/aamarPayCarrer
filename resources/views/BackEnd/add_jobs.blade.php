@extends('BackEnd.layout')

@section('content')

<div class="card">
	<div class="card-body">
		<form method="post" action="{{route('admin.store')}}"> 
			@csrf
			<div class="form-row">
		        <div class="form-group col-md-4">
		            <label>Job Title</label>
		        	<input type="text" name="job_title" class="form-control">
		        </div>
		        <div class="form-group col-md-4">
		            <label>Job Location</label>
		        	<input type="text" name="job_location" class="form-control">
		        </div>
		        <div class="form-group col-md-4">
		            <label>salary</label>
		            <input type="text" name="salary" class="form-control">
		        </div>
		    </div>
		    <div class="form-row">
		        <div class="form-group col-md-4">
		            <label>Department</label>
		            <input type="text" name="department" class="form-control">
		        </div>
		        <div class="form-group col-md-4">
		            <label>Vacancy</label>
		            <input type="text" name="vacancy" class="form-control">
		        </div>
		        <div class="form-group col-md-4">
		            <label>Employment Status</label>
		            <select class="form-control" name="employment_status">
			            <option value="Intern">Intern</option>
			            <option value="Part Time Job">Part Time Job</option>
			            <option value="Full Time Job">Full Time Job</option>
			        </select>
		        </div>
		    </div>
		    <div class="form-row">
		        <div class="form-group col-md-6">
		            <label>Job Post Date</label>
		            <input type="date" name="job_post_date" class="form-control">
		        </div>
		        <div class="form-group col-md-6">
		            <label>Application Deadline</label>
		            <input type="date" name="application_deadline" class="form-control">
		        </div>
		    </div>
		    <div class="form-group">
		        <label>Job Description</label>
		        <textarea class="form-control" name="job_description" rows="3"></textarea>
		    </div>
		    <div class="form-group">
		        <label>Job Responsibilities</label>
		        <textarea class="form-control" name="job_responsibilities" rows="3"></textarea>
		    </div>
		    <div class="form-group">
		        <label>Educational Requirements</label>
		        <textarea class="form-control" name="educational_requirements" rows="3"></textarea>
		    </div>
		    <div class="form-group">
		        <label>Additional Requirements</label>
		        <textarea class="form-control" name="additional_requirements" rows="3"></textarea>
		    </div>
		    <div class="form-group">
		        <label>Other Benifits</label>
		        <textarea class="form-control" name="other_benifits" rows="3"></textarea>
		    </div>
		    <div class="form-group">
		        <label>Application Note</label>
		        <textarea class="form-control" name="application_note" rows="3"></textarea>
		    </div>
		    <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

@endsection


