{{-- <div class="row">
    <div class="col-xl-12">
        <div class="properties__button text-center"> 
             <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-Sofa-tab" data-toggle="tab" href="#nav-Sofa" role="tab" 
                         aria-controls="nav-Sofa" aria-selected="false">Sofa</a>
                    <a class="nav-item nav-link" id="nav-Table-tab" data-toggle="tab" href="#nav-Table" role="tab"
                        aria-controls="nav-Table" aria-selected="false">Table</a> 
                     <a class="nav-item nav-link" id="nav-Chair-tab" data-toggle="tab" href="#nav-Chair" role="tab"
                        aria-controls="nav-Chair" aria-selected="false">Chair</a> 

                     <a class="nav-item nav-link" id="nav-Bed-tab" data-toggle="tab" href="#nav-Bed" role="tab"
                        aria-controls="nav-Bed" aria-selected="false">Bed</a> 
                     <a class="nav-item nav-link" id="nav-Lightning-tab" data-toggle="tab" href="#nav-Lightning"
                        role="tab" aria-controls="nav-Lightning" aria-selected="false">Lightning</a> 
                      <a class="nav-item nav-link" id="nav-Decore-tab" data-toggle="tab" href="#nav-Decore" role="tab"
                        aria-controls="nav-Decore" aria-selected="false">Decore</a>
                </div>
            </nav> 
        </div>
    </div>
</div> --}}
{{-- <div class="row"> --}}
    <!-- Nav Card -->
    {{-- <div class="tab-content" id="nav-tabContent"> --}}
        {{-- <!-- card one --> --}}
        {{-- @foreach ($products as $item)
            @dump($item->categories[0]->name)
            <div class="tab-pane fade show active" id="nav-{{ $item->categories[0]->name }}" role="tabpanel" aria-labelledby="nav-{{ $item->categories[0]->name }}-tab"> --}}
            {{-- <div class="tab-pane fade show active" > --}}
                {{-- <div class="row"> --}}
                    {{-- @dump($item->images) --}}

                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-new-arrival mb-50 text-center">
                            <div class="popular-img">
                                @foreach ($item->images as $img)
                                    @if ($loop->first) --}}
                                        {{-- @dump($img->img) --}}
                                        {{-- <img src="{{ asset('img/innovaImg/' . $img->img) }}" alt="">

                                    @endif

                                @endforeach --}}
                                {{-- @dump($item->images[0]) --}}
                            {{-- </div>
                            <div class="popular-caption"> --}}
                                {{-- @dd($item->id) --}}
                                {{-- <h3><a href="{{ route('product', $item->id) }}">{{$item->name}}</a></h3>
                                <span>{{ $item->price }}€</span>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular2.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular3.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular4.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular5.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular6.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular7.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular8.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular9.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div> --}}
                {{-- </div>
            </div>
        @endforeach --}}

        <!-- Card two -->
        {{-- <div class="tab-pane fade" id="nav-Table" role="tabpanel" aria-labelledby="nav-Table-tab">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular1.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular2.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular3.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular4.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular5.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular6.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular7.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular8.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular9.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Card three -->
        {{-- <div class="tab-pane fade" id="nav-Chair" role="tabpanel" aria-labelledby="nav-Chair-tab">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular1.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular2.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular3.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular4.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular5.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular6.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular7.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular8.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular9.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Card FOUR -->
        {{-- <div class="tab-pane fade" id="nav-Bed" role="tabpanel" aria-labelledby="nav-Bed-tab">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular1.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular2.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular3.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular4.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular5.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular6.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular7.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular8.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular9.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Card FIVE -->
        {{-- <div class="tab-pane fade" id="nav-Lightning" role="tabpanel" aria-labelledby="nav-Lightning-tab">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular1.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular2.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular3.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular4.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular5.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular6.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular7.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular8.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular9.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Card SIX -->
        {{-- <div class="tab-pane fade" id="nav-Decore" role="tabpanel" aria-labelledby="nav-Decore-tab">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular1.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular2.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular3.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular4.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular5.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular6.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular7.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular8.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center">
                        <div class="popular-img">
                            <img src="assets/img/gallery/popular9.png" alt="">
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless Loveseat</a></h3>
                            <span>$367</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </div> --}}
    <!-- End Nav Card -->
{{-- </div> --}}


<section id="portfolio" class="portfolio section-bg">
    <div class="container">



        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach ($cat as $item)
                        <li data-filter=".filter-{{ $item->name }}">{{ $item->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            @foreach ($products as $item)
            {{-- @dump($item->categories[0]) --}}
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->categories[0]->name }}">
                    <div class="portfolio-wrap img-parent">
                        @foreach ($item->images as $img)
                        @if ($loop->first) 
                            {{-- @dump($img->img)  --}}
                            <img src="{{ asset('img/innovaImg/' . $img->img) }}" class="img-fluid" alt="">
                            {{-- <img src="{{ asset("img/gallery/about1.png" ) }}" class="img-fluid" alt=""> --}}

                        @endif

                    @endforeach 
                    {{-- @dump($item->images[0]->img) --}}
                        <div class="portfolio-links">
                            <a href="{{ asset('img/innovaImg/' . $item->images[0]->img) }}" data-gall="portfolioGallery" class="venobox"
                                title="{{ $item->name }}"><i class="bx bx-plus"></i></a>
                            <a href="{{ route('product', $item->id) }}" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
                
            @endforeach
{{-- 
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ asset("img/blog/author.png" ) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/blog/author.png" ) }}data-gall="portfolioGallery" class="venobox"
                        title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ asset("img/blog/author.png" ) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/blog/author.png" ) }}data-gall="portfolioGallery" class="venobox"
                        title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ asset("img/blog/author.png" ) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/blog/author.png" ) }}data-gall="portfolioGallery" class="venobox"
                        title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ asset("img/blog/author.png" ) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/blog/author.png" ) }}data-gall="portfolioGallery" class="venobox"
                        title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ asset("img/blog/author.png" ) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/blog/author.png" ) }}data-gall="portfolioGallery" class="venobox"
                        title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ asset("img/blog/author.png" ) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/blog/author.png" ) }}data-gall="portfolioGallery" class="venobox"
                        title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{ asset("img/blog/author.png" ) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/blog/author.png" ) }}data-gall="portfolioGallery" class="venobox"
                        title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{ asset("img/blog/author.png" ) }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href={{ asset("img/blog/author.png" ) }}data-gall="portfolioGallery" class="venobox"
                        title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
</section>