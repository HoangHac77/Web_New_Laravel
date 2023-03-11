<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Heading (Posts)-->
                <div class="sidenav-menu-heading">Start</div>
                <!-- Sidenav Link (Charts)-->
                <a class="nav-link" href="/admin">
                    <div class="nav-link-icon"><i data-feather="book"></i></div>
                    DashBoard
                </a>
                <a class="nav-link" href="/admin/post">
                    <div class="nav-link-icon"><i data-feather="book"></i></div>
                    Posts
                </a>
                <!-- Sidenav Link (Tables)-->
                <a class="nav-link" href="/admin/category">
                    <div class="nav-link-icon"><i data-feather="book-open"></i></div>
                    Category
                </a>
                <!-- Sidenav Link (Tables)-->
                <a class="nav-link" href="/admin/user">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    User
                </a>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>