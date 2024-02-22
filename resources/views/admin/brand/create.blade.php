@extends('admin.layouts.main')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Create Product</strong>
            </div>
            <div class="card-body card-block">
                <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input"
                                                            placeholder="Name" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input"
                                                         class=" form-control-label">Description</label></div>
                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9"
                                                               placeholder="Description..."
                                                               class="form-control"></textarea></div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-primary">Exit</button>
            </div>
        </div>
    </div>
@endsection()
