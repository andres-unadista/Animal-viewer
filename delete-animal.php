<?php
session_start();
array_splice($_SESSION['cart'], $_GET['animal'], 1);
header('Location: index.php?m=2');
