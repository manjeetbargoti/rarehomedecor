@extends('admin.layouts.main')

@section('content')

<section class="content pt-1">

    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Footer Settings') }}</h3>
                </div>

                <form class="form-horizontal" method="post" action="{{ route('admin.settings.footer') }}" id="footerSettingsForm" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="siteTitle" class="col-sm-3 col-form-label">Site Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="site_title" id="siteTitle" placeholder="Enter Site Title" value="{{ get_setting('site_title') }}">
                                <input type="hidden" class="form-control" name="types[]" value="site_title">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="adminEmail" class="col-sm-3 col-form-label">Admin Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="admin_email" id="adminEmail" placeholder="Enter admin email" value="{{ get_setting('admin_email') }}">
                                <input type="hidden" class="form-control" name="types[]" value="admin_email">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="adminPhone" class="col-sm-3 col-form-label">Admin Phone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="admin_phone" id="adminPhone" placeholder="Enter admin phone" value="{{ get_setting('admin_phone') }}">
                                <input type="hidden" class="form-control" name="types[]" value="admin_phone">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('admin.dashboard') }}" class="btn bg-gradient-info btn-md">Cancel</a>
                        <button type="submit" class="btn bg-gradient-success btn-md float-right">Update Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection