@extends('layout.master')

@section('title', 'FAQ - Hair Forever')

@section('content')
    @include('components.navbar')
    <header>
        <div class="header-card">
            <h1>Before - After</h1>
        </div>
    </header>
    @include('components.before-after-images')
    @include('components.footer')
@endsection
