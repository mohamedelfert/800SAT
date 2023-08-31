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
          <h2>Articles</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Articles</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

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
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

@endsection
@push('js')
@endpush
