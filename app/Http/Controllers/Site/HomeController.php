<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Banner;
use App\Page;

class HomeController extends Controller
{
    // Welcome page
    public function homepage(){
        $categories = Category::where(['status'=>1,'featured'=>1])->latest()->limit(4)->get();
        $banners = Banner::where(['status'=>1])->get();
        $products = Product::where(['status'=>1,'featured'=>1])->latest()->limit(4)->get();

        return view('frontend.homepage',compact('categories','banners','products'));
    }

    // About us page
    public function about(){
        $about = Page::where(['slug'=>'about-us'])->first();
        return view('frontend.pages.about', compact('about'));
    }

    // Terms page
    public function terms(){
        $terms = Page::where(['slug'=>'terms'])->first();
        return view('frontend.pages.terms', compact('terms'));
    }

    // Privacy page
    public function privacy(){
        $privacy = Page::where(['slug'=>'privacy'])->first();
        return view('frontend.pages.privacy', compact('privacy'));
    }

    // Portfolio page
    public function category(){
        $categories = Category::where(['status' => 1])->paginate(15);
        return view('frontend.portfolio.index', compact('categories'));
    }

    // Category detail Page
    public function categoryProducts(Request $request){
        $category = Category::where(['slug' => $request->slug])->first();
        if(!empty($category)){
            $products = Product::where(['category_id'=>$category->id, 'status'=>1])->latest()->paginate(18);
        }else{
            $products = [];
        }
        // dd($products);
        return view('frontend.portfolio.detail', compact('category','products'));
    }

    // Product page
    public function product(){
        $products = Product::where(['status'=>1])->latest()->paginate(18);
        return view('frontend.products.index', compact('products'));
    }

    // Product detail page
    public function productDetail(Request $request){
        $product = Product::where(['slug' => $request->slug])->first();
        return view('frontend.products.detail', compact('product'));
    }

    // Contact page
    public function contact(){
        return view('frontend.contact');
    }
}
