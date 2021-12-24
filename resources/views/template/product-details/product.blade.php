<div class="product_image_area section-padding40">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-5">
                <div class="product_slider_img">
                    <div id="vertical">
                        <div data-thumb="{{ asset("img/innovaImg/" . $product->images[0]->img) }}">
                            @if (File::exists(public_path('img/productUpload/' . $product->images[0]->img)))
                                <a href="{{ asset("img/productUpload/" . $product->images[0]->img) }}" data-gall="portfolioGallery" class="venobox" title="">
                                    <img src="{{ asset("img/productUpload/" . $product->images[0]->img) }}"  class="w-100">
                                </a>
                            @else
                                <a href="{{ asset("img/innovaImg/" . $product->images[0]->img) }}" data-gall="portfolioGallery" class="venobox" title="">
                                    <img src="{{ asset("img/innovaImg/" . $product->images[0]->img) }}"  class="w-100">
                                </a>
                            @endif
                        </div>

                        @for ($i = 1; $i < count($product->images); $i++)
                            @if (File::exists(public_path('img/productUpload/' . $product->images[$i]->img)))
                                <div data-thumb="{{ asset("img/productUpload/" . $product->images[$i]->img) }}">
                                    <a href="{{ asset("img/productUpload/" . $product->images[$i]->img) }}" data-gall="portfolioGallery" class="venobox" title="">
                                        <img src={{ asset("img/productUpload/" . $product->images[$i]->img) }}  class="w-100">
                                    </a>
                                </div>
                            @else
                                <div data-thumb="{{ asset("img/innovaImg/" . $product->images[$i]->img) }}">
                                    <a href="{{ asset("img/innovaImg/" . $product->images[$i]->img) }}" data-gall="portfolioGallery" class="venobox" title="">
                                        <img src={{ asset("img/innovaImg/" . $product->images[$i]->img) }}  class="w-100">
                                    </a>
                                </div>
                                
                            @endif
                            {{-- @dump("test") --}}
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{ $product->name }}</h3>
                    <h2>{{ $product->price }}€</h2>
                    <ul class="list">
                        <li>
                            <a class="active" href="#">
                                <span>Category</span> :
                                 @foreach ($product->categories as $item)
                                    {{ $item->name }}
                                @endforeach
                            </a>
                        </li>
                        {{-- <li>
                            <a href="#"> <span>Availibility</span> : In Stock</a>
                        </li> --}}
                    </ul>
                    <p>
                        {{-- FAIRE une description coupé  --}}
                        {{$product->description}}
                    </p>
                @auth
                    
                <div class="card_area">
                    <div class="product_count d-inline-block">
                        <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <div class="add_to_cart">
                        <a href="#" class="btn">Click And Collect</a>
                        {{-- <a href="#" class="like_us"> <i class="ti-heart"></i> </a> --}}
                    </div>
                    <div class="social_icon">
                        <a href="https://fr-fr.facebook.com/innovafurnituremerchtem/" class="fb" target="_blank"><i class="ti-facebook"></i></a>
                        <a href="https://www.instagram.com/innovafurnituremerchtem/" class="li" target="_blank"><i class="ti-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/innovafurnituremerchtem/" class="li" target="_blank"><i class="ti-linkedin"></i></a>
                    </div>
                </div>
                @else 
                <div class="card_area">
                    <div class="add_to_cart">
                        <p>Pour ajouter au panier, veuillez vous connectez</p>
                        <a href="{{ route('login') }}" class="btn" >Login</a>                        
                    </div>
                    <div class="social_icon">
                        <a href="https://fr-fr.facebook.com/innovafurnituremerchtem/" class="fb" target="_blank"><i class="ti-facebook"></i></a>
                        <a href="https://www.instagram.com/innovafurnituremerchtem/" class="li" target="_blank"><i class="ti-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/innovafurnituremerchtem/" class="li" target="_blank"><i class="ti-linkedin"></i></a>
                    </div>
                </div>
                @endauth
                        
                </div>
            </div>
        </div>
    </div>
</div>
