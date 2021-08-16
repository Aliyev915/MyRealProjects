@extends('layouts.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/elaqe.css') }}">
@endsection
@section('content')
    <!-- -------- GROUPES --------- -->
    <div class="elaqe">
        @if (Session::has('success_message'))
            <div class="alert-box">
                <p>{!! Session('success_message') !!}</p>
                <div class="cancel">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        @endif
        <h1>{{ __('home.contact_us') }}</h1>
        @foreach ($contacts as $contact)
        <div class="idare">
            <h3>{{ $contact->{'position_'.App::getLocale()} }}</h3>
            <h2>{{ $contact->{'fullname_'.App::getLocale()} }}</h2>
            <h3 style="text-align: right;">{{ $contact->email }}</h3>
        </div>
        @endforeach
        <section class="contact" id="contact">
            <div class="content">
                <div class="contactInfo">
                    <div class="contactInfoBx">
                        <div class="box">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <h3>{{ __('home.adress') }}</h3>
                                <p>Babək prospekti 31H, Rich Plaza</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="text">
                                <h3>{{ __('home.phone') }}</h3>
                                <p>(+99412) 440 22 02</p>
                                <p>(+99412) 441 43 04</p>
                                <p>(+99412) 441 60 26</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>office@nant.az</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formBx">
                    <form method="POST" action="/sendmessage">
                        @csrf
                        <div class="in">
                            <input type="text" placeholder="{{ __('home.name') }}" name="name" required>
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <input type="text" placeholder="{{ __('home.content') }}" name="title" required>
                        <textarea placeholder="{{ __('home.message') }}" name="message" required></textarea>
                        <div class="btn">
                            <input type="submit" value="{{ __('home.send') }}">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <div class="container unvan">
        <iframe allowtransparency="true"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.794855197125!2d49.8908462149171!3d40.39123906511416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d293561a55f%3A0x29774776043fb67f!2sRich%20Plaza!5e0!3m2!1sen!2s!4v1617013066398!5m2!1sen!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection
@section('ajax')

    <script>
        setTimeout(() => {
            document.querySelector('.alert-box').style.display = 'none'
        }, 8000);

    </script>
@endsection
