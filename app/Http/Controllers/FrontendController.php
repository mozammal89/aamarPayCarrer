<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicants;
use App\Models\Jobs;
use Brian2694\Toastr\Facades\Toastr;

class FrontendController extends Controller
{
    public function home()
    {
        $job_list = Jobs::where('status','1')->latest()->get();
        // $job_list = Jobs
    // 	dd($job_list);
    	return view ('FrontEnd.career',compact('job_list'));
    }
}
