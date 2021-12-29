{{-- -------------- EDIT INFO --}}
<div class="modal fade text-left" id="informations" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Edit information</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('product.update', $product->id) }}" class="form" method="POST">
                    @csrf
                    <input type="text" name="info" value="info" readonly style="display: none">
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="first-name-column">Name Furniture</label>
                                <input type="text" id="first-name-column" class="form-control"
                                    placeholder="Furniture" name="name"
                                    value="{{ $product->name }}">

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="first-name-column">Type</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="type">
                                    <option value="indoor" {{ $product->type == 'indoor' ? "selected" : "" }}>
                                        indoor</option>
                                    <option  value="outdoor" {{ $product->type == 'outdoor' ? "selected" : "" }}>
                                        outdoor</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Pric€</label>
                                <input type="number" id="city-column" class="form-control"
                                    placeholder="10k ?" name="price"
                                    value="{{ $product->price }}">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="first-name-column">Popular</label>
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="popular">
                                    <option {{ $product->popular == true ? "selected" : "" }}
                                        
                                        value="1">true</option>
                                    <option {{ $product->popular == false ? "selected" : "" }}
                                        
                                        value="0">false</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <select class="form-select" multiple aria-label="multiple select example" name="cat[]" required>
                                @foreach ($cat as $item)
                                    <option {{ $product->categories[0]->name == $item->name ? "selected" : "" }} value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label for="arearoduct"
                                    class="form-label">Description</label>
                                <textarea name="description" class="form-control"
                                    id="arearoduct"
                                    rows="3">{{$product->description }}</textarea>
                            </div>
                        </div>
              
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary ml-1">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>

{{-- -------------- EDIT IMAGE --}}
<div class="modal fade text-left" id="image" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Edit image</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                I love tart cookie cupcake. I love chupa chups biscuit. I
                love
                marshmallow apple pie wafer
                liquorice. Marshmallow cotton candy chocolate. Apple pie
                muffin tart.
                Marshmallow halvah pie
                marzipan lemon drops jujubes. Macaroon sugar plum cake icing
                toffee.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>
{{-- -------------- EDIT SPECI --}}
<div class="modal fade text-left" id="speci" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-start ">
                <h4 class="modal-title" id="myModalLabel17">Edit specification</h4>
                <button class="btn add-speci mx-1  "><i style="font-size: 25px" class="bi bi-plus-circle-fill"></i></button>

               
            </div>
            <div class="modal-body">
                <form class="row p-2 form-speci" action="{{ route('product.update', $product->specification->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="specifi" value="specifi">
                    @foreach (json_decode($product->specification->data) as $key => $value)

                        <div class="group-speci">
                                <div class="from-group">
                                    <label for="">Détails</label>
                                    <input  placeholder="Color ?" value="{{ $key }}" class="form-control" type="text" name="speci{{ $loop->iteration }}">
                                </div>
                                <div class="from-group">
                                    <label for="">Reponse</label>
                                    <input  placeholder="red, blue, orange, ..." value="{{ $value }}" class="form-control" type="text" name="rep{{ $loop->iteration }}">
                                </div>
                        </div>
                            <hr class="hr-speci">


                    @endforeach
                    {{-- <div class="group-speci">
                            <div class="from-group">
                                <label for="">Détails</label>
                                <input required class="form-control" type="text" name="speci2">
                            </div>
                            <div class="from-group">
                                <label for="">Reponse</label>
                                <input required class="form-control" type="text" name="rep2">
                            </div>
                            <i class="bi bi-dash-circle-fill minus-speci"></i>
                    </div> --}}
                    <div class="col-12 d-flex justify-content-end my-4" id="action-speci">
                        <button type="submit" class="btn btn-primary ml-1">
                            Update
                        </button>
                    </div>

                </form>
            </div>
            
        </div>
    </div>
</div>
{{-- -------------- EDIT COMMENT NO VALIDE --}}
<div class="modal fade text-left" id="commentnocheck" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17"> comments not yet validated</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
              @forelse ($product->comments->reverse()  as $item)
                    @if ($item->validate == 0)
                        <div class="row">
                            <div class="col-1">{{ $loop->iteration }}. </div>
                            <div class="col">
                                <p class="m-0">{{ $item->user }} - {{ $item->email }}</p>
                                <p class="m-0">MSG : {{ $item->commentaire }}</p>

                            </div>
                            <div class="col">
                                <p class="m-0">Number : {{ $item->number }}</p>
                                <p class="m-0">Date : {{ $item->created_at->format("d M Y") }}</p>
                            </div>
                            <div class="col-2 d-flex">
                                <form action="{{ route('product.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method("PUT")
                                    <input type="text" name="delnocheck" value="delnocheck" style="display: none"> 
                                    <button class="btn btn-danger mx-1">X</button>
                                </form>
                                <form action="{{ route('product.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method("PUT")
                                    <input type="text" name="validate" value="validate" style="display: none"> 
                                    <button class="btn btn-success">V</button>
                                </form>
                            </div>
                        </div>

                        <hr>
                    @endif
                @empty
                    <p>no comments</p>
              @endforelse

            </div>
        
        </div>
    </div>
</div>
{{-- -------------- EDIT COMMENT ALL --}}
<div class="modal fade text-left" id="commentall" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">comment validate</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
          

                @forelse ($product->comments->reverse()  as $item)
                    @if ($item->validate == 1)
                        <div class="row">
                            <div class="col-1">{{ $loop->iteration }}. </div>
                            <div class="col">
                                <p class="m-0">{{ $item->user }} - {{ $item->email }}</p>
                                <p class="m-0">MSG : {{ $item->commentaire }}</p>

                            </div>
                            <div class="col">
                                <p class="m-0">Number : {{ $item->number }}</p>
                                <p class="m-0">Date : {{ $item->created_at->format("d M Y") }}</p>
                            </div>
                            <div class="col-2 d-flex">
                            <form action="{{ route('product.update', $item->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <input type="text" name="delnocheck" value="delnocheck" style="display: none"> 
                                <button class="btn btn-danger mx-1">X</button>
                            </form>
                            </div>
                        </div>

                        <hr>
                    @endif
                @empty
                    <p>no comments</p>
                @endforelse
              </div>
        </div>
    </div>
</div>

{{-- -------------- DELETE THIS PRODUCT --}}
<div class="modal fade text-left" id="small" tabindex="-1" aria-labelledby="myModalLabel19" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body d-flex justify-content-center">
                <a class="btn btn-outline-danger" href="">Definitive</a>

            </div>
      
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
        countGroup = document.querySelectorAll('.group-speci').length + 1
        // console.log(countGroup);
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
            i % 2 == 1 ? one_input.setAttribute('name', `speci${countGroup}`) : one_input.setAttribute('name', `rep${countGroup}`) ;
            

            one_div_form.append(one_label, one_input)
            divGroup.append(one_div_form)
            
        }
        divGroup.append(minus)
        form.insertBefore(divGroup,action )
        form.insertBefore(hr,divGroup )
        // console.log(form, action);
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