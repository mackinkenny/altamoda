@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row" style="min-height: 100vh;">

            <div class="col-2 px-0 shadow-sm">
                @include('_partials.admin._admin_sidebar')
            </div>

            <div class="col-10 py-3">
                @yield('admin_content')
            </div>

        </div>
    </div>

    {{--@include('_partials._delete_modal')--}}

@endsection

@push('scripts')
    <script>
        $(function () {
            $('#delete-confirmation').on('show.bs.modal', function (e) {
                let id = $(e.relatedTarget).attr('data-id');
                let model = $(e.relatedTarget).attr('data-model');
                $(this).find('form#delete-form').attr('action', '/' + model + '/' + id);
            })
        });
    </script>
@endpush