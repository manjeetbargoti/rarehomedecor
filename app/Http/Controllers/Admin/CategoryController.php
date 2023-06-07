<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Upload;
use Auth;

class CategoryController extends Controller
{
    // List categories
    public function index(Request $request) {
        $categories = Category::latest()->paginate(25);
        return view('admin.category.index', compact('categories'));
    }

    // Add category
    public function create(Request $request) {
        if($request->isMethod('POST')) {
        
            try {
                $request->validate([
                    'name'=>'required'
                ]);
    
                $category = new Category();
                $category->name             = $request->name;
                $category->slug             = Str::slug($request->name, '-');
                $category->parent_id        = $request->parent_id;
                $category->description      = $request->description;
                $category->featured         = $request->featured;
                $category->status           = $request->status;
                $category->meta_title       = $request->meta_title;
                $category->meta_keywords    = $request->meta_keywords;
                $category->meta_description = $request->meta_description;
    
                // Getting Category Thumbnail Image
                $categoryThumb = $request->thumbnail_img;
        
                if (!empty($categoryThumb)) {
                    $photoURL = $categoryThumb;
                    $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                    $path = public_path("/uploads/category");
                    
                    if (!empty($photoURL->getClientOriginalName())) {
                        copy($photoURL, $path . "/" . $file_name);
    
                        $upload = new Upload();
                        $upload->file_original_name = $photoURL->getClientOriginalName();
                        $upload->file_name          = "uploads/category/" . $file_name;
                        $upload->user_id            = Auth::user()->id;
                        $upload->file_size          = 0;
                        $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                        $upload->type               = "image";
    
                        $upload->save();
                        $uploadedThumbPhoto = $upload->id;
                    }
                }
    
                $category->thumbnail_img    = @$uploadedThumbPhoto ?? null;
    
                // Getting Category Banner Image
                $categoryBanner = $request->banner;
        
                if (!empty($categoryBanner)) {
                    $photoURL = $categoryBanner;
                    $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                    $path = public_path("/uploads/category");
                    
                    if (!empty($photoURL->getClientOriginalName())) {
                        copy($photoURL, $path . "/" . $file_name);
    
                        $upload = new Upload();
                        $upload->file_original_name = $photoURL->getClientOriginalName();
                        $upload->file_name          = "uploads/category/" . $file_name;
                        $upload->user_id            = Auth::user()->id;
                        $upload->file_size          = 0;
                        $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                        $upload->type               = "image";
    
                        $upload->save();
                        $uploadedBannerPhoto = $upload->id;
                    }
                }
    
                $category->banner    = @$uploadedBannerPhoto ?? null;
    
                if($category->save()){
                    toastr()->success('Category added successfully!');
                    return redirect()->route('admin.category.list');
                }else{
                    toastr()->error('Something went wrong!');
                    return redirect()->back();
                }
            } catch (\Throwable $th) {
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        }
        
        $parent_category = Category::where(['parent_id' => 0, 'status' => 1])->get();
        return view('admin.category.create', compact('parent_category'));
    }

    // Edit category
    public function update(Request $request) {
        $category = Category::where(['id' => $request->id])->first();
        $parent_category = Category::where(['parent_id' => 0, 'status' => 1])->get();

        if(!empty($category)){
            if($request->isMethod('POST')) {
                try {
                    $request->validate([
                        'name'=>'required'
                    ]);

                    $category->name             = $request->name;
                    $category->slug             = Str::slug($request->name, '-');
                    $category->parent_id        = $request->parent_id;
                    $category->description      = $request->description;
                    $category->featured         = $request->featured;
                    $category->status           = $request->status;
                    $category->meta_title       = $request->meta_title;
                    $category->meta_keywords    = $request->meta_keywords;
                    $category->meta_description = $request->meta_description;
        
                    // Getting Category Thumbnail Image
                    $categoryThumb = $request->thumbnail_img;
            
                    if (!empty($categoryThumb)) {
                        $photoURL = $categoryThumb;
                        $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                        $path = public_path("/uploads/category");
                        
                        if (!empty($photoURL->getClientOriginalName())) {
                            copy($photoURL, $path . "/" . $file_name);
        
                            $upload = new Upload();
                            $upload->file_original_name = $photoURL->getClientOriginalName();
                            $upload->file_name          = "uploads/category/" . $file_name;
                            $upload->user_id            = Auth::user()->id;
                            $upload->file_size          = 0;
                            $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                            $upload->type               = "image";
        
                            $upload->save();
                            $uploadedThumbPhoto = $upload->id;
                        }
                    }else{
                        $uploadedThumbPhoto = $request->current_thumb;
                    }
        
                    $category->thumbnail_img    = @$uploadedThumbPhoto ?? null;
        
                    // Getting Category Banner Image
                    $categoryBanner = $request->banner;
            
                    if (!empty($categoryBanner)) {
                        $photoURL = $categoryBanner;
                        $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                        $path = public_path("/uploads/category");
                        
                        if (!empty($photoURL->getClientOriginalName())) {
                            copy($photoURL, $path . "/" . $file_name);
        
                            $upload = new Upload();
                            $upload->file_original_name = $photoURL->getClientOriginalName();
                            $upload->file_name          = "uploads/category/" . $file_name;
                            $upload->user_id            = Auth::user()->id;
                            $upload->file_size          = 0;
                            $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                            $upload->type               = "image";
        
                            $upload->save();
                            $uploadedBannerPhoto = $upload->id;
                        }
                    }else{
                        $uploadedBannerPhoto = $request->current_banner;
                    }
        
                    $category->banner    = @$uploadedBannerPhoto ?? null;
        
                    if($category->save()){
                        toastr()->success('Category updated successfully!');
                        return redirect()->route('admin.category.list');
                    }else{
                        toastr()->error('Something went wrong!');
                        return redirect()->back();
                    }
                } catch (\Throwable $th) {
                    toastr()->error($th->getMessage());
                    return redirect()->back();
                }
            }
    
            return view('admin.category.edit', compact('category','parent_category'));
        }else{
            toastr()->error('Something went wrong!');
            return redirect()->back();
        }
    }
}
