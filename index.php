  <?php
  $typeActive = 'products';
  require_once './partials/header.php';
  ?>
  <main class="container mt-3">
    <?php
    if (isset($_GET['m'])) {
      switch ($_GET['m']) {
        case 1:
          echo <<<HTML
            <div class="alert alert-success" role="alert">
              <strong>Animal guardado!</strong>
            </div>
          HTML;

          break;
        case 2:
          echo <<<HTML
            <div class="alert alert-warning" role="alert">
              <strong>Animal eliminado!</strong>
            </div>
          HTML;

          break;
        case 3:
          echo <<<HTML
            <div class="alert alert-danger" role="alert">
              <strong>Sesión eliminada!</strong>
            </div>
          HTML;

          break;

        default:
          echo <<<HTML
            <div class="alert alert-info" role="alert">
              <strong>Opción inválida.</strong>
            </div>
          HTML;
          break;
      }
    }
    ?>
    <h2 class="my-4 text-center">Animales</h2>
    <table class="table table-secondary table-border text-center">
      <thead>
        <tr>
          <th>Animal</th>
          <th>Donación</th>
          <th>Agregar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img class="img-animal" src="images/cat.jpg" alt="cat"></td>
          <td>$1000</td>
          <td><a href="add-animal.php?animal=cat&price=1000" class="btn icon-add">🏷</a></td>
        </tr>
        <tr>
          <td><img class="img-animal" src="images/lion.jpg" alt="lion"></td>
          <td>$2000</td>
          <td><a href="add-animal.php?animal=lion&price=2000" class="btn icon-add">🏷</a></td>
        </tr>
        <tr>
          <td><img class="img-animal" src="images/leopard.jpg" alt="leopard"></td>
          <td>$3000</td>
          <td><a href="add-animal.php?animal=leopard&price=3000" class="btn icon-add">🏷</a></td>
        </tr>
      </tbody>
    </table>
  </main>
  <?php
  require_once './partials/footer.php';
  ?>