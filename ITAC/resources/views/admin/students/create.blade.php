@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Student Create</h4>
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
                            <label for="">Passport Number</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="passport"
                                placeholder="Passport Number" />
                            @error('passport')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
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
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="email"
                                placeholder="Email" />
                            @error('email')
                                <div class="text-danger error-text my-3 lastname_error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Categories</label>
                            <select class="js-example-basic-single" name="course" style="width: 100%;">
                                @foreach ($courses as $course)
                                    <option>{{ $course->title_az }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="phone"
                            placeholder="Phone" />
                            @error('phone')
                                <div class="text-danger error-text my-3 profession_error">{{ $message }}</div>
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
