@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Product Management')
@section('content')

<div class="container">
    <div class="row mt-0 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Products</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Add New</a>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Products in Stock
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Unit Price</th>
                            <th>Sale Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $row)
                        <tr>
                            <td>{{ $row->product_code }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->category }}</td>

                            @if($row->stock > '0')
                            <td>{{ $row->stock }}</td>
                            @else
                            <td>stockout</td>
                            @endif

                            <td>{{ $row->unit_price }}</td>
                            <td>{{ $row->sales_unit_price }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ 'purchase-products/'.$row->id }}" class="btn btn-sm btn-info">Purchase</a>
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