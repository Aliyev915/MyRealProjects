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
        CKEDITOR.replace('summary-ckeditor6');
        CKEDITOR.replace('summary-ckeditor7');
        CKEDITOR.replace('summary-ckeditor8');
    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Create</h4>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <form class="forms-sample" id="form_data" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title_az" placeholder="Title" />
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description_az" id="summary-ckeditor1"></textarea>
                            @error('description_az')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Title EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title_en" placeholder="Title" />
                        </div>
                        <div class="form-group">
                            <label for="">Description EN</label>
                            <textarea name="description_en" id="summary-ckeditor3"></textarea>
                            @error('description_az')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Title RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="title_ru" placeholder="Title" />
                        </div>
                        <div class="form-group">
                            <label for="">Description RU</label>
                            <textarea name="description_ru" id="summary-ckeditor6"></textarea>
                            @error('description_az')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Quotes</label>
                            <textarea name="quote_az" id="summary-ckeditor7"></textarea>
                            @error('quote_az')
                                <div class="text-danger error-text my-3 ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Quotes EN</label>
                            <textarea name="quote_en" id="summary-ckeditor8"></textarea>
                            @error('quote_en')
                                <div class="text-danger error-text my-3 ">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Quotes RU</label>
                            <textarea name="quote_ru" id="summary-ckeditor5"></textarea>
                            @error('quote_ru')
                                <div class="text-danger error-text my-3 ">{{ $message }}</div>
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
                            @error('images')
                                <div class="text-danger error-text my-3 image_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Categories</label>
                            <select class="js-example-basic-single" name="category" style="width: 100%;">
                                @foreach ($categories as $category)
                                    <option>{{ $category->name_az }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success mr-2"> Create </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
