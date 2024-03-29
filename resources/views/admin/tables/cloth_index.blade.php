@extends('admin.admin')

@section('admin_content')

    <div class="row mb-3 justify-content-end">
        <div class="col-auto">
            <a href="{{ route('cloth.create') }}" class="btn btn-danger">Новый</a>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <table class="table table-bordered" id="cloth-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Название</th>
                    <th>Тип</th>
                    <th>Описание</th>
                    <th>Действия</th>
                </tr>
                </thead>
            </table>
        </div>

        <div class="col-4 border-left bg-white">

        </div>
    </div>


@endsection

@push('stylesheets')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

@endpush

@push('scripts')
    <script>
        $(function() {
            $('#cloth-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatable.getclothes') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'type', name: 'type' },
                    { data: 'description', name: 'description' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ]
            });
        });
    </script>

@endpush