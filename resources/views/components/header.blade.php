<style>
    /* Custom CSS for the first header */
    .first-header {
        background-color: #f8f9fa; /* Set your desired background color */
        padding: 10px 0;
    }

    .first-header .logo-area {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
    }

    .first-header .logo-area img {
        max-width: 150px; /* Adjust the size of the logos as needed */
        height: auto;
    }

    /* Adjustments for smaller screens */
    @media (max-width: 991.98px) {
        .first-header .logo-area img {
            max-width: 120px; /* Reduce logo size for smaller screens */
        }
    }
</style>


<header id="rt-header" class="header-one header--sticky">
<!-- First Header: Two Logos -->
<div class="first-header">
    <div class="container">
        <div class="logo-area">
            <a href="{{ url("/") }}">
                <img src="{{ asset("/assets/images/logo_tran.svg") }}" alt="College Logo">
            </a>
            <div class="d-none d-lg-flex align-items-center"> <!-- Displayed only on large screens -->
                <img src="{{ asset("/assets/images/Accredited/All_India_Council_for_Technical_Education_logo.webp") }}" alt="Small Logo 1">
                <img src="{{ asset("/assets/images/Accredited/All_India_Council_for_Technical_Education_logo.webp") }}" alt="Small Logo 2">
            </div>
            <!-- Hamburger menu for mobile -->
            <div class="header-right-area-one d-block d-lg-none">
                <div class="header-right-content">
                    <div class="menu-bar" id="menu-btn">
                        <img src="{{ asset("/assets/images/icon/bar.svg") }}" alt="menu-bar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Second Header: Navigation (sticky on scroll) -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="header-one-wrapper">
                <!-- Big Screen View: Sticky Nav -->
                <div class="main-nav-one d-none d-lg-block">
                    <nav>
                        <ul>
                            <li class="has-dropdown">
                                <a class="nav-link" href="{{ url("#") }}">About</a>
                                <ul class="submenu">
                                    <!-- Add your submenu items for About -->
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a class="nav-link" href="{{ url("#") }}">Academics</a>
                                <ul class="submenu">
                                    <!-- Add your submenu items for Academics -->
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a class="nav-link" href="{{ url("#") }}">Admissions</a>
                                <ul class="submenu">
                                    <!-- Add your submenu items for Admissions -->
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a class="nav-link" href="{{ url("#") }}">Facilities</a>
                                <ul class="submenu">
                                    <!-- Add your submenu items for Facilities -->
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a class="nav-link" href="{{ url("#") }}">Activities</a>
                                <ul class="submenu">
                                    <!-- Add your submenu items for Activities -->
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a class="nav-link" href="{{ url("#") }}">Placements</a>
                                <ul class="submenu">
                                    <!-- Add your submenu items for Placements -->
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a class="nav-link" href="{{ url("#") }}">Research</a>
                                <ul class="submenu">
                                    <!-- Add your submenu items for Research -->
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a class="nav-link" href="{{ url("#") }}">Circular</a>
                                <ul class="submenu">
                                    <!-- Add your submenu items for Circular -->
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
</header>
