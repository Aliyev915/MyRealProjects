@extends('admin.layouts.layout')
@section('css')
    <style>
        /* file-upload */
        .placeholder {
            width: 200px;
            height: 250px;
            border: 1px dashed #009b9c;
            cursor: pointer;
            position: relative;
            margin: 20px 0;
        }

        .upload-file {
            position: absolute;
            color: #009b9c;
            font-size: 50px;
            top: 40%;
            left: 44%;
        }

        /* file-upload */

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Slider Edit</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="file-upload-default" accept="image/*" />
                            <div class="input-group col-sm-12" style="height: 30px;">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image" />
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                </span>
                            </div>
                            @error('image')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="placeholder mr-5">
                                <div class="upload-file">+</div>
                            </div>
                            <img src="{{ $slider->image }}" style="margin-top: 20px" width="200" height="250" alt="">
                        </div>
                        <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
