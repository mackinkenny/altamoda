<div class="modal fade" id="kindModal-{{$kind->id}}" tabindex="-1" role="form"
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
                    <form class="text-secondary" action="{{route('kind.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach($kind->parameters as $parameter)
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" role="tab"
                                               href="#{{$parameter->name}}">
                                                <label for="{{$parameter->name}}">{{$parameter->name}}</label>
                                                <input class="form-control" onclick="" type="number" id=""
                                                       onkeydown="limit(this);" onkeyup="limit(this);">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-8 pic">
                                <div class="tab-content col-12" id="myTabContent">
                                    @foreach($kind->parameters as $parameter)
                                        <div class="tab-pane fade" id="{{$parameter->name}}" role="tabpanel" aria-labelledby="">
                                            <img class="w-100" src="{{asset('uploads/'.$parameter->img_path)}}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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
