<div class="modal fade" id="basketModal" tabindex="15" role="form"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header  bg-dark">
                <h5 class="modal-title text-light Montserrat" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div>
                <div class="modal-body">
                    <?php
                    $baskets = \App\Basket::where('user_tok',request()->session()->token())->get();
                    ?>
                    @if(count($baskets))
                        @foreach($baskets as $basket)
                        @if($basket->kind_id)
                        <div class="col-12 pt-3">
                        <span class="h3 Montserrat font-weight-bold">Ателье</span>
                        </div>
                        @break
                        @endif
                        @endforeach
                        @foreach($baskets as $basket)
                            @if($basket->kind_id)
                                <div class="row p-4" style="border-bottom:1px #cecccc solid;" id="{{$basket->id}}">
                                    <div class="col-md-3 col-12" style="height:150px; background-image: url('{{asset('uploads/'.\App\Kind::find($basket->kind_id)->img_path)}}'); background-position: center; background-size: cover;">
                                    </div>
                                    <div class="col-md-6 col-8">
                                        <?php
                                        $params = \App\Kind::find($basket->kind_id)->parameters;
                                        ?>
                                        <div class="pt-2">
                                            <p class="h5 text-secondary Montserrat">Ткань : {{\App\Cloth::find($basket->cloth_id)->name}}</p>
                                            @foreach($basket->parameters as $parameter)
                                                <p class="h5 text-secondary Montserrat">{{$params[$loop->index]->name}} : {{$parameter}}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-3 pt-5">
                                        <a class="btn btn-sm btn-danger ml-auto p-1 text-white" onclick="f({{$basket->id}})"><i class="far fa-trash-alt text-white"></i> Удалить</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                            @foreach($baskets as $basket)
                                @if(!$basket->cloth_tip)
                                    <div class="col-12 pt-3">
                                        <span class="h3 Montserrat font-weight-bold">Ткани</span>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                        @foreach($baskets as $basket)
                            @if($basket->cloth_tip)
                                <div class="row p-4" style="border-bottom:1px #cecccc solid;" id="{{$basket->id}}">
                                    <div class="col-md-3 col-12" style="height:150px; background-image: url('{{asset('uploads/'.\App\Cloth::find($basket->cloth_tip)->img_path)}}');  background-size: cover; background-position: center;">
                                    </div>
                                    <div class="col-md-6 col-8">
                                        <div class="pt-2">
                                            <p class="h5 text-secondary Montserrat">{{\App\Cloth::find($basket->cloth_tip)->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-3 pt-5">
                                        <a class="btn btn-sm btn-danger ml-auto p-1 text-white" onclick="f({{$basket->id}})"><i class="far fa-trash-alt text-white"></i> Удалить</a>
                                    </div>
                                </div>

                            @endif
                        @endforeach
                            @foreach($baskets as $basket)
                                @if(!$basket->showroom_id)
                                    <div class="col-12 pt-3">
                                        <span class="h3 Montserrat font-weight-bold">Шоурум</span>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                            @foreach($baskets as $basket)
                                @if($basket->showroom_id)
                                    <div class="row p-4" style="border-bottom:1px #cecccc solid;" id="{{$basket->id}}">
                                        <div class="col-md-3 col-12" style="height:150px; background-image: url('{{asset('uploads/'.\App\Showroom::find($basket->showroom_id)->img_path)}}');  background-size: cover; background-position: center;">
                                        </div>
                                        <div class="col-md-6 col-8">
                                            <div class="pt-2">
                                                <p class="h5 text-secondary Montserrat">{{\App\Showroom::find($basket->showroom_id)->name}}</p>
                                            </div>
                                        </div>
                                        <div class="col-3 pt-5">
                                            <a class="btn btn-sm btn-danger ml-auto p-1 text-white" onclick="f({{$basket->id}})"><i class="far fa-trash-alt text-white"></i> Удалить</a>
                                        </div>
                                    </div>

                                @endif
                            @endforeach
                    @else
                        <div class="row p-2">
                            <span class="h4 Montserrat">Корзина пуста</span>
                        </div>
                    @endif

                </div>
            </div>
            <div class="modal-footer">
                @if (count($baskets))
                    <a class="btn btn-primary text-white" href="{{ route('order.index') }}">Оформить</a>
                @else

                @endif
            </div>
        </div>
    </div>
</div>

