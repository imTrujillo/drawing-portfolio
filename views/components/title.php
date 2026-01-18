<?php
$id = $id ?? "";
$label = $label ?? "";
$color = $color ?? "text-slate-500";
?>
<p class="flex uppercase font-bold <?php echo $color; ?> text-2xl md:text-4xl tracking-widest mb-4 scroll-mt-28" id="<?php echo $id ?>">
  <?php echo $label; ?>

</p>