<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use App\Upload;
use Auth;

class BannerController extends Controller
{
    // Banner list
    public function index(){
        $banners = Banner::latest()->paginate(20);
        return view('admin.banner.index', compact('banners'));
    }

    // Add Banner
    public function create(Request $request){
        if($request->isMethod('POST')){
            try {
                $banner = new Banner();
                $banner->title      = $request->title;
                $banner->subtitle   = $request->subtitle;
                $banner->subtitle2  = $request->subtitle2;
                $banner->url        = $request->banner_url;
                $banner->position   = $request->banner_position;
                $banner->video_url  = $request->banner_video_url;
                $banner->status     = $request->status;

                // Getting Product Thumbnail Image
                $bannerPhoto = $request->banner;
    
                if (!empty($bannerPhoto)) {
                    $photoURL = $bannerPhoto;
                    $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                    $path = public_path("/uploads/banners");
                    
                    if (!empty($photoURL->getClientOriginalName())) {
                        copy($photoURL, $path . "/" . $file_name);
    
                        $upload = new Upload();
                        $upload->file_original_name = $photoURL->getClientOriginalName();
                        $upload->file_name          = "uploads/banners/" . $file_name;
                        $upload->user_id            = Auth::user()->id;
                        $upload->file_size          = 0;
                        $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                        $upload->type               = "image";
    
                        $upload->save();
                        $uploadedThumbPhoto = $upload->id;
                    }
                }

                $banner->banner    = @$uploadedThumbPhoto ?? null;

                if($banner->save()){
                    toastr()->success('Banner added successfully!');
                    return redirect()->route('admin.banner.list');
                }else{
                    toastr()->error('Something went wrong!');
                    return redirect()->back();
                }
            } catch (\Throwable $th) {
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        }
        return view('admin.banner.create');
    }

    // Edit Banner
    public function edit(Request $request){
        
        $banner = Banner::where(['id' => $request->id])->first();

        if(!empty($banner)){
            if($request->isMethod('POST')){
                try {
                    $banner->title      = $request->title;
                    $banner->subtitle   = $request->subtitle;
                    $banner->subtitle2  = $request->subtitle2;
                    $banner->banner     = $request->banner;
                    $banner->url        = $request->banner_url;
                    $banner->position   = $request->banner_position;
                    $banner->video_url  = $request->banner_video_url;
                    $banner->status     = $request->status;

                    // Getting Product Thumbnail Image
                    $bannerPhoto = $request->banner;
        
                    if (!empty($bannerPhoto)) {
                        $photoURL = $bannerPhoto;
                        $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                        $path = public_path("/uploads/banners");
                        
                        if (!empty($photoURL->getClientOriginalName())) {
                            copy($photoURL, $path . "/" . $file_name);
        
                            $upload = new Upload();
                            $upload->file_original_name = $photoURL->getClientOriginalName();
                            $upload->file_name          = "uploads/banners/" . $file_name;
                            $upload->user_id            = Auth::user()->id;
                            $upload->file_size          = 0;
                            $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                            $upload->type               = "image";
        
                            $upload->save();
                            $uploadedThumbPhoto = $upload->id;
                        }
                    }else{
                        $uploadedThumbPhoto = $request->current_banner;
                    }

                    $banner->banner    = @$uploadedThumbPhoto ?? null;
    
                    if($banner->save()){
                        toastr()->success('Banner added successfully!');
                        return redirect()->route('admin.banner.list');
                    }else{
                        toastr()->error('Something went wrong!');
                        return redirect()->back();
                    }
                } catch (\Throwable $th) {
                    toastr()->error($th->getMessage());
                    return redirect()->back();
                }
            }
    
            return view('admin.banner.edit', compact('banner'));
        }else {
            toastr()->error('Something went wrong!');
            return redirect()->back();
        }
    }
}
