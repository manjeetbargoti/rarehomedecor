<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enquiry;

class EnquiryController extends Controller
{
    // List Product Enquiries
    public function productEnquiry(Request $request){
        $queries = Enquiry::whereNotNull('product_id')->paginate(25);
        return view('admin.enquiry.index', compact('queries'));
    }

    // List Contact Enquiries
    public function contactEnquiry(Request $request){
        $queries = Enquiry::whereNull('product_id')->paginate(25);
        return view('admin.enquiry.index', compact('queries'));
    }

    // Enquiry Detail
    public function view(Request $request){
        $query = Enquiry::where(['id' => $request->id])->first();
        return view('admin.enquiry.view', compact('query'));
    }
    
    public function enquiryComplete (Request $request){
        Enquiry::where(['id'=>$request->id])->update(['status'=>1]);
    
        toastr()->success('Status updated to complete!');
        return redirect()->back();
    }

    public function enquiryPending(Request $request){
        Enquiry::where(['id'=>$request->id])->update(['status'=>0]);
    
        toastr()->success('Status updated to pending!');
        return redirect()->back();
    }
}
