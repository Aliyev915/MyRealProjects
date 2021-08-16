@extends('layouts.layout')
@section('content')
    <!-- poster-section start -->
    <section id="poster-section" class="d-flex align-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="poster-content">
                        <div class="poster-navigation">
                            <ul>
                                <li><a href="#">{{ __('home.home') }}</a></li>
                                <li><a class="active" href="#">{{ __('home.company') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- poster-section end -->

    <!-- blog-section start -->
    <section id="blog-details-section">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-12">
                    <div class="blog-details-img">
                        <img height="350" src="{{ asset('storage/images/companies/' . $company->image) }}" alt="">
                    </div>
                    <div class="blog-details-content">
                        <div class="details">
                            <h2>
                                {!! $company->{'name_' . App::getLocale()} !!}
                            </h2>
                            <p>
                                {!! $company->{'about_' . App::getLocale()} !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- blog-section end -->
@endsection
