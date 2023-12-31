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
                        <div class="card-header pb-0">
                            <div class="box-header with-border">
                                <span style="display: block;margin-bottom:10px">@lang('main.contacts') : <small>( {{ $contacts->total() }} )</small></span>
                                <form action="{{ route('dashboard.contacts.index') }}" method="get">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                                   placeholder="@lang('main.search')">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-sm" title="@lang('main.search')">
                                                <i class="fa fa-search"></i></button>
                                            <a class="btn btn-danger btn-sm" href="{{ route('dashboard.contacts.index') }}"
                                               title="@lang('main.clear')">
                                                <i class="fa fa-eraser"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <hr style="margin:10px 30px">

                        <div class="card-body">
                            <div class="table-responsive hoverable-table">
                                @if($contacts->count() > 0)
                                    <table class="table table-hover" id="example1" data-page-length='50' style=" text-align: center;">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">#</th>
                                                <th class="border-bottom-0">@lang('main.subject')</th>
                                                <th class="border-bottom-0">@lang('main.name')</th>
                                                <th class="border-bottom-0">@lang('main.email')</th>
                                                <th class="border-bottom-0">@lang('main.created_at')</th>
                                                <th class="border-bottom-0">@lang('main.control')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts as $index => $contact)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $contact->subject }}</td>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>{{ Carbon\Carbon::parse($contact->created_at)->format('Y-m-d g:i A') }}</td>

                                                    <td>
                                                        @if(auth()->user()->hasPermissionTo('contact-show'))
                                                            <a class="btn btn-sm btn-secondary" href="{{ route('dashboard.contacts.show',$contact->id) }}"
                                                               title="@lang('main.show')">
                                                                <i class="fa fa-eye"></i></a>
                                                        @endif

                                                        @if(auth()->user()->hasPermissionTo('contact-delete'))
                                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                               data-toggle="modal" href="#delete{{$contact->id}}" title="@lang('main.delete')">
                                                                <i class="fa fa-trash"></i></a>
                                                        @endif
                                                    </td>
                                                </tr>

                                                <!-- Delete -->
                                                <div class="modal" id="delete{{$contact->id}}">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content modal-content-demo">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title">@lang('main.delete')</h6>
                                                                <button aria-label="Close" class="close"
                                                                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('dashboard.contacts.destroy', $contact->id) }}" method="post">
                                                                {{ method_field('delete') }}
                                                                {{ csrf_field() }}

                                                                <div class="modal-body">
                                                                    <p>@lang('main.delete_msg')</p><br>
                                                                    <input type="hidden" name="id" id="id" value="{{$contact->id}}">
                                                                    <input class="form-control" name="name" id="name"
                                                                           value="{{ $contact->name }}" type="text" readonly>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">@lang('main.cancel')
                                                                    </button>
                                                                    <button type="submit" class="btn btn-danger">@lang('main.confirm')</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Delete -->

                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <table class="table table-hover" id="example1" data-page-length='50' style=" text-align: center;">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">#</th>
                                                <th class="border-bottom-0">@lang('main.subject')</th>
                                                <th class="border-bottom-0">@lang('main.name')</th>
                                                <th class="border-bottom-0">@lang('main.phone')</th>
                                                <th class="border-bottom-0">@lang('main.control')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="6" class="text-center text-danger">@lang('main.no_data_found')</td>
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
        <!--/div-->
    </div>

@endsection
@push('js')
@endpush
