@extends('dashboard.layouts.app')
@section('title')
@stop
@push('css')
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
                                <a class="btn btn-primary btn-sm" title="@lang('main.back')"
                                   href="{{ route('dashboard.users.index') }}">
                                    <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <hr style="margin:30px 30px">

                        {!! Form::model($user,['route' => ['dashboard.users.profile',$user->id],'method' => 'patch','files'=>true,'class'=>'form-horizontal']) !!}

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>@lang('main.first_name')<span class="tx-danger">*</span></label>
                                {!! Form::text('first_name', old('first_name'), array('class' => 'form-control','required')) !!}
                            </div>

                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>@lang('main.last_name')<span class="tx-danger">*</span></label>
                                {!! Form::text('last_name', old('last_name'), array('class' => 'form-control','required')) !!}
                            </div>
                        </div>

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label>@lang('main.email')<span class="tx-danger">*</span></label>
                                {!! Form::text('email', old('email'), array('class' => 'form-control','required')) !!}
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label>@lang('main.image')</label>
                                {!! Form::file('image', array('class' => 'form-control user_image')) !!}

                                <div class="form-group">
                                    <img class="img-responsive image_preview" style="width:100px" alt="@lang('main.image')"
                                         src="{{ $user->image_path }}">
                                </div>
                            </div>
                        </div>

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label>@lang('main.password')</label>
                                {!! Form::password('password', array('class' => 'form-control')) !!}
                            </div>

                            <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                <label>@lang('main.password_confirmation')</label>
                                {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                            @if($user->id === auth()->user()->id)
                                <button class="btn btn-main-primary btn-block pd-x-20"
                                        type="submit">@lang('main.update')</button>
                            @else
                                <a class="btn btn-main-primary btn-block pd-x-20 disabled">@lang('main.update')</a>
                            @endif
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@push('js')
    <script type="text/javascript">
        $('.user_image').change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
@endpush
