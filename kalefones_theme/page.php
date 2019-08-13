<? $pageName = basename(get_permalink());?>
<? get_header() ?>

<? if($pageName == "servicios"): ?>
	<? require('includes/servicios.php') ?>
<? elseif ($pageName == "productos"): ?>
	<? require('includes/productos.php') ?>
<? elseif ($pageName == "contacto"): ?>
	<? require('includes/contacto.php') ?>
<? endif ?>

<? get_footer() ?>