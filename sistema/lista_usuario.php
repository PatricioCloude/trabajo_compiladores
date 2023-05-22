<?php

include '../conexion_be.php';


?>








<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
		include "includes/script.php";
	?>
	

	<title>Lista Usuarios</title>
</head>
<body>
	<?php include "includes/header.php";?>
	<section id="container">
    <h1>Lista de Usuarios</h1>
    <a href="registrar_usuario.php" class="btn_new">Crear Usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>USUARIO</th>
            <th>ROL</th>
            <th>ACCIONES</th>
        </tr>

        <?php

            $query = mysqli_query($conexion,  "SELECT u.id, u.nombre_completo, u.correo, u.usuario, u.id_rol, r.id 
                                                FROM usuarios u INNER JOIN roles r ON u.id_rol = r.id;");
            $result = mysqli_num_rows($query);

            if($result > 0 ){
                while($data = mysqli_fetch_array($query)){

            ?>
                <tr>
                    <td><?php  echo $data["id"]?></td>
                    <td><?php  echo $data["nombre_completo"]?></td>
                    <td><?php  echo $data["correo"]?></td>
                    <td><?php  echo $data["usuario"]?></td>
                    <td><?php  echo $data["id_rol"]?></td>
                    <td>
                        <a class="link_edit" href="">Editar</a>
                        <a class="link_delete"href="">Eliminar</a>
                    </td>
                </tr>
        <?php
                }
            }
        ?>
    </table>




	</section>

	<?php	include "includes/footer.php";?>


</body>
</html>