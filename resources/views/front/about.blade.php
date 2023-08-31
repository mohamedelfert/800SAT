@extends('front.layouts.app')
{{--@section('title')--}}
{{--    Title Here--}}
{{--@endsection--}}
@push('css')
@endpush

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>About</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row content">
                    <div class="col-lg-6">
                        <h2>{{ setting()->title ?? 'EUM IPSAM LABORUM DELENITI VELITENA' }}</h2>
                        <h3>{{ setting()->description ?? 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum' }}</h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <div class="pic">
                            <img src="{{ asset('uploads/setting_images').'/'.setting()->cover }}"
                                 class="img w-100 h-100" alt=""
                                 style="min-height: 500px;max-height:500px;">
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->

@endsection
@push('js')
@endpush
