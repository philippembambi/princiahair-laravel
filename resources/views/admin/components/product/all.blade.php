@inject('products', App\Utils\ProductUtil::class)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/datatables.css') }}">
@endpush

<div class="page-body-wrapper">

    @component('admin.components.sideBar')
    @endcomponent

    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Tous les produits
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.home')}}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Produits</li>
                            <li class="breadcrumb-item active">Tous les produits</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body order-datatable">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Produit</th>
                                        <th>Libellé</th>
                                        <th>Catérogie</th>
                                        <th>Date de création</th>
                                        <th>Status</th>
                                        <th>Prix</th>
                                        <th>Couleur de cheveux</th>
                                        <th>Densité</th>
                                        <th>Texture</th>
                                        <th>Délai d'utilisation</th>
                                        <th>Bande d'élastique</th>
                                        <th>Longueur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products->data as $product)
                                    <tr>
                                        <td>{{  $product->id  }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset('uploads/'.$product->a_image)}}" alt=""
                                                    class="img-fluid img-100 blur-up lazyloaded">
                                            </div>
                                        </td>

                                        <td>{{  $product->label  }}</td>
                                        <td>{{  $product->category  }}</td>
                                        <td>{{  $product->created_at  }}</td>
                                        @switch($product->available)
                                            @case(0)
                                                <td>
                                                    <span class="badge badge-primary" style="font-size: 13px">Non disponible</span>
                                                </td>
                                                @break
                                            @case(1)
                                                <td>
                                                    <span class="badge badge-success" style="font-size: 13px">Disponible</span>
                                                </td>
                                                @break
                                            @case(2)
                                                <td>
                                                    <span class="badge badge-warning" style="font-size: 13px">En attente</span>
                                                </td>
                                                @break
                                            @default
                                                <td class="order-info" data-field="status">
                                                    <span>Statut inconnu</span>
                                                </td>
                                        @endswitch
                                        <td >{{  $product->price  }} £</td>
                                        <td >{{  $product->color  }}</td>
                                        <td >{{  $product->density  }}</td>
                                        <td >{{  $product->texture  }}</td>
                                        <td >{{  $product->usage_delay  }}</td>
                                        <td >{{  $product->elastic_band  }}</td>
                                        <td >{{  $product->length  }}</td>
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

</div>

@push('scripts')
    <script src="{{ asset('admin/assets/js/datatables/jquery.dataTables.min.js') }}">
    </script>
    <script src="{{ asset('admin/assets/js/datatables/custom-basic.js') }}"></script>
@endpush