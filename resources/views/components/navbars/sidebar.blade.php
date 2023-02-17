@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" /dashboard">
            <img src="{{ asset('dash_assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">Admin Dashboard</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('dashboard')? 'active bg-gradient-primary': '' }} "
                    href="/">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">home</i>
                    </div>
                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('info/show')? 'active bg-gradient-primary': '' }}" href="{{ url('/info/show') }}">
                  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">person</i>
                  </div>
                  <span class="nav-link-text ms-1">Personal Information</span>
                </a>
              </li>
            <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('/skills')? 'active bg-gradient-primary': '' }}" href="{{ url('/skills') }}">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">star</i>
                      </div>
                      <span class="nav-link-text ms-1">Personal Skills</span>
                    </a>
                  </li>
            </li>
            <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('/services')? 'active bg-gradient-primary': '' }}" href="{{ url('/services') }}">
                      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">code</i>
                      </div>
                      <span class="nav-link-text ms-1">Services</span>
                    </a>
                  </li>
                <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('/social_links') ? ' active bg-gradient-primary' : '' }}  "href="{{ url('/social_links') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">insert_link</i>
                    </div>
                    <span class="nav-link-text ms-1">Social Media</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ url('logout') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>

</aside>
