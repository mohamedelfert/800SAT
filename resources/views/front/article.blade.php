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
          <h2>{{ $article->title }}</h2>
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('articles') }}">Articles</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ $article->image_path }}" alt="" class="img-fluid" style="width:100%">
              </div>

              <h2 class="entry-title">
                <a href="#">{{ $article->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{ $article->user->first_name . ' ' . $article->user->last_name  }}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($article->created_at)->format('Y-m-d g:i A') }}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                    {{ $article->content }}
                </p>
              </div>
              <div class="entry-footer clearfix">
                <div class="float-left">
                </div>

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div>
            </article>
          </div>

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <!-- End #main -->

@endsection
@push('js')
@endpush
