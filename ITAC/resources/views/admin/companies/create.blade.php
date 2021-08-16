@extends('admin.layouts.layout')
@section('ckeditor')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
        CKEDITOR.replace('summary-ckeditor1');
        CKEDITOR.replace('summary-ckeditor2');
    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Company Create</h4>
                    <form class="forms-sample" id="form_data" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_az"
                                placeholder="Name" />
                                @error('name_az')
                                    <div class="text-danger error-text my-3 name_error">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Name EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_en"
                                placeholder="Name" />
                                @error('name_en')
                                    <div class="text-danger error-text my-3 name_error">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Name RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_ru"
                                placeholder="Name" />
                                @error('name_ru')
                                    <div class="text-danger error-text my-3 name_error">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">About us</label>
                            <textarea name="about_az" id="summary-ckeditor" rows="10"></textarea>
                            @error('about')
                                <div class="mt-3 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">About us EN</label>
                            <textarea name="about_en" id="summary-ckeditor1" rows="10"></textarea>
                            @error('about_en')
                                <div class="mt-3 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">About us RU</label>
                            <textarea name="about_ru" id="summary-ckeditor2" rows="10"></textarea>
                            @error('about_ru')
                                <div class="mt-3 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
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
                                <div class="text-danger error-text my-3 image_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mr-2"> Create </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
