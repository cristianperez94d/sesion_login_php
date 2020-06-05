<?php

/**
 * 
 */
class Usuario
{	


	static function iniciarSesion(){
		if (isset($_POST['nombre']) && isset($_POST['pass'])) {
			require_once "conexion/conexion.php";
			$conexion = new Conexion();

			$usuario = $conexion->consultarUsuario($_POST['nombre'], $_POST['pass']);
			if($usuario){
				session_start();
				$_SESSION['admin'] = $usuario['nombre_usu'];
				header('location: restringido.php');
			}
			else{
				// Usuario o contraseña incorrecta
				return "contraseña incorrecta";
			}
			

		}

	}

	static function registrarUsuario(){
		if (isset($_POST['nombre']) && isset($_POST['pass'])) {
			if ($_POST['nombre'] != "" && $_POST['pass'] != "") {
				require_once "conexion/conexion.php";
				$conexion = new Conexion();

				$dato = $conexion->insertarUsuario($_POST['nombre'], $_POST['pass']);
				if($dato){
					return "usuario registrado";
				}
				else{
					// Usuario o contraseña incorrecta
					return "error al insertar";
				}				
			}
		}

	}
	static function cerrarSesion(){
		session_start();

		// Destruir todas las variables de sesión.
		$_SESSION = array();

		// Si se desea destruir la sesión completamente, borre también la cookie de sesión.
		// Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
		if (ini_get("session.use_cookies")) {
		    $params = session_get_cookie_params();
		    setcookie(session_name(), '', time() - 42000,
		        $params["path"], $params["domain"],
		        $params["secure"], $params["httponly"]
		    );
		}

		// Finalmente, destruir la sesión.
		session_destroy();
		header('location:index.php');
	}
}

 ?>