<?php

session_start();

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

$_SESSION['cart'][] = [
  'animal' => $_GET['animal'],
  'price' => $_GET['price'],
];

header('Location: index.php?m=1');