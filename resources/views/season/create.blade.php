@extends('admin.admin')

@section('admin_content')
    <form action="{{ route('season.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name_of_season"></label>
        <input name="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name_of_season" placeholder="" value="{{ old('name') }}">
        @if($errors->has('name'))
            <span class="invalid-feedback" role="alert">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
        @endif
    </div>

    <div class="form-group">
        <label for="image">Выберите изображение</label>
        <input type="file" name="img_path" accept="image/*" >
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
@endpush