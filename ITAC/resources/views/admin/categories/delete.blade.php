@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Delete</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" disabled value="{!! $category->name_az !!}">
                        </div>
                        <div class="form-group">
                            <label>Name EN</label>
                            <input class="form-control" type="text" disabled value="{!! $category->name_en !!}">
                        </div>
                        <div class="form-group">
                            <label>Name RU</label>
                            <input class="form-control" type="text" disabled value="{!! $category->name_ru !!}">
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
