<?php

require_once __DIR__ . "/../db/Picture.php";
require_once __DIR__ . "/../db/Category.php";

$page = $_GET['page'] ?? 'home';

switch ($page) {
  case 'home':
    require_once __DIR__ . '/../views/pages/home.php';
    break;
  default:
    http_response_code(404);
    echo "Página no encontrada";
    break;
}
