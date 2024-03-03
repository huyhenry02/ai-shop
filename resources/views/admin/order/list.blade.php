@extends('admin.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <div class="card-body">
                                <a href="" type="button" class="btn btn-primary">Create Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Order</a></li>
                                <li class="active">Data Order</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Order</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Code</th>
                                    <th>Shipping Phone</th>
                                    <th>Shipping Name</th>
                                    <th>Sub Total</th>
                                    <th>Status</th>
                                    <th width="16%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id ?? ''}}</td>
                                        <td>{{$order->code ?? ''}}</td>
                                        <td>{{$order->shipping_phone ?? ''}}</td>
                                        <td>{{$order->shipping_name ?? ''}}</td>
                                        <td>{{$order->sub_total ?? ''}}</td>
                                        <td>{{$order->status ?? ''}}</td>
                                        <td>
                                            <a href="{{route('admin.order.edit.show', $order->id)}}" type="button" class="btn btn-primary">Edit</a>
                                            <a href="" type="button" class="btn btn-danger">Delete</a>
                                            <a href="{{route('admin.order.detail', $order->id)}}" type="button" class="btn btn-success">More</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection()
