<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('partials.nav')
    <h1> login </h1>
    @if($errors -> any())
    <ul>
    @foreach($errors->all() as $error)
      <li>
      {{$error }}
      </li>  
    @endforeach
    </ul>
    @endif
    <form  method="POST">
        @csrf
        <label>
            <input name="email" type="email" placeholder="Email">
        </label>
    
        </br>
        <label>
            <input name="password" type="password" placeholder="password">
        </label></br>
        <button type="submit"> Ingresar </button>
    </form>
</body>
</html>