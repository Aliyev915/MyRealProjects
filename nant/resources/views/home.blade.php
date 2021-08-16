@extends('layouts.layout')
@section('content')
    <div class="nant_video">
        <video style="width: 100%; margin: 0 auto; display:block" autoplay muted loop>
            <source src="{{ asset('Nant_version 2 light.mp4') }}">
        </video>
        <div class="sound">
            <i class="fas fa-volume-mute"></i>
            <i class="fas fa-volume-up"></i>
        </div>
    </div>
    @if (Session::has('error_message'))
        <div class="alert-box" style="background-color: #cf0000">
            <p>{!! Session('error_message') !!}</p>
            <div class="cancel">
                <i class="fas fa-times"></i>
            </div>
        </div>
    @endif

    <!-- --------- Brands ------- -->
    {{-- <div class="brands">
        <h2>{{ __('home.partners') }}</h2>
        <div class="container2">
            <div class="row">
                @foreach ($partners as $partner)
                    <div class="col col-1">
                        <a href="/partnyor/{{ $partner->id }}">
                            <img src="{{ asset('storage/images/partners/' . $partner->images[0]->image) }}"
                                alt="" style="width: 100%">
                            <span style="font-size: 30px; left: 20%">{{ __('home.more') }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="button">
                <a href="/partnyorlar">
                    {{ __('home.all_partners') }}<i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div> --}}


    <!-- -------- GROUPES --------- -->
    <div class="groupes">
        <div class="container2">
            <h1 style="text-transform: uppercase">{{ __('home.gallery') }}</h1>
        </div>
        <div class="row container2">
            <div class="col-md-12 mx-auto mt-5">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        @for ($i =0 ; $i <ceil($galleries->count()/3) ; $i++)
                            @if($i==0)
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                @else
                                <li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
                            @endif
                        @endfor
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        @for ($i = 0; $i < ceil($galleries->count() / 3); $i++)
                            @if ($i == 0)
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($galleries->skip($i * 3)->take(3) as $gallery)
                                            <div class="col-sm-4">
                                                <div class="img-box">
                                                    <img src="{{ asset('storage/images/galleries/' . $gallery->image) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item">
                                    <div class="row">
                                        @foreach ($galleries->skip($i * 3)->take(3) as $gallery)
                                            <div class="col-sm-4">
                                                <div class="img-box">
                                                    <img src="{{ asset('storage/images/galleries/' . $gallery->image) }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="counter">
            <div class="fr-count">
                <i class="fas fa-people-carry"></i>
                <div class="counter-value" data-count="{{ $counter->worker }}">0</div>
                <p class="m-0">{{ __('home.workers_count') }}</p>
            </div>
            <div class="fr-count">
                <i class="fas fa-handshake"></i>
                <div class="counter-value" data-count="{{ $partners->count() }}">0</div>
                <p class="m-0">{{ __('home.partners_count') }}</p>
            </div>
            <div class="fr-count">
                <i class="fas fa-users"></i>
                <div class="counter-value" data-count="{{ $counter->customer }}">0</div>
                <p class="m-0">{{ __('home.customer_count') }}</p>
            </div>
            <div class="fr-count">
                <i class="fas fa-building"></i>
                <div class="counter-value" data-count="{{ $counter->branch }}">0</div>
                <p class="m-0">{{ __('home.branch_count') }}</p>
            </div>
            <div class="fr-count">
                <i class="fas fa-tasks"></i>
                <div class="counter-value" data-count="{{ $counter->autopark}}">0</div>
                <p class="m-0">{{ __('home.projects') }}</p>
            </div>
        </div>

        {{-- <div class="groupes resept project">
            <div class="container2">
                <h1>{{ __('home.projects') }}</h1>
                <div class="content">
                    <div class="row3">
                        @foreach ($projects as $project)
                            <div class="resept1">
                                <img src="{{ asset('storage/images/projects/' . $project->image) }}" alt="">
                                <a class="row3-col1" href="#">{{ $project->{'title_' . App::getLocale()} }}</a>
                                <p><span><i
                                            class="far fa-clock"></i>{{ date('d.m.Y', strtotime($project->time)) }}</span>
                                </p>
                                <p>{{ $project->{'description_' . App::getLocale()} }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
@section('ajax')
    <script>
        setTimeout(() => {
            document.querySelector('.alert-box').style.display = 'none'
        }, 10000);
        let mute = document.querySelector('.fa-volume-mute');
        let sound = document.querySelector('.fa-volume-up');
        let video = document.querySelector('.nant_video video');
        if (video.muted === true) {
            sound.style.display = 'none';
            mute.style.display = 'inline-block';
        } else {
            sound.style.display = 'inline-block';
            mute.style.display = 'none';
        }
        mute.onclick = function() {
            video.muted = false;
            sound.style.display = 'inline-block';
            mute.style.display = 'none';
        }

        sound.onclick = function() {
            video.muted = true;
            mute.style.display = 'inline-block';
            sound.style.display = 'none';
        }
    </script>
@endsection
@section('css')
    <style>
        .nant_video {
            position: relative;
            width: 64%;
            margin: 140px auto 30px;
            padding-right: 15px;
        }

        .nant_video .sound i {
            bottom: 10%;
            right: 10%;
            position: absolute;
            color: white;
            font-size: 25px;
        }

        @media screen and (max-width:992px) {
            .nant_video {
                width: 80%;
            }
        }

        .brands .right {
            position: absolute;
            left: 0% !important;
            top: 0% !important;
            height: 100% !important;
            width: 98% !important;
            transition: 0.6s;
            overflow: hidden;
        }

        .brands .left {
            width: 98% !important;
            height: 100% !important;
            position: absolute;
            top: 0% !important;
            left: 0% !important;
        }

        .groupes.resept {
            padding-top: 0 !important;
        }

    </style>
@endsection
