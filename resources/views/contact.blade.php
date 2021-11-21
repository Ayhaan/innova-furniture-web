@extends('layouts.index')

@section('content')
    <header>
        @include('template.loader')
        @include('template.header')
    </header>
    <main>
        @include('template.banner')
        <section class="contact-section">
            <div class="container">
                @include('template.contact.maps')
                @include('template.contact.form')

            </div>
        </section>
    </main>
    @include('template.footer')
@endsection
