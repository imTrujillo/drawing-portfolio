<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Steven's Gallery</title>

  <link rel="stylesheet" href="/drawing-portfolio/public/assets/css/app.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="//unpkg.com/alpinejs"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/rellax/rellax.min.js"></script>
  <script src="/drawing-portfolio/public/assets/js/app.js" defer></script>

</head>

<body>
  <?php
  include_once __DIR__ . "/../components/navbar.php"
  ?>

  <main class="overflow-x-hidden">
    <?= $content ?>
  </main>

  <?php
  include_once __DIR__ . "/../components/footer.php"
  ?>


  <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
</body>

</html>