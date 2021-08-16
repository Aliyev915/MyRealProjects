@extends('admin.layouts.layout')
@section('content')
    @if (Session::has('msg'))
        <div class="toast" role="alert" style="opacity: 1; width: 100%" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                {!! Session('msg') !!}
                <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <a href="/admin-user/blog/create" class="btn btn-success">Create</a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blogs</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0;$i<$blogs->count();$i++)
                                    <tr>
                                        <td class="py-1">
                                            {{ $i+1 }}
                                        </td>
                                        <td class="py-1">
                                            @if (Str::length($blogs[$i]->title_az)>20)
                                                {!!  Str::substr($blogs[$i]->title_az, 0, 20).'...'!!}
                                                @else
                                                {!! $blogs[$i]->title_az !!}
                                            @endif
                                        </td>
                                        <td class="py-1">
                                            @if (Str::length($blogs[$i]->description_az)>50)
                                                {!!  Str::substr($blogs[$i]->description_az, 0, 50).'...'!!}
                                                @else
                                                {!! $blogs[$i]->description_az !!}
                                            @endif
                                        </td>
                                        <td>
                                            {!! $blogs[$i]->category->name_az !!}
                                        </td>
                                        <td class="py-1">
                                            <img src="{{ asset('storage/images/blogs/'.$blogs[$i]->images->first()['image']) }}" alt="">
                                        </td>
                                        <td>
                                            <a href="/admin-user/blog/edit/{{ $blogs[$i]->id }}"
                                                class="btn btn-primary mr-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="/admin-user/blog/delete/{{ $blogs[$i]->id }}"
                                                class="btn btn-danger mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
