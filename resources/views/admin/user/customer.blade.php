@extends('admin.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <div class="card-body">
                                <a href="{{route('admin.user.indexCustomer')}}" type="button" class="btn btn-secondary">Data
                                    Customer</a>
                                <a href="{{route('admin.user.indexEmployee')}}" type="button" class="btn btn-success">Data
                                    Employee</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">User</a></li>
                                <li class="active">Data Customer</li>
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
                            <strong class="card-title">Data Customer</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Age</th>
                                    <th width="16%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    @php
                                        $i = 1
                                    @endphp
                                    <tr>
                                        <td>
                                            {{$i++}}
                                        </td>
                                        <td>
                                            {{$user->name ?? ''}}
                                        </td>
                                        <td>
                                            {{$user->phone ?? ''}}
                                        </td>
                                        <td>
                                            {{$user->email ?? ''}}
                                        </td>
                                        <td>
                                            {{$user->address ?? ''}}
                                        </td>
                                        <td>
                                            {{$user->age ?? ''}}
                                        </td>
                                        <td>
                                            <a href="" type="button" class="btn btn-primary">Edit</a>
                                            <a href="" type="button" class="btn btn-danger">Delete</a>
                                            <a href="" type="button" class="btn btn-success">More</a>
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
