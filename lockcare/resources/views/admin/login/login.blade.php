<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Login</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('/')}}admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('/')}}admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('/')}}admin/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('/')}}admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center text-info">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            {!! Form::open(['url'=>'/login','method'=>'POST']) !!}
                                <fieldset>
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control " placeholder="E-mail" name="email" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="text-danger invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="text-danger invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    {{--<button type="submit" class="btn btn-sm  btn-primary">
                                        {{ __('Login') }}
                                    </button>--}}
                                    {{--<input type="submit" name="btn" value="Login" class="btn btn-sm btn-primary btn-block">--}}
                                    {{Form::submit('Login',['class'=>'btn btn-sm btn-primary btn-block'])}}
                                </fieldset>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{asset('/')}}admin/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('/')}}admin/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('/')}}admin/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('/')}}admin/dist/js/sb-admin-2.js"></script>

    </body>

</html>
