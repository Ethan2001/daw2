<header class="container">

<div class="row">

<img src="http://localhost/daw2/daw2/t6/profe/t6-ci-ej10/assets/img/emple.jpg" class="img-rounded  center-block" alt="Empleados trabajando" height="100">

<div class="pull-right">
<?php if (isset ($header['empleado']['nombre'])) : ?>
	<?= $header['empleado']['nombre'] ?> <?= $header['empleado']['ape1'] ?> <a href="http://localhost/daw2/daw2/t6/profe/t6-ci-ej10/empleado/logout">LOGOUT</a>
<?php else: ?>
	<a href="<?=base_url()?>empleado/login">LOGIN</a>
<?php endif;?>
</div>

</div>

</header>
