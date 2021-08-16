@extends('admin.layouts.layout')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $message->name }}</h3>
                </div>
                <div class="card-body">
                    <p>{{ $message->message }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="/admin-user/message/delete/{{ $message->id }}" class="btn btn-danger">Delete</a>
                <a href="/admin-user/message" class="btn btn-secondary">Back</a>
            </div>

        </div>
    </div>
@endsection
