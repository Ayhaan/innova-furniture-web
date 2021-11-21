@extends('layouts.index')

@section('content')
    <header>
        @include('template.loader')
        @include('template.header')
    </header>
    <main>
        @include('template.banner')
        <div id="portfolio" class="portfolio section-bg">
            <div class="container">
                <div class="col-xl-12 col-lg-12 col-md-12 mt-5">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <h2>{{ count($products) }} Product(s) found for : "{{ $value }}"</h2>
                        <p></p>
                    </div>

                </div>

                <div class="row portfolio-container mb-5" data-aos="fade-up" data-aos-delay="100">

                    @forelse ($products as $item)

                        <div class="col-lg-3 col-md-6 portfolio-item filter-{{ $item->categories[0]->name }}">
                            <div class="portfolio-wrap img-parent">
                                @foreach ($item->images as $img)
                                    @if ($loop->first)
                                        {{-- @dump($img->img) --}}
                                        <img src="{{ asset('img/innovaImg/' . $img->img) }}" class="img-fluid" alt="">
                                        {{-- <img src="{{ asset("img/gallery/about1.png" ) }}" class="img-fluid" alt=""> --}}

                                    @endif

                                @endforeach
                                {{-- @dump($item->images[0]->img) --}}
                                <div class="portfolio-links">
                                    <a href="{{ asset('img/innovaImg/' . $item->images[0]->img) }}"
                                        data-gall="portfolioGallery" class="venobox" title="{{ $item->name }}"><i
                                            class="bx bx-plus"></i></a>
                                    <a  href="{{ route('product', $item->id) }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <h3>
                                    <a class="text-dark" href="{{ route('product', $item->id) }}">{{ $item->name }} /
                                        {{ $item->categories[0]->name }}</a>
                                </h3>
                                <span>{{ $item->price }}€</span>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <h2 class="text-center "> Product not found </h2>

                        </div>

                    @endforelse

                </div>


            </div>
        </div>

    </main>
    @include('template.footer')

@endsection
