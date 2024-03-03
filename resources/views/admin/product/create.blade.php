@extends('admin.layouts.main')
@section('content')
    <form action="{{route('admin.product.post')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Base Information</strong>
            </div>
            <div class="card-body card-block">

            @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Name" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Color</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="color" placeholder="Color" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Size</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="size" placeholder="Size" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="price" placeholder="Price" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sale</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="sale" placeholder="Sale" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantity</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="quantity" placeholder="Quantity" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Description..." class="form-control"></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
                        <div class="col-12 col-md-9">
                            <select name="category_id" id="select" class="form-control">
                                <option value="0">Please select category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Brand</label></div>
                        <div class="col-12 col-md-9">
                            <select name="brand_id" id="select" class="form-control">
                                <option value="0">Please select Brand</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File Product</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                    </div>
            </div>

        </div>
    </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Specification</strong>
                </div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Width</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="width" placeholder="Width"
                                                            class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Height</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="height" placeholder="Height"
                                                            class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Weight</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="weight" placeholder="Weight"
                                                            class="form-control"></div>
                    </div>


                </div>

            </div>
        </div>
        <div class="card-body" style="text-align: right">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-primary">Exit</button>
        </div>
    </form>
@endsection()
