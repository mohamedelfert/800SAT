@extends('dashboard.layouts.app')
@section('title')
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

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>@lang('main.error')</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="col-lg-12 margin-tb">
                            <div class="pull-right">
                                <a class="btn btn-primary btn-sm" title="@lang('main.back')" href="{{ route('dashboard.roles.index') }}">
                                    <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <hr>
                        <br>
                        {!! Form::open(array('route' => 'dashboard.roles.store','method'=>'POST')) !!}
                        <div class="card-body">
                            <div class="row row-sm mg-b-20">
                                <div class="col-lg-6">
                                    <p> {{ trans('main.role_name') }} </p>
                                    {!! Form::text('name', old('name'), array('class' => 'form-control','required'=> 'required')) !!}
                                </div>
                                <div class="col-lg-6">
                                    <p> {{ trans('main.role_display_name') }} </p>
                                    {!! Form::text('display_name', old('display_name'), array('class' => 'form-control','required'=> 'required')) !!}
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                                <ul id="treeview1">
                                    <li><a class="text-primary"> {{ trans('main.roles_list') }} </a>
                                        <ul>
                                            <li>
                                                @foreach($permissions as $permission)
                                                    <label style="font-size: 16px;">
                                                        {{ Form::checkbox('permissions[]', $permission->id, false, ['class' => 'name']) }}
                                                        {{ $permission->name }}
                                                    </label>
                                                @endforeach
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-main-primary btn-block">{{trans('main.confirm')}}</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="{{ asset('dashboard/assets/extra-libs/treeview/dist/bootstrap-treeview-init.js') }}"></script>
@endpush
