@extends('layouts.index')

@section('title-page')
    <title>Innova - Product</title>
@endsection


@section('content')
    <header>
        @include('template.loader')
        @include('template.header')
    </header>
    <main>
        @include('template.banner')
        <section class="properties new-arrival fix">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <h2>Product outdoor <br> <br> Coming soon</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('template.footer')
@endsection
