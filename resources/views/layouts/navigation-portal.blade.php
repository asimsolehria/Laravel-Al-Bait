<nav aria-label="Main">
                <ul class="nav flex-column mt-2 has-active-border active-on-top">

                  {{-- <li class="nav-item-caption">
                    <span class="fadeable pl-3">MAIN</span>
                    <span class="fadeinable mt-n2 text-125">&hellip;</span>
                  </li> --}}


                  {{-- <li class="nav-item active">
                    <a href="html/dashboard.html" class="nav-link">
                      <i class="nav-icon fa fa-tachometer-alt"></i>
                      <span class="nav-text fadeable">
                  	  <span>Dashboard</span>
                      </span>
                    </a>
                    <b class="sub-arrow"></b>
                  </li> --}}


{{--                  <li class="nav-item">--}}

{{--                    <a href="#" class="nav-link dropdown-toggle collapsed">--}}
{{--                      <i class="nav-icon fa fa-cube"></i>--}}
{{--                      <span class="nav-text fadeable">--}}
{{--                  	  <span>{{__('trans.profile')}}</span>--}}
{{--                      </span>--}}

{{--                      <b class="caret fa fa-angle-left rt-n90"></b>--}}

{{--                      <!-- or you can use custom icons. first add `d-style` to 'A' -->--}}
{{--                      <!----}}
{{--                  	 	<b class="caret d-n-collapsed fa fa-minus text-80"></b>--}}
{{--                  	 	<b class="caret d-collapsed fa fa-plus text-80"></b>--}}
{{--                  	 -->--}}
{{--                    </a>--}}

{{--                    <div class="hideable submenu collapse">--}}
{{--                      <ul class="submenu-inner">--}}
{{--                        <li class="nav-item">--}}
{{--                          <span class="nav-text">--}}
{{--                  				  <span>--}}
{{--                                       <!-- the user avatar and image -->--}}
{{--              <div class="sidebar-section-item pt-2 fadeable-left fadeable-top">--}}
{{--                <div class="fadeinable">--}}
{{--                  <img alt="Natalie's avatar" src="assets/image/avatar/avatar3.jpg" width="48" class="p-2px border-2 brc-primary-tp2 radius-round" />--}}
{{--                </div>--}}

{{--                <div class="fadeable hideable">--}}
{{--                  <div class="py-2 d-flex flex-column align-items-center">--}}
{{--                    @auth--}}
{{--                      <img alt="Natalie's avatar" src="assets/image/avatar/avatar.png" class="p-2px border-2 brc-primary-m2 radius-round" />--}}
{{--                      {{ Auth::user()->name }}--}}

{{--                    @endauth--}}

{{--                    @guest--}}
{{--                    <img alt="Natalie's avatar" src="assets/image/avatar/avatar2.png" class="p-2px border-2 brc-primary-m2 radius-round" />--}}
{{--                       <a href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    @endguest--}}

{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--                            </span>--}}
{{--                            </span>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                        <a href="" class="nav-link">--}}
{{--                            <span class="nav-text">--}}
{{--                  				  <span> Change Password </span>--}}
{{--                            </span>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        @auth--}}

{{--                        <li class="nav-item">--}}
{{--                          <a href="href="{{ route('logout') }}"--}}
{{--                          onclick="event.preventDefault();--}}
{{--                                        document.getElementById('logout-form').submit();"  class="nav-link">--}}
{{--                           {{ __('Logout') }}--}}
{{--                            <span class="nav-text">--}}
{{--                  				  <span>--}}
{{--                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                @csrf--}}
{{--                             </form>--}}

{{--                            </span>--}}
{{--                            </span>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        @endauth--}}
{{--                      </ul>--}}
{{--                    </div>--}}

{{--                    <b class="sub-arrow"></b>--}}

{{-- 			<bclass="sub-arrow"></b> --}}
{{--		</li>--}}
		<li class="nav-item {{isset($menu) ? ($menu=='system_setting' ? 'active open' : '') : ''}}">
			<a href="#" id="system_setting" class="nav-link dropdown-toggle {{isset($menu) ? ($menu=='system_setting' ? '' : 'collapsed') : 'collapsed'}}">
					<i class="nav-icon fa fa-cube"></i>
					<span class="nav-text fadeable">
							<span>{{__('trans.system_setting')}}</span>
					</span>
					<b class="caret fa fa-angle-left rt-n90"></b>
			</a>
			<div class="hideable submenu collapse {{isset($menu) ? ($menu=='system_setting' ? 'show' : '') : ''}}">
					<ul class="submenu-inner">
							<li class="nav-item">
									<a href="{{route('portal.roles.index')}}" class="nav-link">
											<span class="nav-text">
													<span>{{__('trans.roles')}}</span>
											</span>
									</a>
							</li>
							<li class="nav-item {{isset($sub_menu) ? ($sub_menu=='users' ? 'active' : '') : ''}}">
									<a href="{{route('portal.users.index')}}" class="nav-link">
											<span class="nav-text">
													<span>{{__('trans.user')}}</span>
											</span>
									</a>
              </li>
              <li class="nav-item">
                <a href="{{url('permissions')}}" class="nav-link">
                    <span class="nav-text">
                        <span>{{__('trans.permission')}}</span>
                    </span>
                </a>
            </li>
					</ul>
			</div>
			<b class="sub-arrow"></b>
		</li>
	</ul>



{{-- ****************************** Chart of Account Menu *************************************************** --}}

	<ul class="nav flex-column mt-2 has-active-border active-on-top">
		<li class="nav-item {{isset($menu) ? ($menu=='system_setting' ? 'active open' : '') : ''}}">
			<a href="#" id="system_setting" class="nav-link dropdown-toggle {{isset($menu) ? ($menu=='system_setting' ? '' : 'collapsed') : 'collapsed'}}">
					<i class="nav-icon fa fa-cube"></i>
					<span class="nav-text fadeable">
							<span>{{__('trans.chartofacc')}}</span>
					</span>
					<b class="caret fa fa-angle-left rt-n90"></b>
			</a>
			<div class="hideable submenu collapse {{isset($menu) ? ($menu=='system_setting' ? 'show' : '') : ''}}">
					<ul class="submenu-inner">
							<li class="nav-item">
									<a href="{{ route('chartofaccount.index') }}" class="nav-link">
											<span class="nav-text">
													<span>{{__('trans.view')}}</span>
											</span>
									</a>
							</li>
					</ul>
			</div>
			<b class="sub-arrow"></b>
		</li>
	</ul>


{{-- ****************************** HR Employee Menu *************************************************** --}}

	<ul class="nav flex-column mt-2 has-active-border active-on-top">
		<li class="nav-item {{isset($menu) ? ($menu=='system_setting' ? 'active open' : '') : ''}}">
			<a href="#" id="system_setting" class="nav-link dropdown-toggle {{isset($menu) ? ($menu=='system_setting' ? '' : 'collapsed') : 'collapsed'}}">
					<i class="nav-icon fa fa-cube"></i>
					<span class="nav-text fadeable">
							<span>Employee Details</span>
					</span>
					<b class="caret fa fa-angle-left rt-n90"></b>
			</a>
			<div class="hideable submenu collapse {{isset($menu) ? ($menu=='system_setting' ? 'show' : '') : ''}}">
					<ul class="submenu-inner">
							<li class="nav-item">
									<a href="{{ route('hr.employes.index') }}" class="nav-link">
											<span class="nav-text">
													<span>List of Employee</span>
											</span>
									</a>
							</li>
					</ul>
			</div>
			<b class="sub-arrow"></b>
		</li>
	</ul>




{{-- ****************************** Suplier Profile Menu *************************************************** --}}

	<ul class="nav flex-column mt-2 has-active-border active-on-top">
		<li class="nav-item {{isset($menu) ? ($menu=='system_setting' ? 'active open' : '') : ''}}">
			<a href="#" id="system_setting" class="nav-link dropdown-toggle {{isset($menu) ? ($menu=='system_setting' ? '' : 'collapsed') : 'collapsed'}}">
					<i class="nav-icon fa fa-cube"></i>
					<span class="nav-text fadeable">
							<span>Suplier Details</span>
					</span>
					<b class="caret fa fa-angle-left rt-n90"></b>
			</a>
			<div class="hideable submenu collapse {{isset($menu) ? ($menu=='system_setting' ? 'show' : '') : ''}}">
					<ul class="submenu-inner">
							<li class="nav-item">
									<a href="{{ route('supplier.index') }}" class="nav-link">
											<span class="nav-text">
													<span>Suplier Profile</span>
											</span>
									</a>
							</li>
					</ul>
			</div>
			<b class="sub-arrow"></b>
		</li>
	</ul>



{{-- ****************************** Project Profile Menu*************************************************** --}}

	<ul class="nav flex-column mt-2 has-active-border active-on-top">
		<li class="nav-item {{isset($menu) ? ($menu=='system_setting' ? 'active open' : '') : ''}}">
			<a href="#" id="system_setting" class="nav-link dropdown-toggle {{isset($menu) ? ($menu=='system_setting' ? '' : 'collapsed') : 'collapsed'}}">
					<i class="nav-icon fa fa-cube"></i>
					<span class="nav-text fadeable">
							<span>Project Details</span>
					</span>
					<b class="caret fa fa-angle-left rt-n90"></b>
			</a>
			<div class="hideable submenu collapse {{isset($menu) ? ($menu=='system_setting' ? 'show' : '') : ''}}">
					<ul class="submenu-inner">
							<li class="nav-item">
									<a href="{{ route('project.index') }}" class="nav-link">
											<span class="nav-text">
													<span>Project Profile</span>
											</span>
									</a>
							</li>
					</ul>
			</div>
			<b class="sub-arrow"></b>
		</li>
	</ul>



{{-- ****************************** Client Profile Menu *************************************************** --}}

	<ul class="nav flex-column mt-2 has-active-border active-on-top">
		<li class="nav-item {{isset($menu) ? ($menu=='system_setting' ? 'active open' : '') : ''}}">
			<a href="#" id="system_setting" class="nav-link dropdown-toggle {{isset($menu) ? ($menu=='system_setting' ? '' : 'collapsed') : 'collapsed'}}">
					<i class="nav-icon fa fa-cube"></i>
					<span class="nav-text fadeable">
							<span>Client Details</span>
					</span>
					<b class="caret fa fa-angle-left rt-n90"></b>
			</a>
			<div class="hideable submenu collapse {{isset($menu) ? ($menu=='system_setting' ? 'show' : '') : ''}}">
					<ul class="submenu-inner">
							<li class="nav-item">
									<a href="{{ route('client.index') }}" class="nav-link">
											<span class="nav-text">
													<span>Client Profile</span>
											</span>
									</a>
							</li>
					</ul>
			</div>
			<b class="sub-arrow"></b>
		</li>
	</ul>


{{-- ****************************** Procurement Items Menu *************************************************** --}}

	<ul class="nav flex-column mt-2 has-active-border active-on-top">
		<li class="nav-item {{isset($menu) ? ($menu=='system_setting' ? 'active open' : '') : ''}}">
			<a href="#" id="system_setting" class="nav-link dropdown-toggle {{isset($menu) ? ($menu=='system_setting' ? '' : 'collapsed') : 'collapsed'}}">
					<i class="nav-icon fa fa-cube"></i>
					<span class="nav-text fadeable">
							<span>Procurement Details</span>
					</span>
					<b class="caret fa fa-angle-left rt-n90"></b>
			</a>
			<div class="hideable submenu collapse {{isset($menu) ? ($menu=='system_setting' ? 'show' : '') : ''}}">
					<ul class="submenu-inner">
							<li class="nav-item">
									<a href="{{ route('procurement.index') }}" class="nav-link">
											<span class="nav-text">
													<span>List of Procurement Items</span>
											</span>
									</a>
							</li>
					</ul>
			</div>
			<b class="sub-arrow"></b>
		</li>
	</ul>




</nav>
