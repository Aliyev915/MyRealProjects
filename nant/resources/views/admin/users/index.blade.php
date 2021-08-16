@extends('admin.layouts.layout')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Non Active Users</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="py-1">
                                        {{ $user->id }}
                                    </td>
                                    <td class="py-1">
                                        {!! $user->name !!}
                                    </td>
                                    <td class="py-1">
                                        {!! $user->email !!}
                                    </td>
                                    <td>
                                        <a href="/admin-user/user/activate/{{ $user->id }}"
                                            class="btn btn-primary mr-2">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="/admin-user/user/delete/{{ $user->id }}" class="btn btn-danger mr-2">
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
@endsection
