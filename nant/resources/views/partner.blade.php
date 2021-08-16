@extends('layouts.layout')
@php
    $setting = App\Models\Setting::all()->first();
@endphp
@section('content')
    <!-- ------- Banner --------- -->
    <div class="banner brend">
        <img src="{{ asset('storage/images/'.$setting->partner_image) }}" alt="">
    </div>
    <!-- --------- Brands ------- -->
    <div class="brands brend">
        <h1>{{ __('home.partners') }}</h1>
        <div class="container2">
            <div class="row">
                @foreach ($partners as $partner)
                    <div class="col col-1" style="min-height: auto; padding-bottom:0">
                        <a href="{{ $partner->partner_site }}" target="_blank">
                            <div class="img" style="padding-left:0 ">
                                <img src="{{ asset('storage/images/partners/' . $partner->partner_logo) }}"
                                        style="width: 100%; height:100%; margin-left:-4%" alt="">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
