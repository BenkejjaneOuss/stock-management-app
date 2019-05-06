@extends('layouts.template')

@section('CssPlugins')
    <!-- This page CSS -->
    <link href="{{URL::to('dist/css/pages/contact-app-page.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">
    <style>
    .divCenter {
        margin-left: auto;
        margin-right: auto;
    }
    </style>
@endsection

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor"></h4>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row" >
        <!-- Column -->
        
        <div class="col-md-12">
        <div class="col-lg-8 col-xlg-9 col-md-10 divCenter">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Mon profil</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content"  id="app">
                    <div class="tab-pane active" id="settings" role="tabpanel">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-md-12">Mot de passe</label>
                                <div class="col-md-12">
                                    <input type="password" name="password" class="form-control" v-model="profile.password" required="true">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Confirmer mot de passe</label>
                                <div class="col-md-12">
                                    <input type="password" name="password_confirmation" class="form-control form-control-line" v-model="profile.password_confirmation" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" @click='updatePassword'>Modifier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
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
    <script>
        //var Photoshop = VueColor.Photoshop
        window.Laravel={!! json_encode([
            'csrfToken'=>csrf_token(),
            'url'=>url("/")
        ])
        !!};
    </script>

    <script>
        var app = new Vue({
            el: "#app",
            data: {

                profile: {
                    email: '{{ Auth::user()->email }}',
                    password: '',
                    password_confirmation: ''
                }
            },
            methods: {
                updatePassword: function(event){
                    if(this.profile.password==this.profile.password_confirmation && this.profile.password.length != 0 && this.profile.password_confirmation.length != 0){
                    axios.post(window.Laravel.url + "/updatePassword", this.profile) //
                        .then(response => {
                                swal(
                                'Modifié !',
                                'Votre mot de passe a été modifié.',
                                'success'
                                )
                                
                                 window.location = "{{route('home')}}";   
                                             
                            })
                        .catch(error => {
                            console.log("error", error);
                        })}else{
                                swal(
                                'Attention !',
                                'Les mots de passe ne correspondent pas ou les champs sont vides',
                                'warning'
                                )

                        }
                },
            },
            mounted: function () {
            
            }
        });

    </script>
@endsection
