@extends('admin.layouts.layout')
@section('content')
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">applys</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applies as $apply)
                                    @if ($apply->read==false)
                                    <tr style="background: rgba(0, 0, 0, 0.14)">
                                        <td class="py-1">
                                            {{ $apply->id }}
                                        </td>
                                        <td class="py-1">
                                            {!! $apply->name !!} {{ $apply->lastname }}
                                        </td>
                                        <td class="py-1">
                                            {{ $apply->email }}
                                        </td>
                                        <td class="py-1">
                                            {{ $apply->course->{"title_".App::getLocale()} }}
                                        </td>
                                        <td>
                                            <a href="/admin-user/apply/read/{{ $apply->id }}" class="btn btn-success mr-2">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a href="/admin-user/apply/delete/{{ $apply->id }}"
                                                class="btn btn-danger mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td class="py-1">
                                            {{ $apply->id }}
                                        </td>
                                        <td class="py-1">
                                            {!! $apply->name !!} {{ $apply->lastname }}
                                        </td>
                                        <td class="py-1">
                                            {{ $apply->email }}
                                        </td>
                                        <td class="py-1">
                                            {{ $apply->course->{"title_".App::getLocale()} }}
                                        </td>
                                        <td>
                                            <a href="/admin-user/apply/read/{{ $apply->id }}" class="btn btn-success mr-2">
                                                <i class="mdi mdi-eye-off"></i>
                                            </a>
                                            <a href="/admin-user/apply/delete/{{ $apply->id }}"
                                                class="btn btn-danger mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
