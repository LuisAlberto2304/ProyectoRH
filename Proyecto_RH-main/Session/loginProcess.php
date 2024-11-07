<?php
require_once("../includes/header.php");
include "../includes/header.php";
require_once '../includes/config/MySQL_ConexionDB.php';
require_once '../funciones.php';
//session_start();

$db_host = "localhost";
$db_name = "rrhh";
$root = "root";
$db_pass = "";

try {		
    $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}", $root, $db_pass);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
    exit(); 
}

if (isset($_POST['btnLogin'])) {
    $Usuario = trim($_POST['code']);
    $Contrasena = trim($_POST['password']);
    
    try {			
        $stmt = $db_con->prepare("SELECT * FROM empleado WHERE numero = :usuario");
        $stmt->bindParam(':usuario', $Usuario, PDO::PARAM_INT); 
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();
        
        // Verificar la contraseña obtenida de la base de datos
        $DBContrasena = ($count == 0) ? "" : $row['contrasena'];
        
        if ($DBContrasena === $Contrasena) {
            $_SESSION['usuario'] = $row['numero'];
           
            $info = getUserInfo($Usuario);
            foreach ($info as $infos) {
                $supervisor = $infos['supervisor'];
            }

            ?>
				<div class="loader">
					<div class="load"></div>
				</div>
                <?php 
                if ($supervisor != "" && $supervisor != null) { ?>
				    <meta http-equiv="refresh" content="0;url=../home.php"> <br> 
                <?php }else{ ?>
                    <meta http-equiv="refresh" content="0;url=../admin/homeAdmin.php"><br>
            <?php    } ?>

            <?php
        } else {
            // Mensaje de error si la contraseña no coincide
            echo '<br/><center><p>Upss... usuario o contraseña incorrecto</p>';
            echo '<input type="button" value="Volver a intentar" onclick="self.location=\'login.php\'" /></center>';
        }
    } catch (PDOException $e) {
        echo "Error en la consulta: " . $e->getMessage();
    }
}

include_once("../includes/footer.php");
?>
