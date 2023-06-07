@extends('admin.layouts.main')

@section('content')
    <section class="py-3">
        <div class="col-md-6 m-auto">
            <!-- general form elements -->
            <!-- form start -->
            <form method="post" class="add_new_category_form" action="{{ route('admin.category.create') }}" enctype="multipart/form-data">
                @csrf
                <!-- card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input type="text" name="name" class="form-control" id="categoryName" placeholder="Type category name here..." required>
                        </div>
                        <div class="form-group">
                            <label for="categoryParent">Parent Category</label>
                            <select name="parent_id" id="categoryParent" class="form-control" required>
                                <option value="0">-- Select Parent Category --</option>
                                @foreach($parent_category as $key => $pCategory)
                                    <option value="{{ $pCategory->id }}">{{ $pCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoryThumb">Thumbnail Image</label>
                            <div class="custom-file">
                                <input type="file" name="thumbnail_img" class="custom-file-input" id="categoryThumb">
                                <label class="custom-file-label" for="categoryThumb">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryBanner">Category Banner</label>
                            <div class="custom-file">
                                <input type="file" name="banner" class="custom-file-input" id="categoryBanner">
                                <label class="custom-file-label" for="categoryBanner">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Description</label>
                            <textarea name="description" id="categoryDescription" class="form-control summernote" cols="30" rows="4" placeholder="Type description here..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoryFeatured">Featured</label>
                            <select name="featured" id="categoryFeatured" class="form-control" required>
                                <option value="">-- Select Featured --</option>
                                <option value="0">Disable</option>
                                <option value="1">Enable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoryStatus">Status</label>
                            <select name="status" id="categoryStatus" class="form-control" required>
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
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
