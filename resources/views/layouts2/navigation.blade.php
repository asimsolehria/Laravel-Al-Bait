<nav id="sidebar" aria-label="Main Navigation" data-simplebar="init"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 641px;"></div></div><div class="simplebar-track horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
<!-- Side Header -->
<div class="content-header bg-white-5">
    <!-- Logo -->
    <a class="font-w600 text-dual" >
        <i style="font-size:20px;color:rgb(255, 0, 13)"></i>

         {{-- <img src="{{ asset('/assets/images/print_logo2.jpg') }}" style="width: 60px" ;> --}}
         <span class="smini-hide">
             <span class="font-w700 font-size-h5">Albait Employee</span> <span class="font-w400"></span>
        </span>
    </a>
    <!-- END Logo -->

    <!-- Options -->
    <div>

        <!-- Close Sidebar, Visible only on mobile screens -->
        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
            <i class="fa fa-times"></i>
        </a>
        <!-- END Close Sidebar -->
    </div>
    <!-- END Options -->
</div>
<!-- END Side Header -->

<!-- Side Navigation -->
<div class="content-side content-side-full">
    <ul class="nav-main">

            @can('hr-list')
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <span class="nav-main-link-name">Employee Detail's</span>
                    </a>
                    <ul class="nav-main-submenu">

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.employes.index')}}">
                                    <span class="nav-main-link-name">Employes</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.appraisalcases.index')}}">
                                    <span class="nav-main-link-name">Acr Appraisal Cases</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.acrpart4.index')}}">
                                    <span class="nav-main-link-name">Acr Appraisal part 4</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <span class="nav-main-link-name">Hr Settings</span>
                                </a>
                                <ul class="nav-main-submenu">

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.payscale.index')}}">
                                    <span class="nav-main-link-name">payscale</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.disciplinaryactiontype.index')}}">
                                    <span class="nav-main-link-name">disciplinaryactiontype</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.designation.index')}}">
                                    <span class="nav-main-link-name">Designation</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.acrgrading.index')}}">
                                    <span class="nav-main-link-name">Acr grading</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.acrevaluationfactor.index')}}">
                                    <span class="nav-main-link-name">Acr Evaluation Factor</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.acrfactorevaluationtypes.index')}}">
                                    <span class="nav-main-link-name">Acr Evaluation type</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.bankaccounttype.index')}}">
                                    <span class="nav-main-link-name">Account type</span>
                                </a>
                            </li>
                    </li>
                </ul>
            </li>
            @endcan
                
        <!-- END Side Navigation -->
    </div></div></nav>