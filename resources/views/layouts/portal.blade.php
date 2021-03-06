
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>{{__('trans.lms')}}</title>
    <link rel="icon" type="image/png" href="{{asset('assets/favicon.png')}}" />

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/npm/fontawesome-5.14.0/css/fontawesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/npm/fontawesome-5.14.0/css/regular.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/npm/fontawesome-5.14.0/css/brands.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/npm/fontawesome-5.14.0/css/solid.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/npm/basictable@1.0.9/basictable.min.css')}}">

        <!-- include vendor stylesheets used in "Form Basic Elements" page. see "application/views/default/pages/partials/form-basic/@vendor-stylesheets.hbs" -->
    <link rel="stylesheet" type="text/css" href="{{asset('\npm\nouislider@14.6.1\distribute\nouislider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('\npm\ion-rangeslider@2.3.1\css\ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('\combine\npm\tiny-date-picker@3.2.8\tiny-date-picker.min.css,npm\tiny-date-picker@3.2.8\date-range-picker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('\npm\eonasdan-bootstrap-datetimepicker@4.17.47\build\css\bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('\npm\bootstrap-colorpicker@3.2.0\dist\css\bootstrap-colorpicker.min.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/ace.min.css')}}">
  </head>

  <body>
    <div class="body-container">
      <div class="main-container">
        <div id="sidebar" class="sidebar sidebar-dark sidebar-color sidebar-fixed sidebar-backdrop expandable" data-swipe="true" data-dismiss="true">
          <div class="sidebar-inner">
            <div class="ace-scroll flex-grow-1 mt-1px" data-ace-scroll="{}">
              <!-- all sidebar header is inside scrollable area -->
              <!-- .navbar-brand inside sidebar, only shown in desktop view -->
              <!-- .navbar-brand inside sidebar, only shown in desktop view -->
              <div class="d-none d-xl-flex sidebar-section-item fadeable-left fadeable-top">
                <div class="fadeinable">
                  <!-- shown when sidebar is collapsed -->
                  <div class="py-2 mx-1" id="sidebar-header-brand1">
                    <a class="navbar-brand text-140">
{{--                      <i class="fa fa-leaf text-success-l1"></i>--}}
                      <img src="{{asset('assets/image/custom/logo.png')}}" width="70px" height="50px">
                    </a>
                  </div>
                </div>

                <div class="fadeable w-100">
                  <!-- shown when sidebar is full-width -->
                  <div class="py-2 text-center mx-3" id="sidebar-header-brand2">
                    <a class="navbar-brand ml-n2 text-140 text-white" href="#">

                      <img src="{{asset('assets/image/custom/logo.png')}}" width="150px" height="60px">
                    </a>
                  </div>
                </div>
              </div><!-- /.sidebar-section-item  -->


              @include('layouts.navigation-portal')

            </div>



          </div>
        </div>


        <div role="main" class="main-content">
          <nav class="navbar navbar-sm navbar-expand-lg navbar-fixed navbar-white">
            <div class="navbar-inner shadow-md">

              <button type="button" class="btn btn-burger align-self-center ml-25 mr-2 d-none d-xl-flex btn-h-lighter-blue" data-toggle="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
                <span class="bars text-default"></span>
              </button>

              <div class="d-flex h-100 justify-content-xl-between align-items-center">
                <button type="button" class="btn btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none btn-h-lighter-blue" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
                  <span class="bars text-default"></span>
                </button>

                {{-- <div class="d-none d-xl-inline-flex">
                  <div>
                    <ol class="breadcrumb breadcrumb-nosep align-items-center pl-1 text-nowrap mr-2">
                      <li class="breadcrumb-item active text-dark-tp4 text-105 text-600">
                        @hasSection ('module')
                            @yield('module')
                        @else
                          Welcome to Dashboard
                        @endif
                      </li>
                    </ol>
                  </div>
                </div> --}}
                {{-- START breadcrumb --}}
                <div class="d-none d-xl-inline-flex">
                  <div>
                    <ol class="breadcrumb breadcrumb-nosep align-items-center pl-1 text-nowrap mr-2">
                      <li class="breadcrumb-item text-secondary text-500">
                        @hasSection ('module')
                            @yield('module')
                        @else
                        {{__('trans.welcome')}}
                        @endif
                      </li>
                      <li class="mx-15 text-grey-l4 text-110">></li>
                      <li class="breadcrumb-item active text-dark-tp4 text-105 text-300">
                        @hasSection ('element')
                            @yield('element')
                        @endif
                      </li>
                    </ol>
                  </div>
                </div>
                {{-- END breadcrumb  --}}

                {{-- <a class="navbar-brand d-xl-none mx-1 text-dark-m3 text-130" href="{{route('portal.dashboard')}}" style="font-family: 'Pacifico';">{{config('app.name')}}</a> --}}
                <div class="d-inline-flex">
                  <h2 class="d-none d-xl-inline-block text-140 text-dark-m2 mb-0 pb-1">{{$template ?? ''}}</h2>
                </div>
              </div>

              {{-- <div class="ml-auto navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu2">

                <div class="navbar-nav navbar-links">
                  <ul class="nav">
                    <li class="nav-item mx-2">
                      <a href="#" class="active btn bgc-h-primary-l4 btn-brc-tp btn-outline-secondary btn-h-lighter-secondary btn-a-outline-primary btn-a-bgc-tp btn-a-bold px-4 px-lg-2">
                       @hasSection ('topTitle')
                           @yield('topTitle')
                       @else
                          Welcome to Dashboard
                       @endif
                        <!--
                              Or use these along with `d-style` on parent 'A' for a different highlight color
                              <div class="d-none d-lg-block v-active position-bl w-100 border-t-3 brc-primary-m1 mb-n3px"></div>
                              <div class="d-lg-none v-active position-tl h-100 border-l-4 brc-primary-m1 ml-n3px"></div>
                              -->
                      </a>
                    </li>

                  </ul>
                </div>

              </div> --}}


              <div class="ml-auto mr-xl-3 navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">

                <div class="navbar-nav">
                  <ul class="nav has-active-border">
                    <li class="nav-item dropdown dropdown-mega">
                      <a class="nav-link dropdown-toggle mr-1px" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list-alt mr-2 d-lg-none"></i>
                        @auth
                          <img class="mr-2 radius-round border-2 brc-primary-tp3 p-1px" src="{{ Auth::user()->picture ?? asset('..\assets\image\avatar\avatar4.png')}}" width="36" alt="Natalie's Photo">
                          {{ Auth::user()->name }}
                        @endauth
                        <i class="caret fa fa-angle-down d-none d-lg-block"></i>
                        <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                      </a>
                      <div class="p-0 dropdown-menu dropdown-animated brc-primary-m3 border-b-2 ml-1 mr-1px w-auto bgc-default-l4 dropdown-clickable" style="left:auto">
                        <div class="d-flex flex-column">
                          <div class="row mx-0">
                            <div class="bgc-white col-lg-12 col-12 p-4">
                              <h5 class="text-dark-m2">
                                <i class="fas fa-bullhorn mr-1 text-primary-m1"></i>
                                Select Language
                              </h5>
{{--                              <div class="mt-3 text-center" style="line-height: 128px;">No Notification</div>--}}
                                <form action="{{route('lang')}}" method="post">
                                    @csrf
                                    <select name="lang">
                                        <option value="en" {{(Session::get('applocale')=='en'?'selected':'')}}>English</option>
                                        <option value="ur" {{(Session::get('applocale')=='ur'?'selected':'')}}>Urdu</option>
                                    </select>
                                    <button type="submit" value="Set Language">Set Language</button>
                                </form>
                            </div>
                          </div>
                          <div class="order-first order-lg-last ">
                            <hr class="d-none d-lg-block brc-default-l1 my-0">
                            <div class="row mx-0 bgc-primary-l4">
                              <div class="col-lg-8 offset-lg-2 d-flex justify-content-center py-4 d-flex">
                                <a href="{{route('portal.users.profile')}}" class="mx-2px btn btn-sm btn-app btn-outline-warning btn-h-outline-warning btn-a-outline-warning radius-1 border-2">
                                  <i class="fa fa-user text-190 d-block mb-2 h-4"></i>
                                  Profile
                                </a>
                                <a href="{{route('portal.users.password')}}" class="mx-2px btn btn-sm btn-app btn-outline-info btn-h-outline-info radius-1 border-2">
                                  <i class="fa fa-key text-190 d-block mb-2 h-4"></i>
                                  Password
                                </a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-inline-block">
                                  @csrf
                                  <button type="submit" class="mx-2px btn btn-sm btn-app btn-dark radius-1">
                                    <i class="fa fa-sign-out-alt text-150 d-block mb-2 h-4"></i>
                                    Logout
                                  </button>
                                </form>
                              </div>
                            </div>
                            <hr class="d-lg-none brc-default-l1 mt-0">
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>


            </div>

          </nav>
          <div class="page-content container container-plus">
            <!-- page header -->
            <div class="d-lg-none page-header border-0 py-0">
              <h1 class="text-dark-m3 pb-0 mb-0 text-125">{{$template ?? ''}}</h1>
            </div>
            @yield('content')
          </div>
          @include('layouts.footer-portal')
        </div>
      </div>
    </div>

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-4.5.2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/ace.min.js')}}"></script>
    <script src="{{asset('assets/js/demo.min.js')}}"></script>


    <!-- include vendor scripts used in "Basic Tables" page. see "application/views/default/pages/partials/tables-basic/@vendor-scripts.hbs" -->
    <script src="{{asset('assets\npm\basictable@1.0.9\jquery.basictable.min.js')}}"></script>
    <script src="{{asset('assets\npm\sweetalert2@9.17.1\dist\sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets\npm\select2@4.0.13\dist\js\select2.min.js')}}"></script>


    <!-- include vendor scripts used in "Form Basic Elements" page. see "application/views/default/pages/partials/form-basic/@vendor-scripts.hbs" -->
    <script src="{{asset('assets\npm\autosize@4.0.2\dist\autosize.min.js')}}"></script>
    <script src="{{asset('assets\npm\bootstrap-maxlength@1.10.0\dist\bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('assets\npm\inputmask@5.0.5\dist\jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('assets\npm\nouislider@14.6.1\distribute\nouislider.min.js')}}"></script>
    <script src="{{asset('assets\npm\ion-rangeslider@2.3.1\js\ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets\npm\bootstrap-touchspin@4.3.0\dist\jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('assets\npm\tiny-date-picker@3.2.8\dist\date-range-picker.min.js')}}"></script>
    <script src="{{asset('assets\npm\moment@2.27.0\moment.min.js')}}"></script>
    <script src="{{asset('assets\npm\eonasdan-bootstrap-datetimepicker@4.17.47\src\js\bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('assets\npm\bootstrap-colorpicker@3.2.0\dist\js\bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('assets\npm\es6-object-assign@1.1.0\dist\object-assign-auto.min.js')}}"></script>
    <script src="{{asset('assets\npm\@jaames\iro@5.2.0\dist\iro.min.js')}}"></script>
    <script src="{{asset('assets\npm\jquery-knob@1.2.11\dist\jquery.knob.min.js')}}"></script>

    @yield('scripts')
  </body>
</html>
