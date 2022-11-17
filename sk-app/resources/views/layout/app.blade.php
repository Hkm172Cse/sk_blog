<!DOCTYPE html>
<html lang="en">

@include('layout.css_links')

<body class="techics-sidebar-fixed">
    <div class="container-scroller">
        <!-- Top techics-Navbar -->
        @include('layout.topnav')

        <div class="container-fluid page-body-wrapper">
            <!-- Settings Menu -->
            @include('layout.setting_menu')
            @include('layout.right_side_nav')

            <!-- Main techics-Sidebar -->
            @include('layout.sidebar')
            <div class="main-panel">
                <div class="techics-content-wrapper">
                        @yield('content')
                    
                </div>
            </div>
        </div>
    </div>
    @include('layout.script_links')
</body>

</html>