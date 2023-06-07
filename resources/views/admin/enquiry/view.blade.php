@extends('admin.layouts.main')

@section('content')
    <section class="content pt-1">
        <div class="row">
            <div class="col-6 my-auto">
                {{-- <h3 class="card-title">{{ __('Query Detail') }}</h3> --}}
            </div>
            <div class="col-6 text-md-right">
                
            </div>
        </div>
        <div class="row">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Query Detail') }}</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Name</th>
                                <td>{{ @$query->name }}</td>
                            </tr>
                            <tr>
                                <th>Customer Email</th>
                                <td>{{ @$query->email }}</td>
                            </tr>
                            <tr>
                                <th>Customer Phone</th>
                                <td>{{ @$query->phone }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    @if($query->status == 1)
                                        <a href="{{ route('admin.enquiry.status.pending', $query->id) }}" class="btn btn-xs btn-success">Completed</a>
                                    @elseif($query->status == 0)
                                        <a href="{{ route('admin.enquiry.status.complete', $query->id) }}" class="btn btn-xs btn-danger">Pending</a>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>IP Address</th>
                                <td>{{ @$query->ip_address }}</td>
                            </tr>
                            <tr>
                                <th>Page URL</th>
                                <td><a href="{{ @$query->page_url }}" target="_blank">{{ @$query->page_url }}</a></td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{ @date('d M, Y h:i:s A', strtotime($query->created_at)) }}</td>
                            </tr>
                            <tr>
                                <th>Query Message</th>
                                <td>{{ @$query->query_msg }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection