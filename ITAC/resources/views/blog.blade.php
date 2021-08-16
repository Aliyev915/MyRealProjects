@extends('layouts.layout')
@section('content')
    <!-- breadcrumb-section start -->
    <section id="poster-section" class="d-flex align-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="poster-content">
                        <div class="poster-title">
                            <h3>
                                News Feeds
                            </h3>
                        </div>
                        <div class="poster-navigation">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a class="active" href="#">{{ $data }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-section end -->

    <!-- blog-section start -->
    <section id="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">

                    @foreach ($blogs as $blog)
                        <div class="blog-item">
                            <div class="blog-media">
                                <img height="400" src="{{ asset('storage/images/blogs/'.$blog->images->first()['image']) }}" alt="">
                            </div>
                            <div class="blog-content">
                                <div class="blog-info">
                                    <ul>
                                        <li>
                                            <i class="fa fa-user"></i>
                                            <span>by</span>
                                            <a href="#">{{ $blog->user->fullname }}</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-comments"></i>
                                            <a href="#">
                                                Comments {{ $blog->comments->count() }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="blog-heading" style="text-transform: uppercase">
                                    <a href="/blog/{{ $blog->slug }}">
                                        {{
                                            $blog->{"title_".App::getLocale()}
                                        }}
                                    </a>
                                </h2>
                                <p>
                                    @if (Str::length($blog->{"description_".App::getLocale()})>400)
                                        {!! Str::substr($blog->{"description_".App::getLocale()}, 0, 400).'...' !!}
                                        @else
                                        {!! $blog->{"description_".App::getLocale()} !!}
                                    @endif
                                </p>
                                <div class="btn-animation">
                                    <a href="/blog/{{ $blog->slug }}" class="btn">Read More</a>
                                    <div class="btn-after"></div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <div class="page-navigation">
                        <ul>
                            {{
                                $blogs->links()
                            }}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <h4 class="sidebar-item-title">{{ __('home.search') }}</h4>
                            <div class="sidebar-form">
                                <form action="/search">
                                    @csrf
                                    <input type="text" placeholder="SEARCH" autocomplete="off" id="search" name="search">
                                    <button class="form-submit-btn" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <div class="list-group"></div>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <h4 class="sidebar-item-title">{{ __('home.follow_us') }}</h4>
                            <ul class="sidebar-social">
                                <li>
                                    <a href="{{ $bio->facebook }}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $bio->instagram }}"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $bio->twitter }}"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item">
                            <h4 class="sidebar-item-title">{{ __('home.categories') }}</h4>
                            <ul class="sidebar-category">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="/blog/category/{{ $category->id  }}">{{ $category->{"name_".App::getLocale()} }} ({{ $category->blogs->count() }})</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- blog-section end -->
@endsection
