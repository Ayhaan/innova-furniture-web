@extends('layouts.index')

@section('content')

<header>
    @include('template.loader')
    @include('template.header')
    <main>
        @include('template.banner')
        @include('template.about.mission')
    </main>
    @include('template.footer')
</header>
@endsection