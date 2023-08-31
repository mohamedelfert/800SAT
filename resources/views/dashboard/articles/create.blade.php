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
                                <a class="btn btn-primary btn-sm" title="@lang('main.back')" href="{{ route('dashboard.articles.index') }}">
                                    <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <hr style="margin:30px 30px">

                        <form class="parsley-style-1" action="{{route('dashboard.articles.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="row mg-b-20">
                                <div class="parsley-input col-md-4" id="fnWrapper">
                                    <label for="title">@lang('main.title')<span class="tx-danger">*</span></label>
                                    <input class="form-control form-control-sm mg-b-20"
                                           data-parsley-class-handler="#lnWrapper" id="title"
                                           name="title" value="{{old('title')}}" type="text" required>
                                </div>

                                <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                                    <label for="image">@lang('main.image')</label>
                                    <input class="form-control article_image" data-parsley-class-handler="#lnWrapper"
                                           name="image" id="image" type="file">
                                </div>

                                <div class="form-group">
                                    <img class="img-responsive image_preview" style="width:100px" alt="@lang('main.image')"
                                         src="{{ asset('uploads/articles/default.png') }}">
                                </div>
                            </div>

                            <div class="row row-sm mg-b-20">
                                <div class="col">
                                    <label for="content">{{ trans('main.content') }}</label>
                                    <textarea class="form-control" id="content" name="content"
                                              rows="3" placeholder="Content"></textarea>
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
    <script type="text/javascript">
        $('.article_image').change(function() {
            if(this.files && this.files[0]){
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.image_preview').attr('src',e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });
    </script>
@endpush
