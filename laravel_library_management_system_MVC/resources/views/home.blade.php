@extends('layouts.app')
@section('root')
<div class="home container col fhw">
    <nav class="navigation container row fw">
        <div class="logo_holder container row">
            <img src="{{ asset('img/icons/lms-icon.svg') }}" alt="" class="icon">
            <p>
                Library Management System
            </p>
        </div>
        @auth
            <a href="{{ route('dashboard') }}">Proceed to Dashboard</a>
        @endauth
        @guest
            <a href="{{ route('login') }}">Login</a>
        @endguest
    </nav>
    <div class="content container row fw">
        <img src="{{ asset('img/illustrations/home_illustration.svg') }}" alt="" class="illustration">
        <div class="action container col">
            <h2>
                <strong>
                    “A room without books is like a body without a soul.”
                </strong>
            </h2>
            <a href="{{route('add_new')}}" style="color: var(--color3); text-decoration: none;">
                <button style="margin:auto;">
                I wanna add a book!
                </button>
            </a>
        </div>
    </div>
    <footer class="container row fw">
        <p>
            Sean Christian Lozana & Princess Yvonne Embelino © 2022
        </p>
        <div class="socials_holder container row">
            <a href="https://www.facebook.com/" target="_blank">
                <img src="{{ asset('img/icons/facebook-icon.svg') }}" alt="">
            </a>
            <a href="https://github.com/" target="_blank">
                <img src="{{ asset('img/icons/github-icon.svg') }}" alt="">
            </a>
        </div>
    </footer>
</div>
@endsection
