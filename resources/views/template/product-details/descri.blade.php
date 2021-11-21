<section class="product_description_area" id="test">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Specification</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Comments</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab"
                    aria-controls="review" aria-selected="false">Reviews</a>
            </li> --}}
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                    {{ $product->description }}
                </p>
            </div>
            <div class="tab-pane fade  " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            {{-- @foreach ($spec as $item)
                            @foreach (json_decode($item->data) as $key => $value)
                                <p>{{ $key }} : {{ $value }}</p>
                            @endforeach
                            {{ $item->product }}
                        @endforeach --}}
                            @foreach (json_decode($product->specification->data) as $key => $value)
                                <tr>
                                    <td>
                                        <h5>{{ $key }}</h5>
                                    </td>
                                    <td>
                                        <h5>{{ $value }}</h5>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="comment_list">
                            @foreach ($product->comments as $item)
                                @if ($item->validate)
                                    <div class="review_item">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="assets/img/gallery/review-1.png" alt="" />
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $item->user }}</h4>
                                                <h5>{{ $item->date }}</h5>
                                                {{-- <a class="reply_btn" href="#">Reply</a> --}}
                                            </div>
                                        </div>
                                        <p>
                                            {{ $item->commentaire }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6" >
                        <div class="review_box" >
                            <h4>Post a comment</h4>
                            <form class="row contact_form" action="{{ route('comment.store') }}" method="post"
                                id="contactForm" novalidate="novalidate">
                                @csrf
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name"
                                            placeholder=" {{ Auth::check() ? Auth::user()->name . ' ' . Auth::user()->firstname : 'Your Full name' }}"
                                            {{ Auth::check() ? 'readonly' : '' }} value="{{ old('name') }}" />
                                        @error('name')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email"
                                            placeholder=" {{ Auth::check() ? Auth::user()->email : 'Email Address' }}"
                                            {{ Auth::check() ? 'readonly' : '' }} value="{{ old('email') }}" />
                                        @error('email')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('number') is-invalid @enderror"
                                            id="number" name="number" placeholder="Phone Number (optionnel)"
                                            value="{{ old('number') }}" />
                                        @error('number')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control @error('message') is-invalid @enderror"
                                            name="message" id="message" rows="4"
                                            placeholder="Message">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                </div>
                                <input type="text" value="{{ $product->id }}" readonly class="d-none"
                                name="product_id" />
                                <div class="col-12">
                                    @include('layouts.flash')
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" value="submit" class="btn">
                                        Submit Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
