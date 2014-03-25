<!-- Incluye este archivo sólo donde quieras restringir el acceso a administradores -->

<?php 
	global $current_user; 
	$rol = $current_user->roles[0];
	
	if ($rol != "administrator") {
		# code...
		?>
			<script>
				alert("You cannot see this, it's top secret.");
				document.location="http://altavista.com";
			</script>
		<?php 
	}
	
	  
 ?>