@extends('layouts.layout')
@section('content')
    <!-- -------- GROUPES --------- -->
    <div class="groupes resept project">
        <div class="container2">
            <h1>{{ __('home.projects') }}</h1>
            <div class="content">
                <div class="row3">
                    @foreach ($projects as $project)
                        <div class="resept1">
                            <img src="{{ asset('storage/images/projects/' . $project->image) }}" alt="">
                            <a class="row3-col1" href="#">{{ $project->{'title_' . App::getLocale()} }}</a>
                            <p><span><i class="far fa-clock"></i>{{ date('d.m.Y', strtotime($project->time)) }}</span></p>
                            <p>{{ $project->{'description_' . App::getLocale()} }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
