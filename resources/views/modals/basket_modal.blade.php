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
                            <div class="row p-4" style="border-bottom:1px #cecccc solid;">
                            <div class="col-3">
                                <span class="text-secondary h4 Montserrat">{{\App\Kind::find($basket->kind_id)->name}}</span>
                                <img class="w-100 mt-3" src="{{asset('uploads/'.\App\Kind::find($basket->kind_id)->img_path)}}" alt="">
                            </div>
                            {{--<div class="col-3">--}}
                                {{--<span class="text-secondary h5 Montserrat">{{\App\Cloth::find($basket->cloth_id)->name}}</span>--}}
                                {{--<img class="w-100" src="{{asset('uploads/'.\App\Cloth::find($basket->cloth_id)->img_path)}}" alt="">--}}
                            {{--</div>--}}
                            <div class="col-6">
                                <?php
                                    $params = \App\Kind::find($basket->kind_id)->parameters;
                                ?>
                                <div class="pt-5">
                                <p class="h5 text-secondary Montserrat">Ткань : {{\App\Cloth::find($basket->cloth_id)->name}}</p>
                                @foreach($basket->parameters as $parameter)
                                    <p class="h5 text-secondary Montserrat">{{$params[$loop->index]->name}} : {{$parameter}}</p>
                                @endforeach
                                </div>
                            </div>
                                <div class="col-3 pt-5">
                                    <a href="" class="btn btn-sm btn-danger ml-auto p-1"><i class="far fa-trash-alt"></i> Удалить</a>
                                </div>
                            </div>
                        @endforeach
                        @else
                            <div class="row p-2">
                                <span class="h4 Montserrat">Корзина пуста</span>
                            </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>

