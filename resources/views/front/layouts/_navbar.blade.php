    <!-- ======= Navbar ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo"><a href="{{ url('/') }}">{{ LaravelLocalization::getCurrentLocale() === 'ar' ? setting()->site_name_ar:setting()->site_name_en }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('projects') }}">Projects</a></li>
                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    <li><a href="{{ route('articles') }}">Articles</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header>
    <!-- ======= End Navbar ======= -->
