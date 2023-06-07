@extends('admin.layouts.main')

@section('content')
    <section class="mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Category List') }}</h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-primary">Add New Category</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Banner</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $key => $category)
                            <tr>
                                <td>{{ ($key+1) + ($categories->currentPage() - 1)*$categories->perPage() }}</td>
                                <td>{{ $category->name }}</td>
                                <td><img src="{{ uploaded_asset($category->thumbnail_img) }}" width="60" class="img-thumbnail" alt="{{ $category->name }}"></td>
                                <td><img src="{{ uploaded_asset($category->banner) }}" width="100" class="img-thumbnail" alt="{{ $category->name }}"></td>
                                <td>
                                    @if($category->status == 1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="text-warning" href="{{ route('admin.category.edit', $category->id) }}"><i class="fas fa-edit"></i></a>
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
