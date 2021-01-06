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
</head>
<body>
      
      <h1>IFM Students Supermarket</h1>
      <p>Welcome!</p>

      <?php
           $email = [
              'placeholder'=>'Email',
              'class'=>'form-control',
              // 'required'=>true
           ];

           $password = [
              'placeholder'=>'Password',
              'class'=>'form-control',
              // 'required'=>true
           ];
      ?>
      @if(session()->get('error_message'))
         <p>{{ session()->get('error_message') }}</p>
      @endif

      @if($errors)
         @foreach($errors->all() as $error)
         <p>{{ $error }}</p>
         @endforeach
      @endif

      {!! Form::open(['url'=>'authenticate','method'=>'POST']) !!}
        
          {!! Form::label('email','Email') !!}
          {!! Form::email('email',null,$email) !!}

          {!! Form::label('password','Password') !!}
          {!! Form::password('password',$password) !!}

          {!! Form::submit('Login') !!}

      {!! Form::close() !!}
</body>
</html>