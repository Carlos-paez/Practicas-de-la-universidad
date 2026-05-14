<!DOCTYPE html>
<html lang="es">
<?php

	  include 'app/template/header.php';
	?>

<body class="theme-teal">
    <?php

	        $enlacesController = new EnlacesController();
	        $result = $enlacesController->enlacesControl();

	    ?>


</body>

<?php

		include 'app/template/footer.php';
	?>

</html>