@extends('admin.layouts.layout')
@section('content')
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Messages</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Text</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    @if ($message->read==false)
                                    <tr style="background: rgba(0, 0, 0, 0.14)">
                                        <td class="py-1">
                                            {{ $message->id }}
                                        </td>
                                        <td class="py-1">
                                            {!! $message->name !!}
                                        </td>
                                        <td class="py-1">
                                            @if(Str::length($message->text)<=50)
                                            {{ $message->text }}
                                            @else
                                            {{ Str::substr($message->text, 0, 50) }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin-user/message/detail/{{ $message->id }}"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-account-card-details"></i>
                                            </a>
                                            <a href="/admin-user/message/read/{{ $message->id }}" class="btn btn-success mr-2">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td class="py-1">
                                            {{ $message->id }}
                                        </td>
                                        <td class="py-1">
                                            {!! $message->name !!}
                                        </td>
                                        <td class="py-1">
                                            @if(Str::length($message->text)<=50)
                                            {{ $message->text }}
                                            @else
                                            {{ Str::substr($message->text, 0, 50) }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin-user/message/detail/{{ $message->id }}"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-account-card-details"></i>
                                            </a>
                                            <a href="/admin-user/message/read/{{ $message->id }}" class="btn btn-success mr-2">
                                                <i class="mdi mdi-eye-off"></i>
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
