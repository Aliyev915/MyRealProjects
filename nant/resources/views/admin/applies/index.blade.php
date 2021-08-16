@extends('admin.layouts.layout')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <h3 class="card-title ml-3">Applies</h3>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Time</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applies as $apply)
                                <tr>
                                    <th>{{ $apply->id }}</th>
                                    <td>{{ $apply->person->name }} {{ $apply->person->lastname }}</td>
                                    <td>{{ $apply->person->email }}</td>
                                    <td>{{ $apply->person->phone }}</td>
                                    <td>{{ date('d/m h:i', strtotime($apply->time)) }}</td>
                                    <td>
                                        <a href="/admin-user/apply/detail/{{ $apply->id }}"
                                            class="btn btn-primary mr-2"><i class="mdi mdi-table-edit"></i></a>
                                        @if($apply->read==false)
                                        <a href="/admin-user/apply/read/{{ $apply->id }}"
                                            class="btn btn-success mx-2"><i class="mdi mdi-eye"></i></a>
                                            @else
                                            <a href="/admin-user/apply/read/{{ $apply->id }}"
                                                class="btn btn-success mx-2"><i class="mdi mdi-eye-off"></i></a>
                                        @endif
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
