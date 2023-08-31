@extends('front.layouts.app')
{{--@section('title')--}}
{{--    Title Here--}}
{{--@endsection--}}
@push('css')
@endpush

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url({{ asset('front/assets/img/slide/slide-1.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Sailor</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('front/assets/img/slide/slide-2.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('front/assets/img/slide/slide-3.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>
    <!-- ======= End Hero Section ======= -->

    <!-- ======= Main ======= -->
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.about')</h2>
                </div>

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
        </section>
        <!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('front/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('front/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('front/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('front/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('front/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('front/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Projects Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.projects')</h2>
                    <p>Recent Projects</p>
                </div>

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
        </section>
        <!-- End Projects Section -->

        <!-- ======= Articles Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="section-title">
                    <h2>@lang('main.articles')</h2>
                    <p>Recent Articles</p>
                </div>

                <div class="row">

                    @foreach($articles as $article)
                        <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ $article->image_path }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="#">{{ $article->title }}</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{ $article->user->first_name . ' ' . $article->user->last_name  }}</a></li>
                                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">
                                                    {{ Carbon\Carbon::parse($article->created_at)->format('Y-m-d g:i A') }}</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        {{ $article->content }}
                                    </p>
                                    <div class="read-more">
                                        <a href="{{ route('article',[$article->id]) }}">Read More</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->
                        </div>
                    @endforeach

                </div>

                <div class="blog-pagination" data-aos="fade-up">
                    <ul class="justify-content-center">
                        {{ $articles->links() }}
                    </ul>
                </div>

            </div>
        </section>
        <!-- End Articles Section -->

    </main>
    <!-- ======= End Main ======= -->

@endsection
@push('js')
@endpush
