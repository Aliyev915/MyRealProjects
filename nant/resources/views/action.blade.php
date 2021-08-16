@extends('layouts.layout')
@section('content')
    <!-- -------- GROUPES --------- -->
    <div class="groupes resept xeber">
        <div class="container2">
            <h1 style="margin-top:150px">{{ __('home.news') }}</h1>
            <div class="content">
                <div class="row3">
                    @foreach ($actions as $action)
                        <div class="resept1">
                            <img src="{{ asset('storage/images/actions/'.$action->image) }}" alt="">
                            <a class="row3-col1" href="#">{{ $action->{'title_'.App::getLocale()} }}</a>
                            <p><span><i class="far fa-clock"></i>{{ date('d.m.Y',strtotime($action->time)) }}</span></p>
                            <p>{{ $action->{'description_'.App::getLocale()} }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
