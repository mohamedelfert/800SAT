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

                        {!! Form::open(['route'=>['dashboard.settings.update',setting()->id],'method'=>'patch','files'=>true,'class'=>'form-horizontal']) !!}

                        <div class="form-group row">
                            {!! Form::label('site_name_ar',trans('main.site_name_ar'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('site_name_ar',setting()->site_name_ar,['class'=>'form-control','id'=>'site_name_ar','placeholder'=>@trans('main.site_name_ar'),'required']) !!}
                                @error('site_name_ar')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('site_name_en',trans('main.site_name_en'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('site_name_en',setting()->site_name_en,['class'=>'form-control','id'=>'site_name_en','placeholder'=>@trans('main.site_name_en'),'required']) !!}
                                @error('site_name_en')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email',trans('main.email'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::email('email',setting()->email,['class'=>'form-control','id'=>'email','placeholder'=>@trans('main.email'),'required']) !!}
                                @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('phone',trans('main.phone'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone',setting()->phone,['class'=>'form-control','id'=>'phone','placeholder'=>@trans('main.phone'),'required']) !!}
                                @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('phone2',trans('main.phone2'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('phone2',setting()->phone2,['class'=>'form-control','id'=>'phone2','placeholder'=>@trans('main.phone2')]) !!}
                                @error('phone2')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('whatsapp',trans('main.whatsapp'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('whatsapp',setting()->whatsapp,['class'=>'form-control','id'=>'whatsapp','placeholder'=>@trans('main.whatsapp')]) !!}
                                @error('whatsapp')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('address',trans('main.address'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('address',setting()->address,['class'=>'form-control','id'=>'address','placeholder'=>@trans('main.address')]) !!}
                                @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('logo',trans('main.logo'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('logo',['class'=>'form-control logo']) !!}
                                @error('logo')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            @if(!empty(setting()->logo))
                                <div class="col-sm-6">
                                    <img class="img-fluid mb-3 logo_preview" src="{{ setting()->logo_path }}" alt="{{@trans('main.logo')}}" style="width: 150px;height: 100px;">
                                </div>
                            @endif
                        </div>

                        <div class="form-group row">
                            {!! Form::label('icon',trans('main.icon'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('icon',['class'=>'form-control icon']) !!}
                                @error('icon')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            @if(!empty(setting()->icon))
                                <div class="col-sm-6">
                                    <img class="img-fluid mb-3 icon_preview" src="{{ setting()->icon_path }}" alt="{{@trans('main.icon')}}" style="width: 100px;height: 80px;">
                                </div>
                            @endif
                        </div>

                        <div class="form-group row">
                            {!! Form::label('cover',trans('main.cover'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::file('cover',['class'=>'form-control cover']) !!}
                                @error('cover')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            @if(!empty(setting()->cover))
                                <div class="col-sm-6">
                                    <img class="img-fluid mb-3 cover_preview" src="{{ setting()->cover_path }}" alt="{{@trans('main.icon')}}" style="width: 100px;height: 80px;">
                                </div>
                            @endif
                        </div>

                        <div class="form-group row">
                            {!! Form::label('facebook_link',trans('main.facebook_link'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('facebook_link',setting()->facebook_link,['class'=>'form-control','id'=>'facebook_link','placeholder'=>@trans('main.facebook_link')]) !!}
                                @error('facebook_link')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('twitter_link',trans('main.twitter_link'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('twitter_link',setting()->twitter_link,['class'=>'form-control','id'=>'twitter_link','placeholder'=>@trans('main.twitter_link')]) !!}
                                @error('twitter_link')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('instagram_link',trans('main.instagram_link'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('instagram_link',setting()->instagram_link,['class'=>'form-control','id'=>'instagram_link','placeholder'=>@trans('main.instagram_link')]) !!}
                                @error('instagram_link')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('whatsapp_link',trans('main.whatsapp_link'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('whatsapp_link',setting()->whatsapp_link,['class'=>'form-control','id'=>'whatsapp_link','placeholder'=>@trans('main.whatsapp_link')]) !!}
                                @error('whatsapp_link')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('title',trans('main.title'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('title',setting()->title,['class'=>'form-control','id'=>'title','placeholder'=>@trans('main.title')]) !!}
                                @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('description',trans('main.description'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('description',setting()->description,['class'=>'form-control','rows'=>'5','placeholder'=>@trans('main.description')]) !!}
                                @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('keywords',trans('main.keywords'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('keywords',setting()->keywords,['class'=>'form-control','rows'=>'5','placeholder'=>@trans('main.keywords')]) !!}
                                @error('keywords')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('main_lang',trans('main.main_lang'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('main_lang',['arabic' => trans('main.arabic'), 'english' => trans('main.english')],
                                setting()->main_lang,['class'=>'custom-select rounded-0','placeholder'=>@trans('main.choose_lang'),'required']) !!}
                                @error('main_lang')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('status',trans('main.status'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::select('status',['open' => trans('main.open'), 'close' => trans('main.close')],
                                setting()->status,['class'=>'custom-select rounded-0','placeholder'=>@trans('main.choose_status'),'required']) !!}
                                @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('message_maintenance',trans('main.message_maintenance'),['class'=>'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::textarea('message_maintenance',setting()->message_maintenance,['class'=>'form-control','rows'=>'5','placeholder'=>@trans('main.message_maintenance')]) !!}
                                @error('message_maintenance')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="mb-3" style="margin-top: 5px">
                            @if(auth()->user()->hasPermissionTo('setting-edit'))
                                {!! Form::submit(trans('main.update'),['class'=>'btn btn-block btn-warning fa fa-edit','id'=>'update']) !!}
                            @else
                                <a href="#" class="btn btn-block btn-warning disabled" title="{{@trans('main.update')}}">
                                    <i class="fa fa-edit"></i></a>
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
        $('.logo').change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.logo_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        $('.icon').change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.icon_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });

        $('.cover').change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.cover_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
@endpush
