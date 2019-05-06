@extends('layouts.template-auth')

@section('content')
<div class="login-register" style="background-image:url(../../assets/images/background/login-register.jpg);">
    <div class="login-box card">
        <div class="card-body">
            <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
            @csrf
            <input type="text" name="token" value="{{ $token }}">
                <h3 class="box-title m-b-20">Recover Password</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Adresse Email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Mot de passe" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmation" required>
                    </div>
                </div>
                <div class="form-group text-center p-b-10">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 

@section('JsPlugins')
<script type="text/javascript">
    $(function() {
        $(".preloader").fadeOut();
    });
</script>
@endsection
