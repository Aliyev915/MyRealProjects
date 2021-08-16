@extends('layouts.layout')
@section('content')

    <!-- slider-section start -->
    <section id="slider-section">
        <div class="owl-carousel owl-theme">
            @foreach ($sliders as $slider)
                <div class="slider-item"
                    style="background-image: url({{ asset('storage/images/sliders/' . $slider->image) }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slider-content">
                                    <h5 data-aos="zoom-in-up" data-aos-duration="1500">
                                        {{ $header->{'caption_' . App::getLocale()} }}</h5>
                                    <h2 data-aos="zoom-in-up" data-aos-duration="1500">
                                        {!! $header->{'title_' . App::getLocale()} !!}
                                    </h2>
                                    <p data-aos="zoom-in-up" data-aos-duration="1500">{!! $header->{'description_' . App::getLocale()} !!}
                                    </p>
                                    <div class="btn-animation" data-aos="fade-left" data-aos-duration="2500">
                                        <a href="" class="btn">{{ __('home.read_more') }}</a>
                                        <div class="btn-after"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <!-- slider-section end -->

    <!-- about-us-section start -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-content">
                        <div class="section-heading">
                            <div class="section-title">{!! __('home.about_us') !!}
                                <img src="{{ asset('assets/img/circle_right.png') }}" alt="">
                            </div>
                            <h3>
                                {!! $about->{'title_' . App::getLocale()} !!}
                            </h3>
                        </div>

                        <p>
                            {!! $about->{'description_' . App::getLocale()} !!}
                        </p>
                        <div class="row m-t-20">
                            <div class="col-4">
                                <div class="sign">
                                    <img class="img-fluid" src="{{ asset('storage/images/' . $about->img_1) }}" alt="">
                                </div>
                                <div class="sign-text">{!! $about->signature !!}
                                </div>
                            </div>
                            <div class="col-4"></div>
                        </div>
                        <div class="btn-animation m-t-30">
                            <a href="/about" class="btn">{{ __('home.read_more') }}</a>
                            <div class="btn-after"></div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('storage/images/' . $about->img_2) }}" alt="">
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
                <div class="col-lg-3 col-4">
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
                <div class="col-lg-3 col-4">
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
                <div class="col-lg-3 col-4">
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
                                    <a
                                        href="/course/{{ $course->id }}">{{ $course->{'title_' . App::getLocale()} }}</a>
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

    <!-- contact-section start -->

    <section id="contact-section" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-heading">
                        <div class="section-title">{{ __('home.about_us') }}
                        </div>
                        <h3>
                            {{ __('home.contact_us') }}
                        </h3>
                    </div>
                    @if (Session::has('error_message'))
                        <div class="message" style="background:#f64b3c">
                            <p>
                                {{ Session('error_message') }}
                            </p>
                            <p class="close-icon">
                                <i class="fa fa-times"></i>
                            </p>
                        </div>
                    @endif
                    @if (Session::has('success_message'))
                        <div class="message" style="background:#46c35f">
                            <p>
                                {{ Session('success_message') }}
                            </p>
                            <p class="close-icon">
                                <i class="fa fa-times"></i>
                            </p>
                        </div>
                    @endif
                    <div class="contact-form" data-aos="fade-up" data-aos-duration="1500">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <form action="/send" method="post" id="send_message">
                                    @csrf
                                    <div class="contact-item icon-user"><input type="text" name="name"
                                            placeholder="{{ __('home.placeholder_name') }}" id=""></div>
                                    <div class="contact-item icon-mail"><input type="email" name="email"
                                            placeholder="{{ __('home.placeholder_email') }}" id=""></div>
                                    <div class="contact-item icon-pen">
                                        <textarea type="text" name="text" placeholder="{{ __('home.message') }}" id=""
                                            rows="10"></textarea>
                                    </div>
                                    <div class="btn-animation">
                                        <button class="btn">{{ __('home.send_message') }}</button>
                                        <div class="btn-after"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact-section end -->


    <!-- call-section start -->

    <section id="call-section">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <img src="{{ asset('assets/img/call-man.png') }}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="call-content">
                        <h4>{!! $bio->{'about_us_' . App::getLocale()} !!}</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque delectus quibusdam tempora
                            adipisci quis corporis ex fugit neque commodi dolor.</p>
                        <h2>{{ $bio->phone_1 }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- call-section end -->


    <!-- brands-section start -->

    <section id="service-section">
        <div class="container">
            <div class="section-heading">
                <h3>
                    {{ __('home.companies') }}
                </h3>
            </div>
            <div class="row">
                @foreach ($companies as $company)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item " data-aos="fade-up">
                            <div class="service-item-img">
                                <img src="{{ asset('assets/img/1.svg') }}" class="active-img" alt="">
                                <img src="{{ asset('assets/img/1-hover.svg') }}" class="d-active-img" alt="">
                            </div>
                            <div class="service-item-content" style="margin-top: -20px">
                                <h2 style="text-align: center;">
                                    <a href="/company/{{ $company->id }}" style="color: #030303;text-decoration:none;text-transform:uppercase" >{{ $company->{'name_' . App::getLocale()} }} </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- brands-section end -->

@endsection
