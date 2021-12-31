

<div class="new-arrival new-arrival2 pb-0">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2>{{ __('messages.popular') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            
            @forelse ($products->shuffle() as $item)
                @if ($loop->iteration <= 4)
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="popular-img">
                                @foreach ($item->images as $img)
                                    @if ($loop->first)
                                        @if (File::exists(public_path('img/productUpload/' . $img->img)))
                                        <a href="{{ asset('img/productUpload/' . $img->img) }}" data-gall="portfolioGallery" class="venobox" title="{{ $item->name }}">
                                            <img src="{{ asset('img/productUpload/' . $img->img) }}" alt="{{ $item->name }}">
                                        </a>
                                        @else
                                        <a href="{{ asset('img/innovaImg/' . $img->img) }}" ata-gall="portfolioGallery" class="venobox" title="{{ $item->name }}">
                                            <img src="{{ asset('img/innovaImg/' . $img->img) }}" alt="{{ $item->name }}">
                                        </a>                                        
                                        @endif


                                    @endif

                                @endforeach
                            </div>
                            <div class="popular-caption">
                                <h3>
                                    <a class="mb-0" href="{{ route('product', $item->name) }}">{{ $item->name }} </a>
                                    <p class="font-italic">
                                        @if (count($item->categories) == 1)
                                            @foreach ($item->categories as $cat)
                                                {{ $cat->name }}
                                                
                                            @endforeach
                                        @else 
                                            @foreach ($item->categories as $cat)
                                                {{ $cat->name }},
                                            
                                            @endforeach
                                        @endif
                                    </p>
                                    <span>{{ $item->price }}€</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <h3 class="text-center my-4 col-12">Geen producteren
                </h3>
            @endforelse

        </div>
    
    </div>
</div>
