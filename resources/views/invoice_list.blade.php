@extends('layouts.template')

@section('CssPlugins')
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">
    <style>
        .form-group.bordred {
            border: 1px solid #adb5bd;
            padding-top: 20px;
            border-radius: 10px;
        }
        .col-md-12.m-b-20.btn-invoice{
            display: flex;
    align-items: center;
    justify-content: center;
        }
    </style>
@endsection

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center">
            <div class="d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-info d-lg-block"  data-toggle="modal" data-target="#add-product-sale"><i class="fa fa-money"></i> Ajouter une facture</button>
                <div id="add-product-sale" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form class="form-horizontal" action="addInvoice" method="post">
                            @csrf
                            <div class="modal-body" id="test">
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <select id="client" placeholder="Choisissez un client..." name="client_id" required="true">
                        					    <option value="">Choisissez un client...</option>
                                                @foreach($clients as $client)
                                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="add" class="btn btn-info" >Ajouter un produit</button>
                                    <button type="button" class="delete btn btn-danger">Supprimer un produit</button>
                                    <input type="submit" class="btn btn-success" value="Générer la facture">
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
                
                    <h4 class="card-title">Liste des Factures</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive m-t-40">
                        @if (\Session::has('error'))
                            <div class="alert alert-danger alert-rounded">Veuillez saisir une quantité < ou =  de la quantité du stock !</div>
                        @endif
                        <table id="example23" class="display nowrap table table-hover table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nom du client</th>
                                    <th>Date de création</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>N°</th>
                                    <th>Nom du client</th>
                                    <th>Date de création</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->id }}</td>
                                        <td>{{ $invoice->clients->name }}</td>
                                        <td>{{ $invoice->created_at }}</td>
                                        <td>
                                            <button type="submit" onclick="window.open('assets/invoices/invoice{{ $invoice->id }}.pdf', '_blank');" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn">La facture PDF</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
    <script src="{{URL::to('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{URL::to('assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- This is data table -->
    <script src="{{URL::to('assets/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
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
        $('#product1').selectize();
        $('#client').selectize();
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
            {
                extend: 'copy',
                exportOptions: {
                    columns: [ 0, 1, 2]
                }
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: [ 0, 1, 2]
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: [ 0, 1, 2]
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: [ 0, 1, 2]
                }
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 1, 2]
                }
            },
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
    $(document).ready(function() {
        var i = 0;
        $(".delete").hide();
        //when the Add Field button is clicked
        $("#add").click(function(e) {
            $(".delete").fadeIn("1500");
            //Append a new row of code to the "#items" div
            
            $("#test").append(
            '<div class="add form-group bordred"><div class="col-md-12 m-b-20"><select id="product'+i+'" size="3" placeholder="Choisissez un produit..." name="product_id[]" required="true"> <option value="">Choisissez un produit...</option>@foreach($products as $product)<option value="{{ $product->id }}">{{ $product->ref }}</option>@endforeach</select> </div><div class="col-md-12 m-b-20"><input type="number" class="form-control" placeholder="Quantité" name="product_qte[]" required="true"></div><div class="col-md-12 m-b-20"><input type="text" class="form-control" placeholder="Prix de vente" name="product_selling_price[]" pattern="[0-9]+(\.[0-9]{0,2})?%?" required="true"> </div></div>'
            );
            $('#product'+i).selectize();
            i++;
        });
        $("body").on("click", ".delete", function(e) {
            $(".add").last().remove();
        });
        });

</script>
@endsection