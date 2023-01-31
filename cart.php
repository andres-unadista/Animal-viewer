<?php
session_start();

$typeActive = 'cart';
require_once './partials/header.php';
?>
<main class="container mt-3">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="my-4 text-center">Visualizador de animales</h2>
    <div>
      <?php
      $total = array_reduce($_SESSION['cart'] ?? [], fn ($carry, $current_animal) => $carry += $current_animal['price'], 0);
      ?>
      Total: $
      <?= $total ?>
    </div>
  </div>
  <table class="table table-secondary table-border text-center">
    <thead>
      <tr>
        <th>#</th>
        <th>Animal</th>
        <th>Donación</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach (($_SESSION['cart'] ?? []) as $index => $animal) :
      ?>
        <tr>
          <td>
            <?= $index + 1 ?>
          </td>
          <td>
            <?= ucfirst($animal['animal']) ?>
          </td>
          <td>$
            <?= $animal['price'] ?>
          </td>
          <td><a href="delete-animal.php?animal=<?= $index ?>" class="btn icon-add">🧨</a></td>
        </tr>
      <?php
      endforeach;
      ?>
    </tbody>
  </table>
</main>
<?php
require_once './partials/footer.php';
?>