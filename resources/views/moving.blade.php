@extends('layouts.index')

@section('content')
    <header>
        @include('template.loader')
        @include('template.header')
    </header>
    <main>
        @include('template.moving.banner')
        @include('template.moving.content')

    </main>
    @include('template.footer')
@endsection
