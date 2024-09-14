<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas MAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container my-2">
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="imagenes/logo.png" alt="Logo" style="height: 35px;" class="d-inline-block align-text-top">
            <strong>Tiendas MAS</strong>
        </a>
        <div>
            <a href="#"><img src="imagenes/whatsapp.jpg" alt="" style="height: 35px;">  facebook</a> |
            <a href="#"><img src="imagenes/facebook.png" alt="" style="height: 29px;">  whatsapp</a>
        </div>
    </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/slide01.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/slide02.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/slide03.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
<div class="container mt-4">
    <h2 class="text-center">NUESTROS PRODUCTOS</h2><br>
    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-4  col-sm-6">
            <div class="card mb-4">
                <img src="imagenes/card01.jpg" class="card-img-top" alt="Producto 1">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-muted">Last updated</p>
                </div>
            </div>
        </div>
        <!-- Producto 2 -->
        <div class="col-md-4  col-sm-6">
            <div class="card mb-4">
                <img src="imagenes/card02.jpg" class="card-img-top" alt="Producto 2">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-muted">Last updated</p>
                </div>
            </div>
        </div>
        <!-- Producto 3 -->
        <div class="col-md-4  col-sm-6">
            <div class="card mb-4">
                <img src="imagenes/card03.jpg" class="card-img-top" alt="Producto 3">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-muted">Last updated</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Segunda fila de productos -->
    <div class="row">
        <!-- Producto 4 -->
        <div class="col-md-4  col-sm-6">
            <div class="card mb-4">
                <img src="imagenes/card04.jpg" class="card-img-top" alt="Producto 4">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-muted">Last updated</p>
                </div>
            </div>
        </div>
        <!-- Producto 5 -->
        <div class="col-md-4  col-sm-6">
            <div class="card mb-4">
                <img src="imagenes/card05.jpg" class="card-img-top" alt="Producto 5">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-muted">Last updated</p>
                </div>
            </div>
        </div>
        <!-- Producto 6 -->
        <div class="col-md-4  col-sm-6">
            <div class="card mb-4">
                <img src="imagenes/card06.jpg" class="card-img-top" alt="Producto 6">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text text-muted">Last updated</p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="text-rigth mt-4">
    <p><strong>📍 Jr. Amazonas 120<br>📞 Teléfono: 123456789</strong></p>
    <p class="text-center"><strong>Todos los Derechos Reservados 2014</strong></p>
</footer>

<script src="/vendor/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/js/bootstrap.min.js"></script>
</body>
</html>