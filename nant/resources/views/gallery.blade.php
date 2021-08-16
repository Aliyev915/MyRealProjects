@extends('layouts.layout')
@section('content')

<div class="groupes" style="margin-bottom: 50px">
    <div class="container2">
        <h1 style="text-transform: uppercase; margin-top:150px">{{ __('home.gallery') }}</h1>
    </div>
    <div class="container" style="display:block">
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-4 col-sm-6 my-2">
                    <img src="{{ asset('storage/images/galleries/' . $gallery->image) }}" style="width: 100%" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
