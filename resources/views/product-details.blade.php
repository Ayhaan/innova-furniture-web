@extends('layouts.index')

@section('content')
    <header>
        {{-- @include('template.loader') --}}
        @include('template.header')
    </header>
    <main>
        @include('template.banner')
        @include('template.product-details.product')
        @include('template.product-details.descri')
    </main>
    @include('template.footer')
@endsection
