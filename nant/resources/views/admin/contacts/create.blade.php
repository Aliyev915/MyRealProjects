@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contacts</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Fullname AZ</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="fullname_az" placeholder="Fullname" />
                        @error('fullname_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Fullname EN</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="fullname_en" placeholder="Fullname" />
                        @error('fullname_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Fullname RU</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="fullname_ru" placeholder="Fullname" />
                        @error('fullname_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Position AZ</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="position_az" placeholder="Position" />
                        @error('position_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Position EN</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="position_en" placeholder="Position" />
                        @error('position_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Position RU</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="position_ru" placeholder="Position" />
                        @error('position_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="email" placeholder="Email" />
                        @error('email')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2"> Create </button>
                    <a class="btn btn-light" href="/admin-user/contact">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
