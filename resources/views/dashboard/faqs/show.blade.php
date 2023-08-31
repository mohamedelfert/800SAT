@extends('dashboard.layouts.app')
@section('title')
@stop
@push('css')
@endpush
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger mt-5">
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
                        <div class="text-wrap">
                            <div class="example">
                                <div class="panel panel-primary tabs-style-2">
                                    <div class="modal-body">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="name">{{ trans('main.name') }}</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                       value="{{ $faq->user->first_name . ' ' . $faq->user->last_name }}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="question">{{ trans('main.question') }}</label>
                                                <input type="text" class="form-control" id="question" name="question"
                                                       value="{{ $faq->question }}" disabled>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="answer">{{ trans('main.answer') }}</label>
                                                <textarea class="form-control" id="answer" name="answer"
                                                          rows="3" disabled>{{ $faq->answer }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-primary btn-block" href="{{ route('dashboard.faqs.index') }}">
                                            @lang('main.back')
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
@endpush
