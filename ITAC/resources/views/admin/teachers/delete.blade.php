@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Teacher Delete</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" disabled value="{{ $teacher->name_az }}" id="exampleInputName1" name="name"
                                placeholder="Name" />
                                @error('name')
                                    <div class="text-danger error-text my-3 name_error">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="lastname" disabled value="{{ $teacher->lastname_az }}"
                                placeholder="Lastname" />
                        </div>
                        <div class="form-group">
                            <label for="">Profession</label>
                            <input name="" id="" class="form-control" disabled value="{{ $teacher->profession_az }}"/>
                        </div>
                        <button type="submit" class="btn btn-danger d-block mt-5 mr-2" id="delete"> Delete </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('validation')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script>
    <script>
        $('form').submit(function(e) {
            e.preventDefault();
            swal({
                    title: "Are you sure to delete this item?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Item was deleted!", {
                            icon: "success",
                        });
                        setTimeout(() => {
                            document.querySelector('.forms-sample').submit()
                        }, 1200);
                    } else {
                        swal("Item wasn't deleted!", {
                            icon: "error"
                        });
                    }
                });
        });

    </script>
@endsection
