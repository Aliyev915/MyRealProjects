@extends('admin.layouts.layout')
@section('content')
    <h1>Welcome {{ Auth::user()->username }}</h1>
@endsection
