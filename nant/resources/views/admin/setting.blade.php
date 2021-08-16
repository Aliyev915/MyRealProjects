@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Settings</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-6 offset-sm-3 my-4">
                        @if ($setting != null)
                            <img src="{{ asset('storage/images/' . $setting->logo) }}" alt="logo" width="150" height="200">
                        @endif
                    </div>
                    <div class="col-sm-6 offset-sm-3 my-4">
                        @if ($setting != null)
                            <img src="{{ asset('storage/images/' . $setting->partner_image) }}" alt="partner" width="150" height="200">
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" class="file-upload-default" accept="image/*" />
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                            </span>
                        </div>
                        @error('logo')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Partner Image</label>
                        <input type="file" name="partner_image" class="file-upload-default" accept="image/*" />
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" />
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                            </span>
                        </div>
                        @error('logo')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Linkedin</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="linkedin"
                            placeholder="Linkedin" value="@if ($setting !=null) {{ $setting->linkedin }} @endif" />
                        @error('linkedin')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Facebook</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="facebook"
                            placeholder="Facebook" value="@if ($setting !=null) {{ $setting->facebook }} @endif" />
                        @error('facebook')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Instagram</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="instagram"
                            placeholder="Instagram" value="@if ($setting !=null) {{ $setting->instagram }} @endif" />
                        @error('instagram')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Youtube</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="youtube" placeholder="Youtube"
                            value="@if ($setting !=null) {{ $setting->youtube }} @endif" />
                        @error('youtube')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Adress AZ</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="address_az"
                            placeholder="Adress" value="@if ($setting !=null) {{ $setting->adress_az }} @endif" />
                        @error('address_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Adress EN</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="address_en"
                            placeholder="Adress" value="@if ($setting !=null) {{ $setting->adress_en }} @endif" />
                        @error('address_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Adress RU</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="address_ru"
                            placeholder="Adress" value="@if ($setting !=null) {{ $setting->adress_ru }} @endif" />
                        @error('address_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Phone 1</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="phone_1" placeholder="Phone 1"
                            value="@if ($setting !=null) {{ $setting->phone_1 }} @endif" />
                        @error('phone_1')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Phone 2</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="phone_2" placeholder="Phone 2"
                            value="@if ($setting !=null) {{ $setting->phone_2 }} @endif" />
                        @error('phone_2')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Phone 3</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="phone_3" placeholder="Phone 3"
                            value="@if ($setting !=null) {{ $setting->phone_3 }} @endif" />
                        @error('phone_3')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Email</label>
                        <input type="email" class="form-control" id="exampleInputCity1" name="email" placeholder="Email"
                            value="@if ($setting !=null) {{ $setting->email }} @endif" />
                        @error('email')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Copyright AZ</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="copyright_az"
                            placeholder="Copyright" value="@if ($setting !=null) {{ $setting->copyright_az }} @endif" />
                        @error('copyright_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Copyright EN</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="copyright_en"
                            placeholder="Copyright" value="@if ($setting !=null) {{ $setting->copyright_en }} @endif" />
                        @error('copyright_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Copyright RU</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="copyright_ru"
                            placeholder="Copyright" value="@if ($setting !=null) {{ $setting->copyright_ru }} @endif" />
                        @error('copyright_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">About Us AZ</label>
                        <textarea type="text" rows="8" class="form-control" id="exampleInputCity1" name="about_us_az"
                            placeholder="About us">@if ($setting !=null) {{ $setting->about_us_az }} @endif </textarea>
                        @error('about_us_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">About Us EN</label>
                        <textarea type="text" rows="8" class="form-control" id="exampleInputCity1" name="about_us_en"
                            placeholder="About us">@if ($setting !=null) {{ $setting->about_us_en }} @endif </textarea>
                        @error('about_us_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">About Us RU</label>
                        <textarea type="text" rows="8" class="form-control" id="exampleInputCity1" name="about_us_ru"
                            placeholder="About us">@if ($setting !=null) {{ $setting->about_us_ru }} @endif </textarea>
                        @error('about_us_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Map</label>
                        <input type="text" class="form-control" id="exampleInputCity1" name="map" value="@if ($setting !=null) {{ $setting->map }} @endif"
                            placeholder="Map" />
                        @error('map')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    <a class="btn btn-light" href="/admin-user">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
