@extends('dashboard.layouts.app')
@section('title')
@endsection
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
                                <a class="btn btn-primary btn-sm" title="@lang('main.back')" href="{{ route('dashboard.faqs.index') }}">
                                    <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <hr style="margin:30px 30px">

                        <form class="parsley-style-1" action="{{ route('dashboard.faqs.store') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="row mg-b-20">
                                <div class="col">
                                    <label for="question">@lang('main.question')<span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20"
                                           data-parsley-class-handler="#lnWrapper" id="question"
                                           name="question" value="{{old('question')}}" type="text" required>
                                </div>
                            </div>

                            <div class="row row-sm mg-b-20">
                                <div class="col">
                                    <label for="answer">{{ trans('main.answer') }}</label>
                                    <textarea class="form-control" id="answer" name="answer"
                                              rows="3" placeholder="Content">{{ old('answer') }}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                                <button class="btn btn-main-primary btn-block pd-x-20" type="submit">@lang('main.confirm')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
@endpush
