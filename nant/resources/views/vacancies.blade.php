@extends('layouts.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/karyera.css') }}">
<link rel="stylesheet" href="{{ asset('css/elaqe.css') }}">
@endsection
@section('content')
    <!-- -------- GROUPES --------- -->
    <div class="elaqe karyera">
        <h1>{{ __('home.vacancy') }}</h1>
        @foreach ($vacancies as $vacancy)
            <div class="jobs container2 mb-5">
                <div class="job-title">
                    <div class="nant-logo">
                        <img src="{{ asset('./img/colored_logo_nant.png') }}" alt="">
                    </div>
                    <div class="job-title-content">
                        <pre>{{ $vacancy->{'position_'.App::getLocale()} }}</pre>
                        <pre class="company">{{ $vacancy->company }}</pre>
                        <pre><i class="fas fa-map-marker-alt"></i> {{ $vacancy->region->{'name_'.App::getLocale()} }}</pre>
                    </div>
                </div>
                @php
                    $detail=App\Models\VacancyDetail::all()->firstWhere('id',$vacancy->vacancy_detail_id);
                @endphp
                <div class="etrafli">
                    <div class="date">
                        <pre><i class="far fa-clock"></i> {{ date('d.m.Y',strtotime($vacancy->time)) }}</pre>
                    </div>
                    <a href="#"><span class="fr-vk">{{ __('home.more') }}</span></a><br><br>
                </div>
            </div>
            <div class="vak-popup">
                <div class="inner">
                    @php
                        $detail=App\Models\VacancyDetail::all()->firstWhere('id',$vacancy->vacancy_detail_id);
                    @endphp
                    <div class="close-popup">&times;</div>
                    <h3>{{ $vacancy->{'position_'.App::getLocale()} }}</h3>
                    <p>{{ __('home.position') }}: {{ $vacancy->{'position_'.App::getLocale()} }}</p>
                    <p>{{ __('home.location') }}: {{ $vacancy->region->{'name_'.App::getLocale()} }}</p>
                    <p>{{ __('home.experience') }}: {{ $detail->experience }} {{ __('home.year') }}</p>
                    <p>{{ __('home.education') }}: {{ $detail->{'education_'.App::getLocale()} }}</p><br>

                    <p>{{ __('home.responsibility') }}:</p>
                    {!! $detail->{'responsibility_'.App::getLocale()} !!}

                    <p>{{ __('home.requirements') }}:</p>
                    {!! $detail->{'responsibility_'.App::getLocale()} !!}

                    <p>{{ __('home.salary') }}: @if($detail->salary==null)Müsahibə əsasında təyin olunur @else {{ $detail->salary }} @endif</p><br>

                    <p>{{ __('home.guarantee') }}:</p>
                    {!! $detail->{'guarantee_'.App::getLocale()} !!}

                    <p>{{ __('home.work_graphic') }}: {{ $detail->{'graphic_'.App::getLocale()} }}</p>
                </div>
            </div>
        @endforeach

        {{-- <div class="butun-vakansiyalar ">
            <a href="#">{{ __('home.view_all') }}</a>
        </div> --}}
        <h2>{{ __('home.apply_us') }}</h2>
        @if (Session::has('success_message'))
            <div class="alert-box">
                <p>{!! Session('success_message') !!}</p>
                <div class="cancel">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        @endif
        <section class="contact" id="contact">
            <div class="content">
                <div class="formBx">
                    <form method="POST" action="/send" id="apply">
                        @csrf
                        <div class="in">
                            <div class="content-container" style="width: 30%">
                                <input type="text" placeholder="{{ __('home.name') }}" name="name" style="width: 100%" max="50">
                                <p class="text-danger"></p>
                            </div>
                            <div class="content-container" style="width: 30%">
                                <input type="text" placeholder="{{ __('home.lastname') }}" name="lastname" style="width: 100%" max="50">
                                <p class="text-danger"></p>
                            </div>
                            <div class="content-container" style="width: 30%">
                                <input type="text" placeholder="{{ __('home.birthplace') }}:" name="birthplace" style="width: 100%"
                                    max="150">
                                <p class="text-danger"></p>
                            </div>
                        </div>
                        <div class="in">
                            <div class="content-container" style="width: 30%">
                                <input type="text" placeholder="{{ __('home.citizenship') }}" style="width: 100%" name="citizenship"
                                    max="20">
                                <p class="text-danger"></p>
                            </div>
                            <div class="content-container" style="width: 30%">
                                <input type="text" placeholder="{{ __('home.nationality') }}" style="width: 100%" name="nationality" max="20">
                                <p class="text-danger"></p>
                            </div>
                            <div class="content-container" style="width: 30%">
                                <input type="text" placeholder="{{ __('home.birtday') }}" style="width: 100%" name="birthday" max="20">
                                <p class="text-danger"></p>
                            </div>
                        </div>
                        <div class="in">
                            <select name="{{ __('home.gender') }}" id="">
                                <option value="">Cinsi:</option>
                                <option value="male">Kişi</option>
                                <option value="female">Qadın</option>
                            </select>
                            <select name="martial_status" id="">
                                <option value="">{{ __('home.martial_status') }}:</option>
                                <option value="Subay">Subay</option>
                                <option value="Evli">Evli</option>
                                <option value="Boşanmış">Boşanmış</option>
                            </select>
                            <select name="military_service" id="">
                                <option value="">{{ __('home.military_service') }}:</option>
                                <option value="Bitirib">Bitirib</option>
                                <option value="Getməyib">Getməyib</option>
                            </select>
                        </div>
                        <div class="in bottom">
                            <select name="driving_license" id="">
                                <option value="">{{ __('home.driving_license') }}:</option>
                                <option value="no">Yoxdur</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="B,C">B,C</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                            <div class="content-container" style="width: 23%">
                                <input type="text" name="phone" style="width: 100%" placeholder="{{ __('home.phone') }}" max="20">
                                <p class="text-danger"></p>
                            </div>
                            <div class="content-container" style="width: 23%">
                                <input type="text" name="mobile" style="width: 100%" placeholder="Mobile" max="20">
                                <p class="text-danger"></p>
                            </div>
                            <div class="content-container" style="width: 23%">
                                <input type="email" name="email" style="width: 100%" placeholder="Email" max="100">
                                <p class="text-danger"></p>
                            </div>
                        </div>
                        <h2>{{ __('home.education') }}</h2>
                        <div class="in tehsil">
                            <input type="text" placeholder="{{ __('home.school') }}" name="school_1">
                            <input type="text" placeholder="{{ __('home.graduation_year') }}" name="graduate_1">
                        </div>
                        <div class="in">
                            <input type="text" placeholder="Məzun olduğu Ali Məktəb:" name="school_2">
                            <input type="text" placeholder="{{ __('home.graduation_year') }}" name="graduate_2">
                            <input type="text" placeholder="{{ __('home.speciality') }}" name="specialty_1">
                        </div>
                        <div class="in">
                            <input type="text" placeholder="{{ __('home.master') }}:" name="school_3">
                            <input type="text" placeholder="{{ __('home.graduation_year') }}" name="graduate_3">
                            <input type="text" placeholder="{{ __('home.speciality') }}" name="speciality_2">
                        </div>
                        <div class="in">
                            <input type="text" placeholder="{{ __('home.aspirantura') }}:" name="school_4">
                            <input type="text" placeholder="{{ __('home.graduation_year') }}" name="graduate_4">
                            <input type="text" placeholder="{{ __('home.speciality') }}" name="speciality_3">
                        </div>
                        <div class="in full">
                            <input type="text" placeholder="{{ __('home.external_education') }}">
                        </div>
                        <h2>{{ __('home.languages') }}</h2>
                        <div class="in diller">
                            <select name="language" id="">
                                <option value="">{{__('home.language')}} :</option>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->{'name_' . App::getLocale()} }}">
                                        {{ $language->{'name_' . App::getLocale()} }}</option>
                                @endforeach
                            </select>
                            <select name="reading" id="">
                                <option value="">{{ __('home.reading') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                            <select name="writing" id="">
                                <option value="">{{ __('home.writing') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                            <select name="speaking" id="">
                                <option value="">{{ __('home.speaking') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                        </div>
                        <div class="in diller">
                            <select name="language_2" id="">
                                <option value="">{{__('home.language')}} :</option>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->{'name_' . App::getLocale()} }}">
                                        {{ $language->{'name_' . App::getLocale()} }}</option>
                                @endforeach
                            </select>
                            <select name="reading_2" id="">
                                <option value="">{{ __('home.reading') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                            <select name="writing_2" id="">
                                <option value="">{{ __('home.writing') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                            <select name="speaking_2" id="">
                                <option value="">{{ __('home.speaking') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                        </div>
                        <div class="in diller">
                            <select name="language_3" id="">
                                <option value="">{{__('home.language')}} :</option>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->{'name_' . App::getLocale()} }}">
                                        {{ $language->{'name_' . App::getLocale()} }}</option>
                                @endforeach
                            </select>
                            <select name="reading_3" id="">
                                <option value="">{{ __('home.reading') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                            <select name="writing_3" id="">
                                <option value="">{{ __('home.writing') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                            <select name="speaking_3" id="">
                                <option value="">{{ __('home.speaking') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                        </div>
                        <div class="in diller">
                            <select name="language_4" id="">
                                <option value="">{{__('home.language')}} :</option>
                                @foreach ($languages as $language)
                                    <option value="{{ $language->{'name_' . App::getLocale()} }}">
                                        {{ $language->{'name_' . App::getLocale()} }}</option>
                                @endforeach
                            </select>
                            <select name="reading_4" id="">
                                <option value="">{{ __('home.reading') }}:</option>
                                <<option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                    <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                    <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                            <select name="writing_4" id="">
                                <option value="">{{ __('home.writing') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                            <select name="speaking_4" id="">
                                <option value="">{{ __('home.speaking') }}:</option>
                                <option value="{{ __('home.normal') }}">{{ __('home.normal') }}</option>
                                <option value="{{ __('home.good') }}">{{ __('home.good') }}</option>
                                <option value="{{ __('home.excellent') }}">{{ __('home.excellent') }}</option>
                            </select>
                        </div>

                        <h2>{{ __('home.technical') }}</h2>
                        <div class="in texniki_bilikler">
                            <input type="text" placeholder="{{ __('home.comp_operating') }}" name="comp_operator">
                            <input type="text" placeholder="{{ __('home.comp_graphic') }}" name="comp_graphic">
                        </div>
                        <div class="in texniki_bilikler">
                            <input type="text" placeholder="{{ __('home.comp_programming') }}" name="comp_programming">
                            <input type="text" placeholder="{{ __('home.technical') }}" name="technical">
                        </div>

                        <h2>{{ __('home.other') }}</h2>
                        <div class="in diger">
                            <div class="col">
                                <h3>{{ __('home.external_work') }}</h3>
                                <input type="radio" id="" name="external" value="Bəli" checked>
                                <label for="">{{ __('home.yes') }}</label><br>
                                <input type="radio" id="" name="external" value="Xeyr">
                                <label for="">{{ __('home.no') }}</label>


                                <input type="text" name="sector_is_want" placeholder="{{ __('home.sector_is_want') }}"
                                    style="width: 94%;">
                            </div>

                            <div class="col">
                                <h3>{{ __('home.is_working') }}</h3>
                                <input type="radio" id="" name="is_working" value="Bəli" checked>
                                <label for="">{{ __('home.yes') }}</label><br>
                                <input type="radio" id="" name="is_working" value="Xeyr">
                                <label for="">{{ __('home.no') }}</label><br>


                                <input type="text" name="position_is_want" placeholder="İşləmək istədiyiniz Vəzifə/Pozisiya"
                                    style="width: 94%;">
                            </div>
                        </div>
                        <h2>Occupation 1</h2>
                        <div class="in">
                            <input type="text" placeholder="{{ __('home.position') }}" name="position_1">
                            <input type="text" placeholder="{{ __('home.company') }}" name="company_1">
                            <input type="text" placeholder="{{ __('home.intern') }}" name="duration_1">
                        </div>
                        <h2>Occupation 2</h2>
                        <div class="in">
                            <input type="text" placeholder="{{ __('home.position') }}" name="position_2">
                            <input type="text" placeholder="{{ __('home.company') }}" name="company_2">
                            <input type="text" placeholder="{{ __('home.intern') }}" name="duration_2">
                        </div>
                        <h2>Occupation 3</h2>
                        <div class="in">
                            <input type="text" placeholder="{{ __('home.position') }}" name="position_3">
                            <input type="text" placeholder="{{ __('home.company') }}" name="company_3">
                            <input type="text" placeholder="{{ __('home.intern') }}" name="duration_3">
                        </div>
                        <div class="btn btn2">
                            <input type="submit" value="{{ __('home.send') }}">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('validation')
    <script>
        $('#apply').submit(function(e) {
            let names = [
                ['name', 'Lutfen adinizi daxil edin', 'Bu xananin olcusu 50 den cox olmamlidir'],
                ['lastname', 'Lutfen soyadinizi daxil edin', 'Bu xananin olcusu 50 den cox olmamlidir'],
                ['birthplace', 'Lutfen doguldugunuz yeri daxil edin',
                    'Bu xananin olcusu 150 den cox olmamlidir'
                ],
                ['citizenship', 'Lutfen hansi olkenin vetendasi oldugunuzu qeyd edin',
                    'Bu xananin olcusu 20 den cox olmamlidir'
                ],
                ['nationality', 'Lutfen milliyetinizi qeyd edin', 'Bu xananin olcusu 20 den cox olmamlidir'],
                ['birthday', 'Lutfen dogum gununuzu qeyd edin', 'Bu xananin olcusu 20 den cox olmamlidir'],
                ['phone', 'Lutfen telefon nomrenizi daxil edin', 'Bu xananin olcusu 20 den cox olmamlidir'],
                ['mobile', 'Lutfen mobil nomrenizi daxil edin', 'Bu xananin olcusu 20 den cox olmamlidir'],
                ['email', 'Lutfen emailinizi daxil edin', 'Bu xananin olcusu 100 den cox olmamlidir']
            ];
            for (let name of names) {
                let input = $(`input[name=${name[0]}]`);
                let requiredMessage = name[1];
                let lengthMessage = name[2];
                let top = input.offset().top - 400;
                let max = input.attr('max');
                if (input.val().length === 0) {
                    e.preventDefault();
                    $(window).scrollTop(top);
                    input.next().text('');
                    input.next().text(requiredMessage);
                } else {
                    input.next().text('');
                }
                if (input.val().length > max) {
                    e.preventDefault();
                    $(window).scrollTop(top);
                    input.next().text('');
                    input.next().text(lengthMessage);
                }
            }
        });

        $('.alert-box .cancel').click(function() {
            $('.alert-box').hide();
        })
        setTimeout(() => {
            document.querySelector('.alert-box').style.display = 'none'
        }, 8000);

    </script>
@endsection
