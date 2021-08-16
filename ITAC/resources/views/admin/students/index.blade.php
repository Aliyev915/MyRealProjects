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
                <a href="/admin-user/student/create" class="btn btn-success">Create</a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Students</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0;$i<$students->count();$i++)
                                    <tr>
                                        <td class="py-1">
                                            {{ $i+1 }}
                                        </td>
                                        <td class="py-1">
                                            {{ $students[$i]->name_az }}
                                        </td>
                                        <td class="py-1">
                                            {!! $students[$i]->lastname_az !!}
                                        </td>
                                        <td>
                                            {!! $students[$i]->email !!}
                                        </td>
                                        <td>
                                            {!! $students[$i]->course->title_az !!}
                                        </td>
                                        <td>
                                            <a href="/admin-user/student/edit/{{ $students[$i]->id }}"
                                                class="btn btn-primary mr-2">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="/admin-user/student/delete/{{ $students[$i]->id }}"
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
