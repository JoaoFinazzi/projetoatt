<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atendimento</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!--Optional theme-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/atendimento">Atendimento</a>
      <a class="navbar-brand" href="#">Contatos</a>      
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/auth/login') }}">Home</a></li>
        <li><a href="#">Login</a></li>
    </div>
  </div>
</nav>

<main>
    <div class="container">
        @yield('content')

    </div>
</main>

</body>
</html>