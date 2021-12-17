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
                <form action="" class="form" method="POST">
                    @csrf
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
                                    <option  value="outdoor" $product->type == 'outdoor' ? "selected" : "" }}>
                                        outdoor</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column">Pric€</label>
                                <input type="number" id="city-column" class="form-control"
                                    placeholder="10k ?" name="price"
                                    value="{{ $product->price }} €">
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
                            <div class="form-group mb-3">
                                <label for="arearoduct"
                                    class="form-label">Description</label>
                                <textarea name="description" class="form-control"
                                    id="arearoduct"
                                    rows="3">{{$product->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Update</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>

{{-- -------------- EDIT I%AGE --}}
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
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Edit specification</h4>
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
{{-- -------------- EDIT COMMENT NO VALIDE --}}
<div class="modal fade text-left" id="commentnocheck" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Comment no valide</h4>
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
{{-- -------------- EDIT COMMENT ALL --}}
<div class="modal fade text-left" id="commentall" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">All comment</h4>
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