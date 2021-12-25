{{-- ----------------- edit ----------------- --}}

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
            <form class="modal-body" action="{{ route('faq.update', $item->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="ask">Ask :</label>
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
                <h4 class="modal-title" id="myModalLabel17">Testimonial nbr {{ $item->id }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form class="modal-body" action="{{ route('faq.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="ask">Ask :</label>
                            <input type="text" id="ask" name="ask"  required
                                class="form-control round" placeholder="Ask ?">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group with-title mb-3">
                            <label>Response</label>
                            <textarea name="reponse" class="form-control" placeholder="response ?" required id="reponse"
                                rows="6"></textarea>
                        </div>
                    </div>


                </div>
                <hr>
                <div class="d-flex justify-content-end my-2">
                    <button class="btn btn-primary ml-1">Create</button>
                </div>

            </form>
        </div>
    </div>
</div>
