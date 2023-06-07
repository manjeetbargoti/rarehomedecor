<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Enquiry;
use App\User;
use Auth;

class HomeController extends Controller
{
    // Dashboard
    public function dashboard() {
        $product_count = Product::where('status', 1)->count();
        $category_count = Category::where('status', 1)->count();
        $product_query = Enquiry::whereNotNull('product_id')->count();
        $contact_query = Enquiry::whereNull('product_id')->count();
        return view('admin.dashboard', compact('product_count','category_count','product_query','contact_query'));
    }

    // Update Admin Password
    public function updateAdminPassword(Request $request){
        if(Auth::check()){
            $request->validate([
                'old_password'      =>'required',
                'password'          =>'min:8|required|confirmed'
            ]);

            $user_password = Auth::user()->password;
            // dd($user_password);

            if(!Hash::check($request->old_password, $user_password)){
                toastr()->error('Old Password is wrong!');
                return redirect()->back();
            }else{
                $hashPassword = Hash::make($request->password);
                User::find(Auth::user()->id)->update([
                    'password' => $hashPassword
                ]);
                toastr()->success('Password updated successfully!');
                return redirect()->back();
            }

        }
    }
}
