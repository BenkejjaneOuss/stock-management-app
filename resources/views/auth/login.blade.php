@extends('layouts.template-auth')

@section('content')
<div class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">
    <div class="login-box card">
        <div class="card-body">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif
            <form class="form-horizontal" method="POST" id="loginform" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <div class="user-thumb text-center"> <img alt="Genio.ma" class="img-circle" width="100" src="assets/images/logo/logo.png">
                            <h3 style="margin-top: 15px;">Genio.ma</h3>
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="email" type="hidden" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="contact@genio.ma">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Mot de passe" required="true" value="password">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-xs-12 p-b-20">
                        <button class="btn btn-block btn-lg btn-info" type="submit">S'identifier</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 

@section('JsPlugins')
<script type="text/javascript">
    $(function () {
        $(".preloader").fadeOut();
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });

    $('#to-signin').on("click", function () {
        $("#recoverform").slideUp();
        $("#loginform").fadeIn();
    });
</script> 
@endsection