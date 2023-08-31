        </div>
        <!-- End Wrapper -->

        <!-- customizer Panel -->
        <aside class="customizer">
            <a href="javascript:void(0)" class="service-panel-toggle">
                <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="customizer-body">
                <ul class="nav customizer-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                           aria-selected="true">
                            <i class="mdi mdi-wrench font-20"></i>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="p-15 border-bottom">
                            <!-- Sidebar -->
                            <h5 class="font-medium m-b-10 m-t-10">Layout Settings</h5>
                            <div class="custom-control custom-checkbox m-t-10">
                                <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                                <label class="custom-control-label" for="theme-view">Dark Theme</label>
                            </div>
                            <div class="custom-control custom-checkbox m-t-10">
                                <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                                <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                            </div>
                            <div class="custom-control custom-checkbox m-t-10">
                                <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                                <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                            </div>
                            <div class="custom-control custom-checkbox m-t-10">
                                <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                                <label class="custom-control-label" for="header-position">Fixed Header</label>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab 1 -->
                </div>
            </div>
        </aside>

        <!-- All Jquery -->
        <script src="{{ asset('dashboard/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('dashboard/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- apps -->
        <script src="{{ asset('dashboard/dist/js/app.min.js') }}"></script>
        <script src="{{ asset('dashboard/dist/js/app.init.js') }}"></script>
        <script src="{{ asset('dashboard/dist/js/app-style-switcher.js') }}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{ asset('dashboard/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/extra-libs/sparkline/sparkline.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('dashboard/dist/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('dashboard/dist/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('dashboard/dist/js/custom.min.js') }}"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="{{ asset('dashboard/assets/libs/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
        <!--c3 charts -->
        <script src="{{ asset('dashboard/assets/extra-libs/c3/d3.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/extra-libs/c3/c3.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('dashboard/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('dashboard/dist/js/pages/dashboards/dashboard1.js') }}"></script>

        @stack('js')
    </body>

</html>
