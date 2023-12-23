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
                            <h3>Créer une catégorie
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
                            <li class="breadcrumb-item">Categorie </li>
                            <li class="breadcrumb-item active">Créer une catégorie </li>
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
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="account-tab"
                                        data-bs-toggle="tab" href="#account" role="tab" aria-controls="account"
                                        aria-selected="true" data-original-title="" title="">Formulaire</a></li>
                                <li class="nav-item"><a class="nav-link" id="permission-tabs"
                                        data-bs-toggle="tab" href="#permission" role="tab"
                                        aria-controls="permission" aria-selected="false" data-original-title=""
                                        title="">Description</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel"
                                    aria-labelledby="account-tab">

                                    <form class="needs-validation user-add" method="POST" action="{{  route('admin.category.add')  }}">
                                        @csrf
                                        <h4>Informations sur la catégorie</h4>
                                        <div class="form-group row">
                                            <label for="validationCustom0"
                                                class="col-xl-3 col-md-4"><span>*</span> Libellé</label>
                                            <div class="col-xl-8 col-md-7">
                                                <input  class="form-control" 
                                                        id="libelle"
                                                        name="libelle"
                                                        type="text">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Ajouter une Description :</label>
                                            <div class="col-xl-8 col-sm-7 description-sm">
                                                <textarea id="editor1" name="desc" cols="10"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>

                                        <div class="pull-center">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
</div>