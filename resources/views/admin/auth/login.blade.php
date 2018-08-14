@extends('admin.layout.auth')

@section('content')
<div class="logo-section valign-wrapper circle white-bg">
    <img class="valign img-responsive img-circle" src="../logo/image2vector.png" style="width: 80px; height: 80px" alt="CVGMC">
</div>
<div class="signin-wrapper auth-wrap">
    <div class="signin-form">
        <div class="row">
            <form class="col s12" role="form" method="POST" action="{{ url('/admin/login') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_pin</i>
                        <input class="white-text lowercase-text" type="email" id="email" name="email" value="{{ old('email') }}" autofocus>
                        <label for="email">Email</label>
                        @if ($errors->has('email'))
                            <span class="help-block error-text">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input class="white-text" type="password" id="password" name="password">
                        <label for="password">Password</label>
                        @if ($errors->has('password'))
                            <span class="help-block error-text">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>

                    {{--  REMEMBER ME  --}}
                    <div class="input-field col s6 no-mrpd warning-text">
                        <input class="cb-secondary" type="checkbox" id="remember_me" name="remember">
                        <label for="remember_me">Remember Me</label>
                    </div>

                    {{--   FORGOT PASSWORD  --}}
                    <div class="input-field col s6 no-mrpd">
                        <label class="forgot-password" for="label-label">
                            <a class="grey-text" href="{{ url('/admin/password/reset') }}">forgot password?</a>
                        </label>
                    </div>

                    {{--  SUBMIT BUTTON  --}}
                    <div class="input-field col s12 center">
                        <button class="btn mm-btn waves-effect waves-light sigin-submit" type="submit" name="login" data-preloader="blue" data-text="Login" data-icon="send" data-redirection="home.html">Login<i class="material-icons right white-text">send</i></button>
                    </div>

                    {{--  <div class="col s12 center nav-link"><a class="switchVisibility" href="javascript:void(0)" data-ref="signup-wrapper">Create account</a></div>  --}}
                </div>
            </form>
        </div>
    </div>
    <footer class="page-footer no-mrpd grey lighten-4">
    <div class="footer-copyright">
      <div class="container primary-text">
        <div class="right"><span class="left">Connect with us </span>
            <a class="btn-floating waves-effect waves-set setWave light-blue tiny" href="#"><i class="mdi mdi-twitter"></i></a>

            <a class="btn-floating waves-effect waves-set setWave light-red" href="#"><i class="mdi mdi-youtube-play"></i></a>
            <a class="btn-floating waves-effect waves-set setWave light-blue darken-4" href="#"><i class="mdi mdi-facebook"></i></a>
        </div>
    </div>
</footer>
</div>



@endsection
