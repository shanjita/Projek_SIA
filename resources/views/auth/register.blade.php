
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNILEVER</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <h2 class="form-title">Form Daftar</h2>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            &nbsp;&nbsp;&nbsp;<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Daftar
                            </button>
                            <span class="txt1 p-b-17">
                        </span>
                        <a href="login" class="txt2">
                            Kembali
                        </a>
                        </div>
                    </div>
                   
                        </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>