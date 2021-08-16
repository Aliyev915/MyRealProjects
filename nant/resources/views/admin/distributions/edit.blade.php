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
                                <label for="name_az">Name AZ</label>
                                <input type="text" class="form-control" name="name_az" value="{{ $district->name_az }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name_en">Name EN</label>
                                <input type="text" class="form-control" name="name_en" value="{{ $district->name_en }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name_ru">Name RU</label>
                                <input type="text" class="form-control" name="name_ru" value="{{ $district->name_ru }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelectGender">Region</label>
                                <select class="form-control" id="exampleSelectGender" name="region">
                                    @foreach ($regions as $region)
                                        @if ($regionDB->{'name_' . App::getLocale()} == $region->{'name_' . App::getLocale()})
                                            <option selected value="{{ $region->{'name_' . App::getLocale()} }}">
                                                {{ $region->{'name_' . App::getLocale()} }}</option>
                                        @else
                                            <option value="{{ $region->{'name_' . App::getLocale()} }}">
                                                {{ $region->{'name_' . App::getLocale()} }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    <a class="btn btn-light" href="/admin-user/distribution">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
