
<div id="portfolio" class="portfolio section-bg">
    <div class="container">
        
        <div class="row other-one" data-aos="fade-up">
            <div class="filter-parent col-lg-12 d-flex justify-content-center">
                
              
                <ul id="portfolio-flters">
                    <li class="event-product" data-filter="*" class="filter-active">All</li>
                    @foreach ($cat as $item)
                        @if ($loop->iteration >= 14)
                            <li  data-filter=".filter-{{ $item->name }}" class="event-product">{{ $item->name }}</li>
                            
                        @endif
                    @endforeach
                </ul>
                {{-- <div class="category-listing mb-50 X"> --}}
                {{-- </div> --}}
            </div>
        </div>

        <div style={{ $count_product == 0 ? "" : "height:80px;" }} class="row portfolio-container parent_child" data-aos="fade-up" data-aos-delay="100" >
            @forelse ($products->reverse() as $item)
                @if ($item->type == "outdoor")
         
                <div id="product_child" class="col-lg-3 col-md-6 portfolio-item mt-5 @foreach ($item->categories as $fil) filter-{{ $fil->name }} @endforeach ">
                    <div class="portfolio-wrap img-parent">
                        @if (isset($item->images[0]->img))
                            @if (File::exists(public_path('img/productUpload/' . $item->images[0]->img)))
                                <a href="{{ asset('img/productUpload/' . $item->images[0]->img) }}" data-gall="portfolioGallery" class="venobox" title="{{ $item->name }}">
                                    <img  src="{{ asset('img/productUpload/' . $item->images[0]->img) }}" alt="{{ $item->name }}">
                                </a>
                            @else
                                <a href="{{ asset('img/innovaImg/' . $item->images[0]->img) }}" ata-gall="portfolioGallery" class="venobox" title="{{ $item->name }}">
                                    <img  src="{{ asset('img/innovaImg/' . $item->images[0]->img) }}" alt="{{ $item->name }}">
                                </a>
                            @endif
                            
                        @else
                            <p>photo does not exist</p>
                        @endif

                        <div class="portfolio-links">
                            <a  href="{{ route('product', $item->name) }}" title="More Details"><i
                                class="bx bx-plus"></i></a>
                        </div>
                    </div>
                </div>
                @endif
            @empty
            <div class="col-12 py-5 my-5">
                <h1 class="text-center">is not available</h1>

            </div>
            @endforelse

        </div>


    </div>
</div>
