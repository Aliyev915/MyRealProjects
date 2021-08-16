@extends('admin.layouts.layout')
@section('content')
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <a href="/admin-user/category/create" class="btn btn-success">Create</a>
            </ol>
        </nav>
    </div>
    <div class="row">
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
                                    <th>Email</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <td class="py-1">
                                            {{ $subscriber->id }}
                                        </td>
                                        <td class="py-1">
                                            {!! $subscriber->email !!}
                                        </td>
                                        <td>
                                            <a href="/admin-user/subscribe/delete/{{ $subscriber->id }}"
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
