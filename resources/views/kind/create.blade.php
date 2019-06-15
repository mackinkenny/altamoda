@extends('admin.admin')

@section('admin_content')

    <form action="{{ route('kind.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-4">
            <label for="name_of_kind"></label>
            <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name_of_kind" placeholder="" value="{{ old('name') }}">
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
            @endif
        </div>

        <div class="form-group col-4">
            <label for="image">Выберите изображение</label>
            <input type="file" name="img_path" accept="image/*" >
        </div>

        <div class="form-group col-4">
            <label for="parameters">Выберите параметры</label>
            <select class="form-control m-0 w-100" name="parameters[]" id="parameters" multiple="">
                @foreach($parameters as $parameter)
                    <option value="{{ $parameter->id }}" {{ isset($kind) ? $kind->parameters->where('id', $kind->id)->isNotEmpty() ? 'selected' : '' : ''}}>{{ $parameter->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-4">
            <label for="clothes">Выберите подходящие ткани</label>
            <select class="form-control m-0 w-100" name="clothes[]" id="clothes" multiple="">
                @foreach($clothes as $cloth)
                    <option value="{{ $cloth->id }}" {{ isset($kind) ? $kind->clothes->where('id', $kind->id)->isNotEmpty() ? 'selected' : '' : ''}}>
                        {{ $cloth->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
@push('scripts')
    <script src="{{ asset('js/select2.js') }}"></script>
    <script>
        $('#parameters').select2({
            width: 'resolve'
        });

        $('#clothes').select2({
            width: 'resolve'
        });
    </script>
@endpush

@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <style>
        .select2-container {
            width: 100%!important;
        }
    </style>
@endpush