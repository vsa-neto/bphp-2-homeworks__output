<?php

declare(strict_types=1);
require_once './navigate.php';

session_start();

if (isset($_SESSION['count'])) {
  echo "<div class='content'><h2>Страница 4 </h2> <p> количество открытий page-3: <span>" . $_SESSION['count'] . "</span> </p></div>";
}
