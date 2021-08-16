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
                    <h4 class="card-title">Blog Create</h4>
                    <form class="forms-sample" id="form_data" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title_az" placeholder="Title"
                                value="{{ $blog->title_az }}" />
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description_az" id="summary-ckeditor1">{!! $blog->description_az !!}</textarea>
                            @error('description')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Quotes</label>
                            <textarea name="quote_az" id="summary-ckeditor2">{!! $blog->quote_az !!}</textarea>
                            @error('quote')
                                <div class="text-danger error-text my-3 profession_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="images[]" class="file-upload-default" accept="image/*" multiple />
                            <div class="input-group col-sm-12" style="height: 30px;">
                                <input type="text" class="form-control file-upload-info" disabled
                                    placeholder="Upload Image" />
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                </span>
                            </div>
                            @error('image[]')
                                <div class="text-danger error-text my-3 image_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Categories</label>
                            <select class="js-example-basic-single" value={{ $blog->category->name_az }} name="category" style="width: 100%;">
                                @foreach ($categories as $category)
                                    <option>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
