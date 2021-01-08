<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Super Market</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Supermarket system for IFM students">
    <meta name = "keywords" content = "IFM, Supermarket, Students Groceries">
    <meta name = "author" content = "IFM Developers" >
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
      
      <div class="container">
      	  <div class="row">
      	  	<div class="col-md-12 is-center">
      <h1>{{ __('messages.title') }}</h1>
      <p>Welcome! @if(auth()->check()) {{ auth()->user()->name }} @endif</p>
      <p><a href="{{ url('locale/en') }}">English</a>&nbsp;<a href="{{ url('locale/sw') }}">Swahili</a></p>
      <p><a href="{{ url('logout') }}">@lang('messages.logout')</a></p>
       <h1>Permission Denied!</h1>
           </div>
          </div>
      </div><!-- end of container -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>