@extends('admin.layouts.main')

@section('content')
    <section class="py-3">
        <div class="col-md-6 m-auto">
            <!-- general form elements -->
            <!-- form start -->
            <form method="post" class="update_category_form" action="{{ route('admin.category.edit', $category->id) }}" enctype="multipart/form-data">
                @csrf
                <!-- card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">UpdateCategory</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" id="categoryName" placeholder="Type category name here..." required>
                        </div>
                        <div class="form-group">
                            <label for="categoryParent">Parent Category</label>
                            <select name="parent_id" id="categoryParent" class="form-control" required>
                                <option value="0">-- Select Parent Category --</option>
                                @foreach($parent_category as $key => $pCategory)
                                    <option value="{{ $pCategory->id }}" {{ $pCategory->id == $category->parent_id ? 'selected' : ''  }}>{{ $pCategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoryThumb">Thumbnail Image</label>
                            <div class="custom-file">
                                <input type="file" name="thumbnail_img" class="custom-file-input" id="categoryThumb">
                                <input type="hidden" name="current_thumb"  value="{{ $category->thumbnail_img }}" id="">
                                <label class="custom-file-label" for="categoryThumb">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryBanner">Category Banner</label>
                            <div class="custom-file">
                                <input type="file" name="banner" class="custom-file-input" id="categoryBanner">
                                <input type="hidden" name="current_banner" value="{{ $category->banner }}">
                                <label class="custom-file-label" for="categoryBanner">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Description</label>
                            <textarea name="description" id="categoryDescription" class="form-control summernote" cols="30" rows="4" placeholder="Type description here...">{!! $category->description !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="categoryFeatured">Featured</label>
                            <select name="featured" id="categoryFeatured" class="form-control" required>
                                <option value="">-- Select Featured --</option>
                                <option value="0" {{ $category->featured == 0 ? 'selected' : '' }}>Disable</option>
                                <option value="1" {{ $category->featured == 1 ? 'selected' : '' }}>Enable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="categoryStatus">Status</label>
                            <select name="status" id="categoryStatus" class="form-control" required>
                                <option value="">-- Select Status --</option>
                                <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Disable</option>
                                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Enable</option>
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
                            <input type="text" name="meta_title" class="form-control" value="{{ $category->meta_title }}" id="metaTitle" placeholder="Type meta title here...">
                        </div>
                        <div class="form-group">
                            <label for="metaKeywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" value="{{ $category->meta_keywords }}" id="metaKeywords" placeholder="Type meta keywords here...">
                        </div>
                        <div class="form-group">
                            <label for="metaDescription">Meta Description</label>
                            <textarea name="meta_description" class="form-control" id="metaDescription" placeholder="Type meta description here..." cols="30" rows="2">{{ $category->meta_description }}</textarea>
                        </div>
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
