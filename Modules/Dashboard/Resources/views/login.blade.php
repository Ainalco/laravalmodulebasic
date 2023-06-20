<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>loginForm</title>
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="{{ asset('admincss/pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admincss/custom.min.css') }}" rel="stylesheet" type="text/css"/>   
    <link href="{{ asset('admincss/extra.css') }}" rel="stylesheet" type="text/css"/>  
</head>

<body>
    <div class="login vh100">
        <div class="login-content login-content_bg">        	
                 <div class="text-center mb-5">
                    <h1 class="mt-0">Login</h1>
                    <div class="text-muted">
                        Admin Login
                        @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
                <form action="{{route('checklogin')}}" id="loginForm" novalidate="" method="post" accept-charset="utf-8">   
                @csrf        
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="Email" name="email" id="email" class="form-control fs-15px" autocomplete="off"> 
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password"  placeholder="Password" name="password" id="password" class="form-control fs-15px" autocomplete="off"> 
                </div>
                
                <button type="submit" class="btn btn-success btn-lg btn-block fw-500 mb-3">Login</button>
                
            </form>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>

</html>