@extends('admin.layouts.layout')
@section('content')
    @if (Session::has('success_message'))
        <div class="toast" role="alert" style="opacity: 1; width: 100%" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                {!! Session('success_message') !!}
                <button type="button" class="ml-2 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <h3 class="card-title ml-3">Message</h3>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                                @if ($message->read == false)
                                    <tr style="background: rgba(0, 0, 0, 0.14)">
                                        <td class="py-1">
                                            {{ $message->id }}
                                        </td>
                                        <td class="py-1">
                                            {!! $message->name !!}
                                        </td>
                                        <td class="py-1">
                                            @if (Str::length($message->message) <= 50)
                                                {{ $message->message }}
                                            @else
                                                {{ Str::substr($message->message, 0, 50) }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin-user/message/detail/{{ $message->id }}"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-account-card-details"></i>
                                            </a>
                                            <a href="/admin-user/message/read/{{ $message->id }}"
                                                class="btn btn-success mr-2">
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
                                            @if (Str::length($message->message) <= 50)
                                                {{ $message->message }}
                                            @else
                                                {{ Str::substr($message->message, 0, 50) }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin-user/message/detail/{{ $message->id }}"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-account-card-details"></i>
                                            </a>
                                            <a href="/admin-user/message/read/{{ $message->id }}"
                                                class="btn btn-success mr-2">
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
@endsection
