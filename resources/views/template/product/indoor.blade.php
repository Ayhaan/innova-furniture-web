@php
            $price = ["50-100", "100-250", "250-500", "1000-2000", "2000-5000"];

@endphp
<div id="portfolio" class="portfolio section-bg">
    <div class="container">
        
        <div class="row" data-aos="fade-up">
            <div class="filter-parent col-lg-12 d-flex justify-content-center">
                
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($cat as $item)
                        <li data-filter=".filter-{{ $item->name }}">{{ $item->name }}</li>
                    @endforeach
                </ul>
                {{-- <div class="category-listing mb-50 X"> --}}
                <div class="categories-wrapper top-50 end-0 translate-middle-y position-absolute">
                    <div class="row">
                        <div class="col-12">
                            <!-- Select km items start -->
                            <div class="select-categories">
                                <form class="range-form" action="{{ route('ayhan') }}" method="post">
                                    @csrf
                                    <select name="select">
                                        <option  value="">Price range </option>
                                        @foreach ($price as $item)
                                            <option {{ $data == $item ? "selected" : "" }} value="{{ $item }}">
                                                {{ $item}} €
                                            </option>
                                        @endforeach
                                        {{-- <option {{ $data = "50-100" ? "selected" : "" }} value="50-100">50€ to 100€</option>
                                        <option value="250-500">250€ to 500€</option>
                                        <option value="1000-2000">1000€ to 2000€</option>
                                        <option value="2000-5000">2000€ to 5000€</option> --}}
                                    </select>
                                    <button class="btn-range"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--  Select km items End-->
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>

        <div style={{ count($products) == 0 ? "" : "height:80px;" }} class="row portfolio-container" data-aos="fade-up" data-aos-delay="100" >
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
                        <a href="{{ route('product', $item->id) }}" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 py-5 my-5">
                <h1 class="text-center">is not available</h1>

            </div>
            @endforelse

        </div>


    </div>
</div>
