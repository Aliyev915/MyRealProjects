@php
    $setting = App\Models\Setting::all()->first();
@endphp
<!-- -------- FOOTER --------- -->
<footer>
    <div class="container3">
        <div class="footer_col_1">
            <h2>{{ __('home.contact') }}</h2>
            <section class="contact" id="contact">
                <div class="content">
                    <div class="contactInfo">
                        <div class="contactInfoBx">

                            <div class="box">
                                <div class="icon">
                                    <i class="fas
                                                fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <h3>{{ __('home.adress') }}</h3>
                                    <p>{{ $setting->{'adress_'.App::getLocale()} }}</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="text">
                                    <h3>{{ __('home.phone') }}</h3>
                                    <p>{{ $setting->phone_1 }}</p>
                                    <p>{{ $setting->phone_2 }}</p>
                                    <p>{{ $setting->phone_3 }}</p>
                                </div>
                            </div>
                            <div class="box">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <h3>Email</h3>
                                    <p>{{ $setting->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="footer_col_2">
            <h2>{{ __('home.about') }}</h2>
            <ul>
                <li><a href="/">{{ __('home.home') }}</a></li>
                <li><a href="/haqqimizda">{{ __('home.about') }}</a></li>
                <li><a href="/qalareya">{{ __('home.gallery') }}</a></li>
                <li><a href="/partnyorlar">{{ __('home.partners') }}</a></li>
                <li><a href="/vakansiyalar">{{ __('home.vacancy') }}</a></li>
                <li><a class="elaqe" href="/elaqe">{{ __('home.contact') }}</a></li>
            </ul>
        </div>
        <div class="footer_col_3">
            <div class="footer_logo">
                <a href="#"><img src="{{ asset('storage/images/'.$setting->logo) }}"></a>
            </div>
            <div class="social">
                <a href="{{ $setting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="{{ $setting->facebook }}" target="_blank" class="icon"><i class="fab
                                fa-facebook-f"></i></a>
                <a href="{{ $setting->instagram }}" target="_blank" class="icon"><i class="fab
                                fa-instagram"></i></a>
                <a href="{{ $setting->youtube }}" target="_blank" class="icon"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="copy">
            <div class="hr"></div>
            <p>{{ $setting->{'copyright_'.App::getLocale()} }}</p>
        </div>
    </div>
</footer>
