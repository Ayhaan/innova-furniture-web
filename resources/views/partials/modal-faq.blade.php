{{-- ----------------- EDIT ----------------- --}}

<div class="modal fade text-left" id="large-{{ $item->id }}" tabindex="-1" aria-labelledby="myModalLabel17"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">ask nbr {{ $item->id }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            {{-- ACCORDEON 3 LANGUAGES --}}
            <form class="modal-body" action="{{ route('faq.update', $item->id) }}" method="post">
                @csrf
                @method("PUT")

                <div class="accordion" id="accordionExample">

                    <div class="d-flex justify-content center">
                        <button class="btn btn-primary mx-1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Ask NL
                        </button>
                        <button class="btn btn-primary mx-1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Ask FR

                        </button>
                        <button class="btn btn-primary mx-1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Ask EN
                        </button>

                    </div>
                    {{-- NLDS  --}}
                    <div class="accordion-item">
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ask">Ask nl :</label> 
                                            <input type="text" id="ask" name="ask" value="{{ $item->ask }}" required
                                                class="form-control round" placeholder="Ask ?">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group with-title mb-3">
                                            <label>Response</label>
                                            <textarea name="reponse" class="form-control" required id="reponse"
                                                rows="6">{{ $item->reponse }}</textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- FR  --}}
                    <div class="accordion-item">
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ask_fr">Ask fr :</label>
                                            <input type="text" id="ask_fr" name="ask_fr" value="{{ $item->ask_fr }}"
                                                required class="form-control round" placeholder="Ask ?">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group with-title mb-3">
                                            <label>Response</label>
                                            <textarea name="reponse_fr" class="form-control" required id="reponse_fr"
                                                rows="6">{{ $item->reponse_fr }}</textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- EN  --}}
                    <div class="accordion-item">
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ask">Ask en :</label>
                                            <input type="text" id="ask_en" name="ask_en" value="{{ $item->ask_en }}"
                                                required class="form-control round" placeholder="Ask ?">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group with-title mb-3">
                                            <label>Response</label>
                                            <textarea name="reponse_en" class="form-control" required id="reponse_en"
                                                rows="6">{{ $item->reponse_en }}</textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-end my-2">
                    <button class="btn btn-primary ml-1">Validate ?</button>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- ----------------- CREATE ----------------- --}}
<div class="modal fade text-left" id="largeCreate" tabindex="-1" aria-labelledby="myModalLabel17" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17">Create ASK</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            {{-- ACCORDEON 3 LANGUAGES --}}
            <form class="modal-body" action="{{ route('faq.store') }}" method="post">
                @csrf

                <div class="accordion" id="accordionExample2">

                    <div class="d-flex justify-content center">
                        <button class="btn btn-primary mx-1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseQuattre" aria-expanded="true" aria-controls="collapseQuattre">
                            Ask NL
                        </button>
                        <button class="btn btn-primary mx-1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseCinq" aria-expanded="false" aria-controls="collapseCinq">
                            Ask FR

                        </button>
                        <button class="btn btn-primary mx-1" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Ask EN
                        </button>

                    </div>
                    {{-- NLDS  --}}
                    <div class="accordion-item">
                        <div id="collapseQuattre" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ask">Ask nl :</label> 
                                            <input type="text" id="ask" name="ask"  required
                                                class="form-control round" placeholder="Ask ?">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group with-title mb-3">
                                            <label>Response</label>
                                            <textarea name="reponse" class="form-control" required id="reponse"
                                                rows="6"></textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- FR  --}}
                    <div class="accordion-item">
                        <div id="collapseCinq" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ask_fr">Ask fr :</label>
                                            <input type="text" id="ask_fr" name="ask_fr" 
                                                required class="form-control round" placeholder="Ask ?">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group with-title mb-3">
                                            <label>Response</label>
                                            <textarea name="reponse_fr" class="form-control" required id="reponse_fr"
                                                rows="6"></textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- EN  --}}
                    <div class="accordion-item">
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">

                                <div class="row">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ask">Ask en :</label>
                                            <input type="text" id="ask_en" name="ask_en" 
                                                required class="form-control round" placeholder="Ask ?">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group with-title mb-3">
                                            <label>Response</label>
                                            <textarea name="reponse_en" class="form-control" required id="reponse_en"
                                                rows="6"></textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-end my-2">
                    <button class="btn btn-primary ml-1">Create </button>
                </div>
            </form>

        </div>
    </div>
</div>
