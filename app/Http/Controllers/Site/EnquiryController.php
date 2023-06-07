<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enquiry;

class EnquiryController extends Controller
{
    // Submit Query
    public function homepage_query(Request $request){
        if($request->isMethod('POST')){
            try {
                $request->validate([
                    'name'      =>'required',
                    'phone'     =>'required',
                    'query_msg' => 'required'
                ]);

                $query = new Enquiry();
                $query->name        = $request->name;
                $query->email       = $request->email;
                $query->phone       = $request->phone;
                $query->query_msg   = $request->query_msg;
                $query->ip_address  = $request->ip_address;
                $query->page_url    = $request->page_url;

                if($query->save()){
                    toastr()->success('Query submitted successfully!');
                    return redirect()->back();
                }else{
                    toastr()->error('Something went wrong!');
                    return redirect()->back();
                }

            } catch (\Throwable $th) {
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        }
    }

    // Submit Query
    public function contactpage_query(Request $request){
        if($request->isMethod('POST')){
            try {
                $request->validate([
                    'name'      =>'required',
                    'phone'     =>'required',
                    'query_msg' => 'required'
                ]);

                $query = new Enquiry();
                $query->name        = $request->name;
                $query->email       = $request->email;
                $query->phone       = $request->phone;
                $query->query_msg   = $request->query_msg;
                $query->ip_address  = $request->ip_address;
                $query->page_url    = $request->page_url;

                if($query->save()){
                    toastr()->success('Query submitted successfully!');
                    return redirect()->back();
                }else{
                    toastr()->error('Something went wrong!');
                    return redirect()->back();
                }

            } catch (\Throwable $th) {
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        }
    }

    // Submit Query
    public function productpage_query(Request $request){
        if($request->isMethod('POST')){
            try {
                $request->validate([
                    'name'      =>'required',
                    'phone'     =>'required',
                    'query_msg' => 'required'
                ]);

                $query = new Enquiry();
                $query->name        = $request->name;
                $query->email       = $request->email;
                $query->phone       = $request->phone;
                $query->query_msg   = $request->query_msg;
                $query->ip_address  = $request->ip_address;
                $query->page_url    = $request->page_url;
                $query->product_id  = $request->product_id;

                if($query->save()){
                    toastr()->success('Query submitted successfully!');
                    return redirect()->back();
                }else{
                    toastr()->error('Something went wrong!');
                    return redirect()->back();
                }

            } catch (\Throwable $th) {
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        }
    }
}
