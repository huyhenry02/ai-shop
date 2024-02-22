@extends('admin.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <div class="card-body">
                                <a href="{{route('admin.product.create')}}" type="button" class="btn btn-primary">Create Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Table</a></li>
                                <li class="active">Data table</li>
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
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Sale</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                               <tbody>
                                 @foreach($products as $product)
                                      <tr>
                                        <td>{{$product->id ?? ''}}</td>
                                        <td>{{$product->name ?? ''}}</td>
                                        <td>{{$product->category->name ?? ''}}</td>
                                        <td>{{$product->brand->name ?? ''}}</td>
                                        <td>{{$product->price ?? ''}}</td>
                                        <td>{{$product->sale ?? ''}}</td>
                                        <td>{{$product->size ?? ''}}</td>
                                        <td>{{$product->color ?? ''}}</td>
                                        <td>{{$product->description ?? ''}}</td>
                                        <td>
                                             <a href="" type="button" class="btn btn-primary">Edit</a>
                                             <a href="" type="button" class="btn btn-danger">Delete</a>
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
