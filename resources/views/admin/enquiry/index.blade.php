@extends('admin.layouts.main')

@section('content')
    <section class="content pt-1">
        <div class="row">
            <div class="col-6 my-auto">
                {{-- <h3 class="card-titl ">{{ __('Categories') }}</h3> --}}
            </div>
            <div class="col-6 text-md-right">
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Query List') }}</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($queries as $key => $query )
                                <tr>
                                    <td>{{ ($key+1) + ($queries->currentPage() - 1)*$queries->perPage() }}</td>
                                    <td>{{ $query->name }}</td>
                                    <td>{{ $query->email }}</td>
                                    <td>
                                        @if($query->status == 1)
                                            <a href="{{ route('admin.enquiry.status.pending', $query->id) }}" class="btn btn-xs btn-success">Completed</a>
                                        @elseif($query->status == 0)
                                            <a href="{{ route('admin.enquiry.status.complete', $query->id) }}" class="btn btn-xs btn-danger">Pending</a>
                                        @endif
                                    </td>
                                    <td>{{ date('d M, Y h:i A', strtotime($query->created_at)) }}</td>
                                    <td>
                                        <a href="{{ route('admin.enquiry.view',$query->id) }}"><i class="fas fa-eye text-success"></i></a>&nbsp;&nbsp;
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
        </div>
    </section>
@endsection
