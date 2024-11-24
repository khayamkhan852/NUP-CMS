@extends('layouts.app')
@section('title', 'Disciplines')

@section('styles')
    <style>
        .detail-table thead tr th{
            background-color: #293846 !important;
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Disciplines</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('settings.disciplines.index') }}">Settings</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Disciplines</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2 mt-5">
            @can('disciplines.create')
                <a href="{{ route('settings.disciplines.create') }}" style="text-decoration: none;" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Add New Discipline
                </a>
            @endcan
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Disciplines</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover detail-table dataTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    @canany(['disciplines.update'])
                                        <th class="text-center">Action</th>
                                    @endcanany
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($disciplines as $discipline)
                                        <tr>
                                            <td>{{ $discipline->name }}</td>
                                            <td>{{ $discipline->code }}</td>
                                            @canany(['disciplines.update'])
                                                <td class="text-center">
                                                    @can('disciplines.update')
                                                        <a href="{{ route('settings.disciplines.edit', $discipline->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit" style="font-size: 12px;"></i> Edit</a>
                                                    @endcan
                                                </td>
                                            @endcanany
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script>

        // Upgrade button class name
        $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-white btn-sm';

        $(document).ready(function() {
            $('.dataTable').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');
                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]
            });
        });
    </script>
@endsection
