<nav id="sidebar" aria-label="Main Navigation" data-simplebar="init"><div class="simplebar-track vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="visibility: visible; top: 0px; height: 641px;"></div></div><div class="simplebar-track horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;"><div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
<!-- Side Header -->
<div class="content-header bg-white-5">
    <!-- Logo -->
    <a class="font-w600 text-dual" >
        <i class="fa fa-medkit" style="font-size:20px;color:rgb(255, 0, 13)"></i>

         {{-- <img src="{{ asset('/assets/images/print_logo2.jpg') }}" style="width: 60px" ;> --}}
         <span class="smini-hide">
             <span class="font-w700 font-size-h5">Paraplegic Center</span> <span class="font-w400"></span>
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
        <li class="nav-main-item">
            <a class="nav-main-link active" href="{{route('home')}}">
                <i class="nav-main-link-icon si si-speedometer"></i>
                <span class="nav-main-link-name">Dashboard</span>
            </a>
        </li>
        @can('appointment-list')
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-energy"></i>
                <span class="nav-main-link-name">Appointment</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('appointment.add') }}">
                        <span class="nav-main-link-name">Add Appointment</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('appointment.index') }}">
                        <span class="nav-main-link-name">Appointments</span>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @can('opd-list')
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-energy"></i>
                <span class="nav-main-link-name">OPD</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('selectAppointment') }}">
                        <span class="nav-main-link-name">Select Appointment</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('opd.visits')}}">
                        <span class="nav-main-link-name">OPD Records</span>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @can('reg-list')
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-energy"></i>
                <span class="nav-main-link-name">Registration</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('registration.visits') }}">
                        <span class="nav-main-link-name">Select Patient</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('registration.reg')}}">
                        <span class="nav-main-link-name">Registered Patients</span>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        {{-- @can('ward-list') --}}
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-energy"></i>
                <span class="nav-main-link-name">Wards</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('ward.add') }}">
                        <span class="nav-main-link-name">Add Ward</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('ward.index') }}">
                        <span class="nav-main-link-name">Wards List</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('patientwardlist') }}">
                        <span class="nav-main-link-name">ward patient</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- @endcan --}}
        @can('pharmacy-list')
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-energy"></i>
                <span class="nav-main-link-name">Pharmacy</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link"  href="{{route('pharmacy.indexCat')}}">
                        <span class="nav-main-link-name">Categories</span>
                    </a>
                    <ul class="nav-main-submenu">
                        {{-- <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('pharmacy.addCat') }}">
                                <span class="nav-main-link-name">Add Category</span>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-main-item">
                            <a class="nav-main-link" href="{{route('pharmacy.indexCat')}}">
                                <span class="nav-main-link-name">Categories List</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('pharmacy.indexItem') }}">
                        <span class="nav-main-link-name">Items</span>
                    </a>

                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('pharmacy.indexlocation') }}">
                        <span class="nav-main-link-name">Item Location</span>
                    </a>

                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('pharmacy.indexquantity') }}">
                        <span class="nav-main-link-name">Quantity type</span>
                    </a>

                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('pharmacy.indexStockin') }}">
                        <span class="nav-main-link-name">Stock (In)</span>
                    </a>
                    {{-- <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('pharmacy.addStockin') }}">
                                <span class="nav-main-link-name">Add Stock (In)</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('pharmacy.indexStockin') }}">
                                <span class="nav-main-link-name">Stock (In) Detail</span>
                            </a>
                        </li>
                    </ul> --}}
                </li>
            </ul>
        </li>
        @endcan
        @can('admin-section')
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-energy"></i>
                <span class="nav-main-link-name">User Accounts</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('permission.add') }}">
                        <span class="nav-main-link-name">Manage Permission</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('users.index') }}">
                        <span class="nav-main-link-name">Manage Users</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('roles.index') }}">
                        <span class="nav-main-link-name">Manage Roles</span>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @can('admin-section')
        <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon si si-energy"></i>
                <span class="nav-main-link-name">General Setting</span>
            </a>
            <ul class="nav-main-submenu">

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <span class="nav-main-link-name">Departments</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('dept_category.index')}}">
                                <span class="nav-main-link-name">Dept. Categories</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('depts.index')}}">
                                <span class="nav-main-link-name">Departments</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <span class="nav-main-link-name">Suppliers</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('supplier.add')}}">
                                <span class="nav-main-link-name">Add Supplier</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('supplier.index')}}">
                                <span class="nav-main-link-name">Suppliers List</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <span class="nav-main-link-name">Geography</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('countries.index')}}">
                                <span class="nav-main-link-name">Countries</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('provinces.index')}}">
                                <span class="nav-main-link-name">Provinces</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            {{-- <a class="nav-main-link" href="{{route('supplier.index')}}"> --}}
                                    <span class="nav-main-link-name">Districts</span>
                             </a>
                            </li>

                                </ul>

                                <ul class="nav-main-submenu">
                    </ul>
                </li>


                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                        <span class="nav-main-link-name">Medical</span>
                    </a>
                    @endcan
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('advices.index')}}">
                                <span class="nav-main-link-name">Advices(referout)</span>
                            </a>
                        </li>
                    </li>


                                </ul>

                            </li>
                        </ul>
                    </li>
                @can('hr-list')
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                            <i class="nav-main-link-icon si si-energy"></i>
                            <span class="nav-main-link-name">HR</span>
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
                                <a class="nav-main-link" href="{{ route('occupationcatagory.index')}}">
                                    <span class="nav-main-link-name">Occupation catagory</span>
                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('occupationdetail.index')}}">
                                    <span class="nav-main-link-name">Occupation detail</span>
                                </a>
                            </li>

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
                            {{-- <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('hr.hrreport.report')}}">
                                    <span class="nav-main-link-name">HR REPORT</span>
                                </a>
                            </li> --}}

                        {{-- </li> --}}
                    {{-- </a>
                </li> --}}
            </li>


                        </ul>

                    </li>
                </ul>
            </li>
                @endcan
                @can('cf-list')
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-energy"></i>
                    <span class="nav-main-link-name">Clubfoot</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('clubfoot.cbbasic.index') }}">
                            <span class="nav-main-link-name">Clubfoot Appointment</span>
                        </a>
                    </li>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('clubfoot.cbbasic.index') }}">
                            <span class="nav-main-link-name">Clubfoot Patients</span>
                        </a>
                    </li>

                    {{-- <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('roles.index') }}">
                            <span class="nav-main-link-name">Manage Roles</span>
                        </a>
                    </li> --}}
                </ul>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('clubfoot.cbpatient.index') }}">
                    <span class="nav-main-link-name">Clubfoot Patient</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link" href="{{ route('clubfoot.cfreport.report') }}">
                    <span class="nav-main-link-name">Clubfoot reports</span>
                </a>
            </li>



        </div>
        @endcan
        <!-- END Side Navigation -->
        </div></div></nav>
                    <!-- END Sidebar -->

