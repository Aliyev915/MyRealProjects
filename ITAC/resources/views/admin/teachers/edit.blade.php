@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Teacher</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_az" placeholder="Name"
                                value="{{ $teacher->name_az }}" />
                            @error('name_az')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_az"
                                placeholder="Lastname" value="{{ $teacher->lastname_az }}" />
                            @error('lastname_az')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Profession</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_az" placeholder="Profession"
                                value="{{ $teacher->profession_az }}" />
                            @error('profession_az')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Name EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_en" placeholder="Name"
                                value="{{ $teacher->name_en }}" />
                            @error('name_en')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Lastname EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_en"
                                placeholder="Lastname" value="{{ $teacher->lastname_en }}" />
                            @error('lastname_en')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Profession EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_en" placeholder="Profession"
                                value="{{ $teacher->profession_en }}" />
                            @error('profession_en')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Name RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="name_ru" placeholder="Name"
                                value="{{ $teacher->name_ru }}" />
                            @error('name_ru')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Lastname RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_ru"
                                placeholder="Lastname" value="{{ $teacher->lastname_ru }}" />
                            @error('lastname_ru')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Profession RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_ru" placeholder="Profession"
                                value="{{ $teacher->profession_ru }}" />
                            @error('profession_ru')
                                <div class="text-danger my-3">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Facebook Link</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="facebook" placeholder="Facebook Link"
                                value="{{ $teacher->facebook }}" />
                        </div>
                        <div class="form-group">
                            <label for="">Twitter Link</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="twitter" placeholder="Twitter Link"
                                value="{{ $teacher->twitter }}" />
                        </div>
                        <div class="form-group">
                            <label for="">Instagram Link</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="instagram" placeholder="Instagram Link"
                                value="{{ $teacher->instagram }}" />
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
                        <div class="row">
                            <div class="placeholder mr-5">
                                <div class="upload-file">+</div>
                            </div>
                            <img src="{{ asset('storage/images/teachers/' . $teacher->image) }}" width="200" height="250"
                                alt="" style="margin-top: 20px;">
                        </div>
                        <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
