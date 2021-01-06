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
</head>
<body>
      
      <h1>@lang('messages.title')</h1>
      <p>Welcome! {{ auth()->user()->name }}</p>
      <p><a href="{{ url('logout') }}">@lang('messages.logout')</a></p>

      <table>
        <thead>
          <tr>
            <td>Name</td>
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

</body>
</html>