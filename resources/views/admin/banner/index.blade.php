@extends('admin.layouts.main')

@section('content')
    <section class="py-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Banner List') }}</h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.banner.create') }}" class="btn btn-sm btn-primary">Add New Banner</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Banner</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $key => $banner)
                            <tr>
                                <td class="">{{ ($key+1) + ($banners->currentPage() - 1)*$banners->perPage() }}</td>
                                <td class="">{{ $banner->title }}</td>
                                <td class=""><img src="{{ uploaded_asset($banner->banner) }}" width="90" class="img-thumbnail" alt="{{ $banner->title }}"></td>
                                <td class="">
                                    @if($banner->status == 1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td class="">
                                    <a class="text-warning" href="{{ route('admin.banner.edit', $banner->id) }}"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection
