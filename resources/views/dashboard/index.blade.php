@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="ibox ">
                    <div class="ibox-title">
                        <span class="label label-success float-right">All</span>
                        <h5>Employees</h5>
                    </div>

                    <div class="ibox-content">
                        <h1 class="no-margins">10</h1>
                        <div class="stat-percent font-bold text-success"> <i class="fa fa-bolt"></i></div>
                        <small>Total Employees</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascript')
    <script>
        $(document).ready(function() {
        });
    </script>
@endsection
