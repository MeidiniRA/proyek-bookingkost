<!DOCTYPE html>
<html>
<head>
	<title>Ini Adalah table room</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<!--Navbar-->
<nav class="navbar navbar-light" style="background-color: #8fbc8f">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><b>Menu</b></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
    aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent15">
<nav class="navbar navbar-expand-lg" style="background-color: #8fbc8f">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">Booking Kost</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item primary">
        <a class="nav-link" href="/room">Room<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Booking</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="/room">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

@yield('konten')
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>