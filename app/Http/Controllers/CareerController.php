<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Applicants;
use App\Models\Jobs;

class CareerController extends Controller
{
    public function index ()
    {
        // dd('ok');
    	$job_list = Jobs::where('status','1')->latest()->get();
        // $job_list = Jobs
    // 	dd($job_list);
    	return view ('FrontEnd.career',compact('job_list'));
    }

    public function jobdetails ($id)
    {
    	$job_details = Jobs::where('id',$id)->get();
    	return view('FrontEnd.job_details', compact('job_details'));
    }

    public function applyjobs(Request $request)
    {
    	// dd($request);

    	$request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
         
        ]);

    	$apply = new Applicants;

    	// $job_details = Jobs::where('id',)->get();

    	// dd($job_details);

    	$apply->job_id = $request->id;

    	$apply->name = $request->name;
    	$apply->email = $request->email;
    	$apply->address = $request->address;
    	$apply->phone = $request->phone;
    	$apply->name = $request->name;

        $fileName = time().'.'.$request->file->extension();    
        $request->file->move(public_path('FrontEnd/cv_uploads'), $fileName);

        $apply->file = $fileName;
        $apply->save();

        Toastr::success('CV submitted successfully','Success'); 

        return redirect()->route('career.jobdetails', ['id' => $request->id])
                         ->with('success','CV Submitted successfully.');


    }
}
