@extends('admin.admin')

@section('admin_content')

    <form action="{{ route('cloth.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name_of_spec">Название ткани</label>
            <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name_of_spec" placeholder="Название ткани" value="{{ old('name') }}">
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
            @endif
        </div>

        <div class="form-group">
            <label for="type">Выберите тип сезона</label>
            {{--<select name="type" id="type">--}}
                {{--<option value="{{null}}">Выберите...</option>--}}
                    {{--<option value="Лето">Лето</option>--}}
                    {{--<option value="Весна">Весна</option>--}}
                    {{--<option value="Зима">Зима</option>--}}
                    {{--<option value="Осень">Осень</option>--}}

            {{--</select>--}}
                <select name="type" id="type" class="form-control">
                    <option value="{{ null }}">Выберите тип...</option>
                    @foreach($seasons as $season)
                        <option value="{{ $season->id }}" {{ isset($cloth) && $cloth->season_id == $season->id ? 'selected' : '' }}>{{ $season->name }}</option>
                    @endforeach
                </select>
        </div>

        <div class="form-group">
            <label for="name_of_spec">Цена</label>
            <input name="price" type="number" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" id="name_of_spec" placeholder="Цена" value="{{ old('price') }}">
            @if($errors->has('price'))
                <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('price') }}</strong>
				</span>
            @endif
        </div>

        <div class="form-group">
            <label for="description">Описание ткани</label>
            <textarea name="description" id="description" class="form-control" style="width: 100%;">{{ isset($model) && $model ? $model->description : '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Выберите изображение</label>
            <input type="file" name="img_path" accept="image/*" >
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection


@push('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({selector:'#description'});</script>
@endpush
