<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Product;
use App\Upload;
use Auth;

class ProductController extends Controller
{
    // Product list
    public function index()
    {
        $products = Product::latest()->paginate(30);
        return view('admin.product.index', compact('products'));
    }

    // Add new product
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {

            try {
                $request->validate([
                    'name' => 'required'
                ]);

                $product = new Product();
                $product->name              = $request->name;
                $product->category_id       = $request->category;
                $product->slug              = Str::slug($request->name, '-');
                $product->short_description = $request->short_description;
                $product->description       = $request->description;
                $product->features          = implode(',', $request->features);
                $product->pdf_file          = $request->pdf_file;
                $product->featured          = $request->featured;
                $product->status            = $request->status;
                $product->meta_title        = $request->meta_title;
                $product->meta_keywords     = $request->meta_keywords;
                $product->meta_description  = $request->meta_description;

                // Upload Product Thumbnail Image
                $productThumb = $request->thumbnail_img;

                if (!empty($productThumb)) {
                    $photoURL = $productThumb;
                    $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                    $path = public_path("/uploads/products");

                    if (!empty($photoURL->getClientOriginalName())) {
                        copy($photoURL, $path . "/" . $file_name);

                        $upload = new Upload();
                        $upload->file_original_name = $photoURL->getClientOriginalName();
                        $upload->file_name          = "uploads/products/" . $file_name;
                        $upload->user_id            = Auth::user()->id;
                        $upload->file_size          = 0;
                        $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                        $upload->type               = "image";

                        $upload->save();
                        $uploadedThumbPhoto = $upload->id;
                    }
                }

                $product->thumbnail_img    = @$uploadedThumbPhoto ?? null;

                // Upload Product Gallery Photos
                $productPhotos            = $request->photos;

                $uploadedGalPhotos = "";
                if (!empty($productPhotos)) {
                    foreach ($productPhotos as $photoURL) {
                        $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                        $path = public_path("uploads/products");

                        if (!empty(basename($photoURL))) {
                            copy($photoURL, $path . "/" . $file_name);

                            $upload = new Upload();
                            $upload->file_original_name = $photoURL->getClientOriginalName();
                            $upload->file_name          = "uploads/products/" . $file_name;
                            $upload->user_id            = Auth::user()->id;
                            $upload->file_size          = 0;
                            $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                            $upload->type               = "image";
                            $upload->save();
                            $uploadedGalPhotos .= $upload->id . ",";
                        }
                    }
                }

                $product->photos = rtrim($uploadedGalPhotos);

                // Upload PDF File
                if ($request->hasFile('pdf_file')) {
                    $path = public_path("uploads/pdfs");
                    $filenameWithExt = $request->file('pdf_file')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('pdf_file')->getClientOriginalExtension();
                    $fileNameToStore = $filename . '-' . time() . '.' . $extension;

                    copy($request->pdf_file, $path . "/" . $fileNameToStore);
                    $product->pdf_file = "uploads/pdfs/" . $fileNameToStore;
                }

                if ($product->save()) {
                    toastr()->success('Product added successfully!');
                    return redirect()->route('admin.product.list');
                } else {
                    toastr()->error('Something went wrong!');
                    return redirect()->back();
                }
            } catch (\Throwable $th) {
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        }

        $categories = Category::where(['status' => 1])->get();
        return view('admin.product.create', compact('categories'));
    }

    // Edit product
    public function edit(Request $request)
    {
        $product = Product::where(['id' => $request->id])->first();
        if (!empty($product)) {
            if ($request->isMethod('POST')) {

                try {
                    $request->validate([
                        'name' => 'required'
                    ]);

                    $product->name              = $request->name;
                    $product->category_id       = $request->category;
                    $product->slug              = Str::slug($request->name, '-');
                    $product->short_description = $request->short_description;
                    $product->description       = $request->description;
                    $product->features          = implode(',', $request->features);
                    $product->pdf_file          = $request->pdf_file;
                    $product->featured          = $request->featured;
                    $product->status            = $request->status;
                    $product->meta_title        = $request->meta_title;
                    $product->meta_keywords     = $request->meta_keywords;
                    $product->meta_description  = $request->meta_description;

                    // Upload Product Thumbnail Image
                    $productThumb = $request->thumbnail_img;

                    if (!empty($productThumb)) {
                        $photoURL = $productThumb;
                        $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                        $path = public_path("/uploads/products");

                        if (!empty($photoURL->getClientOriginalName())) {
                            copy($photoURL, $path . "/" . $file_name);

                            $upload = new Upload();
                            $upload->file_original_name = $photoURL->getClientOriginalName();
                            $upload->file_name          = "uploads/products/" . $file_name;
                            $upload->user_id            = Auth::user()->id;
                            $upload->file_size          = 0;
                            $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                            $upload->type               = "image";

                            $upload->save();
                            $uploadedThumbPhoto = $upload->id;
                        }
                    } else {
                        $uploadedThumbPhoto = $request->current_thumb;
                    }

                    $product->thumbnail_img    = @$uploadedThumbPhoto ?? null;

                    // Upload Product Gallery Photos
                    $productPhotos            = $request->photos;

                    $uploadedGalPhotos = "";
                    if (!empty($productPhotos)) {
                        foreach ($productPhotos as $photoURL) {
                            $file_name = str_replace(' ', '-', $photoURL->getClientOriginalName());
                            $path = public_path("uploads/products");

                            if (!empty(basename($photoURL))) {
                                copy($photoURL, $path . "/" . $file_name);

                                $upload = new Upload();
                                $upload->file_original_name = $photoURL->getClientOriginalName();
                                $upload->file_name          = "uploads/products/" . $file_name;
                                $upload->user_id            = Auth::user()->id;
                                $upload->file_size          = 0;
                                $upload->extension          = $photoURL->getClientOriginalExtension() ?? null;
                                $upload->type               = "image";
                                $upload->save();
                                $uploadedGalPhotos .= $upload->id . ",";
                            }
                        }
                    } else {
                        $uploadedGalPhotos = $request->current_photos;
                    }

                    $product->photos = rtrim($uploadedGalPhotos);

                    // Upload PDF File
                    if ($request->hasFile('pdf_file')) {

                        $path = public_path("uploads/pdfs");
                        $filenameWithExt = $request->file('pdf_file')->getClientOriginalName();
                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        $extension = $request->file('pdf_file')->getClientOriginalExtension();
                        $fileNameToStore = $filename . '-' . time() . '.' . $extension;

                        copy($request->pdf_file, $path . "/" . $fileNameToStore);
                        $product->pdf_file = "uploads/pdfs/" . $fileNameToStore;
                    }else{
                        $product->pdf_file = $request->current_pdf;
                    }

                    if ($product->save()) {
                        toastr()->success('Product added successfully!');
                        return redirect()->route('admin.product.list');
                    } else {
                        toastr()->error('Something went wrong!');
                        return redirect()->back();
                    }
                } catch (\Throwable $th) {
                    toastr()->error($th->getMessage());
                    return redirect()->back();
                }
            }

            $categories = Category::where(['status' => 1])->get();
            return view('admin.product.edit', compact('product', 'categories'));
        }
    }
}
