@extends('layouts.index')

@section('content')
    <header>
        @include('template.loader')
        @include('template.header')
        <main>
            @include('template.banner')
            <section class="properties new-arrival fix">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10">
                            <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".2s">
                                <h2>Product indoor</h2>
                            </div>
                        </div>
                    </div>
                    @include('template.product.indoor')
                </div>
            </section>
        </main>
        @include('template.footer')
    </header>
@endsection
