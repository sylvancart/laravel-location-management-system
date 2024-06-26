            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <div id="sidebar-menu">
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="{{ route('dashboard') }}" class="waves-effect">
                                    <i class='bx bxs-dashboard'></i>
                                    <span key="t-dashboards">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class='bx bx-map'></i>
                                    <span key="t-invoices">Location Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">

                                    <li><a href="{{ route('states.index') }}" key="t-invoice-list">States</a></li>

                                    <li><a href="{{ route('cities.index') }}" key="t-invoice-detail">Cities</a></li>

                                    <li><a href="{{ route('pincodes.index') }}" key="t-invoice-detail">Pincodes</a></li>

                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
