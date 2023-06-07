@extends('admin.layouts.main')

@section('content')

<section class="content pt-1">

    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Website Settings') }}</h3>
                </div>

                <form class="form-horizontal" method="post" action="{{ route('admin.settings.general') }}" id="websiteSettingsForm" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="aboutUs" class="col-sm-3 col-form-label">Homepage About</label>
                            <div class="col-sm-9">
                                <textarea name="about_us" id="aboutUs" class="form-control" cols="30" rows="10">{{ get_setting('about_us') }}</textarea>
                                <input type="hidden" class="form-control" name="types[]" value="about_us">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="officeAddress" class="col-sm-3 col-form-label">Office Address</label>
                            <div class="col-sm-9">
                                <textarea name="office_address" id="officeAddress" class="form-control" cols="30" rows="4">{{ get_setting('office_address') }}</textarea>
                                <input type="hidden" class="form-control" name="types[]" value="office_address">
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