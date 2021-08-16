@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Student</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name_az"  value="{!! $student->name_az !!}">
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input class="form-control" type="text" name="lastname_az"  value="{!! $student->lastname_az !!}">
                        </div>
                        <div class="form-group">
                            <label>Name EN</label>
                            <input class="form-control" type="text" name="name_en"  value="{!! $student->name_en !!}">
                        </div>
                        <div class="form-group">
                            <label>Lastname EN</label>
                            <input class="form-control" type="text" name="lastname_en" value="{!! $student->lastname_en !!}">
                        </div>
                        <div class="form-group">
                            <label>Name RU</label>
                            <input class="form-control" type="text" name="name_ru" value="{!! $student->name_ru !!}">
                        </div>
                        <div class="form-group">
                            <label>Lastname RU</label>
                            <input class="form-control" type="text" name="lastname_ru" value="{!! $student->lastname_ru !!}">
                        </div>
                        <div class="form-group">
                            <label for="">Passport Number</label>
                            <input type="text" class="form-control" name="passport" value="{{ $student->passport }}">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $student->phone }}">
                        </div>
                        <div class="form-group">
                            <select class="js-example-basic-single" name="course" style="width: 100%;">
                                @foreach ($courses as $course)
                                    <option>{{ $course->title_az }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <img src="{{ asset('storage/images/students/'.$student->image) }}" width="200" height="250" alt="">
                        </div>
                        <button type="submit" class="btn btn-success d-block mt-5 mr-2" id="delete"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
