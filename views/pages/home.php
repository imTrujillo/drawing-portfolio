<?php
$categorias = Category::getCategories();

ob_start();

include __DIR__ . '/../sections/hero.php';
include __DIR__ . '/../sections/about.php';
include __DIR__ . '/../sections/gallery.php';
include __DIR__ . '/../sections/prices.php';

$content = ob_get_clean();

include __DIR__ . '/../layouts/app.php';
