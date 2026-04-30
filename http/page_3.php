<?php

declare(strict_types=1);
require_once './navigate.php';

session_start();

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;
echo "<div class='content'><h2>Страница 3 </h2></div>";

if (($_SESSION['count'] > 0) && ($_SESSION['count']  % 3 == 0)) {
    header('Location: /page_4.php');
}
