{{-- <section class="properties new-arrival fix">
    <div class="container"> --}}
<!-- Section tittle -->
{{-- <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <h2>Popular products</h2>
                    <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare,
                        eros dolor interdum nulla.</P>
                </div>
            </div> --}}
{{-- </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="properties__button text-center">
                    <!--Nav Button  -->
                    <nav> --}}
{{-- <div class="nav nav-tabs" id="nav-tab" role="tablist"> --}}
{{-- @foreach ($products as $item) --}}
{{-- @dump($item) --}}
{{-- <a class="nav-item nav-link active" id="nav-Sofa-tab" data-toggle="tab"
                                href="#nav-Sofa" role="tab" aria-controls="nav-Sofa"
                                aria-selected="true">Sofa</a> --}}
{{-- @endforeach --}}
{{-- <a class="nav-item nav-link active" id="nav-Sofa-tab" data-toggle="tab" href="#nav-Sofa"
                                role="tab" aria-controls="nav-Sofa" aria-selected="true">Sofa</a>
                            <a class="nav-item nav-link" id="nav-Table-tab" data-toggle="tab" href="#nav-Table"
                                role="tab" aria-controls="nav-Table" aria-selected="false">Table</a> --}}
{{-- <a class="nav-item nav-link" id="nav-Chair-tab" data-toggle="tab" href="#nav-Chair"
                                role="tab" aria-controls="nav-Chair" aria-selected="false">Chair</a> --}}

{{-- <a class="nav-item nav-link" id="nav-Bed-tab" data-toggle="tab" href="#nav-Bed" role="tab"
                                aria-controls="nav-Bed" aria-selected="false">Bed</a> --}}
{{-- <a class="nav-item nav-link" id="nav-Lightning-tab" data-toggle="tab" href="#nav-Lightning"
                                role="tab" aria-controls="nav-Lightning" aria-selected="false">Lightning</a> --}}
{{-- <a class="nav-item nav-link" id="nav-Decore-tab" data-toggle="tab" href="#nav-Decore"
                                role="tab" aria-controls="nav-Decore" aria-selected="false">Decore</a>
                        </div>
                    </nav> --}}
<!--End Nav Button  -->
{{-- </div> --}}
{{-- </div>
        </div>
        <div class="row"> --}}
<!-- Nav Card -->
{{-- <div class="tab-content" id="nav-tabContent"> --}}
<!-- card one -->
{{-- @foreach ($products as $item)
                    @foreach ($item->categories as $catg)
                        @dump($catg->name)

                        <div class="tab-pane fade show active" id="nav-{{ $catg->name }}" role="tabpanel" aria-labelledby="nav-{{ $catg->name }}-tab">
                            <div class="row">
                                       <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-new-arrival mb-50 text-center">
                                            <div class="popular-img">
                                                <img src={{ asset('img/gallery/popular2.png') }} alt="">
                                            </div>
                                            <div class="popular-caption">
                                                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                        Loveseat</a></h3>
                                                <span>$367</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="single-new-arrival mb-50 text-center">
                                            <div class="popular-img">
                                            </div>
                                            <div class="popular-caption">
                                                <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                        Loveseat</a></h3>
                                                <span>$367</span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach



            </div> --}}
{{-- <!-- End Nav Card -->
        </div>
    </div>
</section> --}}


<div class="new-arrival new-arrival2 pb-0">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2>Popular products</h2>
                    <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare,
                        eros dolor interdum nulla.</P>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($products as $item)
                @if ($item->popular)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="popular-img">
                                @foreach ($item->images as $img)
                                    @if ($loop->first)
                                        <img src="{{ asset('img/innovaImg/' . $img->img) }}" alt="">

                                    @endif

                                @endforeach
                            </div>
                            <div class="popular-caption">
                                <h3>
                                    <a href="{{ route('product', $item->id) }}">{{ $item->name }} / {{ $item->categories[0]->name }}</a>
                                </h3>
                                <span>{{ $item->price }}€</span>
                            </div>
                        </div>
                    </div>

                @endif
            @empty
                <h3>Geen producteren
                </h3>
            @endforelse

        </div>
    
    </div>
</div>
