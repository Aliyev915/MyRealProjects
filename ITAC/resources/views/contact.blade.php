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
                                <li><a class="active" href="#">{{ __('home.contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- poster-section end -->

    <!-- contact-section start -->

    <section id="contact-section" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-heading">
                        <div class="section-title">
                            <h3>{{ __('home.about_us') }}</h3>
                        </div>
                        <div class="about">
                            <p>{!! $bio->{"about_us_".App::getLocale()} !!}</p>
                        </div>
                        <h4>{{ __('home.address') }}</h4>
                        <div class="address">
                            <i class="fas fa-map-marker"></i>
                            <p>{{ $bio->{"address_".App::getLocale()} }}</p>
                        </div>
                        <h4>{{ __('home.phone') }}</h4>
                        <div class="address">
                            <i class="fas fa-phone"></i>
                            <p>{{ $bio->phone_1 }}</p>
                        </div>
                        <h4>Email</h4>
                        <div class="address">
                            <i class="fas fa-envelope"></i>
                            <p>{{ $bio->email }}</p>
                        </div>
                        <div class="sosial">
                            <div class="facebook">
                                <a href="{{ $bio->facebook }}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="whatsapp">
                                <a href="/whatsapp/{{ $bio->phone_1 }}">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                            <div class="instagram">
                                <a href="{{ $bio->instagram }}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
                                        <textarea type="text" rows="10" name="text" placeholder="{{ __('home.message') }}" id=""></textarea>
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

    <!-- brands-section start -->

    <section id="brands-section">
        <div class="container">
            <div class="row">
                @foreach ($companies as $company)
                <div class="col-md-3 col-sm-6">
                    <div class="brand-item"><img src="{{ asset('storage/images/companies/'.$company->image) }}" alt=""></div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- brands-section end -->
@endsection
