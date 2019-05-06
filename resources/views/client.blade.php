@extends('layouts.template')

@section('CssPlugins')
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-info d-lg-block m-l-15" data-toggle="modal" data-target="#add-client"><i class="fa fa-plus-circle"></i> Ajouter un client</button>
                <div id="add-client" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form class="form-horizontal" action="/addClient" method="post">
                            @csrf
                            <div class="modal-body">
                                    <div class="form-group">
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Nom*" name="name" required>
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Adresse" name="address">
                                        </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Téléphone" name="phone">
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
                    <h4 class="card-title">Liste des clients</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>Date de création</th>

                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>Date de création</th>

                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->name }}
                                            <button type="submit" onclick="updateName('{{$client->id}}','{{$client->name}}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil-alt" aria-hidden="true"></i></button>
                                        </td>
                                        <td>@if ($client->email != '')    
                                                {{ $client->email }}
                                            @else
                                                Null
                                            @endif
                                            <button type="submit" onclick="updateEmail('{{$client->id}}','{{$client->email}}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil-alt" aria-hidden="true"></i></button>
                                        </td>
                                        <td>@if ($client->phone != '')    
                                                {{ $client->phone }}
                                            @else
                                                Null
                                            @endif
                                        <button type="submit" onclick="updatePhone('{{$client->id}}','{{$client->phone}}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil-alt" aria-hidden="true"></i></button>
                                        </td>
                                        <td>@if ($client->address != '')    
                                                {{ $client->address }}
                                            @else
                                                Null
                                            @endif
                                        <button type="submit" onclick="updateAddress('{{$client->id}}','{{$client->address}}')" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-pencil-alt" aria-hidden="true"></i></button>
                                        </td>
                                        <td>{{ $client->created_at }}</td>

                                        <td>
                                        <button type="submit" onclick="deleteClient({{ $client->id }})" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i class="ti-close" aria-hidden="true"></i></button>
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
    $(document).ready(function() {
        $('#myTable').DataTable();
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
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print',
        ]
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

    function deleteClient(event){
        swal({
            title: 'Êtes-vous sûr ?',
            text: "Voulez-vous vraiment supprimer ce client ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Supprimer',
            cancelButtonText: 'Annuler',
            }).then((result) => {

                if (result.value) {
                    axios.delete(window.Laravel.url + "/deleteClient/"+event) //
                    .then(response => {
                        console.log("success", response);
                        swal(
                            'Supprimé !',
                            'Votre client a été supprimé.',
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

    async function updateName(id,value){
        const {value: name} = await swal({
            title: 'Nom',
            input: 'text',
            inputPlaceholder:'Nom',
            inputValue: value,
            inputAttributes: {
                
            },
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && 'Entrez un nom !'
            }
        })
        if (name) {
            axios.put(window.Laravel.url + "/updateClientName",{'id':id,'name':name}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    'Le nom de votre client a été modifié.',
                    'success'
                    )
                    location.reload();
            })
            .catch(error => {
                console.log("error", error)
            })
        }        
    }

    async function updateEmail(id,value){
        const {value: email} = await swal({
            title: 'Email',
            input: 'email',
            inputPlaceholder:'Email',
            inputValue: value,
            inputAttributes: {
                
            },
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && 'Entrez un email !'
            }
        })
        if (email) {
            axios.put(window.Laravel.url + "/updateClientEmail",{'id':id,'email':email}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    "L'email de votre vlient a été modifié.",
                    'success'
                    )
                    location.reload();
            })
            .catch(error => {
                console.log("error", error)
            })
        }        
    }
    
    async function updatePhone(id,value){
        const {value: phone} = await swal({
            title: 'Phone',
            input: 'text',
            inputPlaceholder:'Téléphone',
            inputValue: value,
            inputAttributes: {
                
            },
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && 'Entrez un numéro de téléphone !'
            }
        })
        if (phone) {
            axios.put(window.Laravel.url + "/updateClientPhone",{'id':id,'phone':phone}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    'Le numéro de téléphone de votre client a été modifié.',
                    'success'
                    )
                    location.reload();
            })
            .catch(error => {
                console.log("error", error)
            })
        }        
    }
    
    async function updateAddress(id,value){
        const {value: address} = await swal({
            title: 'Address',
            input: 'text',
            inputPlaceholder:'Nom',
            inputValue: value,
            inputAttributes: {
                
            },
            showCancelButton: true,
            cancelButtonText: 'Annuler',
            inputValidator: (value) => {
                return !value && 'Entrez un adresse !'
            }
        })
        if (address) {
            axios.put(window.Laravel.url + "/updateClientAddress",{'id':id,'address':address}) //
            .then(response => {
                console.log("success", response);
                swal(
                    'Modifié !',
                    "L'adresse de votre client a été modifié.",
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