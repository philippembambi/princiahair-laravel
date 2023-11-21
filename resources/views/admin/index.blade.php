@extends('admin.layouts.app')

@section('content')

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
                        <!-- Page Sidebar Start-->
                        <div class="page-sidebar">
                            <div class="main-header-left d-none d-lg-block">
                                <div class="logo-wrapper">
                                    <a href="#">
                                        <img class="d-none d-lg-block blur-up lazyloaded"
                                            src="{{asset('admin/img/logo.png')}}" style="height: 140px" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar custom-scrollbar">
                                <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                                        aria-hidden="true"></i></a>
                                <div class="sidebar-user">
                                    <img class="img-60" src="assets/images/dashboard/user3.jpg" alt="#">
                                    <div>
                                        <h6 class="f-14">PrinciaHair</h6>
                                        <p>Dashboard.</p>
                                    </div>
                                </div>
                                <ul class="sidebar-menu">
                                    <li>
                                        <a class="sidebar-header" href="#">
                                            <i data-feather="home"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
            
                                    <li>
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="box"></i>
                                            <span>Produits</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
            
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="product-review.html">
                                                    <i class="fa fa-circle"></i>
                                                    <span>Ajouter un produit</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-review.html">
                                                    <i class="fa fa-circle"></i>
                                                    <span>Liste des produits</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-review.html">
                                                    <i class="fa fa-circle"></i>
                                                    <span>Review produits</span>
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
                                        <a class="sidebar-header" href="javascript:void(0)">
                                            <i data-feather="clipboard"></i>
                                            <span>Catégories</span>
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </a>
                                        <ul class="sidebar-submenu">
                                            <li>
                                                <a href="pages-list.html">
                                                    <i class="fa fa-circle"></i>Liste des catégories
                                                </a>
                                            </li>
                                            <li>
                                                <a href="page-create.html">
                                                    <i class="fa fa-circle"></i>Ajouter une catégorie
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

                        @component('admin.components.main')
                        @endcomponent
            
        </div>
    </div>
@endsection