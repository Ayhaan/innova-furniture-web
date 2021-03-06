

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
            @php
                $count = 0;
            @endphp
            @forelse ($products->shuffle() as $item)
                @php
                    if ($item->popular == 1) {
                        $count = $count +1 ;
                    }
                
                @endphp
                @if ($count <= 4)
                    @if ($item->popular == 1)
                        
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
                                        <a class="mb-0 blue-central" href="{{ route('product', $item->name) }}">{{ $item->name }} </a>
                                        <p class="font-italic">
                                            {{-- @if (count($item->categories) == 1)
                                                @foreach ($item->categories as $cat)
                                                    {{ $cat->name }}
                                                    
                                                @endforeach
                                            @else 
                                                @foreach ($item->categories as $cat)
                                                    {{ $cat->name }},
                                                
                                                @endforeach
                                            @endif --}}
                                            @php
                                                //LOGIQUE pour r??cuperer les cat selectionn?? dans un tab
                                                $selected = [];
                                                foreach ($item->categories as $prod) {
                                                    foreach ($cat as $value) {
                                                        if ($prod->name == $value->name) {
                                                            array_push($selected, $prod->id);
                                                        }
                                                    }
                                                }
                                                //LOGIQUE pour analyser et chooper les cat qui sont ?? la meme plce via l'id et le push. Pour mettre les cat en bonne langue 
                                                $cat_lang = [];
                                                if (App::getLocale() === "fr") {
                                                    foreach ($cat_fr as $key => $value) {
                                                        foreach ($selected as $key => $sel) {
                                                            if ($sel == $value->id) {
                                                                array_push($cat_lang, $value->name);
                                                            }
                                                            
                                                        }
                                                    }
                                                } else if (App::getLocale() === "en") {
                                                    foreach ($cat_en as $key => $value) {
                                                        foreach ($selected as $key => $sel) {
                                                            if ($sel == $value->id) {
                                                                array_push($cat_lang, $value->name);
                                                            }
                                                            
                                                        }
                                                    }
                                                }
                                                
                                            @endphp
                                            @if (App::getLocale() === "nl")
                                                @foreach ($item->categories as $ndl)
                                                    {{ $ndl->name }},&nbsp;
                                                @endforeach
                                                
                                            @else
                                                @foreach ($cat_lang as $lg)
                                                    {{ $lg }},&nbsp;
                                                @endforeach
                                            @endif
                                        </p>
                                        @if ($item->price_reduce == null)
                                        <span>{{ $item->price }}???</span>
                                    
                                        @else
                                        <div class="d-flex justify-content-center">
                                            <span class="price-previous">{{ $item->price }}??? </span>
                                            
                                            <span class="new-price">{{ $item->price_reduce }}???</span>
                                        </div>
        
                                        @endif
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                @endif
                    
            @empty
                <h3 class="text-center my-4 col-12">Geen producteren
                </h3>
            @endforelse

        </div>
    
    </div>
</div>
