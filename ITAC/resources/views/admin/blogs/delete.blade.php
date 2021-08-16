@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blog Delete</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <textarea class="form-control" disabled>{!! $blog->title !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" disabled>{!! $blog->description !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Quotes</label>
                            <textarea class="form-control" disabled>{!! $blog->quote !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            @foreach ($blog->images as $image)
                                <img src="{{ asset('storage/images/blogs/'.$image['image']) }}" width="200" height="250" alt="">
                            @endforeach
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
