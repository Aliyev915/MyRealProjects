@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Delete Student</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" value="{{ $student->name_az }}" disabled id="exampleInputName1" name="name_az" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="">Lastname</label>
                            <input type="text" class="form-control" value="{{ $student->lastname_az }}" disabled id="exampleInputName1" name="lastname"
                                placeholder="Lastname" />
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" value="{{ $student->email }}" class="form-control" disabled id="exampleInputName1" name="email"
                                placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="">Course</label>
                            <input type="text" class="form-control" disabled id="exampleInputName1" name="phone"
                                placeholder="Phone" value="{{ $student->course->name_az }}" />
                        </div>
                        <button type="submit" class="btn btn-danger mr-2"> Delete </button>
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
