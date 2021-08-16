@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Projects</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="file-upload-default" multiple accept="image/*" />
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
                        <input type="text" class="form-control" id="exampleInputName1" name="title_az" placeholder="Title" />
                        @error('title_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title EN</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="title_en" placeholder="Title" />
                        @error('title_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title RU</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="title_ru" placeholder="Title" />
                        @error('title_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description AZ</label>
                        <textarea class="form-control" id="exampleInputPassword4" name="description_az" placeholder="Description" ></textarea>
                        @error('description_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description EN</label>
                        <textarea class="form-control" id="exampleInputPassword4" name="description_en" placeholder="Description" ></textarea>
                        @error('description_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description RU</label>
                        <textarea class="form-control" id="exampleInputPassword4" name="description_ru" placeholder="Description" ></textarea>
                        @error('description_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"> Create </button>
                    <a class="btn btn-light" href="/admin-user/project">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
