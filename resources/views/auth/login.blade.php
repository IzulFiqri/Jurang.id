<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
          body{
          background:linear-gradient(#e6e6e6,#2952a3);
          display:flex;
          justify-content:center;
          align-items:center;
          width:98%;height:98%;
          color:white;
      }
      #wrapper{
        border:10px double #193366;
        margin:auto;
        width:1000px;
        height:50%;
        background: #999999;
        border-radius:8px;
      }
      #header{
        width:auto;
        margin-top:0;
        margin-left:auto;
        margin-right:auto;
        border-bottom:10px double black;
        height:40px;
        background:#4747d1;
        padding:10px 5px;
        font:35px Helvetica;
      }
      #header .left{
        float:left;
      }
      #header .right{
        float:right;
      }
      #form{
          text-align:center;
          background:#737373;
          color:white;
          width:400px;
          height:200px;
          margin:0 auto;
          margin-top:8%;
          padding:5px;
          font:25px Arial;
          display:flex;
          justify-content:center;
          align-items:center;
          border-radius:8px;
          font-family:Helvetica;
      }
      #form input{
        border:2px solid #d9d9d9;
        border-radius:4px;
        height:30px;
        width:200px;
        font:15px Helvetica;
      }
      .button{
          margin:0 auto;
          margin-top:20px;
          width:100px;
          height:30px;
          border-radius:4px;
          border:2px solid grey;
      }
      .button:hover{
        background:#262626;
        color:white;
      }
      
</style>
    </head>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-2">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


</html>

