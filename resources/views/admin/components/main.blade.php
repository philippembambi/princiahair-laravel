@component('admin.components.sideBar')
@endcomponent

<!-- Chartist css -->
@push('scripts.head')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/chartist.css') }}">
@endpush

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Dashboard
                            <small>PrinciaHair Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route("admin.home") }}">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="warning-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center">
                                    <i data-feather="navigation" class="font-warning"></i>
                                </div>
                            </div>
                            <div class="media-body media-doller">
                                <span class="m-0">Rentes</span>
                                <h3 class="mb-0">$ <span class="counter">6659</span><small> Ce
                                        Mois</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="secondary-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center">
                                    <i data-feather="box" class="font-secondary"></i>
                                </div>
                            </div>
                            <div class="media-body media-doller">
                                <span class="m-0">Produits</span>
                                <h3 class="mb-0">$ <span class="counter">9856</span><small> Ce
                                        Mois</small>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="primary-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="message-square"
                                        class="font-primary"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Messages</span>
                                <h3 class="mb-0">$ <span class="counter">893</span><small> Ce
                                        Mois</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="danger-box card-body">
                        <div class="media static-top-widget align-items-center">
                            <div class="icons-widgets">
                                <div class="align-self-center text-center"><i data-feather="users"
                                        class="font-danger"></i></div>
                            </div>
                            <div class="media-body media-doller"><span class="m-0">Nouveaux Marchants</span>
                                <h3 class="mb-0">$ <span class="counter">5631</span><small> Ce
                                        Mois</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-100">
                <div class="card">
                    <div class="card-header">
                        <h5>Valeur Net</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-simple-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="market-chart"></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#example-head" title="Copy"><i
                                    class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="market-chart"&gt;&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 xl-100">
                <div class="card">
                    <div class="card-header">
                        <h5>Dernières Commandes</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-simple-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive latest-order-table">
                            <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">Order ID</th>
                                        <th scope="col">Order Total</th>
                                        <th scope="col">Payment Method</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="digits">$120.00</td>
                                        <td class="font-danger">Bank Transfers</td>
                                        <td class="digits">On Way</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="digits">$90.00</td>
                                        <td class="font-secondary">Ewallets</td>
                                        <td class="digits">Delivered</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="digits">$240.00</td>
                                        <td class="font-warning">Cash</td>
                                        <td class="digits">Delivered</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="digits">$120.00</td>
                                        <td class="font-primary">Direct Deposit</td>
                                        <td class="digits">$6523</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td class="digits">$50.00</td>
                                        <td class="font-primary">Bank Transfers</td>
                                        <td class="digits">Delivered</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="order.html" class="btn btn-primary mt-4">View All Orders</a>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard"
                                data-clipboard-target="#example-head1" title=""
                                data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre class=" language-html"><code class=" language-html" id="example-head1">
&lt;div class="user-status table-responsive latest-order-table"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
&lt;tr&gt;
    &lt;th scope="col"&gt;Order ID&lt;/th&gt;
    &lt;th scope="col"&gt;Order Total&lt;/th&gt;
    &lt;th scope="col"&gt;Payment Method&lt;/th&gt;
    &lt;th scope="col"&gt;Status&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
    &lt;td&gt;1&lt;/td&gt;
    &lt;td class="digits"&gt;$120.00&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Bank Transfers&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;2&lt;/td&gt;
    &lt;td class="digits"&gt;$90.00&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Ewallets&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;3&lt;/td&gt;
    &lt;td class="digits"&gt;$240.00&lt;/td&gt;
    &lt;td class="font-secondary"&gt;Cash&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;4&lt;/td&gt;
    &lt;td class="digits"&gt;$120.00&lt;/td&gt;
    &lt;td class="font-primary"&gt;Direct Deposit&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;5&lt;/td&gt;
    &lt;td class="digits"&gt;$50.00&lt;/td&gt;
    &lt;td class="font-primary"&gt;Bank Transfers&lt;/td&gt;
    &lt;td class="digits"&gt;Delivered&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
                        </code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header b-header">
                        <h6>Total Sales</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3>42% <span><i class="fa fa-angle-up font-primary"></i></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Sales Last Month</span>
                                <h2 class="mb-0">9054</h2>
                                <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                            </div>

                            <div class="bg-primary b-r-8">
                                <div class="small-box">
                                    <i data-feather="briefcase"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sales-contain">
                            <h5 class="f-w-600">Gross sales of August</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header b-header">
                        <h6>Total purchase</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3>20% <span><i class="fa fa-angle-up font-secondary"></i></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Monthly purchase</span>
                                <h2 class="mb-0">2154</h2>
                                <p>0.13% <span><i class="fa fa-angle-up"></i></span></p>
                            </div>
                            <div class="bg-secondary b-r-8">
                                <div class="small-box">
                                    <i data-feather="credit-card"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sales-contain">
                            <h5 class="f-w-600">Avg Gross purchase</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header b-header">
                        <h6>Total cash transaction</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3>28% <span><i class="fa fa-angle-up font-warning"></i></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Cash on hand</span>
                                <h2 class="mb-0">4672</h2>
                                <p>0.8% <span><i class="fa fa-angle-up"></i></span></p>
                            </div>
                            <div class="bg-warning b-r-8">
                                <div class="small-box">
                                    <i data-feather="shopping-cart"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sales-contain">
                            <h5 class="f-w-600">Details about cash</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card order-graph sales-carousel">
                    <div class="card-header b-header">
                        <h6>Daily Deposits</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="small-chartjs">
                                    <div class="flot-chart-placeholder" id="simple-line-chart-sparkline-1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="value-graph">
                                    <h3>75% <span><i class="fa fa-angle-up font-danger"></i></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <span>Security Deposits</span>
                                <h2 class="mb-0">0782</h2>
                                <p>0.25% <span><i class="fa fa-angle-up"></i></span></p>
                            </div>
                            <div class="bg-danger b-r-8">
                                <div class="small-box">
                                    <i data-feather="calendar"></i>
                                </div>
                            </div>
                        </div>

                        <div class="sales-contain">
                            <h5 class="f-w-600">Gross sales of June</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                    </div>
                </div>
            </div>
      
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>