@extends('layouts.back')

@section('title-page')
    <h3 class="d-flex justify-content-between flex-wrap">
        Product : {{ $product->name }}
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#small">
            Delete this product
        </button>
    
    </h3>

@endsection
@section('content')
    <div class="row ">
        @include('layouts.flash')
        <div class="col-lg-5 col-md-6 col-sm-12 design-detail d-flex align-items-center">
            <div id="carouselShowProduct" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($product->images as $item)
                        @if (File::exists(public_path('img/productUpload/' .$item->img )))
                            @if ($loop->first)
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/productUpload/' .$item->img) }}" class="d-block w-100" alt="{{ $loop->index }}">
                                </div>
                                
                            @else
                                <div class="carousel-item ">
                                    <img src="{{ asset('img/productUpload/' .$item->img) }}" class="d-block w-100" alt="{{ $loop->index }}">
                                </div>
                            @endif
                        
                        @else 
                            @if ($loop->first)
                                <div class="carousel-item active">
                                    <img src="{{ asset("img/innovaImg/" . $item->img) }}" class="d-block w-100" alt="{{ $loop->index }}">
                                </div>
                                
                            @else
                                <div class="carousel-item ">
                                    <img src="{{ asset("img/innovaImg/" . $item->img) }}" class="d-block w-100" alt="{{ $loop->index }}">
                                </div>
                            @endif

                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12 design-detail">
            <div class="w-75 mx-auto">
                <p><b>Name</b> : {{ $product->name }}</p>
                <p><b>Price</b> : {{ $product->price }} €</p>
                <p><b>Type</b> : {{ $product->type }}</p>
                <p><b>Popular</b> : {{ $product->popular == 0 ? "False" : "True" }}</p>
                <p><b>Description</b> : {{ $product->description }}</p>
                <p><b>Catégories</b> : 
                    @foreach ($product->categories as $item)
                    <span>{{ $item->name }}, </span>
                    @endforeach
                </p>
                <p><b>Date add</b> : {{ $product->created_at->format("d M Y") }}</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#image">
                    Edit image
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#informations">
                    Edit informations
                </button>
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-sm-12 design-detail">
            <h5 class="text-center">Spécifications product</h5>
            <div class="d-flex justify-content-center mb-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#speci">
                    Edit specification
                </button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        @foreach (json_decode($product->specification->data) as $key => $value)
                            <tr>
                                <td>
                                    <p>{{ $key }} !!</p>
                                </td>
                                <td>
                                    <p>{{ $value }}</p>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 comment-party design-detail">
            <h5 class="text-center">Nbr comments: {{ count($product->comments) }}</h5>
            <div class="d-flex  justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#commentnocheck">
                    Comment no check (nbr)
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#commentall">
                    All comment
                </button>
            </div>
        </div>
    </div>
    @include('partials.modal-product-edit')
@endsection
