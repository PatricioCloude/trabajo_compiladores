
<?php
	if (session_status() == PHP_SESSION_NONE) {
    	session_start();
	}

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Porfavor Inicie session");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }else{

	}
?>
<header>

		<div class="header">
			
			<h1>Paucar's Motor</h1>
			<div class="optionsBar">
				<p>Peru, <?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['usuario']; ?></span>
				<img class="photouser" src="img/user.png" alt="Usuario">
				<a href="../php/cerrar_session.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
			</div>
		</div>
    	<?php
		    include "nav.php";
	    ?>
	</header>