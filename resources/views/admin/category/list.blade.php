@extends('admin.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <div class="card-body">
                                <a type="button" href="{{route('admin.category.create')}}" class="btn btn-primary">Create
                                    Category</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Category</a></li>
                                <li class="active">List Category</li>
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
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td width="10%">{{$category->id ?? ''}}</td>
                                        <td width="20%">{{$category->name ?? ''}}</td>
                                        <td width="58%">{{$category->description ?? ''}}</td>
                                        <td width="12%">
                                            <a href="{{route('admin.category.edit.show',[$category->id])}}"
                                               class="btn btn-primary">Edit</a>
                                            <a href="{{route('admin.category.delete',[$category->id])}}"
                                               class="btn btn-danger">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection()
