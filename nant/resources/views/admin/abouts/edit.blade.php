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
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="my-2">Image</h3>
                    <div class="row my-5">
                        <div class="col-sm-4">
                            <img src="{{ asset('storage/images/abouts').'/'.$about->image }}" alt="img" style="width: 100%" height="200">
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
                    <div class="form-group">
                        <label for="exampleInputName1">Title AZ</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title_az" placeholder="Title" value="{{ $about->title_az }}" />
                        @error('title_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title EN</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="title_en" placeholder="Title" value="{{ $about->title_en }}" />
                        @error('title_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Title RU</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title_ru" placeholder="Title" value="{{ $about->title_ru }}" />
                        @error('title_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description AZ</label>
                        <textarea type="text" class="form-control" id="summary-ckeditor" name="description_az" placeholder="Description" >{{ $about->description_az }}</textarea>
                        @error('description_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description EN</label>
                        <textarea type="text" class="form-control" id="summary-ckeditor1" name="description_en" placeholder="Description">{{ $about->description_en }}</textarea>
                        @error('description_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description RU</label>
                        <textarea type="text" class="form-control" id="summary-ckeditor2" name="description_ru" placeholder="Description" >{{ $about->description_ru }}</textarea>
                        @error('description_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Production Year</label>
                        <input type="number" min="1800" class="form-control" id="exampleInputPassword4" name="year" value="{{ $about->year }}" />
                        @error('year')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    <a class="btn btn-light" href="/admin-user/about">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
