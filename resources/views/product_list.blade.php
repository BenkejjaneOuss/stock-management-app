@extends('layouts.template')

@section('CssPlugins')
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">
    <style>
    .btnupdate {
        display: none;
    }
    </style>

@endsection

@section('content')

    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <div class="d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-info d-lg-block m-l-15" data-toggle="modal" data-target="#add-contact"><i class="fa fa-plus-circle"></i> Ajouter un produit</button>
                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form class="form-horizontal" action="/addProduct" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="col-md-12 m-b-20">
                                        <input type="text" class="form-control" placeholder="Ref" name="ref" required="true">
                                    </div>
                                    <div class="col-md-12 m-b-20">
                                        <input type="text" class="form-control" placeholder="Designation" name="designation" required="true">
                                    </div>
                                    <div class="col-md-12 m-b-20">
                                        <select id="category" placeholder="Choisissez une categorie..." name="category_id" required="true">
                    					    <option value="">Choisissez une categorie...</option>
                                            @foreach($categorys as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 m-b-20">
                                        <input type="number" class="form-control" placeholder="Quantité d'alert" name="qte_alert" required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-info" value="Ajouter">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                            </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <button type="button" class="btn btn-success d-lg-block m-l-15" data-toggle="modal" data-target="#add-categorie"><i class="fa fa-plus-circle"></i> Ajouter une categorie</button>
                <div id="add-categorie" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form class="form-horizontal" action="/addCategoryInProduct" method="post">
                            @csrf
                            <div class="modal-body">
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Nom" name="name" required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-info" value="Ajouter">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row" >
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Liste des produits 
                    
</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ref.</th>
                                    <th>Designation</th>
                                    <th>Categorie</th>
                                    <th>Qte.</th>
                                    <th>Qte d'alert</th>
                                    <th>Prix d'achat</th>
                                    <th>Prix total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Ref.</th>
                                    <th rowspan="1" colspan="1">Designation</th>
                                    <th rowspan="1" colspan="1">Categorie</th>
                                    <th rowspan="1" colspan="1">Qte.</th>
                                    <th rowspan="1" colspan="1">Qte d'alert</th>
                                    <th rowspan="1" colspan="1">Prix d'achat</th>
                                    <th rowspan="1" colspan="1">Prix total</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->ref }}
                                        <button type="submit" onclick="updateRef('{{ $product->id }}','{{ $product->ref }}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil-alt" aria-hidden="true"></i></button>
                                        </td>
                                        <td>{{ $product->designation }}
                                        <button type="submit" onclick="updateDesignation('{{ $product->id }}','{{ $product->designation }}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" ><i class="ti-pencil-alt" aria-hidden="true"></i></button>
                                        </td>
                                        <td>{{ $product->categorys->name }}
                                        <button type="submit" onclick="updateCategory('{{ $product->id }}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil-alt" aria-hidden="true"></i></button>
                                        </td>
                                        <td>{{ $product->qte }}
                                        </td>
                                        <td>{{ $product->qte_alert }}
                                        <button type="submit" onclick="updateQteAlert('{{ $product->id }}','{{ $product->qte_alert }}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil-alt" aria-hidden="true"></i></button>
                                        </td>
                                        <td>{{ $product->purchasing_price }}
                                        </td>
                                        <td>{{ $product->total_price }}
                                        </td>
                                        <td>
                                        <button type="submit" onclick="deleteProduct('{{ $product->id }}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-close" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme working">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
@endsection
@section('JsPlugins')
    <!--stickey kit -->
    <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!-- This is data table -->
    <script src="assets/node_modules/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

    <script>
        $('#category').selectize();
        $('#supplier').selectize();
    </script>
    <script>
    $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        


var table = $('#example23').DataTable({
    
    dom: 'Bfrtip',
    buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
    ],
    "columnDefs": [
        { "targets": [3,4], "searchable": false }
    ],
});



    });

    
</script>
<script>
    //var Photoshop = VueColor.Photoshop
    window.Laravel={!! json_encode([
        'csrfToken'=>csrf_token(),
        'url'=>url("/")
    ])
    !!};
</script>
<script>
    function deleteProduct(event){
        swal({
            title: 'Êtes-vous sûr ?',
            text: "Voulez-vous vraiment supprimer ce produit ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Supprimer',
            cancelButtonText: 'Annuler',
            }).then((result) => {

                if (result.value) {
                    axios.delete(window.Laravel.url + "/deleteProduct/"+event) //
                                        .then(response => {
                                            console.log("success", response);
                                            swal(
                                                'Supprimé !',
                                                'Votre produit a été supprimé.',
                                                'success'
                                                )
                                            location.reload();
                                        })
                                        .catch(error => {
                                            console.log("error", error)
                                        })

                }
            })
    }

    async function updateRef(id,value){
        const {value: ref} = await swal({
            title: 'Réference',
            input: 'text',
            inputPlaceholder:'Ref.',
            inputValue: value,
            inputAttributes: {
                
            },
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && 'Entrez un réference !'
            }
        })
        if (ref) {
            axios.put(window.Laravel.url + "/updateProductRef",{'id':id,'ref':ref}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    'Le réference de votre produit a été modifié.',
                    'success'
                    )
                location.reload();
                    
            })
            .catch(error => {
                console.log("error", error)
            })
        }        
    }
    
    async function updateDesignation(id,value){
        const {value: designation} = await swal({
            title: 'Désignation',
            input: 'text',
            inputPlaceholder:'Désignation',
            inputValue: value,
            inputAttributes: {
                
            },
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && 'Entrez une désignation !'
            }
        })
        if (designation) {
            axios.put(window.Laravel.url + "/updateProductDesignation",{'id':id,'designation':designation}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    'La désignation de votre produit a été modifié.',
                    'success'
                    )
                location.reload();
                    
            })
            .catch(error => {
                console.log("error", error)
            })
        }        
    }


    async function updateQteAlert(id,value){
        const {value: qte_alert} = await swal({
            title: "Quantité d'alert",
            input: 'text',
            inputPlaceholder: "Quantité d'alert",
            inputValue: value,
            inputAttributes: {
                
            },
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && "Entrez une quantité d'alert !"
            }
        })
        if (qte_alert) {
            axios.put(window.Laravel.url + "/updateProductQteAlert",{'id':id,'qte_alert':qte_alert}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    "La quantité d'alert de votre produit a été modifié.",
                    'success'
                    )
                location.reload();
                    
            })
            .catch(error => {
                console.log("error", error)
            })
        }        
    }

    
    async function updateCategory(id){
        const {value: category_id} = await swal({
            title: "Nom de la categorie",
            input: 'select',
            inputOptions: {
                @foreach($categorys as $category)
                '{{ $category->id }}': '{{ $category->name }}',
                @endforeach
            },
            inputPlaceholder: 'Categorie',
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && "Choisissez la categorie"
            }
        })
        if (category_id) {
            axios.put(window.Laravel.url + "/updateProductCategory",{'id':id,'category_id':category_id}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    "La categorie de votre produit a été modifié.",
                    'success'
                    )
                location.reload();
                    
            })
            .catch(error => {
                console.log("error", error)
            })
        }        
    }

</script>
@endsection