@extends('admin.layouts.main')

@section('content')
    <section class="py-3">
        <div class="col-md-8 m-auto">
            <!-- general form elements -->
            <!-- form start -->
            <form method="post" class="add_new_product_form" action="{{ route('admin.product.create') }}" enctype="multipart/form-data">
                @csrf
                <!-- card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title font-weight-bold text-primary">Add New Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" name="name" class="form-control" id="productName" placeholder="Type product name here..." required>
                        </div>
                        <div class="form-group">
                            <label for="productCategory">Product Category</label>
                            <select name="category" id="productCategory" class="form-control select2bs4" data-placeholder="Select features" required>
                                @foreach($categories as $key => $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="productThumb">Thumbnail Image</label>
                            <div class="custom-file">
                                <input type="file" name="thumbnail_img" class="custom-file-input" id="productThumb">
                                <label class="custom-file-label" for="productThumb">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="galleryImage">Gallery Images</label>
                            <div class="custom-file">
                                <input type="file" name="photos[]" multiple class="custom-file-input" id="galleryImage">
                                <label class="custom-file-label" for="galleryImage">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="productFeatures">Product Features</label>
                            <select name="features[]" id="productFeatures" class="form-control select2" data-placeholder="Select features" multiple="multiple" required>
                                <option value="1">Feature 1</option>
                                <option value="2">Feature 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="productShortDescription">Short Description</label>
                            <textarea name="short_description" id="productShortDescription" class="form-control summernote" cols="30" rows="3" placeholder="Type short description here..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Description</label>
                            <textarea name="description" id="productDescription" class="form-control summernote" cols="30" rows="6" placeholder="Type description here..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="productPdf">Product PDF</label>
                            <div class="custom-file">
                                <input type="file" name="pdf_file" class="custom-file-input" id="productPdf">
                                <label class="custom-file-label" for="productPdf">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="productFeatured">Featured</label>
                            <select name="featured" id="productFeatured" class="form-control select2bs4" data-placeholder="Select featured" required>
                                <option value="">-- Select Featured --</option>
                                <option value="0">Disable</option>
                                <option value="1">Enable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="productStatus">Status</label>
                            <select name="status" id="productStatus" class="form-control select2bs4" data-placeholder="Select status" required>
                                <option value="">-- Select Status --</option>
                                <option value="0">Disable</option>
                                <option value="1">Enable</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">SEO (Meta Tags)</h3>
                    </div>
                    <div class="card-header">
                        <div class="form-group">
                            <label for="metaTitle">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" id="metaTitle" placeholder="Type meta title here...">
                        </div>
                        <div class="form-group">
                            <label for="metaKeywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" id="metaKeywords" placeholder="Type meta keywords here...">
                        </div>
                        <div class="form-group">
                            <label for="metaDescription">Meta Description</label>
                            <textarea name="meta_description" class="form-control" id="metaDescription" placeholder="Type meta description here..." cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
