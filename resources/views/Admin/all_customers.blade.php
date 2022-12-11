@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Customers Management')
@section('content')

<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Customers</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('timesheet.create') }}"> Add New</a>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Customers List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->company }}</td>
                            <td>{{ $row->address }}</td>
                            <td>{{ $row->phone }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                <!-- <a href="{{ 'add-order/'.$row->id }}" class="btn btn-sm btn-info">Order</a> -->
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection