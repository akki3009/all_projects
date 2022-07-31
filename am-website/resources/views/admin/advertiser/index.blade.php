@extends('admin.layouts.app')
@section('title', $title)
@section('content')
    <div class="row">
        {{-- @include('admin.includes.crud-search', [
        'searches' => [
        ['name' => 'srch_parent_category'],
        ['name' => 'srch_status'],
        ['name' => 'srch_general'],
        ]
        ]) --}}
        <div class="col-lg-12 col-12">
            <div class="{{ cardClasses() }}">
                <div class="card-header">
                    <h3 class="card-title">List of Records</h3>
                    <div class="card-tools">
                        {{-- {!! dtblMultiOrderUpdate($urlUpdateOrder) !!}
                        {!! dtblMultiActive($urlStatusChange) !!}
                        {!! dtblMultiInactive($urlStatusChange) !!}
                        {!! dtblMultiDelete($urlDelete) !!} --}}

                        {!! dtblMultiDelete($urlDelete) !!}

                        {!! dtblAdd($urlAdd) !!}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="crud-table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>{!! dtblMultiCheck() !!}</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ adminAssets('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ adminAssets('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
@push('js')
    <!-- DataTables -->
    <script src="{{ adminAssets('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ adminAssets('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ adminAssets('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ adminAssets('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
@endpush
@push('jsfun')
    <script type="text/javascript">
        var crudTable = null;

        function renderDtTable() {
            crudTable = jQuery('#crud-table').DataTable({
                responsive: true,
                autoWidth: false,
                processing: true,
                serverSide: true,
                lengthChange: true,
                searching: false,
                ajax: {
                    type: 'POST',
                    url: '{{ $urlListData }}',
                    data: function(d) {
                        return mergeCrudSearch(d);
                    }
                },
                columns: [{
                        data: 'id',
                        orderable: false,
                        className: 'text-center'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'number'
                    },
                    {
                        data: 'actions',
                        orderable: false
                    },
                ],
                order: [
                    [2, 'asc']
                ]
            });
        }
        jQuery(document).ready(function(e) {
            renderDtTable();
        });

    </script>
@endpush
