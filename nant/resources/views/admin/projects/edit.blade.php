@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Projects</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="my-2">Image</h3>
                    <div class="row my-5">
                        <div class="col-sm-4">
                            <img src="{{ asset('storage/images/projects').'/'.$project->image }}" alt="img" style="width: 100%" height="200">
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
                        <input type="text" class="form-control" id="exampleInputName1" name="title_az" placeholder="Title" value="{{ $project->title_az }}" />
                        @error('title_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title EN</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="title_en" placeholder="Title" value="{{ $project->title_en }}" />
                        @error('title_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Title RU</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="title_ru" placeholder="Title" value="{{ $project->title_ru }}" />
                        @error('title_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description AZ</label>
                        <textarea class="form-control" id="exampleInputPassword4" name="description_az" placeholder="Description" >{{ $project->description_az }}</textarea>
                        @error('description_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description EN</label>
                        <textarea class="form-control" id="exampleInputPassword4" name="description_en" placeholder="Description" >{{ $project->description_en }}</textarea>
                        @error('description_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Description RU</label>
                        <textarea class="form-control" id="exampleInputPassword4" name="description_ru" placeholder="Description" >{{ $project->description_ru }}</textarea>
                        @error('description_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    <a class="btn btn-light" href="/admin-user/project">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
