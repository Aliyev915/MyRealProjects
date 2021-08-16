@extends('admin.layouts.layout')
@section('ckeditor')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
        CKEDITOR.replace('summary-ckeditor1');
        CKEDITOR.replace('summary-ckeditor2');
        CKEDITOR.replace('summary-ckeditor3');
        CKEDITOR.replace('summary-ckeditor4');
        CKEDITOR.replace('summary-ckeditor5');
    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Course Create</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title"
                                placeholder="Title" />
                                @error('title')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">About</label>
                            <textarea rows="10" name="about" id="summary-ckeditor"></textarea>
                            @error('about')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea rows="10" name="description" id="summary-ckeditor1"></textarea>
                            @error('description')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Title EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title_en"
                                placeholder="Title" />
                                @error('title')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">About EN</label>
                            <textarea rows="10" name="about_en" id="summary-ckeditor2"></textarea>
                            @error('about')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description EN</label>
                            <textarea rows="10" name="description_en" id="summary-ckeditor3"></textarea>
                            @error('description')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Title RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title_ru"
                                placeholder="Title" />
                                @error('title')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">About RU</label>
                            <textarea rows="10" name="about_ru" id="summary-ckeditor4"></textarea>
                            @error('about')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description RU</label>
                            <textarea rows="10" name="description_ru" id="summary-ckeditor5"></textarea>
                            @error('description_ru')
                                <div class="text-danger my-3">{{ $message }}</div>
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
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mr-2"> Create </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
