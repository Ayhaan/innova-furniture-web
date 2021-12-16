

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
            @forelse ($random_product as $item)
                {{-- @if ($item->popular && $loop->iteration <= 4) --}}
                {{-- @dump($loop) --}} 
                
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="popular-img">
                                @foreach ($item->images as $img)
                                    @if ($loop->first)
                                        @if (File::exists(public_path('img/productUpload/' . $img->img)))
                                            <img src="{{ asset('img/productUpload/' . $img->img) }}" alt="">
                                        @else
                                            <img src="{{ asset('img/innovaImg/' . $img->img) }}" alt="">
                                        @endif


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

                {{-- @endif --}}
            @empty
                <h3>Geen producteren
                </h3>
            @endforelse

        </div>
    
    </div>
</div>
