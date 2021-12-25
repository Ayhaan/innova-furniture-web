@extends('layouts.back')

@section('title-page')
    <h3>Add furniture</h3>

@endsection

@section('content')

    <div class="card">
        <div class="card-header d-flex align-items-center" id="etape-product">
            @if ($page === 'product')
                <h4 class="card-title m-0">Etapes :
                </h4>
                <i class="bi bi-file-earmark-check-fill"></i>
                <i class="bi bi-file-earmark-lock2-fill"></i>
                <i class="bi bi-file-earmark-lock2-fill"></i>
                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">
                    Annuler
                </button>

            @elseif($page === "images")
                <h4 class="card-title m-0">Etapes : </h4>
                <i class="bi bi-file-earmark-check-fill"></i>
                <i class="bi bi-file-earmark-check-fill"></i>
                <i class="bi bi-file-earmark-lock2-fill"></i>
                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">
                    Annuler
                </button>


            @elseif($page === "speci")
                <h4 class="card-title m-0">Etapes : </h4>
                <i class="bi bi-file-earmark-check-fill"></i>
                <i class="bi bi-file-earmark-check-fill"></i>
                <i class="bi bi-file-earmark-check-fill"></i>
                <button type="button" class="btn btn-outline-danger block" data-bs-toggle="modal"
                    data-bs-target="#exampleModalCenter">
                    Annuler
                </button>

            @else
                <h4>Error</h4>
            @endif
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                    role="document">
                    <div class="modal-content">

                        <div class="modal-body d-flex justify-content-center py-4">
                                <a class="btn btn-outline-danger" href="{{ route('product.cancel') }}">Definitive</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="card-body">
                @if ($page === 'product')
                    <h2 class="text-center mb-4">Information product</h2>
                    <form action="{{ route('product.store') }}" class="form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Name Furniture</label>
                                    <input type="text" id="first-name-column" class="form-control"
                                        placeholder="Furniture" name="name"
                                        value="{{ $provisoire ? $provisoire->name : '' }}">

                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="first-name-column">Type</label>
                                <fieldset class="form-group">
                                    <select class="form-select" id="basicSelect" name="type">
                                        <option
                                            {{ $provisoire ? ($provisoire->type == 'indoor' ? 'selected' : '') : '' }}>
                                            indoor</option>
                                        <option
                                            {{ $provisoire ? ($provisoire->type == 'outdoor' ? 'selected' : '') : '' }}>
                                            outdoor</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Pric€</label>
                                    <input type="number" id="city-column" class="form-control"
                                        placeholder="10k ?" name="price"
                                        value="{{ $provisoire ? $provisoire->price : '' }}">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <label for="first-name-column">Popular</label>
                                <fieldset class="form-group">
                                    <select class="form-select" id="basicSelect" name="popular">
                                        <option
                                            {{ $provisoire ? ($provisoire->popular == 1 ? 'selected' : '') : '' }}
                                            value="1">true</option>
                                        <option
                                            {{ $provisoire ? ($provisoire->popular == 0 ? 'selected' : '') : '' }}
                                            value="0">false</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlTextarea1"
                                        class="form-label">Description</label>
                                    <textarea name="description" class="form-control"
                                        id="exampleFormControlTextarea1"
                                        rows="3">{{ $provisoire ? $provisoire->description : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Suivant</button>
                            </div>
                        </div>
                        <input type="hidden" name="page" value="product">
                    </form>

                @elseif($page === "images")
                    <h2 class="text-center mb-0">Images product</h2>

                    {{-- <h3>images products</h3> --}}
                    <p class="form-label text-center my-2 img-count" >0 / 5 images</p>
                    <div class="center mb-4">
                        <input type="checkbox" id="cbx" style="display:none"/>
                        <label for="cbx" class="toggle"><span></span></label> 
                        <span>crop ?</span>   
                        </div>
                    <div class="input-croper">
                            {{-- <select class="form-select w-25 mx-auto"  id="ratio-cropper">
                            <option value="1">1</option>
                            <option value="0/5">0:5</option>
                            <option value="8">8</option>
                            <option value="4/3">4:3</option>
                            <option value="78">7:8</option>
                            <option value="16/9">16:9</option>
                        </select> --}}
                        <form class="d-flex align-items-center justify-content-center cbx-ciblig" action="{{ route('crop.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control w-50 mx-4 my-3 image-add-store " type="file" name="image">
                            <input class="d-none" type="text" name="notcrop" value="true" readonly >
                            <button class="btn btn-primary">Add</button>
                        </form>
                        <input class="form-control w-50 m-auto my-3 image-add-store cbx-ciblig d-none" type="file" name="image" id="image-crop">
                    </div>

                    {{-- Zone où les images se raj avec jquery --}}
                    {{-- <div>
                    </div> --}}
                    <div class="row my-5" id="div-all-img">
                        {{-- <div class="col-4">
                            <div class="block-image">
                                <div class="block-img" >

                                    <img  src="{{  asset('img/productUpload/UIMG2021121361b75f28aca96.jpg') }}" alt="IMG-PRODUCT">

                                    <div class="block-overlay ">
                                    
                                        <div class="block-btn-addcart ">
                                            <!-- Button -->
                                                <a href="./home-02.html">   
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                        </div>
                                    </div>

                                </div>                                   
                            </div>
                        </div> --}}
                    </div>

                    <div class="card-footer  d-flex justify-content-end">
                        <a class="btn btn-primary me-1"
                            href="{{ route('product.rollback', 'product') }}">Retour</a>
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Suivant</button>
                            </div>
                            <input type="hidden" name="page" value="images">
                            
                        </form>
                    </div>
                @elseif($page === "speci")
                    <h2 class="text-center mb-0">Détails product</h2>
                    <button class="btn add-speci "><i class="bi bi-plus-circle-fill"></i></button>

                    <form class="row p-2 form-speci" action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="page" value="speci">

                        <div class="group-speci">
                                <div class="from-group">
                                    <label for="">Détails</label>
                                    <input placeholder="Color ?" class="form-control" type="text" name="speci">
                                </div>
                                <div class="from-group">
                                    <label for="">Reponse</label>
                                    <input placeholder="red, blue, orange, ..." class="form-control" type="text" name="rep">
                                </div>
                        </div>
                            <hr class="hr-speci">
                        <div class="group-speci">
                                <div class="from-group">
                                    <label for="">Détails</label>
                                    <input class="form-control" type="text" name="speci2">
                                </div>
                                <div class="from-group">
                                    <label for="">Reponse</label>
                                    <input class="form-control" type="text" name="rep2">
                                </div>
                                {{-- <i class="bi bi-dash-circle-fill minus-speci"></i> --}}
                        </div>
                        <div class="col-12 d-flex justify-content-end card-footer mt-5" id="action-speci">
                            <a class="btn btn-primary me-1 mb-1"
                                href="{{ route('product.rollback', 'images') }}">Retour</a>
                            <button type="submit" class="btn btn-primary me-1 mb-1">Finaliser</button>
                        </div>

                    </form>


                @else
                    <h1>Erreur</h1>
                @endif
            </div>
        </div>

    </div>


    {{-- Script details  --}}
    <script>
        // let nbr = document.querySelectorAll('.group-speci')
        let btn_add_speci = document.querySelector('.add-speci');
        let form = document.querySelector('.form-speci')
        let action = document.querySelector('#action-speci')
        // console.log(btn_add_speci);

        //Count qui va counter le nbr de input créer et mettre a jour le name de chaque input
        let count = 3
        btn_add_speci.addEventListener('click', () => {
            //création minus
            let minus = document.createElement('i')
            minus.className = 'bi bi-dash-circle-fill minus-speci'
            let hr = document.createElement('hr');
            hr.classList.add('hr-speci')

            let divGroup = document.createElement('div')

            //Boucle pour les labets + input en auto
            divGroup.classList.add('group-speci');
            for (let i = 3; i < 5; i++) {
                let one_div_form = document.createElement('div');
                one_div_form.classList.add('from-group')
                let one_label = document.createElement('label')
                //condition pour innerText inpur
                i % 2 == 1 ? one_label.innerText = "Détails" : one_label.innerText = "Reponse" ;

                let one_input = document.createElement('input')
                one_input.classList.add('form-control')
                one_input.setAttribute('type', "text")
                //condition pour fournir le name
                i % 2 == 1 ? one_input.setAttribute('name', `speci${count}`) : one_input.setAttribute('name', `rep${count}`) ;
                
    
                one_div_form.append(one_label, one_input)
                divGroup.append(one_div_form)
                
            }
            divGroup.append(minus)
            form.insertBefore(divGroup,action )
            form.insertBefore(hr,divGroup )
            // select all minus + fonctionnalité remove
            let minusAll = document.querySelectorAll('.minus-speci')
            minusAll.forEach(el => {
                el.addEventListener('click', (e) => {
                    e.target.parentNode.previousElementSibling.remove();
                    e.target.parentNode.remove();
                })    
            });
            // console.log(minusAll);
            count++
        })

    </script>
@endsection

