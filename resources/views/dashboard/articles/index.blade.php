@extends('dashboard.layouts.app')
@section('title')
@stop
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
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
                        <div class="card-header pb-0">
                            <div class="box-header with-border">
                                <span style="display: block;margin-bottom:10px">@lang('main.articles') : <small>( {{ $articles->total() }} )</small></span>
                                <form action="{{ route('dashboard.articles.index') }}" method="get">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                                   placeholder="@lang('main.search')">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-sm" title="@lang('main.search')">
                                                <i class="fa fa-search"></i></button>
                                            <a class="btn btn-danger btn-sm" href="{{ route('dashboard.articles.index') }}"
                                               title="@lang('main.clear')">
                                                <i class="fa fa-eraser"></i></a>
                                            @if(auth()->user()->hasPermissionTo('article-create'))
                                                <a class="btn btn-primary btn-sm" href="{{ route('dashboard.articles.create') }}"
                                                   title="@lang('main.create')"><i class="fa fa-plus"></i></a>
                                            @else
                                                <a class="btn btn-primary btn-sm disabled" title="@lang('main.create')"><i class="fa fa-plus"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <hr style="margin:10px 30px">

                        <div class="card-body">
                            <div class="table-responsive">
                                @if($articles->count() > 0)
                                    <table class="table mg-b-0 text-md-nowrap table-hover ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> {{ trans('main.title') }} </th>
                                                <th> {{ trans('main.name') }} </th>
                                                <th> {{ trans('main.image') }} </th>
                                                <th> {{ trans('main.control') }} </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($articles as $index => $article)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $article->title }}</td>
                                                <td>{{ $article->user->first_name . ' ' . $article->user->last_name }}</td>
                                                <td>
                                                    <img src="{{ $article->image_path }}" class="img-thumbnail"
                                                           alt="@lang('main.image')" style="width:70px;">
                                                </td>
                                                <td>
                                                    @if(auth()->user()->hasPermissionTo('article-show'))
                                                        <a class="btn btn-success btn-sm"
                                                           href="{{ route('dashboard.articles.show', $article->id) }}" title="@lang('main.show')">
                                                            <i class="fa fa-eye"></i></a>
                                                    @else
                                                        <a href="#" class="btn btn-primary btn-sm disabled" title="@lang('main.show')">
                                                            <i class="fa fa-eye"></i></a>
                                                    @endcan

                                                    @if(auth()->user()->hasPermissionTo('article-edit'))
                                                        <a class="btn btn-primary btn-sm"
                                                           href="{{ route('dashboard.articles.edit', $article->id) }}" title="@lang('main.edit')"><i
                                                                class="fa fa-edit"></i></a>
                                                    @else
                                                        <a href="#" class="btn btn-primary btn-sm disabled" title="@lang('main.edit')">
                                                            <i class="fa fa-edit"></i></a>
                                                    @endif

                                                    @if(auth()->user()->hasPermissionTo('article-delete'))
                                                        <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                           data-toggle="modal" href="#delete{{ $article->id }}" title="@lang('main.delete')">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>

                                            <!-- Delete -->
                                            <div class="modal fade" id="delete{{ $article->id }}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content modal-content-demo">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title">{{trans('main.delete')}}</h6>
                                                            <button aria-label="Close" class="close" data-dismiss="modal"
                                                                    type="button"><span aria-hidden="true">&times;</span></button>
                                                        </div>
                                                        <form action="{{ route('dashboard.articles.destroy','test') }}" method="post">
                                                            {{ method_field('delete') }}
                                                            {{ csrf_field() }}
                                                            <div class="modal-body">
                                                                <p>{{trans('main.delete_msg')}}</p><br>
                                                                <input type="hidden" name="id" id="id" value="{{ $article->id }}">
                                                                <input class="form-control" name="title" id="title" type="text"
                                                                       value="{{ $article->title }}" readonly>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">{{trans('main.close')}}</button>
                                                                <button type="submit"
                                                                        class="btn btn-danger">{{trans('main.confirm')}}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Delete -->

                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <table class="table mg-b-0 text-md-nowrap table-hover ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> {{ trans('main.title') }} </th>
                                                <th> {{ trans('main.name') }} </th>
                                                <th> {{ trans('main.image') }} </th>
                                                <th> {{ trans('main.control') }} </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="5" class="text-center text-danger">@lang('main.no_data_found')</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
