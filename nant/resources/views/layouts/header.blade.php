@php
$setting = App\Models\Setting::all()->first();
@endphp
<!-- ----- Header----- -->
<header>
    <div class="container">
        <img class="header_logo" src="{{ asset('storage/images/' . $setting->logo) }}">
        <nav>
            <div class="nav1">
                <a href="{{ $setting->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="{{ $setting->facebook }}" target="_blank" class="icon"><i class="fab
                            fa-facebook-f"></i></a>
                <a href="{{ $setting->instagram }}" target="_blank" class="icon"><i class="fab
                            fa-instagram"></i></a>
                <a href="{{ $setting->youtube }}" target="_blank" class="icon"><i class="fab fa-youtube"></i></a>
                <form action="/locale" method="POST" class="lang">
                    @csrf
                    <select name="lang">
                        @if (App::getLocale() == 'en')
                            <option value="az">Aze</option>
                            <option value="en" selected>Eng</option>0
                            <option value="ru" >Ru</option>
                        @elseif(App::getLocale() == 'az')
                            <option value="az" selected>Aze</option>
                            <option value="en">Eng</option>
                            <option value="ru">Ru</option>
                            @else
                            <option value="az">Aze</option>
                            <option value="en">Eng</option>
                            <option value="ru" selected>Ru</option>
                        @endif
                    </select>
                </form>
            </div>
            <div class="nav2">
                <form action="/locale" method="POST" class="lang">
                    @csrf
                    <select class="hidden" name="lang">
                        @if (App::getLocale() == 'en')
                            <option value="az">Aze</option>
                            <option value="en" selected>Eng</option>0
                            <option value="ru" >Ru</option>
                        @elseif(App::getLocale() == 'az')
                            <option value="az" selected>Aze</option>
                            <option value="en">Eng</option>
                            <option value="ru">Ru</option>
                            @else
                            <option value="az">Aze</option>
                            <option value="en">Eng</option>
                            <option value="ru" selected>Ru</option>
                        @endif
                    </select>
                </form>
                <ul>
                    <li><a href="/">{{ __('home.home') }}</a></li>
                    <li><a href="/haqqimizda">{{ __('home.about') }}</a></li>
                    <li><a href="/qalareya">{{ __('home.gallery') }}</a></li>
                    <li><a href="/partnyorlar">{{ __('home.partners') }}</a></li>
                    <li><a href="/vakansiyalar">{{ __('home.vacancy') }}</a></li>
                    <li><a class="elaqe" href="/elaqe">{{ __('home.contact') }}</a></li>
                </ul>
                <img class="menubar" src="{{ asset('./img/right-menu-bars.svg') }}" alt="">
                <input type="text" placeholder="Search...">
            </div>
        </nav>
    </div>
</header>

@section('valiation')
@endsection
