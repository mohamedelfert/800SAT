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
                    <h2>Projects</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Projects</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    @if($projects->count() > 0)
                        @foreach($projects as $project)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-wrap">
                                    <img src="{{ $project->image_path }}" class="img-fluid" alt=""
                                         style="width:100%;max-width:350px;">
                                    <div class="portfolio-info">
                                        <h4>{{ $project->title }}</h4>
                                        <p>{{ $project->subtitle }}</p>
                                        <div class="portfolio-links">
                                            <a href="{{ $project->image_path }}" data-gall="portfolioGallery"
                                               class="venobox" title="{{ $project->title }}"><i class="bx bx-plus"></i></a>
                                            <a href="#" data-gall="portfolioDetailsGallery"
                                               data-vbtype="iframe" class="venobox" title="Project Details"><i
                                                    class="bx bx-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <td colspan="4" class="text-center text-danger">@lang('main.no_data_found')</td>
                    @endif

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

@endsection
@push('js')
@endpush
