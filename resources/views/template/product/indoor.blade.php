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
                                <select name="select4">
                                    <option value="">Price range</option>
                                    <option value="">$10 to $20</option>
                                    <option value="">$20 to $30</option>
                                    <option value="">$50 to $80</option>
                                    <option value="">$100 to $120</option>
                                    <option value="">$200 to $300</option>
                                    <option value="">$500 to $600</option>
                                </select>
                            </div>
                            <!--  Select km items End-->
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            @foreach ($products as $item)
                {{-- @dump($item->categories[0]) --}}
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

            @endforeach

        </div>


    </div>
</div>
