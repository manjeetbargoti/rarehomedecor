@extends('admin.layouts.main')

@section('content')

<section class="content pt-1">

    <div class="row">
        <div class="col-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Social Settings') }}</h3>
                </div>

                <form class="form-horizontal" method="post" action="{{ route('admin.settings.social') }}" id="socialSettingsForm" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="facebookLink" class="col-sm-3 col-form-label">Facebook</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="facebook_link" id="facebookLink" placeholder="Enter facebook link" value="{{ get_setting('facebook_link') }}">
                                <input type="hidden" class="form-control" name="types[]" value="facebook_link">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="twitterLink" class="col-sm-3 col-form-label">Twitter</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="twitter_Link" id="twitterLink" placeholder="Enter twitter link" value="{{ get_setting('twitter_Link') }}">
                                <input type="hidden" class="form-control" name="types[]" value="twitter_Link">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="linkedLink" class="col-sm-3 col-form-label">Linkedin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="linkedin_link" id="linkedLink" placeholder="Enter linkedin link" value="{{ get_setting('linkedin_link') }}">
                                <input type="hidden" class="form-control" name="types[]" value="linkedin_link">
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="youtubeLink" class="col-sm-3 col-form-label">Youtube</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="youtube_link" id="youtubeLink" placeholder="Enter youtube link" value="{{ get_setting('youtube_link') }}">
                                <input type="hidden" class="form-control" name="types[]" value="youtube_link">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('admin.dashboard') }}" class="btn bg-gradient-info btn-md">Cancel</a>
                        <button type="submit" class="btn bg-gradient-success btn-md float-right">Update Socials</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection