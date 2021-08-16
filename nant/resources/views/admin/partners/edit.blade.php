@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Partners</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="my-2">Image</h3>
                    <div class="row my-5">
                        @foreach ($partner->images as $image)
                        <div class="col-sm-4 pr-2">
                            <img src="{{ asset('storage/images/partners').'/'.$image->image }}" alt="img" style="width: 100%" height="200">
                        </div>
                        @endforeach
                    </div>
                    <h3 class="my-2">Products</h3>
                    <div class="row my-5">
                        @foreach ($partner->galleries as $gallery)
                        <div class="col-sm-4 pr-2">
                            <img src="{{ asset('storage/images/partners').'/'.$gallery->image }}" alt="img" style="width: 100%" height="200">
                        </div>
                        @endforeach
                    </div>
                    <h3 class="my-2">Partner logo</h3>
                    <div class="row my-5">
                        <div class="col-sm-4">
                            <img src="{{ asset('storage/images/partners').'/'.$partner->partner_logo }}" alt="img" style="width: 100%" height="200">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="images[]" class="file-upload-default" multiple accept="image/*" />
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                            </span>
                        </div>
                        @error('images')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Partner Logo</label>
                        <input type="file" name="partner_logo" class="file-upload-default" accept="image/*" />
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                            </span>
                        </div>
                        @error('partner_logo')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Products</label>
                        <input type="file" name="galleries[]" class="file-upload-default" multiple accept="image/*" />
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                            </span>
                        </div>
                        @error('partner_logo')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Youtube Link</label>
                        <textarea class="form-control" id="exampleInputPassword4" name="link" placeholder="Link" >{{ $partner->link }}</textarea>
                        @error('link')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Site Link</label>
                        <textarea class="form-control" id="exampleInputPassword4" name="link_site" placeholder="Link" >{{ $partner->partner_site }}</textarea>
                        @error('link_site')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    <a class="btn btn-light" href="/admin-user/partner">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
