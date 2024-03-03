@extends('admin.layouts.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Create Product</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{route('admin.product.edit')}}" method="post" enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id ?? ''}}">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                                            value="{{$product->name ?? ''}}" placeholder="Name"
                                                            class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Color</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="color"
                                                            value="{{$product->color ?? ''}}" placeholder="Color"
                                                            class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Size</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="size"
                                                            value="{{$product->size ?? ''}}" placeholder="Size"
                                                            class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="price"
                                                            value="{{$product->price ?? ''}}" placeholder="Price"
                                                            class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Sale</label></div>
                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="sale"
                                                            value="{{$product->sale ?? ''}}" placeholder="Sale"
                                                            class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Quantity</label>
                        </div>
                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="quantity"
                                                            value="{{$product->quantity ?? ''}}" placeholder="Quantity"
                                                            class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9"
                                                               placeholder="Description..."
                                                               class="form-control">{{$product->description ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Category</label></div>
                        <div class="col-12 col-md-9">
                            <select name="category_id" id="select" class="form-control">
                                <option value="{{$product->category_id ?? ''}}">{{$product->category->name}}</option>
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
                                <option value="{{$product->brand_id ?? ''}}">{{$product->brand->name}}</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Current Product
                                Image</label></div>
                        <div class="col-12 col-md-9">
                            <img src="{{ $product->image ?? '' }}" alt="Product Image" style="width: 100px; height: 100px;">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File
                                Product</label></div>
                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file-input"
                                                            class="form-control-file" value="{{$product->imgae ?? ''}}"></div>
                    </div>
                    <div class="card-body" style="text-align: right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-primary">Exit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection()
