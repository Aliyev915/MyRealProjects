@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/more.css') }}">
@endsection
@section('content')

    <!-- --------- MORE ------- -->
    <div class="container_more" style="position: relative; top:120px;">
        {{-- <div class="brand_image">
            @foreach ($partner->images as $image)
                <img src="{{ asset('storage/images/partners/'.$image->image)}}" alt="">
            @endforeach
        </div> --}}
        <p>{{ $partner->{'description_'.App::getLocale()} }}</p>
        <iframe width="100%" height="500px" src="{{ $partner->link }}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

        </iframe>
    </div>
    <div class="groupes resept project">
        <div class="container2">
            <h1>{{ __('home.products') }}</h1>
            <div class="content">
                <div class="row3" style="justify-content: center">
                    @foreach ($partner->galleries as $gallery)
                    <div class="resept1" style="height: 100%; margin: 10px">
                        <img src="{{ asset('storage/images/partners/'.$gallery->image)}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
