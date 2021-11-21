@extends('layouts.index')

@section('content')
    <header>
        @include('template.loader')
        @include('template.header')
    </header>
    <main>
        @include('template.banner')
        <section class="properties new-arrival fix">

            <div class="container">
                <div class="row justify-content-center position-relative">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <h2>Product indoor</h2>
                            <p>{{ count($products) }} product found</p>
                        </div>

                    </div>

                    {{-- BARRE de recherche --}}
                    {{-- <div class="header-right1 d-flex align-items-center position-absolute">
                            <div class="search">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <form action="#" class="form-box f-right ">
                                        <input type="text" name="Search" placeholder="Search products">
                                        <div class="search-icon">
                                            <i class="ti-search"></i>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            </div>
                        </div> --}}
                </div>
                @include('template.product.indoor')
            </div>
        </section>
    </main>
    @include('template.footer')
@endsection
