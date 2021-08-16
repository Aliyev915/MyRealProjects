@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Slider Delete</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Image</label>
                        </div>

                        <img src="{{ $slider->image }}" width="200" height="250" alt="">
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
                    title: "Are you sure to delete this image?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("Image was deleted!", {
                            icon: "success",
                        });
                        setTimeout(()=>{document.querySelector('.forms-sample').submit()},1200);
                    } else {
                        swal("Image wasn't deleted!",{
                            icon:"error"
                        });
                    }
                });
        });
    </script>
@endsection
