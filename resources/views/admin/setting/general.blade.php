@extends('admin.layouts.main')

@section('content')
    <section class="content pt-1">

        <div class="row">
            <div class="col-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('General Settings') }}</h3>
                    </div>

                    <form class="form-horizontal" method="post" action="{{ route('admin.settings.general') }}"
                        id="generalSettingsForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="siteTitle" class="col-sm-3 col-form-label">Site Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="site_title" id="siteTitle"
                                        placeholder="Enter Site Title" value="{{ get_setting('site_title') }}">
                                    <input type="hidden" class="form-control" name="types[]" value="site_title">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="card-body">
                        <div class="form-group row">
                            <label for="siteLogo" class="col-sm-3 col-form-label">Site Logo</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="site_logo" id="siteLogo" value="{{ get_setting('site_logo') }}">
                                <input type="hidden" class="form-control" name="types[]" value="site_logo">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="siteFavicon" class="col-sm-3 col-form-label">Site Favicon</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="site_favicon" id="siteFavicon" value="{{ get_setting('site_favicon') }}">
                                <input type="hidden" class="form-control" name="types[]" value="site_favicon">
                            </div>
                        </div>
                    </div> --}}

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="adminEmail" class="col-sm-3 col-form-label">Admin Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="admin_email" id="adminEmail"
                                        placeholder="Enter admin email" value="{{ get_setting('admin_email') }}">
                                    <input type="hidden" class="form-control" name="types[]" value="admin_email">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="adminPhone" class="col-sm-3 col-form-label">Admin Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="admin_phone" id="adminPhone"
                                        placeholder="Enter admin phone" value="{{ get_setting('admin_phone') }}">
                                    <input type="hidden" class="form-control" name="types[]" value="admin_phone">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('admin.dashboard') }}" class="btn bg-gradient-info btn-md">Cancel</a>
                            <button type="submit" class="btn bg-gradient-success btn-md float-right">Update
                                Settings</button>
                        </div>
                    </form>
                </div>

                {{-- Update Password --}}
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Update Password') }}</h3>
                    </div>
                    <form action="{{ route('admin.update.password') }}" class="form-horizontal" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="oldPassword" class="col-sm-3 col-form-label">Old Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                        name="old_password" id="oldPassword" placeholder="Enter old password">
                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="newPassword" class="col-sm-3 col-form-label">New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" id="newPassword" placeholder="Enter new password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="confimrPassword" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password_confirmation" id="confimrPassword"
                                        placeholder="Enter confirm password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.dashboard') }}" class="btn bg-gradient-info btn-md">Cancel</a>
                            <button type="submit" class="btn bg-gradient-success btn-md float-right">Change
                                Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
