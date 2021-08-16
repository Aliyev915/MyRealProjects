@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Teacher Create</h4>
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
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_az"
                                placeholder="Lastname" />
                            @error('lastname_az')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Profession</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_az"
                            placeholder="Profession" />
                            @error('profession_az')
                                <div class="text-danger error-text my-3 profession_error">{{ $message }}</div>
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
                            <label for="">Lastname EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_en"
                                placeholder="Lastname" />
                            @error('lastname_en')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Profession EN</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_en"
                            placeholder="Profession" />
                            @error('profession_en')
                                <div class="text-danger error-text my-3 profession_error">{{ $message }}</div>
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
                            <label for="">Lastname RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname_ru"
                                placeholder="Lastname" />
                            @error('lastname_ru')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Profession RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="profession_ru"
                            placeholder="Profession" />
                            @error('profession_ru')
                                <div class="text-danger error-text my-3 profession_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Facebook</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="facebook"
                            placeholder="Facebook Link" />
                        </div>
                        <div class="form-group">
                            <label for="">Twitter</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="twitter"
                            placeholder="Twitter Link" />
                        </div>
                        <div class="form-group">
                            <label for="">Instagram</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="instagram"
                            placeholder="Instagram Link" />
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
