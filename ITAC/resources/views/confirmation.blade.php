@extends('layouts.layout')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 py-5" style="border: 1px solid #F64B3C ">
                @if (Session::has('error_message'))
                    <div class="text-center">
                        <p class="text-danger">{{ Session('error_message') }}</p>
                    </div>
                    <a href="/" class="btn btn-block mt-5">Geri Qayıt</a>
                @endif
            </div>
        </div>
    </div>
@endsection
