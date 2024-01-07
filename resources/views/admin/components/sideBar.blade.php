                        <!-- Page Sidebar Start-->
                        <div class="page-sidebar">
                            <div class="main-header-left d-none d-lg-block">
                                <div class="logo-wrapper" style="margin-top: 40px;">
                                    <a href="{{ route("admin.home") }}">
                                        <img class="d-none d-lg-block blur-up lazyloaded"
                                            src="{{asset('img/logo.png')}}" style="height: 280px;margin-left: -1.5rem;" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar custom-scrollbar">
                                <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                                        aria-hidden="true"></i></a>
                                <div class="sidebar-user">
                                    
                                </div>
                                <ul class="sidebar-menu">
                                    <li>
                                        <a class="sidebar-header" href="{{ route("admin.home") }}">
                                            <i data-feather="home"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="clipboard"></i>
                                            <span>Catégories</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="{{ route('admin.category.all') }}">
                                                    <i class="fa fa-circle"></i>Liste des catégories
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.category.add') }}">
                                                    <i class="fa fa-circle"></i>Ajouter une catégorie
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="box"></i>
                                            <span>Produits</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
            
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="{{ route('admin.product.add') }}">
                                                    <i class="fa fa-circle"></i>
                                                    <span>Ajouter un produit</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.product.all') }}">
                                                    <i class="fa fa-circle"></i>
                                                    <span>Liste des produits</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="archive"></i>
                                            <span>Commandes</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
            
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="order-list.html">
                                                    <i class="fa fa-circle"></i>
                                                    <span>Liste des commandes</span>
                                                </a>
                                            </li>
            
                                            <li>
                                                <a href="order-tracking.html">
                                                    <i class="fa fa-circle"></i>
                                                    <span>Suivi des commandes</span>
                                                </a>
                                            </li>
            
                                            <li>
                                                <a href="order-detail.html">
                                                    <i class="fa fa-circle"></i>
                                                    <span>Details Commandes</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="dollar-sign"></i>
                                            <span>Ventes</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="order.html">
                                                    <i class="fa fa-circle"></i>Commandes
                                                </a>
                                            </li>
                                            <li>
                                                <a href="transactions.html">
                                                    <i class="fa fa-circle"></i>Transactions
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="tag"></i>
                                            <span>Coupons</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="coupon-list.html">
                                                    <i class="fa fa-circle"></i>Liste des Coupons
                                                </a>
                                            </li>
                                            <li>
                                                <a href="coupon-create.html">
                                                    <i class="fa fa-circle"></i>Créer un Coupon
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="media.html">
                                            <i data-feather="camera"></i>
                                            <span>Media</span>
                                        </a>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="user-plus"></i>
                                            <span>Admins</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="user-list.html">
                                                    <i class="fa fa-circle"></i>Liste des Admins
                                                </a>
                                            </li>
                                            <li>
                                                <a href="create-user.html">
                                                    <i class="fa fa-circle"></i>Créer un admin
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="users"></i>
                                            <span>Marchants</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="list-vendor.html">
                                                    <i class="fa fa-circle"></i>Liste des marchants
                                                </a>
                                            </li>
                                            <li>
                                                <a href="create-vendors.html">
                                                    <i class="fa fa-circle"></i>Créer un marchant
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="support-ticket.html"><i
                                                data-feather="phone"></i><span>Support Ticket</span>
                                        </a>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="reports.html"><i
                                                data-feather="bar-chart"></i><span>Rapports</span>
                                        </a>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)"><i
                                                data-feather="settings"></i><span>Settings</span><i
                                                class="fa fa-angle-right pull-right"></i></a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="profile.html"><i class="fa fa-circle"></i>Profile
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="invoice.html"><i
                                                data-feather="archive"></i><span>Facturation</span></a>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="forgot-password.html">
                                            <i data-feather="key"></i>
                                            <span>Mot de passe oublié</span>
                                        </a>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="login.html">
                                            <i data-feather="log-in"></i>
                                            <span>Login</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Page Sidebar Ends-->
