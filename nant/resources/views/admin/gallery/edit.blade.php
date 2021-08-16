@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Galleries</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="my-2">Image</h3>
                    <div class="row my-5">
                        <div class="col-sm-4">
                            <img src="{{ asset('storage/images/galleries').'/'.$about->image }}" alt="img" style="width: 100%" height="200">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="file-upload-default" accept="image/*" />
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                            </span>
                        </div>
                        @error('image')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    <a class="btn btn-light" href="/admin-user/gallery">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
