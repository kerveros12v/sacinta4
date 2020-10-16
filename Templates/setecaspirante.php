<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/cssmatricula1.css" />
	<link href="../css/select2.min.css" rel="stylesheet" />
	<link href="../css/cssfinal.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../js/select2.min.js"></script>
	<script type="text/javascript" src="../js/ajaxs.js"></script>
	<script type="text/javascript" src="../js/ajaxssetecaspiranteselect.js"></script>
	<script type="text/javascript" src="../js/ajaxsSetecAspirante.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(document).ready(function() {
				$('.selector').select2();
			});

		});
	</script>
	<?php $numide = $_POST['ced']; ?>

	<meta http-equiv="Content-type" content="text/html; " />
	<title>Formulario Aspirante Setec</title>

</head>

<body>
	<div class="cuerpo">
		<form method="POST" class="msform">
			<table>
				<tbody id="setecaspirante">

				</tbody>
			</table>
		</form>
	</div>

</body>



</html>