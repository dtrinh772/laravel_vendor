<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/admin/login.css">
</head>
<body>
<div class="body-sign-in">
    <div class="container-login100">
        <div class="wrap-login100">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{--                <form class="login100-form validate-form" action="/dasboard" method="POST">--}}
            {!! Form::open([
                        'route' => ['admin.login.submit'],
                        'method' => 'POST',
                        'class'  => 'login100-form validate-form'
                ])
            !!}
            <span class="login100-form-title p-b-26 ">
                    Welcome
                    </span>

            <span class="login100-form-title p-b-48">
                        <i class="fab fa-cpanel"></i>
                    </span>

            <div class="wrap-input100 validate-input" data-validate="Enter username">
                <input class="input100" type="text" name="username">
                <span class="focus-input100" data-placeholder="Username"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="fas fa-eye"></i>
                        </span>

                <input class="input100" type="password" name="password">
                <span class="focus-input100" data-placeholder="Password"></span>

            </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>
            </div>
            <div class="text-center p-t-115">
                        <span class="txt1">
                        Don’t have an account?
                        </span>
                <a class="txt2" href="#">
                    Sign Up
                </a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script language="Javascript">

    $(document).ready(function(e){

        $(window).on('load', function(){
            $('.input100').val("");

            $('.input100').focusout(function(){
                if ($(this).val() != ''){
                    $(this).addClass('has-val');
                }else{
                    $(this).removeClass('has-val');
                }
            });
        });
    });

</script>
</body>
</html>



