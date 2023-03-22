
<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('Conexion.php');
require_once('gestionresponsable.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class registro_responsable extends Conexion{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private

	private $Rid;
	private $Nombre1;
	private $Nombre2;
	private $Apellido1;
	private $Apellido2;
	private $Telefono;
	private $idNacionalidad;
	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)

	
	function set_Rid($valor){
		$this->Rid = $valor;
	}

	function set_Nombre1($valor){
		$this->Nombre1 = $valor;
	}

	function set_Nombre2($valor){
		$this->Nombre2 = $valor;
	}
	
	function set_Apellido1($valor){
		$this->Apellido1 = $valor;
	}

	function set_Apellido2($valor){
		$this->Apellido2 = $valor;
	}

	function set_Telefono($valor){
		$this->Telefono = $valor;
	}
	
	function set_idNacionalidad($valor){
		$this->idNacionalidad  = $valor;
	}

	

	//ahora la misma cosa pero para leer, es decir get

	function get_Rid($valor){
		$this->Rid = $valor;
	}

	function get_Nombre1($valor){
		$this->Nombre1 = $valor;
	}

	function get_Nombre2($valor){
		$this->Nombre2 = $valor;
	}
	
	function get_Apellido1($valor){
		$this->Apellido1 = $valor;
	}

	function get_Apellido2($valor){
		$this->Apellido2 = $valor;
	}

	function get_Telefono($valor){
		$this->Telefono = $valor;
	}

	function get_idNacionalidad($valor){
		$this->idNacionalidad = $valor;
	}
	    	
	//Lo siguiente que demos hacer es crear los metodos para incluirresponsable, consultar y eliminar

	

	function incluirresponsable(){
		$co1 = $this->conecta();
		$co1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if(!$this->existe($this->Rid)){
		  try {
			$co1->query("INSERT INTO responsable(
			Rid, 
			Nombre1,
			Nombre2, 
			Apellido1, 
			Apellido2, 
			Telefono, 
			Nacionalidad_idNacionalidad) 
			VALUES(
			  '$this->Rid',
			  '$this->Nombre1',
			  '$this->Nombre2',
			  '$this->Apellido1',
			  '$this->Apellido2',
			  '$this->Telefono',
			  '$this->idNacionalidad')");
			$response = array('message' => 'done');
			echo json_encode($response);
			print_r($co1);


		  } catch(Exception $e) {
			return json_encode(array("status" => "error", "message" => $e->getMessage()));
		  }
		}
		else{
		  return json_encode(array("status" => "error", "message" => "Ya existe un responsable con los mismos datos, no es necesario registrar de nuevo"));
		}
	  }


	function modificarresponsable(){
		$co1 = $this->conecta();
		$co1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->Rid)){
			try {
					$co1->query("Update responsable set
					    Rid = '$this->Rid',
						Nombre1 = '$this->Nombre1',
						Nombre2 = '$this->Nombre2',
						Apellido1 = '$this->Apellido1',
						Apellido2 = '$this->Apellido2',
						Telefono = '$this->Telefono',
						idNacionalidad = '$this->idNacionalidad'
						where
						Rid = '$this->Rid'
						");
						return "responsable Modificado";
			} catch(Exception $e) {
				return json_encode(array("status" => "error", "message" => $e->getMessage()));
			}
		}
		else{
			return json_encode(array("status" => "error", "message" => "La cedula que desea ingresar no se encuentra registrada"));
		}

	}


	function eliminarresponsable(){
		
		$co1 = $this->conecta();
		if (!$co1) {
			echo "No se pudo conectar a la base de datos<br>";
			return;}
		$co1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->Rid)){
			try {
					$co1->query("DELETE FROM responsable
						WHERE
						Rid = '$this->Rid'
						");
						return "responsable Eliminado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "Cedula no registrada";
		}
	}

	public function existe($Rid){
		$co1 = $this->conecta();
		$co1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co1->query("Select * from responsable where Rid='$Rid'");


			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				return true;

			}
			else{

				return false;;
			}

		}catch(Exception $e){
			return false;
		}
	}

	public function mostrarDatosresponsable(){

		
		$co1 = $this->conecta();
		$co1->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
		$sql=$co1->query("SELECT *from responsable");
	
			return $sql;
		  
		}




}
?>
