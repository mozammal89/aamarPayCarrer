<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use Brian2694\Toastr\Facades\Toastr;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
    	return view ('BackEnd.add_jobs');
    }

    public function store (Request $request)
    {
    	// dd($request);

    	$request->validate([
    		'job_title' => 'required',
    		'job_location' => 'required',
    		'vacancy' => 'required',
    		'salary' => 'required',
    		'employment_status' => 'required',
    		'job_responsibilities' => 'required',
            'educational_requirements' => 'required',
            'job_description' => 'required',
    		'department' => 'required',
    	]);

    	$jobs = new Jobs;

    	$jobs->job_title = $request->job_title;
    	$jobs->job_location = $request->job_location;
    	$jobs->vacancy = $request->vacancy;
    	$jobs->salary = $request->salary;
    	$jobs->employment_status = $request->employment_status;
    	$jobs->job_post_date = $request->job_post_date;
    	$jobs->application_deadline = $request->application_deadline;
    	$jobs->job_responsibilities = $request->job_responsibilities;
    	$jobs->educational_requirements = $request->educational_requirements;
    	$jobs->additional_requirements = $request->additional_requirements;
    	$jobs->other_benifits = $request->other_benifits;
        $jobs->application_note = $request->application_note;
        $jobs->job_description = $request->job_description;
    	$jobs->department = $request->department;

    	$jobs->save();

    	Toastr::success('Job Submitted','Submitted');   

         return redirect()->route('admin.addjobs')
                         ->with('success','Job Submitted Successfully');

    }

    public function joblist ()
    {
    	$job_list = Jobs::get();
        // dd($job_list);

    	return view ('BackEnd.job_list', compact('job_list'));
    }

    public function joblistDetails ($id)
    {
        $job_list_details = Jobs::find($id);
        // dd($job_list_details);

        return view ('BackEnd.job_list_details', compact('job_list_details'));
    }

    public function delete ($id)
    {
        Jobs::find($id)->delete();

        Toastr::success('Job Post successfully Deleted','Deleted');

        return redirect()->route('admin.joblist')
                         ->with('success','Job Post deleted successfully.'); 
    }

    public function jobsgetEdit ($id)
    {
        $jobs = Jobs::find($id);
        return view ('BackEnd.job_list_edit',compact('jobs'));
    }

    public function jobsEdit (Request $request, $id)
    {
        $jobs = Jobs::find($id);

        $request->validate([
            'job_title' => 'required',
         
        ]);

        $jobs->job_title = $request->job_title;
        $jobs->job_location = $request->job_location;
        $jobs->vacancy = $request->vacancy;
        $jobs->salary = $request->salary;
        $jobs->employment_status = $request->employment_status;
        $jobs->job_post_date = $request->job_post_date;
        $jobs->application_deadline = $request->application_deadline;
        $jobs->job_responsibilities = $request->job_responsibilities;
        $jobs->educational_requirements = $request->educational_requirements;
        $jobs->additional_requirements = $request->additional_requirements;
        $jobs->other_benifits = $request->other_benifits;
        $jobs->application_note = $request->application_note;
        $jobs->job_description = $request->job_description;
        $jobs->department = $request->department;

        $jobs->save();

        Toastr::success('Job Post successfully Updated','Updated');   

         return redirect()->route('admin.joblist')
                         ->with('success','Job Post updated successfully.');
    }

    public function changeStatus(Request $request)
    {
     //dd('test');
        $jobs = Jobs::find($request->id);
        $jobs->status = $request->status;
        $jobs->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
