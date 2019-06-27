<div class="modal fade" id="parameter_pick-{{$cloth->id}}{{ $kind->id }}" tabindex="15" role="form"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-secondary" id="exampleModalLabel">{{$kind->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div>
                <div class="modal-body">
                    <form class="text-secondary" action="{{route('basket.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <input type="hidden" value="{{$kind->id}}" name="kind_id">
                                    <input type="hidden" value="{{count($kind->parameters)}}" name="count">
                                    <input type="hidden" value="{{$cloth->id}}" name="cloth_id">
                                    @foreach($kind->parameters as $parameter)
                                        <li class="nav-item border-right">
                                            <a class="nav-link" data-toggle="tab" role="tab"
                                               href="#{{$parameter->name}}{{$cloth->name}}{{$kind->name}}">
                                                <label for="{{$parameter->name}}">{{$parameter->name}}</label>
                                                <input name="parameters[{{ $loop->index }}]" class="form-control" onclick="" type="number" id="{{$parameter->name}}"
                                                       onkeydown="limit(this);" onkeyup="limit(this);" required>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-8 col-6 pic">
                                <div class="tab-content col-12" id="myTabContent">
                                    @foreach($kind->parameters as $parameter)
                                        <div class="tab-pane fade" id="{{$parameter->name}}{{$cloth->name}}{{$kind->name}}" role="tabpanel" aria-labelledby="">
                                            <img class="w-100" src="{{asset('uploads/'.$parameter->img_path)}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <button class="success" type="submit">В корзину</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function limit(element)
    {
        var max_chars = 3;

        if(element.value.length > max_chars) {
            element.value = element.value.substr(0, max_chars);
        }
    }
</script>
