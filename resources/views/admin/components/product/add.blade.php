@inject('categories', App\Utils\CategoryUtil::class)

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/dropzone.css') }}">
@endpush

<meta name="csrf-token" content="{{ csrf_token() }}">

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
                            <h3>Ajouter Produit
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.home') }}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Produit</li>
                            <li class="breadcrumb-item active">Ajouter un Produit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <form class="row product-adding" action="{{  route('admin.product.add')  }}" method="POST">
                @csrf
                <div class="row product-adding">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    
                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                            Libellé</label>
                                        <input class="form-control" name="product_label" id="validationCustom01" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustomtitle"
                                            class="col-form-label pt-0"><span>*</span> Prix</label>
                                        <input class="form-control" name="product_price" id="validationCustomtitle" type="number"
                                            required="">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label categories-basic"><span>*</span>
                                            Catégories</label>
                                        <select name="product_category" class="custom-select form-control" required="">
                                            @forelse ($categories->data as $category)
                                            <option value={{ $category->id }}>{{ $category->name }}</option>                                                
                                            @empty
                                            <option value="">--Catégories vides--</option>                                                
                                            @endforelse

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span>
                                            Densité</label>
                                        <input class="form-control" name="product_density" id="validationCustom02" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span>
                                            Texture</label>
                                        <input class="form-control" name="product_texture" id="validationCustom02" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span>
                                            Longueur</label>
                                        <input class="form-control" name="product_length" id="validationCustom02" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span>
                                            Délai d'utilisation</label>
                                        <input class="form-control" name="product_delay" id="validationCustom02" type="text" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span>
                                            Couleur de cheveux</label>
                                        <input class="form-control" name="product_color" id="validationCustom02" type="text" required="">
                                    </div>

                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span>
                                            Bande d'élastique</label>
                                        <input class="form-control" name="product_band" id="validationCustom02" type="text" required="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group mb-0">
                                        <div class="description-sm">
                                            <textarea name="product_desc" id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="dropzone digits" action="uploadFile" method="POST" id="singleFileUpload">
                                    @csrf
                                        <div class="dz-message needsclick"><i class="fa fa-cloud-upload"></i>
                                            <h4 class="mb-0 f-w-600">Cliquer ici pour ajouter des images</h4>
                                        </div>
                                </div>
                            </div>

                            <div class="offset-xl-3 offset-sm-4 mt-4 mb-4">
                                <button type="submit" class="btn btn-primary">Ajouter le produit</button>
                                <button type="reset" class="btn btn-light">Annuler</button>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <!-- Container-fluid Ends-->
    </div>

</div>