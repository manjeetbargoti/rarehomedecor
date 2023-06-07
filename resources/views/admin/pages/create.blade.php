@extends('admin.layouts.main')

@section('content')
    <section class="py-3">
        <div class="col-md-8 m-auto">
            <!-- general form elements -->
            <!-- form start -->
            <form method="post" class="add_new_page_form" action="{{ route('admin.page.create') }}" enctype="multipart/form-data">
                @csrf
                <!-- card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="pageName">Page Name</label>
                            <input type="text" name="name" class="form-control" id="pageName" placeholder="Type page name here..." required>
                        </div>
                        <div class="form-group">
                            <label for="pageDecription">Description</label>
                            <textarea name="description" id="pageDecription" class="form-control summernote" cols="30" rows="10" placeholder="Type description here..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pageStatus">Status</label>
                            <select name="status" id="pageStatus" class="form-control" required>
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
                        <button type="submit" class="btn btn-primary">Add Page</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
