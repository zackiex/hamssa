<div id="sidebar">
    <!-- Sidebar Brand -->
    <div id="sidebar-brand" class="themed-background">
        <a class="sidebar-title">
            <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide">Hamssa<strong>UI</strong></span>
        </a>
    </div>
    <!-- END Sidebar Brand -->

    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="{{ url('/home') }}" class=" active"><i class="gi gi-compass sidebar-nav-icon"></i><span
                            class="sidebar-nav-mini-hide">Dashboard</span></a>
                </li>
                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i
                            class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                            class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Gestion des utilisateurs</span></a>
                    <ul>
                        <li>
                            <a href="{{ url('/user') }}">Utilisateurs</a>
                        </li>
                        <li>
                            <a href="{{ route('UserSetting.edit', auth()->user()->id) }}"><i class="fa fa-chevron"></i>Paramètres de
                                compte</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('/slider') }}"><i class="fa fa-file-image-o sidebar-nav-icon"></i><span
                            class="sidebar-nav-mini-hide">Slider</span></a>
                </li>
                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i
                            class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i
                            class="gi gi-more_items sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Liste des catégories</span></a>
                    <ul>
                        <li>
                            <a href="{{ url('/categories') }}">Catégories</a>
                        </li>
                        <li>
                            <a href="{{ url('/sousCategories') }}">Sous-catégories</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>
                <li>
                    <a href="{{ url('/about') }}"><i class="fa fa-info-circle sidebar-nav-icon"></i><span
                            class="sidebar-nav-mini-hide">About</span></a>
                </li>
                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>
                <li>
                    <a href="{{ url('/email') }}"><i class="gi gi-inbox sidebar-nav-icon"></i><span
                            class="sidebar-nav-mini-hide">Email Center</span></a>
                </li>
                <li class="sidebar-separator">
                    <i class="fa fa-ellipsis-h"></i>
                </li>

                <li>

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <i class="gi gi-log_out sidebar-nav-icon"></i><span
                            class="sidebar-nav-mini-hide">Déconnecter</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->

    <!-- Sidebar Extra Info -->
    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
        <div class="text-center">
            <small>Crafted with <i class="fa fa-heart text-danger"></i> by <a href="#" target="_blank">ZAKARIA
                    ATTIA</a></small><br>
            <small><span id="year-copy"></span> &copy; <a href="#" target="_blank">AppUI 1.0</a></small>
        </div>
    </div>
    <!-- END Sidebar Extra Info -->
</div>
