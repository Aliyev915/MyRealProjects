@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Distributions</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name AZ</label>
                                <input type="text" class="form-control" name="name_az">
                                @error('name_az')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name_en">Name EN</label>
                                <input type="text" class="form-control" name="name_en">
                                @error('name_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name_ru">Name RU</label>
                                <input type="text" class="form-control" name="name_ru">
                                @error('name_ru')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleSelectGender">Region</label>
                                <select class="form-control" id="exampleSelectGender" name="region">
                                    @foreach ($regions as $region)
                                        <option value="{{ $region->{'name_'.App::getLocale()} }}">{{ $region->{'name_'.App::getLocale()} }}</option>
                                    @endforeach
                                </select>
                              </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"> Create </button>
                    <a class="btn btn-light" href="/admin-user/distribution">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
