@extends('layouts.template')

@section('CssPlugins')
    <!-- This page CSS -->    
    <link href="{{URL::to('assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{URL::to('assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="{{URL::to('assets/node_modules/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{URL::to('dist/css/pages/dashboard1.css')}}" rel="stylesheet">

@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor"></h4>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Yearly Sales -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card bg-info text-white text-center">
                        <div class="card-body">
                            <small>Produits</small>
                            <h3>{{ $productsCount }}</h3>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card bg-success text-white text-center">
                        <div class="card-body">
                            <small>Valeur totale des produits</small>
                            <h3>@php($total = 0)
                                @foreach($products as $product)
                                    @php($total += $product->total_price)
                                @endforeach
                                {{ $total." MAD" }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card bg-danger text-white text-center">
                        <div class="card-body">
                            <small>Totale des ventes</small>
                            <h3>{{ $productsTotalSales }}</h3>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card bg-inwi text-white text-center">
                        <div class="card-body">
                            <small>Solde Inwi</small>
                            <h3>
                                @php($InwiSolde = 0)
                                @foreach($inwiCount as $inwi) @php($InwiSolde += $inwi->solde ) @endforeach
                                {{ $InwiSolde." MAD" }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card bg-iam text-white text-center">
                        <div class="card-body">
                            <small>Solde Maroc Telecom</small>
                            <h3>
                                @php($IamSolde = 0)
                                @foreach($iamCount as $iam) @php($IamSolde += $iam->solde ) @endforeach
                                {{ $IamSolde." MAD" }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-4">
                    <div class="card bg-orange text-white text-center">
                        <div class="card-body">
                            <small>Solde Orange</small>
                            <h3>
                                @php($OrangeSolde = 0)
                                @foreach($orangeCount as $orange) @php($OrangeSolde += $orange->solde ) @endforeach
                                {{ $OrangeSolde." MAD" }}
                            </h3>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Analyse des ventes</h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-3">
                                    <h6>Aujourd'hui</h6>
                                    <h5 class="text-danger m-b-0">
                                        @php($earnToday = 0)
                                        @foreach($productsSaleToday as $productSale)
                                            @php($earnToday += (($productSale->selling_price - $productSale->products->purchasing_price ) * $productSale->qte))
                                        @endforeach
                                        {{ $earnToday.".00 MAD" }}
                                    </h5>
                                </div>
                                <div class="col-3">
                                    <h6>Hier</h6>
                                    <h5 class="text-danger m-b-0">
                                        @php($earnYesterday = 0)
                                        @foreach($productsSaleYesterday as $productSale) 
                                            @php($earnYesterday += (($productSale->selling_price - $productSale->products->purchasing_price ) * $productSale->qte))
                                        @endforeach
                                        {{ $earnYesterday.".00 MAD" }}
                                    </h5>
                                </div>
                                <div class="col-3">
                                    <h6>Cette semaine</h6>
                                    <h5 class="text-danger m-b-0">
                                        @php($earnWeek = 0)
                                        @foreach($productsSaleWeek as $productSale) 
                                            @php($earnWeek += (($productSale->selling_price - $productSale->products->purchasing_price ) * $productSale->qte))
                                        @endforeach
                                        {{ $earnWeek.".00 MAD" }}
                                    </h5>
                                </div>
                                <div class="col-3">
                                    <h6>Ce mois-ci</h6>
                                    <h5 class="text-danger m-b-0">
                                        @php($earnMonthely = 0)
                                        @foreach($productsSaleMonth as $productSale) 
                                            @php($earnMonthely += (($productSale->selling_price - $productSale->products->purchasing_price ) * $productSale->qte))
                                        @endforeach
                                        {{ $earnMonthely.".00 MAD" }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Analyse des ventes par date</h5>
                        </div>
                            <form action="Earning" method="post">
                                @csrf
                        <div class="card-body bg-light text-center">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Choisissez la date de début..." id="fromdate" name="fromdate">
                                    </div>
                                </div>
                                <div class="round align-self-center round-danger m-t-10 m-b-10"><i class="ti-exchange-vertical"></i></div>
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Choisissez la date de fin..." id="todate" name="todate">
                                    </div>
                                </div>
                                
                        </div>
                        <div class="card-body text-center">
                            <input type="submit" class="btn btn-info" value="Appliquer">
                        </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="max-height: 755px;">
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-6">
                            <h3>Stock épuisé</h3>
                            <h5 class="font-light m-t-0">Produits épuisés</h5>
                        </div>
                        <div class="col-6 align-self-center display-6 text-right">
                            <h2 class="text-warning">{{ $productsAlert_count }}</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Réf.</th>
                                <th>Catégorie</th>
                                <th>Qte restante</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i=0)
                            @foreach($productsAlert as $productAlert)
                                <tr>
                                    <td class="text-center">{{ $i+=1 }}</td>
                                    <td class="txt-oflo">{{ $productAlert->ref }}</td>
                                    <td class="txt-oflo">{{ $productAlert->categorys->name }}</td>
                                    <td><span class="badge badge-danger badge-pill">{{ $productAlert->qte }}</span> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
                        <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle">                        <span>Varun
                                Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle">                        <span>Genelia
                                Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle">                        <span>Ritesh
                                Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle">                        <span>Arijit
                                Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle">                        <span>Govinda
                                Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle">                        <span>John
                                Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle">                        <span>Hritik
                                Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle">                        <span>Pwandeep
                                rajan <small class="text-success">online</small></span></a>
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
<script src="{{URL::to('assets/node_modules/moment/moment.js')}}"></script>
<script src="{{URL::to('assets/node_modules/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!--morris JavaScript -->
    <script src="{{URL::to('assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{URL::to('assets/node_modules/morrisjs/morris.min.js')}}"></script>
    <script src="{{URL::to('assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{URL::to('assets/node_modules/d3/d3.min.js')}}"></script>
    <script src="{{URL::to('assets/node_modules/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{URL::to('dist/js/dashboard1.js')}}"></script>
    <script src="{{URL::to('assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{URL::to('dist/js/dashboard2.js')}}"></script>
    <script>
  var now = new Date();
    
    var yesterday = new Date(now.setDate(now.getDate() - 1));


    $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', maxDate: yesterday });

    
    $('#fromdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false, format: 'YYYY-MM-DD', maxDate: new Date() })
    .on('change', function(e, date) { $('#todate').bootstrapMaterialDatePicker('setMinDate', date);});
    $('#todate').bootstrapMaterialDatePicker({ weekStart: 0, time: false, format: 'YYYY-MM-DD', maxDate: new Date() });

    </script>
            @if (session('earnings'))
                                    @php($earnToday = 0)
                                    @foreach(session('earnings') as $earning) 
                                        @php($earnToday += (($earning->selling_price - $earning->products->purchasing_price ) * $earning->qte))
                                    @endforeach
            <script>
                                    swal(
                                                'Supprimé !',
                                                '{{ $earnToday.".00 MAD" }}',
                                                'success'
                                                )
                                    
                                </script>
                                @endif
@endsection