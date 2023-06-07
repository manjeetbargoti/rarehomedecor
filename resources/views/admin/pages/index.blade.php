@extends('admin.layouts.main')

@section('content')
    <section class="py-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Pages List') }}</h3>

                    <div class="card-tools">
                        <a href="{{ route('admin.page.create') }}" class="btn btn-sm btn-primary">Add New Page</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $key => $page)
                            <tr>
                                <td class="">{{ ($key+1) + ($pages->currentPage() - 1)*$pages->perPage() }}</td>
                                <td class="">{{ $page->title }}</td>
                                <td class="">
                                    @if($page->status == 1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td class="">
                                    <a class="text-warning" href="{{ route('admin.page.edit', $page->id) }}"><i class="fas fa-edit"></i></a>
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
