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
                                <li><a class="active" href="#">{{ __('home.about') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- poster-section end -->

<!-- about-us-section start -->
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="about-content">
                    <div class="section-heading">
                        <div class="section-title">{!! $about->{"caption_".App::getLocale()} !!}
                            <img src="{{ asset('assets/img/circle_right.png') }}" alt="">
                        </div>
                        <h3>
                            {!! $about->{"title_".App::getLocale()} !!}
                        </h3>
                    </div>

                    <p>
                        {!! $about->{"description_".App::getLocale()} !!}
                    </p>
                    <div class="row m-t-20">
                        <div class="col-4">
                            <div class="sign">
                                <img class="img-fluid" src="{{ asset('storage/images/'.$about->img_1) }}" alt="">
                            </div>
                            <div class="sign-text">{!! $about->signature !!}
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="btn-animation m-t-30">
                        <a href="" class="btn">{{ __('home.read_more') }}</a>
                        <div class="btn-after"></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="about-img">
                    <img class="img-fluid" src="{{ asset('storage/images/'.$about->img_2) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about-us-section end -->

    <!-- counter-section start -->
    <section id="counter-section">
        <div class="container">
            <div class="row align-end">
                <div class="col-md-3 col-sm-12">
                    <div class="counter-img"><img src="{{ asset('assets/img/count-main.png') }}" alt=""></div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="counter-item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="counter-item-img">
                            <img src="{{ asset('assets/img/icon.png') }}" alt="">
                        </div>
                        <div class="counter">
                            <span class="count">1256</span>
                        </div>
                        <p>{{ __('home.student_count') }}</p>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="counter-item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="counter-item-img">
                            <img src="{{ asset('assets/img/icon2.png') }}" alt="">
                        </div>
                        <div class="counter">
                            <span class="count">1256</span>
                        </div>
                        <p>{{ __('home.worker_count') }}</p>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="counter-item" data-aos="fade-up" data-aos-duration="1500">
                        <div class="counter-item-img">
                            <img src="{{ asset('assets/img/icon3.png') }}" alt="">
                        </div>
                        <div class="counter">
                            <span class="count">1256</span>
                        </div>
                        <p>{{ __('home.annual_income') }}</p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-section end -->

    <!-- service-section start -->
    <section id="service-section">
        <div class="container">
            <div class="row just-center">
                <div class="col-10">
                    <div class="section-heading">
                        <div class="section-title">
                            <img src="{{ asset('assets/img/circle_Left.png') }}" alt="">
                            {{ __('home.about_us') }}
                            <img src="{{ asset('assets/img/circle_right.png') }}" alt="">
                        </div>
                        <h3>
                            {{ __('home.about_header') }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item " data-aos="fade-up">
                            <div class="service-item-img">
                                <img src="{{ asset('assets/img/1.svg') }}" class="active-img" alt="">
                                <img src="{{ asset('assets/img/1-hover.svg') }}" class="d-active-img" alt="">
                            </div>
                            <div class="service-item-content">
                                <h5>
                                    <a href="/course/{{ $course->id }}">{{ $course->{'title_' . App::getLocale()} }}</a>
                                </h5>
                                <p>
                                    @if (Str::of($course->{'description_' . App::getLocale()})->length() > 150)
                                        {!! Str::substr($course->{'description_' . App::getLocale()}, 0, 150) . '...' !!}
                                    @else
                                        {!! $course->{'description_' . App::getLocale()} !!}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- brands-section start -->

    <section id="brands-section">
        <div class="container">
            <div class="owl-carousel owl-theme">
                @foreach ($companies as $company)
                    <div class="brand-item"><img src="{{ asset('storage/images/companies') . '/' . $company->image }}"
                            alt=""></div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- brands-section end -->
@endsection
