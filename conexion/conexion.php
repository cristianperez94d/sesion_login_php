<?php 

/**
 * 
 */
class Conexion
{
	private function  conexionDB(){
		$conexion = new PDO('mysql:host=localhost;dbname=bd_sesion_login_php', "root", "");
		return $conexion;
	}
	public function consultarUsuario($nombre, $pass){
		if ($nombre != null && $pass != null) {
			$sql = "SELECT nombre_usu, pass_usu FROM t_usuario WHERE nombre_usu = :nombre and pass_usu = :pass;";
			$sentencia = $this->conexionDB()->prepare($sql);
			$sentencia->bindParam(':nombre', $nombre);
			$sentencia->bindParam(':pass', $pass);
			$sentencia->execute();
			$datos = $sentencia->fetch();
			if ($datos) {
				return $datos;
			}

		}

	}

	public function insertarUsuario($nombre, $pass){
		if ($nombre != null && $pass != null) {
			$sql = "INSERT INTO t_usuario(nombre_usu, pass_usu) VALUES (:nombre, :pass)";
			$sentencia = $this->conexionDB()->prepare($sql);
			$sentencia->bindParam(':nombre', $nombre);
			$sentencia->bindParam(':pass', $pass);
			if ($sentencia->execute()) {
				return true;
			}

		}

	}
}


 ?>