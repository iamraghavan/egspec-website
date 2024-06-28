<header id="rt-header" class="header-one header--sticky">
    <div class="header-top-one-wrapper hide-on-mobile rt-primary-bg">
       <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <div class="header-top-one">
                   <div class="left-information">
                      <a href="mailto:someone@example.com" class="email"><i
                         class="fa-light fa-envelope"></i>enquires@egspec.org</a>
                      <a href="tel:04365251114" class="email"><i class="fa-light fa-phone"></i>04365 251 114</a>
                   </div>
                   <!-- right area -->
                   <div class="right-information">
                      <ul class="rts-dropdown-menu language-switch">
                         <li class="has-child-menu">
                            <a href="#">
                            <span class="menu-item">Feedback</span>
                            <i class="fa-regular fa-chevron-down"></i>
                            </a>
                            <ul class="sub-menu">
                               <li>
                                  <a href="#">
                                  <span class="menu-item">Student Feedback</span>
                                  </a>
                               </li>
                               <li>
                                  <a href="#">
                                  <span class="menu-item">Staff Feedback</span>
                                  </a>
                               </li>
                            </ul>
                      </ul>
                      <ul class="rts-dropdown-menu switcher-currency">
                         <li class="has-child-menu">
                            <a href="#">
                            <span class="menu-item">Register &amp; Login</span>
                            <i class="fa-regular fa-chevron-down"></i>
                            </a>
                            <ul class="sub-menu">
                               <li>
                                  <a href="#">
                                  <span class="menu-item">Student Login</span>
                                  </a>
                               </li>
                               <li>
                                  <a href="#">
                                  <span class="menu-item">Staff Login</span>
                                  </a>
                               </li>
                            </ul>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="header-one-wrapper">
                <div class="left-side-header">
                   <a href="{{ url("/") }}" class="logo-area">
                   <img class="logo big_screen" src="{{ asset("/assets/images/logo_tran.svg") }}" alt="logo">
                   </a>
                </div>
                <div class="main-nav-one">
                   <nav>
                      <ul>


                         <li class="has-dropdown">
                            <a class="nav-link" href="{{ url("#") }}">Circular</a>
                            <ul class="submenu">
                               <li><a href="{{ url("#") }}">Anna University Circular</a></li>
                               <li><a href="{{ url("#") }}">UGC Guidelines</a></li>
                               <li><a href="{{ url("#") }}">Fees Reminder for the Academic Year {{ date('Y') }} - {{ substr(date('Y') + 1, -2) }}</a></li>
                            </ul>
                         </li>
                      </ul>
                   </nav>
                </div>
                <div class="header-right-area-one">
                   <div class="header-right-content">
                      <div class="menu-bar" id="menu-btn">
                         <img src="{{ asset("/assets/images/icon/bar.svg") }}" alt="menu-bar">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </header>
