<?php

require_once('Conexion.php');

class login extends Conexion{
	

	private $IdUsuario;
	private $Usuario;
	private $privilegio;
	private $fechacreado;
	private $clave;

	
	function set_IdUsuario($valor){
		$this->IdUsuario = $valor;
	}

	function set_Usuario($valor){
		$this->Usuario = $valor;
	}

	function set_clave($valor){
		$this->clave = $valor;
	}

	function set_fechacreado($valor){
		$this->fechacreado = $valor;
	}
	
	function set_privilegio($valor){
		$this->privilegio = $valor;
	}


	//ahora la misma cosa pero para leer, es decir get

	function get_IdUsuario($valor){
		$this->IdUsuario = $valor;
	}

	function get_Usuario($valor){
		$this->Usuario = $valor;
	}

	function get_clave($valor){
		$this->clave = $valor;
	}

	function get_fechacreado($valor){
		$this->fechacreado = $valor;
	}

	function get_privilegio($valor){
		$this->privilegio = $valor;
	}

	function busca(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{
		
			$resultado = $co->prepare("SELECT privilegio, IdUsuaario, Usuario FROM user WHERE 
			cedula=:Usuario AND clave=:clave");
			
			$resultado->bindParam(':Usuario',$this->Usuario);
			$resultado->bindParam(':clave',$this->clave);
			
			$resultado->execute();
			
			
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			
			if($fila){
			
				return $fila;
			    
			}
			else{
				
				return "¡Error en los datos ingresados!";
			}
			
		}catch(Exception $e){
			return $e;
		}
	}
	
}



?>