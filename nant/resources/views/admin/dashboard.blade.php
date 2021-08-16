@extends('admin.layouts.layout')
@section('content')
    <h3>Hello, {{ Auth::user()->name }}</h3>
@endsection
