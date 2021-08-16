@extends('admin.layouts.layout')
@section('content')
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <a href="/admin-user/course/create" class="btn btn-success">Create</a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Courses</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td class="py-1">
                                            {{ $course->id }}
                                        </td>
                                        <td class="py-1">
                                            <img src="{{ asset('storage/images/courses/'.$course->image) }}" alt="">
                                        </td>
                                        <td class="py-1">
                                            {{ $course->{"title_".App::getLocale()} }}
                                        </td>
                                        <td class="py-1">
                                            {!! Str::substr($course->{"description_".App::getLocale()}, 0, 50).'...' !!}
                                        </td>
                                        <td>
                                            <a href="/admin-user/course/edit/{{ $course->id }}"
                                                class="btn btn-primary mr-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="/admin-user/course/delete/{{ $course->id }}"
                                                class="btn btn-danger mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
