@extends('layout.master')

@section('title', 'FAQ - Hair Forever')

@section('content')
    @include('components.navbar')
    <header>
        <div class="header-card">
            <h1>FAQ - Hair Forever</h1>
        </div>
    </header>
    @include('components.faq')
    @include('components.footer')
@endsection
