@extends('admin.layouts.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Create Category</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{route('admin.category.post')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                                            placeholder="Name" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9"
                                                               placeholder="Description..."
                                                               class="form-control"></textarea></div>
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
