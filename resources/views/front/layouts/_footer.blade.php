    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>{{ LaravelLocalization::getCurrentLocale() === 'ar' ? setting()->site_name_ar:setting()->site_name_en }}</h3>
                            <p>
                                {{ setting()->address }} <br>
                                <strong>@lang('main.phone') :</strong> {{ setting()->phone }}<br>
                                <strong>@lang('main.whatsapp') :</strong> {{ setting()->whatsapp }}<br>
                                <strong>@lang('main.email') :</strong> {{ setting()->email }}<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="{{ setting()->twitter_link }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="{{ setting()->facebook_link }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="{{ setting()->instagram_link }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="{{ setting()->whatsapp_link }}" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('projects') }}">Projects</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ LaravelLocalization::getCurrentLocale() === 'ar' ? setting()->site_name_ar:setting()->site_name_en }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">{{ LaravelLocalization::getCurrentLocale() === 'ar' ? setting()->site_name_ar:setting()->site_name_en }}</a>
            </div>
        </div>
    </footer>
    <!-- ======= End Footer ======= -->
