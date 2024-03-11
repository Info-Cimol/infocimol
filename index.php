<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo URL ?>css/style.css">
  <title>Informática</title>
  <link rel="icon" href="<?php echo URL ?>img/emblema_info.png" type="image/x-icon">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="<?php echo URL ?>/img/info.png" alt="Bootstrap" width="30" height="24">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URL ?>">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://semanadainformatica.infocimol.com.br/" target="_NEW">Semana da
              Informática</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>sobre">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URL ?>contato">Contato</a>
          </li>
        </ul>
        <div class="d-flex">
          <img src="<?php echo URL ?>img/LogoCimolBranco.png" alt="">
        </div>
      </div>

    </div>
  </nav>

  <?php
  if (isset($_GET['path'])) {
    $path = $_GET['path'];

    if ($path == 'blog') {
      include './pages/blog.php';
    } elseif ($path == 'sobre') {
      include './pages/sobre.php';
    } elseif ($path == 'contato') {
      include './pages/contato.php';
    }
    elseif ($path == 'enviaremail') {
      include './php/enviarEmail.php';
    }
     else {
      include './pages/404.php';
    }
  } else {
    include './pages/home.php';
  }
  ?>

  <footer>
    <div class="container-fluid text-center">
      <h3>Escola Técnica Estadual Monteiro Lobato</h3>
      <h4>Curso Técnico de Informática</h4>
      <p>R. Guilherme Lahm, 1778 - Jardim do Prado, Taquara - RS, 95600-000</p>
      <p>(51) 3542-1309</p>
      <p class="contact">cimol@cimol.g12.br</p>
    </div>
  </footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</html>