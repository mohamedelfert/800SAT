@extends('dashboard.layouts.app')
@section('title')
    {{ $title }}
@stop
@push('css')
    <!--Internal  treeview -->
    <link href="{{ asset('dashboard/assets/extra-libs/treeview/dist/bootstrap-treeview.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush
@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{ $title }}</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard.index') }}">@lang('main.dashboard')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-content-label mg-b-5">
                            <div class="pull-right">
                                <a class="btn btn-primary btn-sm" title="@lang('main.back')" href="{{ route('dashboard.roles.index') }}">
                                    <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <hr>
                        <div class="col-lg-4">
                            <ul id="treeview1">
                                <li><a class="text-primary"> {{ ucfirst($role->name) }} - {{ ucfirst($role->display_name) }}</a>
                                    <ul>
                                        @if(!empty($rolePermissions))
                                            @foreach($rolePermissions as $permission)
                                                <li>{{ $permission->name }} - {{ $permission->display_name }}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="{{ asset('dashboard/assets/extra-libs/treeview/dist/bootstrap-treeview-init.js') }}"></script>
@endpush
