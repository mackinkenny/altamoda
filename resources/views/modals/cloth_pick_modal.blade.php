<div class="modal fade backdrop-off" id="cloth_pick-{{$kind->id}}" tabindex="-1" role="form"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-secondary" id="exampleModalLabel">Рекомендуемые ткани </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div>
                <div class="modal-body">
                    <div class="row">
                        @foreach($kind->clothes as $cloth)
                        <div class="col-6 text-center">
                            <a class="param" data-dismiss="modal" aria-label="Close"data-toggle="modal" data-target="#parameter_pick-{{$cloth->id}}{{ $kind->id }}" href="">
                            <img class="w-100" style="border-radius:20px;" src="{{asset('uploads/'.$cloth->img_path)}}" alt="">
                            <span class="py-4 text-secondary font-weight-bold Montserrat" style="font-size:20px;">{{$cloth->name}}</span>
                            </a>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($kind->clothes as $cloth)
    @include('modals.parameter_pick_modal')
@endforeach
<script>
    function limit(element)
    {
        var max_chars = 3;

        if(element.value.length > max_chars) {
            element.value = element.value.substr(0, max_chars);
        }
    }
</script>



