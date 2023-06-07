<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Page;

class PageController extends Controller
{
    // List Pages
    public function index(){
        $pages = Page::latest()->paginate(25);
        return view('admin.pages.index', compact('pages'));
    }

    // Create Page
    public function create(Request $request){
        if($request->isMethod('POST')){
            try{
                $request->validate([
                    'name'=>'required'
                ]);

                $page = new Page();
                $page->title        = $request->name;
                $page->slug         = Str::slug($request->name);
                $page->description  = $request->description;
                $page->status       = $request->status;

                if($page->save()){
                    toastr()->success('Page added successfully!');
                    return redirect()->route('admin.page.list');
                }else{
                    toastr()->error('Something went wrong!');
                    return redirect()->back();
                }

            }catch(\Exception $e){
                toastr()->error($e->getMessage());
                return redirect()->back();
            }
        }
        return view('admin.pages.create');
    }

    // Edit/Update Page
    public function edit(Request $request){
        $page = Page::where(['id'=> $request->id])->first();
        if(!empty($page)){
            if($request->isMethod('POST')){
                try {
                    $request->validate([
                        'name'=>'required'
                    ]);
    
                    $page->title        = $request->name;
                    $page->slug         = Str::slug($request->name);
                    $page->description  = $request->description;
                    $page->status       = $request->status;
    
                    if($page->save()){
                        toastr()->success('Page added successfully!');
                        return redirect()->route('admin.page.list');
                    }else{
                        toastr()->error('Something went wrong!');
                        return redirect()->back();
                    }
                } catch (\Exception $e) {
                    toastr()->error($e->getMessage());
                    return redirect()->back();
                }
            }
            return view('admin.pages.edit', compact('page'));
        }else{
            toastr()->error('Something went wrong!');
            return redirect()->back();
        }
    }
}
