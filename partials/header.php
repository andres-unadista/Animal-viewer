<!doctype html>
<html lang="es">

<head>
  <title>Sesiones</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <style>
    :root {
      --width-animal: 80px;
      --width-add: 2em;
      --height-animal: 80px;
    }

    .img-animal {
      object-fit: cover;
      width: var(--width-animal);
      height: var(--height-animal);
    }

    .icon-add {
      font-size: var(--width-add);
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">PHP 7</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link <?= $typeActive !== 'products' ? '' : 'active' ?>" href="index.php" aria-current="page">Animales</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link <?= $typeActive !== 'cart' ? '' : 'active' ?>" href="cart.php">Ver carrito</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delete-session.php">Eliminar sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>