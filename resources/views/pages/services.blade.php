<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 9.X</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel 9.X</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}">Home</a></li>git add .

                <li><a href="{{url('apropos')}}">About</a></li>
                <li><a href="{{ url('services')}}">Services</a></li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">
                <li><a href="#">New product</a></li>
            </ul>-->
        </div>
    </nav>

    <div class="container">
        <h1>Wellcome to the Services page</h1>
    </div>

</body>
</html>