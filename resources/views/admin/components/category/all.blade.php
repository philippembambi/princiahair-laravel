<div class="page-body-wrapper">
    
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
                                <h3>Catégories des articles
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
                                <li class="breadcrumb-item">category</li>
                                <li class="breadcrumb-item active">list</li>
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
                            <div class="card-header">
                                <form class="form-inline search-form search-box">
                                    <div class="form-group">
                                        <input class="form-control-plaintext" type="search" placeholder="Search..">
                                    </div>
                                </form>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive table-desi">
                                    <table class="table trans-table all-package">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nom de la catégorie</th>
                                                <th>Description</th>
                                                <th>Date de création</th>
                                                <th>Date de mise à jour</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @forelse ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>

                                                <td>{{ $category->name }}</td>

                                                <td>{{ $category->desc }}</td>

                                                <td>{{ $category->created_at }}</td>

                                                <td>{{ $category->updated_at }}</td>
                                            </tr>
                                            @empty
                                                La liste des catégorie est vide !
                                            @endforelse
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

       </div>

</div>