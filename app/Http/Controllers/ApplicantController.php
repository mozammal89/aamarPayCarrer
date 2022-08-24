<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Applicants;

class ApplicantController extends Controller
{
    public function index()
    {
    	$info = Applicants::get();
        // dd($info);
    	return view ('BackEnd.view_applicants', compact('info'));
    }

    public function delete ($id)
    {
        Applicants::find($id)->delete();

        Toastr::success('Applicant successfully Deleted','Deleted');

         return redirect()->route('admin.applicants')
                         ->with('success','Applicant deleted successfully.'); 
    }
}
