@extends('layouts.admin_master')
@section('admincontent')
        <!-- partial -->
          <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
              <div class="container">
                <div class="row my-4">
                  <div class="col-md-5 mx-auto border mdc-card">
                    <div class="card-inner">
                      <h5 class="font-weight-medium mb-2">Rekap Kehadiran</h5>
                      <div class="row">
                        <div class="col-md-8 d-flex justify-content-center align-items-center">
                          <div class="dougnut-chart-wrap">
                            <canvas id="doughnutChart" height="140"></canvas>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="doughnut-custom-legend mt-3 mb-1">
                            <div class="">
                                <div class=" pl-3 pr-3">
                                    <p class="m-0 font-weight-medium tx-12">Member</p>
                                    <div class="chart-bar-rect "style="background-color:#30a80f"></div>
                                    <p class="m-0 text-muted tx-12">25%</p>
                                </div>
                                <div class=" pl-3 pr-3">
                                    <p class="m-0 font-weight-medium tx-12"> Trainer </p>
                                    <div class="chart-bar-rect" style="background-color:#71f207"></div>
                                    <p class="m-0 text-muted tx-12">60%</p>
                                </div>
                                <div class=" pl-3 pr-3">
                                    <p class="m-0 font-weight-medium tx-12"> Cuti </p>
                                    <div class="chart-bar-rect" style="background-color:#b3faa0"></div>
                                    <p class="m-0 text-muted tx-12">15%</p>
                                </div>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="mt-3">
                        <button type="button" class="btn btn-dark px-5 w-100">Lihat Selengkapnya</button>
                      </div>
                      {{-- <p class="m-0 text-muted tx-12"> You have a 23% growth in comparison with last month. </p> --}}
                    </div>
                  </div>
                  <div class="col-md-3 mx-auto border mdc-card">
                    <div class="card-inner">
                      <h5 class="font-weight-medium mb-2">Transaksi Bulan Ini</h5>
                      <div class="conversion-chart-area-height mt-4">
                        <canvas id="total-expences"></canvas>
                      </div>
                      <div class="mt-2">
                        <i><small>Bulan <b>Juli</b></small></i>
                        <div class="row mt-1">
                          <div class="col-md-6">
                            <small>New Member</small><br>
                            <p class="fw-bold">Rp. 1.000.000</p>
                          </div>
                          <div class="col-md-6">
                            <small>Re-New</small><br>
                            <p class="fw-bold">Rp. 2.000.000</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 mx-auto">
                    <div class="row mb-1">
                      <h4>Data Kehadiran<br> Member</h4>
                    </div>
                    <div class="row my-1 border rounded border-dark">
                      <div class="d-flex align-items-center mx-auto p-2">
                        <div class="text-white bg-black bg-gradient align-self-start p-2 rounded">
                          <div class="p-1 px-2 text-center m-0">
                            <i class="fa-solid fa-user text-center"></i>
                          </div>
                        </div>
                        <div class="ms-2">
                          <div class=" lh-1 m-0">
                            <p class="m-0">Virgus Kaymal</p>
                            <div class="d-flex align-items-center">
                              <i class="fa-regular fa-clock me-1"></i>
                              <p class="m-0 fw-lighter">09.00</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row my-1 border rounded border-dark">
                      <div class="d-flex align-items-center mx-auto p-2">
                        <div class="text-white bg-black bg-gradient align-self-start p-2 rounded">
                          <div class="p-1 px-2 text-center m-0">
                            <i class="fa-solid fa-user text-center"></i>
                          </div>
                        </div>
                        <div class="ms-2">
                          <div class=" lh-1 m-0">
                            <p class="m-0">Rangga Gna</p>
                            <div class="d-flex align-items-center">
                              <i class="fa-regular fa-clock me-1"></i>
                              <p class="m-0 fw-lighter">09.00</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row my-1 border rounded border-dark">
                      <div class="d-flex align-items-center mx-auto p-2">
                        <div class="text-white bg-black bg-gradient align-self-start p-2 rounded">
                          <div class="p-1 px-2 text-center m-0">
                            <i class="fa-solid fa-user text-center"></i>
                          </div>
                        </div>
                        <div class="ms-2">
                          <div class=" lh-1 m-0">
                            <p class="m-0">Jodi Rifky</p>
                            <div class="d-flex align-items-center">
                              <i class="fa-regular fa-clock me-1"></i>
                              <p class="m-0 fw-lighter">09.00</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row my-4">
                  <div class="col-md-7 mdc-card mx-auto ">
                    <div class="card-inner">
                      <div class="row mb-1">
                        <div class="d-flex justify-content-between align-items-center py-1">
                          <h5>Jadwal Kelas</h5>
                          <a href="#" class="bg-dark text-white rounded-circle iconrow2">
                            <i class="fas fa-arrow-right p-2"></i>
                          </a>
                        </div>
                      </div>
                      <div class="row my-1 border-bottom border-1 border-dark">
                        <div class="d-flex justify-content-between align-items-center mx-auto p-2">
                          <div class="d-flex align-items-center">
                            <div class="text-white bg-black bg-gradient align-self-start p-2 rounded">
                              <div class="p-1 py-2 text-center m-0">
                                <p class="text-center fw-ligth lh-1 m-0">09.00</p>
                              </div>
                            </div>
                            <div class="ms-2 lh-1">
                              <p class="mb-0">Nama Olahraga</p>
                              <p class="mb-0 fw-lighter">Durasi Olga</p>
                            </div>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="fa-regular fa-clock me-2"></i>
                            <p class="m-0 fw-lighter">60 Menit</p>
                          </div>
                          <div class="d-flex align-items-center rounded bg-gradient text-white p-2" style="background-color:#71f207">
                            <a class="text-dark" href="#"><i class="fa-solid fa-location-dot"></i>
                              <small class="ms-1 fw-lighter">Rungkut</small>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="row my-1 border-bottom border-1 border-dark">
                        <div class="d-flex justify-content-between align-items-center mx-auto p-2">
                          <div class="d-flex align-items-center">
                            <div class="text-white bg-black bg-gradient align-self-start p-2 rounded">
                              <div class="p-1 py-2 text-center m-0">
                                <p class="text-center fw-ligth lh-1 m-0">09.00</p>
                              </div>
                            </div>
                            <div class="ms-2 lh-1">
                              <p class="mb-0">Nama Olahraga</p>
                              <p class="mb-0 fw-lighter">Durasi Olga</p>
                            </div>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="fa-regular fa-clock me-2"></i>
                            <p class="m-0 fw-lighter">60 Menit</p>
                          </div>
                          <div class="d-flex align-items-center rounded text-white p-2"  style="background-color:#71f207">
                            <a class="text-dark" href="#"><i class="fa-solid fa-location-dot"></i>
                              <small class="ms-1 fw-lighter">Rungkut</small>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="row my-1 border-bottom border-1 border-dark">
                        <div class="d-flex justify-content-between align-items-center mx-auto p-2">
                          <div class="d-flex align-items-center">
                            <div class="text-white bg-black bg-gradient align-self-start p-2 rounded">
                              <div class="p-1 py-2 text-center m-0">
                                <p class="text-center fw-ligth lh-1 m-0">09.00</p>
                              </div>
                            </div>
                            <div class="ms-2 lh-1">
                              <p class="mb-0">Nama Olahraga</p>
                              <p class="mb-0 fw-lighter">Durasi Olga</p>
                            </div>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="fa-regular fa-clock me-2"></i>
                            <p class="m-0 fw-lighter">60 Menit</p>
                          </div>
                          <div class="d-flex align-items-center rounded text-white p-2"  style="background-color:#71f207">
                            <a class="text-dark" href="#"><i class="fa-solid fa-location-dot"></i>
                              <small class="ms-1 fw-lighter">Rungkut</small>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mdc-card mx-auto">
                    <div class="card-inner">
                      <div class="d-flex justify-content-between align-items-center py-1">
                        <h5>Trainer</h5>
                        <a href="#" class="bg-dark text-white rounded-circle iconrow2">
                          <i class="fas fa-arrow-right p-2"></i>
                        </a>
                      </div>
                      <div class="owl-carousel owl-theme mt-2">
                        <div class="item">
                          <div class=" mx-2">
                            <div class="position-relative trainercarousel">
                              <img class="" src="{{ asset('admindashboard/assets/images/pt1.jfif') }}" alt="">
                            </div>
                            <div class="position-absolute top-0 p-3 overlay-pt d-flex">
                              <small class="text-white mt-auto">John Arnold</small>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class=" mx-2">
                            <div class="position-relative trainercarousel">
                              <img class="" src="{{ asset('admindashboard/assets/images/pt2.jfif') }}" alt="">
                            </div>
                            <div class="position-absolute top-0 p-3 overlay-pt d-flex">
                              <small class="text-white mt-auto">John Arnold</small>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class=" mx-2">
                            <div class="position-relative trainercarousel">
                              <img class="" src="{{ asset('admindashboard/assets/images/pt3.jfif') }}" alt="">
                            </div>
                            <div class="position-absolute top-0 p-3 overlay-pt d-flex">
                              <small class="text-white mt-auto">John Arnold</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>  
                </div>
              </div>
              {{-- <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-9-desktop mdc-layout-grid__cell--span-9-tablet">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                            <div class="mdc-card mdc-filled-card-primary grid-margin card-blue-box-shadow">
                                <div class="d-block d-md-flex align-items-center mb-3"> <img src="{{ asset('admindashboard/assets/images/dashboard/cup.png')}}" alt="" class="img-lg mr-3" />
                                    <div>
                                        <h4>Welcome Dashboard !</h4>
                                        <p class="mb-0 font-weight-light"> Here's what happening with your projects today </p>
                                    </div>
                                </div>
                                <div class="mdc-text-field mdc-text-field--with-leading-icon search-text-field mdc-search-field d-none d-md-flex"> <i class="material-icons mdc-text-field__icon">search</i>
                                    <input class="mdc-text-field__input" id="text-field-hero-input" />
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="d-lg-flex justify-content-between mt-5">
                                    <div class="banner-border">
                                        <h3>$12.3k</h3>
                                        <h5>Sales</h5> </div>
                                    <div class="banner-border">
                                        <h3>$8.3k</h3>
                                        <h5>Products</h5> </div>
                                    <div class="banner-border">
                                        <h3>3.6k</h3>
                                        <h5>Visits</h5> </div>
                                    <div class="banner-border">
                                        <h3>$15.0k</h3>
                                        <h5>Borrowed</h5> </div>
                                    <div class="banner-border">
                                        <h3>$70.0k</h3>
                                        <h5>Shopping</h5> </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-tab mt-4">
                            <div class="mdc-tab-wrapper mdc-inline-tab">
                                <div class="tab-right-btn-block">
                                    <button class="mdc-button filled-button--danger btn-sm"> Email </button>
                                    <button class="mdc-button filled-button--success btn-sm"> Print Report </button>
                                    <button class="mdc-button filled-button--info btn-sm"> Generate Report </button>
                                </div>
                                <div class="mdc-tab-bar" role="tablist">
                                    <div class="mdc-tab-scroller">
                                        <div class="mdc-tab-scroller__scroll-area">
                                            <div class="mdc-tab-scroller__scroll-content">
                                                <button class="mdc-tab mdc-tab--active" role="tab" aria-selected="true" tabindex="0"> <span class="mdc-tab__content"> <span class="mdc-tab__text-label">All</span> </span> <span class="mdc-tab-indicator mdc-tab-indicator--active"> <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span> </span> <span class="mdc-tab__ripple"></span> </button>
                                                <button class="mdc-tab mdc-tab" role="tab" aria-selected="true" tabindex="0"> <span class="mdc-tab__content"> <span class="mdc-tab__text-label">Spent</span> </span> <span class="mdc-tab-indicator mdc-tab-indicator"> <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span> </span> <span class="mdc-tab__ripple"></span> </button>
                                                <button class="mdc-tab mdc-tab" role="tab" aria-selected="true" tabindex="0"> <span class="mdc-tab__content"> <span class="mdc-tab__text-label">Received</span> </span> <span class="mdc-tab-indicator mdc-tab-indicator"> <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span> </span> <span class="mdc-tab__ripple"></span> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content content--active">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet">
                                            <div class="mdc-card mdc-tab-inner-card">
                                                <div class="card-inner mr-0">
                                                    <div class="d-flex align-items-center justify-content-center"> <i class="material-icons-outlined text-success"> account_balance_wallet </i>
                                                        <div>
                                                            <p class="m-0">Income</p>
                                                            <h2 class="m-0">$25038</h2>
                                                            <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+13%</span>from last month </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet">
                                            <div class="mdc-card mdc-tab-inner-card">
                                                <div class="card-inner mr-0">
                                                    <div class="d-flex align-items-center justify-content-center"> <i class="material-icons-outlined text-warning"> contacts </i>
                                                        <div>
                                                            <p class="m-0">Production</p>
                                                            <h2 class="m-0">12038</h2>
                                                            <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+20%</span>from last month </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet">
                                            <div class="mdc-card mdc-tab-inner-card">
                                                <div class="card-inner mr-0">
                                                    <div class="d-flex align-items-center justify-content-center"> <i class="material-icons-outlined text-danger"> store </i>
                                                        <div>
                                                            <p class="m-0">Total Projects</p>
                                                            <h2 class="m-0">12038</h2>
                                                            <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+20%</span>from last month </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet">
                                            <div class="mdc-card p-0">
                                                <div class="card-inner mr-0">
                                                    <div class="mdc-inner-card-header">
                                                        <div class="d-sm-flex justify-content-between align-items-center">
                                                            <h5 class="m-0">Total Earnings</h5>
                                                            <div class="menu-button-container">
                                                                <button class="mdc-button mdc-menu-button mdc-button--light"> 13/03/2018 to 20/03/2018 <i class="material-icons"> arrow_drop_down </i> </button>
                                                                <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="total-earnings-menu-2">
                                                                    <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                                                                        <li class="mdc-list-item" role="menuitem">
                                                                            <h6 class="item-subject font-weight-normal"> 21/03/2018 to 31/03/2018 </h6> </li>
                                                                        <li class="mdc-list-divider"></li>
                                                                        <li class="mdc-list-item" role="menuitem">
                                                                            <h6 class="item-subject font-weight-normal"> 10/04/2018 to 21/04/2018 </h6> </li>
                                                                        <li class="mdc-list-divider"></li>
                                                                        <li class="mdc-list-item" role="menuitem">
                                                                            <h6 class="item-subject font-weight-normal"> 22/04/2018 to 31/04/2018 </h6> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner mr-0 p-4">
                                                        <div class="d-xl-flex justify-content-between align-items-center">
                                                            <div class="graph-custom-legend">
                                                                <div class="d-flex align-items-center mb-2"> <span class="bg-danger mr-2"></span>
                                                                    <h5 class="m-0 font-weight-medium"> $25,370.00 </h5> </div>
                                                                <h5 class="font-weight-normal"> Global Budget </h5> </div>
                                                            <div class="graph-custom-legend">
                                                                <div class="d-flex align-items-center mb-2"> <span class="bg-warning mr-2"></span>
                                                                    <h5 class="m-0 font-weight-medium"> $5,370.00 </h5> </div>
                                                                <h5 class="font-weight-normal"> Today's Income </h5> </div>
                                                            <div class="graph-custom-legend">
                                                                <div class="d-flex align-items-center mb-2"> <span class="bg-primary mr-2"></span>
                                                                    <h5 class="m-0 font-weight-medium"> $2,370.00 </h5> </div>
                                                                <h5 class="font-weight-normal"> Spendings </h5> </div>
                                                        </div>
                                                        <div class="total-earning-wrapper">
                                                            <canvas id="total-earnings"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet">
                                            <div class="mdc-card p-0">
                                                <div class="card-inner mr-0">
                                                    <div class="mdc-inner-card-header">
                                                        <div class="d-sm-flex justify-content-between align-items-center">
                                                            <h5 class="m-0">Total Earnings</h5>
                                                            <div class="menu-button-container">
                                                                <button class="mdc-button mdc-menu-button mdc-button--light"> 13/03/2018 to 20/03/2018 <i class="material-icons"> arrow_drop_down </i> </button>
                                                                <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="total-earnings-menu">
                                                                    <ul class="mdc-list" ole="menu" aria-hidden="true" aria-orientation="vertical">
                                                                        <li class="mdc-list-item" role="menuitem">
                                                                            <h6 class="item-subject font-weight-normal"> 21/03/2018 to 31/03/2018 </h6> </li>
                                                                        <li class="mdc-list-divider"></li>
                                                                        <li class="mdc-list-item" role="menuitem">
                                                                            <h6 class="item-subject font-weight-normal"> 10/04/2018 to 21/04/2018 </h6> </li>
                                                                        <li class="mdc-list-divider"></li>
                                                                        <li class="mdc-list-item" role="menuitem">
                                                                            <h6 class="item-subject font-weight-normal"> 22/04/2018 to 31/04/2018 </h6> </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-inner mr-0 p-4">
                                                        <div class="d-xl-flex justify-content-between">
                                                            <div class="graph-custom-legend">
                                                                <div class="d-flex align-items-center mb-2"> <span class="bg-danger mr-2"></span>
                                                                    <h5 class="m-0 font-weight-medium"> $25,370.00 </h5> </div>
                                                                <h5 class="font-weight-normal"> Global Budget </h5> </div>
                                                            <div class="graph-custom-legend">
                                                                <div class="d-flex align-items-center mb-2"> <span class="bg-warning mr-2"></span>
                                                                    <h5 class="m-0 font-weight-medium"> $5,370.00 </h5> </div>
                                                                <h5 class="font-weight-normal"> Today's Income </h5> </div>
                                                            <div class="graph-custom-legend">
                                                                <div class="d-flex align-items-center mb-2"> <span class="bg-primary mr-2"></span>
                                                                    <h5 class="m-0 font-weight-medium"> $2,370.00 </h5> </div>
                                                                <h5 class="font-weight-normal"> Spendings </h5> </div>
                                                        </div>
                                                        <div class="total-earning-wrapper">
                                                            <canvas id="total-earnings-1"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet">
                                            <div class="mdc-card mdc-tab-inner-card">
                                                <div class="card-inner mr-0">
                                                    <div class="d-flex align-items-center justify-content-center"> <i class="material-icons-outlined text-success"> account_balance_wallet </i>
                                                        <div>
                                                            <p class="m-0">Income</p>
                                                            <h2 class="m-0">$25038</h2>
                                                            <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+13%</span >from last month </p></div></div></div></div></div><div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet" > <div class="mdc-card mdc-tab-inner-card"> <div class="card-inner mr-0"> <div class="d-flex align-items-center justify-content-center" > <i lass="material-icons-outlined text-warning" > contacts </i> <div> <p class="m-0">Production</p><h2 class="m-0">12038</h2> <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+20%</span >from last month </p></div></div></div></div></div><div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet" > <div class="mdc-card mdc-tab-inner-card"> <div class="card-inner mr-0"> <div class="d-flex align-items-center justify-content-center" > <i class="material-icons-outlined text-danger" > store </i> <div> <p class="m-0">Total Projects</p><h2 class="m-0">12038</h2> <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+20%</span >from last month </p></div></div></div></div></div></div></div><div class="content"> <div class="mdc-layout-grid__inner"> <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet"> <div class="mdc-card p-0"> <div class="card-inner mr-0"> <div class="mdc-inner-card-header"> <div class="d-sm-flex justify-content-between align-items-center" > <h5 class="m-0">Total Earnings</h5> <div class="menu-button-container"> <button class="mdc-button mdc-menu-button mdc-button--light" > 13/03/2018 to 20/03/2018 <i class="material-icons"> arrow_drop_down </i> </button> <div class="mdc-menu mdc-menu-surface"tabindex="-1" id="total-earnings-menu-1" > <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" > <li class="mdc-list-item" role="menuitem" > <h6 class="item-subject font-weight-normal" > 21/03/2018 to 31/03/2018 </h6> </li><li class="mdc-list-divider"></li><li class="mdc-list-item" role="menuitem" > <h6 class="item-subject font-weight-normal" > 10/04/2018 to 21/04/2018 </h6> </li><li class="mdc-list-divider"></li><li class="mdc-list-item" role="menuitem" > <h6 class="item-subject font-weight-normal" > 22/04/2018 to 31/04/2018 </h6> </li></ul> </div></div></div></div><div class="card-inner mr-0 p-4"> <div class="total-earning-wrapper"> <canvas id="total-earnings-2"></canvas> </div><div class="d-xl-flex justify-content-between" > <div class="graph-custom-legend"> <div class="d-flex align-items-center mb-2" > <span class="bg-danger mr-2"></span>
                                                                <h5 class="m-0 font-weight-medium"> $25,370.00 </h5> </div>
                                                        <h5 class="font-weight-normal"> Global Budget </h5> </div>
                                                    <div class="graph-custom-legend">
                                                        <div class="d-flex align-items-center mb-2"> <span class="bg-warning mr-2"></span>
                                                            <h5 class="m-0 font-weight-medium"> $5,370.00 </h5> </div>
                                                        <h5 class="font-weight-normal"> Today's Income </h5> </div>
                                                    <div class="graph-custom-legend">
                                                        <div class="d-flex align-items-center mb-2"> <span class="bg-primary mr-2"></span>
                                                            <h5 class="m-0 font-weight-medium"> $2,370.00 </h5> </div>
                                                        <h5 class="font-weight-normal"> Spendings </h5> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet">
                                    <div class="mdc-card mdc-tab-inner-card">
                                        <div class="card-inner mr-0">
                                            <div class="d-flex align-items-center justify-content-center"> <i class="material-icons-outlined text-success"> account_balance_wallet </i>
                                                <div>
                                                    <p class="m-0">Income</p>
                                                    <h2 class="m-0">$25038</h2>
                                                    <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+13%</span >from last month </p></div></div></div></div></div><div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet" > <div class="mdc-card mdc-tab-inner-card"> <div class="card-inner mr-0"> <div class="d-flex align-items-center justify-content-center" > <i lass="material-icons-outlined text-warning" > contacts </i> <div> <p class="m-0">Production</p><h2 class="m-0">12038</h2> <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+20%</span >from last month </p></div></div></div></div></div><div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-9-tablet" > <div class="mdc-card mdc-tab-inner-card"> <div class="card-inner mr-0"> <div class="d-flex align-items-center justify-content-center" > <i class="material-icons-outlined text-danger" > store </i> <div> <p class="m-0">Total Projects</p><h2 class="m-0">12038</h2> <p class="m-0 tx-12 text-muted"> <span class="text-success mr-2">+20%</span >from last month </p></div></div></div></div></div></div></div></div></div></div><div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-9-tablet" > <div class="right-column-wrapper"> <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet" > <div class="mdc-card p-0"> <div class="card-inner"> <div class="mdc-card-right-light-header"> <div class="d-flex justify-content-between"> <div> <h5 class="mb-0 font-weight-medium"> Sofía Alcocer </h5> <p class="tx-12 mb-0 font-weight-medium text-primary" > West Amani </p></div><img src="{{ asset('admindashboard/assets/images/dashboard/People.png')}}" class="img-md" alt="people"/> </div></div><div class="p-4"> <div class="d-xl-flex align-items-center justify-content-between" > <div class="menu-button-container"> <button class="mdc-button mdc-menu-button mdc-button--transparent text-muted" > manager <i class="material-icons text-dark"> arrow_drop_down </i> </button> <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="designation-menu" > <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" > <li class="mdc-list-item" role="menuitem"> <h6 class="item-subject font-weight-normal" > staff </h6> </li><li class="mdc-list-item" role="menuitem"> <h6 class="item-subject font-weight-normal" > lead </h6> </li><li class="mdc-list-item" role="menuitem"> <h6 class="item-subject font-weight-normal" > tester </h6> </li></ul> </div></div><div class="relative-position"> <img src="{{ asset('admindashboard/assets/images/faces/face1.jpg')}}" class="img-md image-rouded-border half-positioned-image" alt=""/> </div></div><div class="d-xl-flex justify-content-between align-items-center mt-2" > <div class="d-flex justify-content-between"> <div class="pr-1"> <h6 class="m-0 font-weight-normal">3212</h6> <p class="m-0 text-muted">Projects</p></div><div> <h6 class="m-0 font-weight-normal">$232</h6> <p class="m-0 text-muted">Revenue</p></div></div><div> <button class="mdc-button filled-button--danger tx-11" > view profile </button> </div></div></div></div></div></div><div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet" > <div class="mdc-card "> <div class="card-inner"> <h5 class="font-weight-medium mb-2">Conversion</h5> <div class="d-xl-flex justify-content-between"> <div> <h4 class="font-weight-bold mb-0">22,190</h4> <p class="tx-12 text-muted"> <span class="font-weight-medium text-success pr-2" >+43%</span >last month </p></div><div class="conversion-chart-height"> <canvas id="conversion-chart"></canvas> </div></div></div></div></div><div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet" > <div class="mdc-card p-0"> <div class="card-inner"> <div class="mdc-inner-card-header padding-sm"> <h5 class="m-0">Ticket Status</h5> </div><div class="p-4"> <div class="mb-4"> <div class="d-xl-flex justify-content-between mb-2" > <p class="m-0 tx-12 font-weight-medium"> New Tickets </p><h5 class="m-0 font-weight-medium">5156</h5> </div><div role="progressbar" class="mdc-linear-progress mdc-linear-progress--info" data-buffer="false" > <div class="mdc-linear-progress__buffer w-100" ></div><div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar" > <span class="mdc-linear-progress__bar-inner" ></span> </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-xl-flex justify-content-between mb-2">
                                                <p class="m-0 tx-12 font-weight-medium"> Solved Tickets </p>
                                                <h5 class="m-0 font-weight-medium">2386</h5> </div>
                                            <div role="progressbar" class="mdc-linear-progress mdc-linear-progress--warning" data-buffer="false">
                                                <div class="mdc-linear-progress__buffer w-100"></div>
                                                <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar"> <span class="mdc-linear-progress__bar-inner"></span> </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-xl-flex justify-content-between mb-2">
                                                <p class="m-0 tx-12 font-weight-medium"> Unresolved </p>
                                                <h5 class="m-0 font-weight-medium">345</h5> </div>
                                            <div role="progressbar" class="mdc-linear-progress mdc-linear-progress--danger" data-buffer="false">
                                                <div class="mdc-linear-progress__buffer w-100"></div>
                                                <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar"> <span class="mdc-linear-progress__bar-inner"></span> </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-xl-flex justify-content-between mb-2">
                                                <p class="m-0 tx-12 font-weight-medium"> Open Tickets </p>
                                                <h5 class="m-0 font-weight-medium">120</h5> </div>
                                            <div role="progressbar" class="mdc-linear-progress mdc-linear-progress--dark" data-buffer="false">
                                                <div class="mdc-linear-progress__buffer w-100"></div>
                                                <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar"> <span class="mdc-linear-progress__bar-inner"></span> </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-xl-flex justify-content-between mb-2">
                                                <p class="m-0 tx-12 font-weight-medium"> Open Tickets </p>
                                                <h5 class="m-0 font-weight-medium">120</h5> </div>
                                            <div role="progressbar" class="mdc-linear-progress mdc-linear-progress--success" data-buffer="false">
                                                <div class="mdc-linear-progress__buffer w-100"></div>
                                                <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar"> <span class="mdc-linear-progress__bar-inner"></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-12-tablet">
                            <div class="mdc-card ">
                                <div class="card-inner">
                                    <div class="d-xl-flex justify-content-between align-items-center">
                                        <h5 class="font-weight-medium mb-2">Conversion</h5>
                                        <h4 class="font-weight-bold mb-2">22,190</h4> </div>
                                    <div class="conversion-chart-area-height">
                                        <canvas id="total-expences"></canvas>
                                    </div>
                                    <div class="d-xl-flex justify-content-between">
                                        <div class="text-center">
                                            <h4 class="font-weight-medium mb-0">32,453</h4>
                                            <p class="tx-12 text-warning"> Investment </p>
                                        </div>
                                        <div class="border-right"></div>
                                        <div class="text-center">
                                            <h4 class="font-weight-medium mb-0">51,730</h4>
                                            <p class="tx-12 text-primary"> Target </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-12-tablet">
                        <div class="mdc-card mdc-tab-inner-card">
                            <div class="card-inner mr-0 buy-now-card">
                                <div class="relative-position overflow-hidden"> <img src="{{ asset('admindashboard/assets/images/dashboard/img_1.jpg')}}" alt="thumb1" />
                                    <div class="rating-bar">
                                        <div class="d-flex">
                                            <select id="buynow-1" name="rating" autocomplete="off">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="buynow-btn">
                                        <button class="mdc-button filled-button--success"> Buy Now </button>
                                    </div>
                                </div>
                                <h5 class="m-0 mt-3">$28,000 / Month</h5>
                                <p class="m-0 tx-12 text-muted"> 3 Beds, @ Baths, 1800 sqft </p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-12-tablet">
                        <div class="mdc-card mdc-tab-inner-card">
                            <div class="card-inner mr-0 buy-now-card">
                                <div class="relative-position overflow-hidden"> <img src="{{ asset('admindashboard/assets/images/dashboard/img_2.jpg')}}" alt="thumb1" />
                                    <div class="rating-bar">
                                        <div class="d-flex">
                                            <select id="buynow-2" name="rating" autocomplete="off">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="buynow-btn">
                                        <button class="mdc-button filled-button--success"> Buy Now </button>
                                    </div>
                                </div>
                                <h5 class="m-0 mt-3">$26,000 / Month</h5>
                                <p class="m-0 tx-12 text-muted"> 3 Beds, @ Baths, 1700 sqft </p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-12-tablet">
                        <div class="mdc-card mdc-tab-inner-card">
                            <div class="card-inner mr-0 buy-now-card">
                                <div class="relative-position overflow-hidden"> <img src="{{ asset('admindashboard/assets/images/dashboard/img_3.jpg')}}" alt="thumb1" />
                                    <div class="rating-bar">
                                        <div class="d-flex">
                                            <select id="buynow-3" name="rating" autocomplete="off">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="buynow-btn">
                                        <button class="mdc-button filled-button--success"> Buy Now </button>
                                    </div>
                                </div>
                                <h5 class="m-0 mt-3">$23,000 / Month</h5>
                                <p class="m-0 tx-12 text-muted"> 3 Beds, @ Baths, 1500 sqft </p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-12-tablet">
                        <div class="mdc-card mdc-tab-inner-card">
                            <div class="card-inner mr-0 buy-now-card">
                                <div class="relative-position overflow-hidden"> <img src="{{ asset('admindashboard/assets/images/dashboard/img_4.jpg')}}" alt="thumb1" />
                                    <div class="rating-bar">
                                        <div class="d-flex">
                                            <select id="buynow-4" name="rating" autocomplete="off">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="buynow-btn">
                                        <button class="mdc-button filled-button--success"> Buy Now </button>
                                    </div>
                                </div>
                                <h5 class="m-0 mt-3">$30,000 / Month</h5>
                                <p class="m-0 tx-12 text-muted"> 3 Beds, @ Baths, 1900 sqft </p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-9-desktop mdc-layout-grid__cell--span-9-tablet">
                        <div class="mdc-card p-0">
                            <div class="card-inner mr-0 ">
                                <div class="mdc-inner-card-header padding-sm">
                                    <h5 class="m-0">Recent Orders</h5> </div>
                                <div>
                                    <div class="table-responsive">
                                        <table class="table table-hoverable">
                                            <thead>
                                                <tr>
                                                    <th class="font-weight-bold">Customer</th>
                                                    <th class="font-weight-bold">Location</th>
                                                    <th class="font-weight-bold">Order date</th>
                                                    <th class="font-weight-bold">Price</th>
                                                    <th class="font-weight-bold">COMPANY</th>
                                                    <th class="font-weight-bold">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center"> <img class="rounded-circle pr-2" src="{{ asset('admindashboard/assets/images/faces/face1.jpg')}}" alt="profile image" /> Arkell Charles </div>
                                                    </td>
                                                    <td>Portugal</td>
                                                    <td> 06 Nov 2020 </td>
                                                    <td>$1200</td>
                                                    <td>Apple</td>
                                                    <td>
                                                        <div class="mdc-button filled-button--danger mdc-ripple-upgraded p-2 tx-11"> close </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center"> <img class="rounded-circle pr-2" src="{{ asset('admindashboard/assets/images/faces/face2.jpg')}}" alt="profile image" /> Virendra Sana </div>
                                                    </td>
                                                    <td>Myanmar</td>
                                                    <td> 09 Jun 2020 </td>
                                                    <td>$2200</td>
                                                    <td>Google</td>
                                                    <td>
                                                        <div class="mdc-button filled-button--success mdc-ripple-upgraded p-2 tx-11"> open </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center"> <img class="rounded-circle pr-2" src="{{ asset('admindashboard/assets/images/faces/face3.jpg')}}" alt="profile image" /> Sofía Alcocer </div>
                                                    </td>
                                                    <td>Estonia</td>
                                                    <td> 10 Jan 2020 </td>
                                                    <td>$1400</td>
                                                    <td>Amazon</td>
                                                    <td>
                                                        <div class="mdc-button filled-button--danger mdc-ripple-upgraded p-2 tx-11"> close </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center"> <img class="rounded-circle pr-2" src="{{ asset('admindashboard/assets/images/faces/face4.jpg')}}" alt="profile image" /> Rutherford Brannan </div>
                                                    </td>
                                                    <td>Tanzania</td>
                                                    <td> 06 Dec 2020 </td>
                                                    <td>$1900</td>
                                                    <td>Microsoft</td>
                                                    <td>
                                                        <div class="mdc-button filled-button--danger mdc-ripple-upgraded p-2 tx-11"> close </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center"> <img class="rounded-circle pr-2" src="{{ asset('admindashboard/assets/images/faces/face5.jpg')}}" alt="profile image" /> Rutherford Brannan </div>
                                                    </td>
                                                    <td>Tanzania</td>
                                                    <td> 06 Dec 2020 </td>
                                                    <td>$1900</td>
                                                    <td>Microsoft</td>
                                                    <td>
                                                        <div class="mdc-button filled-button--danger mdc-ripple-upgraded p-2 tx-11"> close </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card mdc-tab-inner-card p-0">
                            <div class="card-inner mr-0 ">
                                <div class="mdc-inner-card-header padding-sm">
                                    <h5 class="m-0">Best Selling</h5> </div>
                                <div class="p-3">
                                    <div class="mdc-tab-wrapper mdc-tab--info">
                                        <div class="mdc-tab-bar" role="tablist">
                                            <div class="mdc-tab-scroller">
                                                <div class="mdc-tab-scroller__scroll-area">
                                                    <div class="mdc-tab-scroller__scroll-content">
                                                        <button class="mdc-tab mdc-tab--active" role="tab" aria-selected="true" tabindex="0"> <span class="mdc-tab__content"> <span class="mdc-tab__text-label font-weight-bold" >Upcoming</span > </span> <span class="mdc-tab-indicator mdc-tab-indicator--active"> <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline" ></span> </span> <span class="mdc-tab__ripple"></span> </button>
                                                        <button class="mdc-tab mdc-tab" role="tab" aria-selected="true" tabindex="0"> <span class="mdc-tab__content"> <span class="mdc-tab__text-label font-weight-bold" >History</span > </span> <span class="mdc-tab-indicator mdc-tab-indicator"> <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline" ></span> </span> <span class="mdc-tab__ripple"></span> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content content--active p-0">
                                            <div class="d-flex align-items-center line-height-md border-bottom pb-3 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face10.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Kendasha Wood </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> Start over with a new website </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center line-height-md border-bottom pb-3 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face9.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Shawn Massey </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> Unlock your rewards now </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center line-height-md border-bottom pb-3 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face8.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Larry Grant </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> Add Product to cart </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center line-height-md border-bottom pb-3 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face7.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Todd Harper </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> UI kit is now released </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center line-height-md pb-0 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face6.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Harvey Castro </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> Add Product to cart </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content p-0">
                                            <div class="d-flex align-items-center line-height-md border-bottom pb-3 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face9.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Shawn Massey </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> Unlock your rewards now </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center line-height-md border-bottom pb-3 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face10.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Kendasha Wood </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> Start over with a new website </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center line-height-md border-bottom pb-3 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face7.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Todd Harper </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> UI kit is now released </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center line-height-md pb-0 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face6.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Harvey Castro </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> Add Product to cart </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center line-height-md border-bottom pb-3 pt-3"> <img src="{{ asset('admindashboard/assets/images/faces/face8.jpg')}}" alt="thumb" class="img-rouded img-sm pr-2" />
                                                <div>
                                                    <p class="tx-12 font-weight-medium m-0"> Larry Grant </p>
                                                    <p class="tx-12 font-weight-normal m-0 text-muted"> Add Product to cart </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card mdc-tab-inner-card p-0">
                            <div class="card-inner mr-0">
                                <div class="mdc-inner-card-header padding-sm">
                                    <h5 class="m-0">Traffic Channels</h5> </div>
                                <div class="p-3 pt-4 pb-5">
                                    <div class="dougnut-chart-wrap">
                                        <canvas id="doughnutChart" height="220"></canvas>
                                    </div>
                                    <div class="doughnut-custom-legend mt-3 mb-1">
                                        <div class="d-xl-flex justify-content-center">
                                            <div class=" pl-3 pr-3">
                                                <p class="m-0 font-weight-medium tx-12">Direct</p>
                                                <div class="chart-bar-rect info"></div>
                                                <p class="m-0 text-muted tx-12">25%</p>
                                            </div>
                                            <div class=" pl-3 pr-3">
                                                <p class="m-0 font-weight-medium tx-12"> Organic </p>
                                                <div class="chart-bar-rect danger"></div>
                                                <p class="m-0 text-muted tx-12">60%</p>
                                            </div>
                                            <div class=" pl-3 pr-3">
                                                <p class="m-0 font-weight-medium tx-12"> Referral </p>
                                                <div class="chart-bar-rect warning"></div>
                                                <p class="m-0 text-muted tx-12">15%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="m-0 text-muted tx-12"> You have a 23% growth in comparison with last month. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-9-desktop mdc-layout-grid__cell--span-12-tablet">
                        <div class="mdc-card mdc-tab-inner-card p-0">
                            <div class="card-inner mr-0 ">
                                <div class="mdc-inner-card-header padding-sm">
                                    <h5 class="m-0">Project</h5> </div>
                                <div class="p-3">
                                    <div class="mdc-layout-grid__inner">
                                        <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-9-tablet">
                                            <div class="border-bottom pt-3 pb-2">
                                                <div class="d-flex justify-content-between d-flex align-items-center">
                                                    <div class="d-flex align-items-center mr-2"> <img src="{{ asset('admindashboard/assets/images/dashboard/Project_1.jpg')}}" class="img-md p-2" alt="project" />
                                                        <div>
                                                            <h6 class="m-0 font-weight-normal"> Logo Design </h6>
                                                            <p class="m-0 text-muted tx-12"> Caroline dash admin themes. </p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="m-0">19,200</h6>
                                                        <p class="m-0 text-muted tx-12"> sales </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-bottom pt-2 pb-2">
                                                <div class="d-flex justify-content-between d-flex align-items-center">
                                                    <div class="d-flex align-items-center mr-2"> <img src="{{ asset('admindashboard/assets/images/dashboard/Project_2.jpg')}}" class="img-md p-2" alt="project" />
                                                        <div>
                                                            <h6 class="m-0 font-weight-normal"> Branding Mockup </h6>
                                                            <p class="m-0 text-muted tx-12"> Caroline dash admin themes. </p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="m-0">19,200</h6>
                                                        <p class="m-0 text-muted tx-12"> sales </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-bottom pt-2 pb-2">
                                                <div class="d-flex justify-content-between d-flex align-items-center">
                                                    <div class="d-flex align-items-center mr-2"> <img src="{{ asset('admindashboard/assets/images/dashboard/Project_3.jpg')}}" class="img-md p-2" alt="project" />
                                                        <div>
                                                            <h6 class="m-0 font-weight-normal"> Awesome Mobile App </h6>
                                                            <p class="m-0 text-muted tx-12"> Caroline dash admin themes. </p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="m-0">19,200</h6>
                                                        <p class="m-0 text-muted tx-12"> sales </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2 pb-2">
                                                <div class="d-flex justify-content-between d-flex align-items-center">
                                                    <div class="d-flex align-items-center mr-2"> <img src="{{ asset('admindashboard/assets/images/dashboard/Project_4.jpg')}}" class="img-md p-2" alt="project" />
                                                        <div>
                                                            <h6 class="m-0 font-weight-normal"> Logo Design </h6>
                                                            <p class="m-0 text-muted tx-12"> Caroline dash admin themes. </p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h6 class="m-0">19,200</h6>
                                                        <p class="m-0 text-muted tx-12"> sales </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-9-tablet">
                                            <div class="mt-2">
                                                <div class="pr-2 pb-2 pl-3 border-left">
                                                    <h5 class="font-weight-medium m-0"> Rafferals Page </h5>
                                                    <h3 class="m-0 mt-3 font-weight-medium"> 23,200 <span class="tx-12 font-weight-normal text-muted m-0" >Total</span > </h3>
                                                    <div class="group-progress">
                                                        <div class="progress-info"></div>
                                                        <div class="progress-success"></div>
                                                        <div class="progress-danger"></div>
                                                        <div class="progress-primary"></div>
                                                        <div class="progress-warning"></div>
                                                    </div>
                                                    <div class="d-flex justify-content-between pb-2 border-bottom">
                                                        <div class="d-flex align-items-center text-dark tx-12 font-weight-medium"> <span class="box-progress bg-info"></span> Website </div>
                                                        <p class="m-0 text-dark tx-12 font-weight-medium"> 40% </p>
                                                    </div>
                                                    <div class="d-flex justify-content-between pb-2 pt-2 border-bottom">
                                                        <div class="d-flex align-items-center text-dark tx-12 font-weight-medium"> <span class="box-progress bg-success"></span> Facebook </div>
                                                        <p class="m-0 text-dark tx-12 font-weight-medium"> 20% </p>
                                                    </div>
                                                    <div class="d-flex justify-content-between pb-2 pt-2 border-bottom">
                                                        <div class="d-flex align-items-center text-dark tx-12 font-weight-medium"> <span class="box-progress bg-danger"></span> Instagram </div>
                                                        <p class="m-0 text-dark tx-12 font-weight-medium"> 25% </p>
                                                    </div>
                                                    <div class="d-flex justify-content-between pb-2 pt-2 border-bottom">
                                                        <div class="d-flex align-items-center text-dark tx-12 font-weight-medium"> <span class="box-progress bg-primary"></span> Medium </div>
                                                        <p class="m-0 text-dark tx-12 font-weight-medium"> 10% </p>
                                                    </div>
                                                    <div class="d-flex justify-content-between pb-2 pt-2">
                                                        <div class="d-flex align-items-center text-dark tx-12 font-weight-medium"> <span class="box-progress bg-warning"></span> Others </div>
                                                        <p class="m-0 text-dark tx-12 font-weight-medium"> 10% </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-9-tablet">
                        <div class="mdc-card mdc-tab-inner-card p-0">
                            <div class="card-inner mr-0">
                                <div class="mdc-inner-card-header padding-sm">
                                    <h5 class="m-0">Monthly Price change</h5> </div>
                                <div class="p-3 pt-4 pb-5">
                                    <div class="dougnut-chart-wrap">
                                        <canvas id="visitors"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-9-tablet">
                        <div class="mdc-card mdc-tab-inner-card p-0">
                            <div class="card-inner mr-0">
                                <div class="mdc-inner-card-header padding-sm">
                                    <h5 class="m-0">Yearly Price change</h5> </div>
                                <div class="p-3 pt-4 pb-5">
                                    <div class="yearly-pricing-wrapper">
                                        <canvas id="yearly-pricing"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div> --}}
            </main>
            <!-- partial:partials/_footer.html -->
            <footer>
            <div class="mdc-layout-grid">
              <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                  <span class="tx-14"
                    >Copyright © 2024
                    <a href="javascript:void(0)" target="_blank">Flash Fit</a>. All
                    rights reserved.</span>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                  <div class="d-flex align-items-center">
                    <a href="#">Documentation</a>
                    <span class="vertical-divider"></span>
                    <a href="#">FAQ</a>
                  </div>
                </div>
              </div>
            </div>
          </footer>

            <!-- partial -->
          </div>
        </div>
    </div>


      

    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- plugins:js -->
<script src="{{ asset('admindashboard/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page-->
<script src="{{ asset('admindashboard/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admindashboard/assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
<!-- End plugin js for this page-->

<!-- inject:js -->
<script src="{{ asset('admindashboard/assets/js/material.js') }}"></script>
<script src="{{ asset('admindashboard/assets/js/misc.js') }}"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src="{{ asset('admindashboard/assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page-->

<!-- jQuery (necessary for the carousel plugin) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS (assuming you need this for the carousel functionality) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 1,
      nav: true,
      autoWidth:true,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  });
</script>
</body>
</html>

@endsection
