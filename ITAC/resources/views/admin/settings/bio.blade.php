@extends('admin.layouts.layout')
@section('ckeditor')
@section('ckeditor')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
        CKEDITOR.replace('summary-ckeditor1');
        CKEDITOR.replace('summary-ckeditor2');

    </script>
@endsection
@endsection
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bio</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Phone"
                            name="phone_1" value="@if ($bio !=null) {{ $bio->phone_1 }} @endif" />
                        @error('phone_1')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Other Phone</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Other phone"
                            name="phone_2" value="@if ($bio !=null) {{ $bio->phone_2 }} @endif" />
                        @error('phone_2')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Adress</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Adress"
                            name="address_az" value="@if ($bio !=null) {{ $bio->address_az }} @endif" />
                        @error('address_az')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Adress EN</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Adress EN"
                            name="address_en" value="@if ($bio !=null) {{ $bio->address_en }} @endif" />
                        @error('address_en')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Adress RU</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Adress RU"
                            name="address_ru" value="@if ($bio !=null) {{ $bio->address_ru }} @endif" />
                        @error('address_ru')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Facebook</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Facebook"
                            name="facebook" value="@if ($bio !=null) {{ $bio->facebook }} @endif" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Instagram</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Instagram"
                            name="instagram" value="@if ($bio !=null) {{ $bio->instagram }} @endif" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Twitter</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Twitter"
                            name="twitter" value="@if ($bio !=null) {{ $bio->twitter }} @endif" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword4" placeholder="Email"
                            name="email" value="@if ($bio !=null) {{ $bio->email }} @endif" />
                        @error('email')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">About us</label>
                        <textarea name="about" id="summary-ckeditor" rows="10">@if($bio!=null){{ $bio->about_us_az }}@endif</textarea>
                        @error('about')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">About us EN</label>
                        <textarea name="about_en" id="summary-ckeditor1" rows="10">@if($bio!=null){{ $bio->about_us_en }}@endif</textarea>
                        @error('about_en')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">About us RU</label>
                        <textarea name="about_ru" id="summary-ckeditor2" rows="10">@if($bio!=null){{ $bio->about_us_ru }}@endif</textarea>
                        @error('about_ru')
                            <div class="mt-3 text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Logo</label>
                                <input type="file" name="logo" class="file-upload-default" accept="image/*" />
                                @if ($bio != null)
                                    <div class="col-sm-6">
                                        <img src="{{ asset('storage/images/bio/'.$bio->logo) }}" height="150" width="150" alt="">
                                    </div>
                                @endif
                                <div class="input-group col-sm-12 my-3" style="height: 30px;">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image" />
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button"> Upload
                                        </button>
                                    </span>
                                </div>
                                @error('logo')
                                    <div class="mt-3 text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
