@extends('admin.admin')

@section('admin_content')
    <form action="{{ route('showroom.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name_of_showroom">Название товара</label>
            <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name_of_showroom" placeholder="" value="{{ old('name') }}" required>
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="description">Описание товара</label>
            <textarea name="description" id="description" class="form-control" style="width: 100%;" >{{ isset($model) && $model ? $model->description : '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="type">Выберите категорию товара</label>
            {{--<select name="type" id="type">--}}
            {{--<option value="{{null}}">Выберите...</option>--}}
            {{--<option value="Лето">Лето</option>--}}
            {{--<option value="Весна">Весна</option>--}}
            {{--<option value="Зима">Зима</option>--}}
            {{--<option value="Осень">Осень</option>--}}

            {{--</select>--}}
            <select name="category_id" id="category_id" class="form-control">
                <option value="{{ null }}">Выберите тип...</option>
                @foreach($categoryes as $category)
                    <option value="{{ $category->id }}" {{ isset($cloth) && $cloth->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="image">Выберите изображение</label>
            <input type="file" name="img_path" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>

@endsection
@push('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <style>
        .select2-container {
            width: 100%!important;
        }
    </style>
    @push('scripts')
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({selector:'#description'});</script>
    @endpush
@endpush