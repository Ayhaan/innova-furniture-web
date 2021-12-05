@extends('layouts.back')

@section('title-page')
    <h3>Add furniture</h3>

@endsection

@section('content')

    <section id="multiple-column-form">
        @dump($page)
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if ($page === 'product')
                            <h4 class="card-title">Etapes :
                                <i class="bi bi-file-earmark-check-fill"></i>
                                <i class="bi bi-file-earmark-lock2-fill"></i>
                                <i class="bi bi-file-earmark-lock2-fill"></i>
                                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    Annuler
                                </button>
                            </h4>

                        @elseif($page === "images")
                            <h4 class="card-title">Etapes :
                                <i class="bi bi-file-earmark-check-fill"></i>
                                <i class="bi bi-file-earmark-check-fill"></i>
                                <i class="bi bi-file-earmark-lock2-fill"></i>
                                <a class="btn btn-primary me-1 mb-1" href="{{ route('product.rollback', 'product') }}">Retour</a>
                                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    Annuler
                                </button>

                            </h4>

                        @elseif($page === "speci")
                            <h4 class="card-title">Etapes :
                                <i class="bi bi-file-earmark-check-fill"></i>
                                <i class="bi bi-file-earmark-check-fill"></i>
                                <i class="bi bi-file-earmark-check-fill"></i>
                                <a class="btn btn-primary me-1 mb-1" href="{{ route('product.rollback', 'images') }}">Retour</a>
                                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    Annuler
                                </button>

                            </h4>
                        @else
                            <h4>Error</h4>
                        @endif
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    
                                    <div class="modal-body">
                                        <p>
                                            <a href="{{ route('product.cancel') }}">Definitive</a>
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($page === 'product')
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('product.store') }}" class="form" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Name Furniture</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    placeholder="Furniture" name="name" value="{{ $provisoire ? $provisoire->name : "" }}">
                                                {{-- <input type="text" id="first-name-column" class="form-control"
                                                    placeholder="Furniture" name="name" value=""> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="first-name-column">Type</label>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="basicSelect" name="type">
                                                    <option>indoor</option>
                                                    <option>oudoor</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="city-column">Pric€</label>
                                                <input type="number" id="city-column" class="form-control"
                                                    placeholder="10k ?" name="price">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="first-name-column">Popular</label>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="basicSelect" name="popular">
                                                    <option value="1">true</option>
                                                    <option value="0">false</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlTextarea1"
                                                    class="form-label">Description</label>
                                                <textarea name="description" class="form-control"
                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Suivant</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="page" value="product">
                                </form>
                            </div>
                        </div>
                    @elseif($page === "images")
                        {{-- @dump($product) --}}
                        <h1>images</h1>
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Suivant</button>
                            </div>
                            <input type="hidden" name="page" value="images">

                        </form>
                    @elseif($page === "speci")
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="page" value="speci">
                            <div class="form-group">
                                <label for="">speci</label>
                                <input type="text" name="speci">
                            </div>
                            <div class="form-group">
                                <label for="">reponse</label>
                                <input type="text" name="rep">
                            </div>
                            <div class="form-group">
                                <label for="">speci</label>
                                <input type="text" name="speci2">
                            </div>
                            <div class="form-group">
                                <label for="">reponse</label>
                                <input type="text" name="rep2">
                            </div>
                            <div class="form-group">
                                <label for="">speci</label>
                                <input type="text" name="speci3">
                            </div>
                            <div class="form-group">
                                <label for="">reponse</label>
                                <input type="text" name="rep3">
                            </div>
                            <div class="form-group">
                                <label for="">speci</label>
                                <input type="text" name="speci4">
                            </div>
                            <div class="form-group">
                                <label for="">reponse</label>
                                <input type="text" name="rep4">
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Suivant</button>
                            </div>
                            
                        </form>
                        
                    @else
                        <h1>Erreur</h1>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
