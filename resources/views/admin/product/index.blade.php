@extends('admin.layouts.main')

@section('content')
    <section class="mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Product List') }}</h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary">Add New Product</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Featured</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key => $product)
                            <tr>
                                <td>{{ ($key+1) + ($products->currentPage() - 1)*$products->perPage() }}</td>
                                <td><a href="#" target="_blank">{{ $product->name }}</a></td>
                                <td><img src="{{ uploaded_asset($product->thumbnail_img) }}" width="50" class="img-thumbnail" alt="{{ $product->name }}"></td>
                                <td>
                                    @if($product->featured == 1)
                                    <span class="badge badge-success">YES</span>
                                    @else
                                    <span class="badge badge-danger">NO</span>
                                    @endif
                                </td>
                                <td>
                                    @if($product->status == 1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="text-warning" href="{{ route('admin.product.edit',$product->id) }}"><i class="fas fa-edit"></i></a>
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
