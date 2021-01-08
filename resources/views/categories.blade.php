<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
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
            <h1>@lang('messages.title')</h1>
            <p>Welcome! {{ auth()->user()->name }}</p>
            <p><a href="{{ url('logout') }}">@lang('messages.logout')</a></p>
            </div>
          </div>
          <div class="row">
          <div class="col-md-4">
             <ul class="list-group">
                @can('add-user'))
                <a href="{{ url('users') }}" class="list-group-item">Users</a>
                @endcan
                <a href="{{ url('products') }}" class="list-group-item">Products</a>
                <a href="{{ url('sales') }}" class="list-group-item">Sales</a>
                <a href="{{ url('categories') }}" class="list-group-item">Categories</a>
                <a href="{{ url('students') }}" class="list-group-item">Students</a>
             </ul>
          </div>
          <div class="col-md-8">

      <table class="table table-bordered">
        <thead>
          <tr>
            <td>Name</td>
            <td>Products</td>
            <td>Created At</td>
          </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{ $category->name }}</td>
              <td>
                   @foreach($category->products as $product)
                   <p>{{ $product->name }} - {{ number_format($product->price,2) }}</p>
                   @endforeach
              </td>
              <td>{{ $category->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
      
      {!! $categories->render() !!}

    </div>
  </div>
</div><!-- end of container -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>