<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../style.css">
<link href="./bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<title>@yield('title')</title>

</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark custom-back">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{route('/')}}">
    <img src="../image/SpaceRent.png" alt="Логотип">
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">О нас</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Аренда</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Список мероприятий</a>
        </li>
      </ul>
      <ul class="navbar-nav icon-list">
        <li class="nav-item">
          @if(auth()->check())
          <a class="nav-link" href="{{route('account')}}"><img src="../image/account.png" alt="Иконка аккаунта"></a>
          @else
          <a class="nav-link" href="{{route('login')}}"><img src="../image/account.png" alt="Иконка аккаунта"></a>
          @endif()          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="../image/search.png" alt=""></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<section>
@yield('main-content')
</section>
<footer class="bg-body-tertiary text-center text-lg-start"> 
  <div class="container p-4"> 
    <div class="row"> 
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0"> 
 
        <img src="../image/SpaceRent.png" alt="Логотип" class="img-fluid" style="max-width: 200px;"> 
      </div> 
 
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0"> 
<a href="#!" class="custom-link">Политика конфидециальности</a>
      </div> 
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0"> 
        <a href="#!" class="custom-link">Организаторам</a>
      </div> 

      <div class="col-lg-3 col-md-6 mb-4 mb-md-0"> 
      <a href="#!" class="custom-link">Клиентам</a>
      </div> 
    </div> 
  </div> 
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); margin-top: 70px;">
  © 2024 «SpaceRent». Все права защищены.
  </div>
</footer>
