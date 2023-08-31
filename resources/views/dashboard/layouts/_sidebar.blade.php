
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i>
                        <span class="hide-menu">{{ LaravelLocalization::getCurrentLocale() === 'ar' ? setting()->site_name_ar:setting()->site_name_en }}</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.index') }}"
                           aria-expanded="false">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="hide-menu">@lang('main.dashboard')</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.articles.index') }}"
                           aria-expanded="false">
                            <i class="fas fa-edit"></i>
                            <span class="hide-menu">@lang('main.articles')</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.faqs.index') }}"
                           aria-expanded="false">
                            <i class="fas fa-question"></i>
                            <span class="hide-menu">@lang('main.faqs')</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.projects.index') }}"
                           aria-expanded="false">
                            <i class="fas fa-boxes"></i>
                            <span class="hide-menu">@lang('main.projects')</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.users.index') }}"
                           aria-expanded="false">
                            <i class="fas fa-users"></i>
                            <span class="hide-menu">@lang('main.users')</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.roles.index') }}"
                           aria-expanded="false">
                            <i class="fas fa-shield-alt"></i>
                            <span class="hide-menu">@lang('main.roles')</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.contacts.index') }}"
                           aria-expanded="false">
                            <i class="fas fa-envelope"></i>
                            <span class="hide-menu">@lang('main.contacts')</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.settings.index') }}"
                           aria-expanded="false">
                            <i class="fas fa-cogs"></i>
                            <span class="hide-menu">@lang('main.settings')</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                            <i class="fas fa-adjust"></i>
                            <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                            <label class="custom-control-label hide-menu" for="theme-view">@lang('main.dark_theme')</label>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="page-wrapper">
