@extends('admin.layouts.main')

@section('content')
    <section class="py-3">
        <div class="col-md-6 m-auto">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Banner</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" class="add_new_banner_form" action="{{ route('admin.banner.create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="bannerTitle">Banner Title</label>
                            <input type="text" name="title" class="form-control" id="bannerTitle" placeholder="Type banner title here..." required>
                        </div>
                        <div class="form-group">
                            <label for="bannerSubtitle">Banner Subtitle</label>
                            <input type="text" name="subtitle" class="form-control" id="bannerSubtitle" placeholder="Type banner subtitle here...">
                        </div>
                        <div class="form-group">
                            <label for="bannerSubtitle2">Banner Subtitle 2</label>
                            <input type="text" name="subtitle2" class="form-control" id="bannerSubtitle2" placeholder="Type banner subtitle 2 here...">
                        </div>
                        <div class="form-group">
                            <label for="bannerImage">Banner Image</label>
                            <div class="custom-file">
                                <input type="file" name="banner" class="custom-file-input" id="bannerImage" required>
                                <label class="custom-file-label" for="bannerImage">Choose file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bannerUrl">Banner URL</label>
                            <input type="text" name="banner_url" class="form-control" id="bannerUrl" placeholder="Type banner url...">
                        </div>
                        <div class="form-group">
                            <label for="bannerVideoUrl">Video URL</label>
                            <input type="text" name="banner_video_url" class="form-control" id="bannerVideoUrl" placeholder="Type video url...">
                        </div>
                        <div class="form-group">
                            <label for="bannerStatus">Status</label>
                            <select name="status" id="bannerStatus" class="form-control" required>
                                <option value="">-- Select Status --</option>
                                <option value="0">Disable</option>
                                <option value="1">Enable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bannerPosition">Position</label>
                            <input type="text" name="banner_position" class="form-control" id="bannerPosition" placeholder="Enter banner position">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Banner</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection
