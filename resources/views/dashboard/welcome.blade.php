@extends('dashboard.layouts.app')
{{--@section('title')--}}
{{--    {{$title}}--}}
{{--@stop--}}
@push('css')
@endpush
@section('content')


    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Home</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard.index') }}">@lang('main.dashboard')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->

    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Sales chart -->
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="fas fa-users font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">@lang('main.users')</p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">{{ \App\Models\User::where('role_name', '!=', 'Super Admin')->count() }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="mdi mdi-image font-20  text-muted"></i>
                                    <p class="font-16 m-b-5">@lang('main.projects')</p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">{{ \App\Models\Project::count() }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="fas fa-book font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">@lang('main.articles')</p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">{{ \App\Models\Article::count() }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 65%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <i class="mdi mdi-poll font-20 text-muted"></i>
                                    <p class="font-16 m-b-5">@lang('main.faqs')</p>
                                </div>
                                <div class="ml-auto">
                                    <h1 class="font-light text-right">{{ \App\Models\Faq::count() }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sales chart -->

        <!-- Recent comment and chats -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Messages</h4>
                    </div>
                    <div class="comment-widgets scrollable" style="height:430px;">
                        @if($contacts->count() > 0)
                            @foreach($contacts as $contact)
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">{{ $contact->name }}</h6>
                                        <span class="m-b-15 d-block">{{ $contact->subject }}</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">{{ Carbon\Carbon::parse($contact->created_at)->format('Y-m-d g:i A') }}</span>
                                            <span class="label label-rounded label-primary">{{ $contact->email }}</span>
                                            <span class="action-icons">
                                                    <a href="{{ route('dashboard.contacts.show',$contact->id) }}">
                                                        <i class="ti-eye"></i>
                                                    </a>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <td colspan="7" class="text-center text-danger">@lang('main.no_data_found')</td>
                        @endif
                    </div>

                    {{ $contacts->links() }}

                </div>
            </div>
        </div>
    </div>
    <!-- End Container fluid  -->

@endsection
@push('js')
@endpush
