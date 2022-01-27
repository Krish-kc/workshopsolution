        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile"
                    style="background:url('{{ asset('../assets/images/background/user-info.jpg') }}')'  no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{ asset('../assets/images/users/profile.png') }}"
                            alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="true"> @if (Auth::user()){{ Auth::user()->name }}@endif</a>
                        <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i
                                    class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i
                                    class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i
                                    class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i
                                    class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i
                                    class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Dashboard</li>
                        <li> <a class="has-arrow waves-effect waves-dark {{ request()->is('user') ? 'active' : '' }}"
                                href="#" aria-expanded="false"><i class="mdi mdi-account-multiple">
                                </i><span class="hide-menu"> Users </span></a>
                            <ul aria-expanded="false" class="collapse">
                                @can('user-create')
                                    <li>
                                        <a href="{{ route('user.create') }}"><i class="mdi mdi-plus"></i>
                                            Add User </a>
                                    </li>
                                @endcan
                                @can('user-list')
                                    <li>
                                        <a href="{{ route('user.index') }}"><i class="fas fa-bars"></i>
                                            User List</a>
                                    </li>
                                @endcan


                            </ul>



                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark {{ request()->is('shop') ? 'active' : '' }}"
                                href="#" aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                                <span class="hide-menu"> WorkShop </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                @can('workshop-create')
                                    <li><a href="{{ route('shop.create') }}"><i class="mdi mdi-plus"></i>

                                            Add WorkShop
                                        </a>
                                    </li>
                                @endcan
                                @can('workshop-list')
                                    <li>
                                        <a href="{{ route('shop.index') }}">
                                            <i class="fas fa-bars"></i>
                                            WorkShop List
                                        </a>
                                    </li>
                                @endcan


                            </ul>



                        </li>

                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark {{ request()->is('vehicle') ? 'active' : '' }}"
                                href="#" aria-expanded="false"><i class="fa fa-car">
                                </i><span class="hide-menu"> vehicle </span></a>
                            <ul aria-expanded="false" class="collapse">
                                @can('vehicle-create')
                                    <li>
                                        <a href="{{ route('vehicle.create') }}"><i class="mdi mdi-plus"></i>
                                            Add vehicle </a>
                                    </li>
                                @endcan
                                @can('vehicle-list')
                                    <li>
                                        <a href="{{ route('vehicle.index') }}"><i class="fas fa-bars"></i>
                                            Vehicle List</a>
                                    </li>
                                @endcan

                            </ul>

                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark{{ request()->is('role') ? 'active' : '' }}"
                                href="#" aria-expanded="false"><i class="fa fa-male">
                                </i><span class="hide-menu"> Role & Permission</span></a>
                            <ul aria-expanded="false" class="collapse">
                                @can('role-create')
                                    <li>
                                        <a href="{{ route('role.index') }}"><i class="mdi mdi-plus"></i>
                                            Role </a>
                                    </li>
                                @endcan
                                @can('permission-create')
                                    <li>
                                        <a href="{{ route('permission.index') }}"><i class="mdi mdi-plus"></i>
                                            Permission</a>
                                    </li>
                                @endcan
                                @can('user-create')
                                    <li>
                                        <a href="{{ route('user.index') }}"><i class="mdi mdi-plus"></i>
                                            Assign Role</a>
                                    </li>
                                @endcan


                            </ul>
                        </li>

                        <li>

                            <a class="has-arrow waves-effect waves-dark{{ request()->is('banner') ? 'active' : '' }}"
                                href="#" aria-expanded="false"><i class="fa fa-book">
                                </i><span class="hide-menu">Page Management</span></a>

                            <ul aria-expanded="false" class="collapse">
                                @can('banner-create')
                                    <li>
                                        <a href="{{ route('banner.create') }}"><i class="mdi mdi-plus"></i>
                                            Banner </a>
                                    </li>
                                @endcan
                                @can('about-create')
                                    <li>
                                        <a href="{{ route('about.create') }}"><i class="mdi mdi-plus"></i>
                                            About</a>
                                    </li>
                                @endcan

                                {{-- <li>
                                    <a href=""><i class="mdi mdi-plus"></i>
                                        Workshop</a>
                                </li> --}}


                            </ul>
                        </li>
                        <li>

                            <a class="has-arrow waves-effect waves-dark{{ request()->is('banner') ? 'active' : '' }}"
                                href="#" aria-expanded="false"><i class="fa fa-window-maximize">
                                </i><span class="hide-menu">Booking</span></a>

                            <ul aria-expanded="false" class="collapse">
                                    <li>
                                        <a href="{{route('booking.index')}}"><i class="mdi mdi-plus"></i>
                                            Confirm Booking</a>
                                    </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Settings"><i
                        class="ti-settings"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Email"><i
                        class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Logout"><i
                        class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
