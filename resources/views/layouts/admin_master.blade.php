<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from demo.bootstrapdash.com/caroline/template/demo_1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2024 03:19:34 GMT -->
<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>FlashFit Dashboard</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="{{ asset('admindashboard/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
      <link rel="stylesheet" href="{{ asset('admindashboard/assets/vendors/css/vendor.bundle.base.css')}}">
      <!-- endinject -->
      <!-- Bootstrap CSS -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="{{ asset('admindashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}"/>
      <link rel="stylesheet" href="{{ asset('admindashboard/assets/vendors/jvectormap/jquery-jvectormap.css')}}"/>
      <link rel="stylesheet" href="{{ asset('admindashboard/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}"/>
      <link rel="stylesheet" href="{{ asset('admindashboard/assets/vendors/jquery-bar-rating/css-stars.css')}}"/>
      {{-- Font Awesome --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <!-- End plugin css for this page -->
      {{-- Owl Carousel 2.3.4 --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="{{ asset ('admindashboard/assets/vendors/datatables/css/jquery.dataTables.min.css') }}"/>
      <!-- Layout styles -->
      <link rel="stylesheet" href="{{ asset('admindashboard/assets/css/demo_1/style.css')}}" />
      <!-- End layout styles -->
      <link rel="shortcut icon" href="{{ asset('admindashboard/assets/images/logo.png')}}" />
      <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   </head>
   <body>
    <script src="{{ asset('admindashboard/assets/js/preloader.js')}}"></script>
    <div class="body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
        <div class="mdc-drawer__header">
          <a href="index-2.html" class="brand-logo text-center">
            <img src="{{ asset('admindashboard/assets/images/logo.svg')}}" alt="logo" height="54px"/>
          </a>
        </div>
        <div class="mdc-drawer__content">
          <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard') ? 'activa' : '' }}" href="{{ route('dashboard') }}">
                  <i class="fas fa-landmark me-2" aria-hidden="true"></i>
                  Dashboard
                </a>
              </div>
              <div class="mdc-drawer-title">
                MEMBERSHIPS
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/cutis*') || request()->is('dashboard/cutis.edit*') || request()->is('dashboard/cutis.create*') ? 'activa' : '' }}" href="{{ route('cutis.index') }}">
                  <i class="fas me-2 fa-snowflake" aria-hidden="true"></i>
                  Cuti
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/packageds*') || request()->is('dashboard/packageds.edit*') || request()->is('dashboard/packageds.create*') ? 'activa' : '' }}" href="{{ route('packageds.index') }}">
                  <i class="fas me-2 fa-box" aria-hidden="true"></i>
                  Packaged
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/saless') ? 'activa' : '' }}" href="{{ route('saless.index') }}">
                  <i class="fas me-2 fa-chart-line" aria-hidden="true"></i>
                  Sales
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/datatrainers') ? 'activa' : '' }}" href="{{ route('datatrainers.index') }}">
                  <i class="fas me-2 fa-dumbbell" aria-hidden="true"></i>
                  Trainer
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/transactions') ? 'activa' : '' }}" href="{{ route('transactions.index') }}">
                  <i class="fas me-2 fa-exchange-alt" aria-hidden="true"></i>
                  Transaction
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/participants') ? 'activa' : '' }}" href="{{ route('participants.index') }}">
                  <i class="fas me-2 fa-users-cog" aria-hidden="true"></i>
                  User
                </a>
              </div>
              <div class="mdc-drawer-title">
                PROMO
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/vouchers') ? 'activa' : '' }}" href="{{ route('vouchers.index') }}">
                  <i class="fas me-2 fa-gift" aria-hidden="true"></i>
                  Voucher
                </a>
              </div>
              <div class="mdc-drawer-title">
                SETTING
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/accounts') ? 'activa' : '' }}" href="{{ route('accounts.index') }}">
                  <i class="fas me-2 fa-user" aria-hidden="true"></i>
                  Account
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/articles') ? 'activa' : '' }}" href="{{ route('articles.index') }}">
                  <i class="fas me-2 fa-newspaper" aria-hidden="true"></i>
                  Article
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/banners') ? 'activa' : '' }}" href="{{ route('banners.index') }}">
                  <i class="fas me-2 fa-image" aria-hidden="true"></i>
                  Banner
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/kelass') ? 'activa' : '' }}" href="{{ route('kelass.index') }}">
                  <i class="fas me-2 fa-chalkboard-teacher" aria-hidden="true"></i>
                  Kelas
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/jadwalkelass') ? 'activa' : '' }}" href="{{ route('jadwalkelass.index') }}">
                  <i class="fas me-2 fa-list" aria-hidden="true"></i>
                  Jadwal Kelas
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/locations') ? 'activa' : '' }}" href="{{ route('locations.index') }}">
                  <i class="fas me-2 fa-map-marker-alt" aria-hidden="true"></i>
                  Location
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/notifications') ? 'activa' : '' }}" href="{{ route('notifications.index') }}">
                  <i class="fas me-2 fa-bell" aria-hidden="true"></i>
                  Notification
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/tncs') ? 'activa' : '' }}" href="{{ route('tncs.index') }}">
                  <i class="fas me-2 fa-file-alt" aria-hidden="true"></i>
                  Terms And Condition
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link {{ request()->is('dashboard/settings') ? 'activa' : '' }}" href="{{ route('settings.index') }}">
                  <i class="fas me-2 fa-cog" aria-hidden="true"></i>
                  Setting
                </a>
              </div>
            </nav>
          </div>
        </div>
      </aside>

      <!-- partial -->
      <div class="main-wrapper mdc-drawer-app-content">
        <!-- partial:partials/_navbar.html -->
        <header class="mdc-top-app-bar">
          <div class="mdc-top-app-bar__row border-bottom border-1 border-secondary">
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start mdc-top-app-bar__section-left">
              <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">
                menu
              </button>
              <div class="col-4">
                <small>Good Morning</small></br>
                <h5 class="fw-bold">Welcome Back!</h5>
              </div>
            </div>
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
              
              <div class="menu-button-container menu-profile">
                <button class="mdc-button mdc-menu-button">
                  <span class="d-flex align-items-center">
                    <span class="figure">
                      <img src="{{ asset('admindashboard/assets/images/faces/face1.jpg')}}" alt="user" clas="user" />
                    </span>
                    <span class="user-name">Christian Russell</span><i class="fas fa-chevron-down ms-2 text-dark" style="font-size: 0.7rem"></i>
                  </span>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="material-icons-outlined text-primary">
                          supervisor_account
                        </i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <a href="{{ route ('profile.show') }}"><h6 class="text-dark item-subject font-weight-normal">
                          Profile
                        </h6></a>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="material-icons-outlined text-primary">
                          settings
                        </i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a type="submit">
                            <h6 class="item-subject font-weight-normal">Logout</h6>
                          </a>
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              {{-- <div class="menu-button-container pl-2">
                <button class="mdc-button mdc-menu-button">
                  <i class="material-icons-outlined text-primary">
                    notifications
                  </i>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                  <h6 class="title d-flex align-items-center">
                    <i class="material-icons-outlined text-primary">
                      notifications
                    </i>
                    Notifications
                  </h6>
                  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon">
                        <i class="material-icons-outlined text-info">
                          email
                        </i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">
                          You received a new message
                        </h6>
                        <small class="text-muted"> 6 min ago </small>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon">
                        <i class="material-icons-outlined text-success">
                          supervised_user_circle
                        </i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">
                          New user registered
                        </h6>
                        <small class="text-muted"> 15 min ago </small>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon">
                        <i class="material-icons-outlined text-warning">
                          error_outline
                        </i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">
                          System Alert
                        </h6>
                        <small class="text-muted"> 2 days ago </small>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon">
                        <i class="material-icons-outlined text-danger">
                          system_update_alt
                        </i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">
                          You have a new update
                        </h6>
                        <small class="text-muted"> 3 days ago </small>
                      </div>
                    </li>
                  </ul>
                </div>
              </div> --}}
            </div>
          </div>
        </header>
@yield('admincontent')