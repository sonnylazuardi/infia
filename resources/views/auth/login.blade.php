@include ('admin.header')

    <div id="login-page">
        <div class="container">
        
              <form class="form-login" role="form" method="POST" action="{{ url('/auth/login') }}">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value="{{ old('email') }}">
                    <br>
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me">Ingat Saya
                        </label>
                    </div>
                    <label class="checkbox">
                        <span class="pull-right">
                            <a lass="btn btn-link" href="{{ url('/password/email') }}">Lupa password?</a>
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>
                    
        
                </div>
        
              </form>       
        
        </div>
      </div>

@include('admin.footer')