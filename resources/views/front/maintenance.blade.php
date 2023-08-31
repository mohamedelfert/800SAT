@extends('dashboard.layouts.master')
{{--@section('title')--}}
{{--    {{$title}}--}}
{{--@stop--}}
@push('css')
@endpush
@section('content')

    <div class="error-box">
        <div class="error-body text-center">
            <img src="{{ asset('dashboard/assets/images/logo-icon.png') }}">
            <h4 class="text-dark font-24">&mdash; The Team</h4>
            <div class="m-t-30">
                <h3>{!! setting()->message_maintenance !!}</h3>
                <h5 class="m-b-0 text-muted font-medium">Something wrong going on this page.</h5>
                <h5 class="text-muted font-medium">Please Check back again.</h5>
            </div>
            <div class="m-t-30"><i class="ti-settings font-24"></i></div>
            <div class="m-t-30">
                <a href="javascript:void(0)" class="btn btn-facebook" data-toggle="tooltip" title="" data-original-title="Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </a>
                <a href="javascript:void(0)" class="btn btn-linkedin m-l-5" data-toggle="tooltip" title="" data-original-title="Linkedin"> <i aria-hidden="true" class="fab fa-linkedin-in"></i> </a>
                <a href="javascript:void(0)" class="btn btn-dark m-l-5" data-toggle="tooltip" title="" data-original-title="Skype"> <i aria-hidden="true" class="fab fa-skype"></i> </a>
                <a href="javascript:void(0)" class="btn btn-twitter m-l-5" data-toggle="tooltip" title="" data-original-title="Twitter"> <i aria-hidden="true" class="fab fa-twitter"></i> </a>
            </div>
        </div>
    </div>

@endsection
@push('js')
@endpush
