@section('pageTitle', 'Home')

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/perfil_usuario.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Open+Sans|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>@yield('pageTitle') - Lienis Design</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
<header>
  <!-- NAVBAR-->
  @include('navbar2')
  @include('logo')
</header>
<!-- cabecera -->
<!-- carousel -->

<div class="container-carousel">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
<img src="img\slide1.png" alt="Lieni Tips!" style="width:100%;">
</div>

<div class="item">
  <img src="img\slide2.png" alt="Lieni Tips!" style="width:100%;">
</div>

<div class="item">
<img src="img\slide3.png" alt="Lieni Tips!" style="width:100%;">
</div>

<div class="item">
<img src="img\slide4.png" alt="Lieni Tips!" style="width:100%;">
</div>

<div class="item">
<img src="img\slide5.png" alt="Lieni Tips!" style="width:100%;">
</div>
</div>
<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>

<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>

</div>
</div>

<!-- productos -->
<div class="tendencias">
<h2>LOS MÁS VENDIDOS</h2>
</div>
</section >
<div class="products-container">
<div class="lista-productos">
<div class="unProducto">
  <img src="img/img_1353.png" alt="Imagen del producto" width="100%" height="100%">

</div>
<div class="unProducto">
  <img src="img/img_1354.png" alt="Imagen del producto" width="100%" height="100%">

</div>
<div class="unProducto">
  <img src="img/img_1355.png" alt="Imagen del producto" width="100%" height="100%">

</div>
<div class="unProducto">
  <img src="img/img_1356.png" alt="Imagen del producto" width="100%" height="100%">

</div>
<div class="unProducto">
  <img src="img/img_1358.png" alt="Imagen del producto" width="100%" height="100%">

</div>
<div class="unProducto">
  <img src="img/img_1362.png" alt="Imagen del producto" width="100%" height="100%">

</div>
</div>
</div>

<!-- FOOTER -->
@include('footer')

</div>
</div>
</div>
  </body>
</html>
