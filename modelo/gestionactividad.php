
<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('Conexion.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class registro_actividad extends Conexion{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private

    private $idActividad;
	private $Estatus;
	private $NombreActividad; //recuerden que en php, las variables no tienen tipo predefinido
	private $FechaActividad;
	private $Participantes;
	private $CantidadEncuentros;
	private $HoraInicio;
	private $Cedula;
	private $Nombre1;
	private $Nombre2;
	private $Apellido1;
	private $Apellido2;
	private $Telefono;
	private $HoraCierre;
	private $Salon_idSalon;
	private $responsable_RCedula;

	
	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)

	function set_idActividad($valor){
		$this->idActividad = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
	}

	function set_Estatus($valor){
		$this->Estatus = $valor;
	}

	function set_NombreActividad($valor){
		$this->NombreActividad = $valor;
	}
	
	function set_FechaActividad($valor){
		$this->FechaActividad = $valor;
	}

	function set_Participantes($valor){
		$this->Participantes = $valor;
	}

	function set_CantidadEncuentros($valor){
		$this->CantidadEncuentros = $valor;
	}
	
	function set_HoraInicio($valor){
		$this->HoraInicio = $valor;
	}

	function set_Salon_idSalon($valor){
		$this->Salon_idSalon = $valor;
	}

	function set_responsable_RCedula($valor){
		$this->responsable_RCedula = $valor;
	}

	function set_HoraCierre($valor){
		$this->HoraCierre = $valor;
	}

	/* function set_Nombre1($valor){
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
	
	function set_HoraCierre($valor){
		$this->HoraCierre = $valor;
	} */

	

	

	

	//ahora la misma cosa pero para leer, es decir get


	function get_idActividad($valor){
		$this->idActividad = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
	}

	function get_Estatus($valor){
		$this->Estatus = $valor;
	}

	function get_NombreActividad($valor){
		$this->NombreActividad = $valor;
	}
	
	function get_FechaActividad($valor){
		$this->FechaActividad = $valor;
	}

	function get_Participantes($valor){
		$this->Participantes = $valor;
	}

	function get_CantidadEncuentros($valor){
		$this->CantidadEncuentros = $valor;
	}
	
	function get_HoraInicio($valor){
		$this->HoraInicio = $valor;
	}

	function get_HoraCierre($valor){
		$this->HoraCierre = $valor;
	}

	 function get_responsable_RCedula($valor){
		$this->responsable_RCedula = $valor;
	}



	/* function get_Nombre1($valor){
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
	
	 */

    	
	//Lo siguiente que demos hacer es crear los metodos para incluiractividad, consultar y eliminar
	
	
	
	public function consultaresponsable(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql=$co->prepare("SELECT RCedula, Nombre1, Apellido1 FROM responsable");
		$sql->execute();
		$responsable = $sql->fetchAll(PDO::FETCH_ASSOC);
		
		return $responsable;
	}

	public function consultaSalon(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql=$co->prepare("SELECT idSalon, NombreSalon FROM salon");
		$sql->execute();
		$salones = $sql->fetchAll(PDO::FETCH_ASSOC);
		
		return $salones;
	}


	function incluiractividad(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if(!$this->existe($this->idActividad)){
		  try {
			$co->query("INSERT INTO actividad(
			
			  Estatus,
			  NombreActividad,
			  FechaActividad,
			  Participantes,
			  CantidadEncuentros,
			  HoraInicio,
			  Salon_idSalon,
			  HoraCierre,
			  responsable_RCedula)
			  VALUES(
			
			  '$this->Estatus',
			  '$this->NombreActividad',
			  '$this->FechaActividad',
			  '$this->Participantes',
			  '$this->CantidadEncuentros',
			  '$this->HoraInicio',
			  '$this->Salon_idSalon', 
			  '$this->HoraCierre',
			  '$this->responsable_RCedula'
			  
			)");
			$response = array('message' => 'done');
			echo json_encode($response);

		  } catch(Exception $e) {
			return json_encode(array("status" => "error", "message" => $e->getMessage()));
		  }
		}
		else{
		  return json_encode(array("status" => "error", "message" => "Ya existe la idActividad que desea ingresar"));
		}
	  }


	function modificaractividad(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->idActividad)){
			try { //idActividad = '$this->idActividad',
					$co->query("Update actividad set
					    
						Estatus = '$this->Estatus',
                        NombreActividad = '$this->NombreActividad',
                        FechaActividad =  '$this->FechaActividad', 
						Participantes = '$this->Participantes',
						CantidadEncuentros = '$this->CantidadEncuentros',
						HoraInicio = '$this->HoraInicio',
						Nombre1 = '$this->Nombre1',
						Nombre2 = '$this->Nombre2',
						Apellido1 = '$this->Apellido1',
						Apellido2 = '$this->Apellido2',
						Telefono = '$this->Telefono',
						HoraCierre = '$this->HoraCierre',
						Salon_idSalon = '$this->Salon_idSalon', 
						responsable_RCedula = '$this->responsable_RCedula'
						where
						idActividad = '$this->idActividad'
						");
						return "actividad Modificado";
			} catch(Exception $e) {
				return json_encode(array("status" => "error", "message" => $e->getMessage()));
			}
		}
		else{
			return json_encode(array("status" => "error", "message" => "idActividad que desea ingresar no se encuentra registrada"));
		}

	}

	function eliminaractividad(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->idActividad)){
			try {
					$co->query("delete from actividad
						where
						idActividad = '$this->idActividad'
						");
						return "actividad Eliminado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "idActividad no registrada";
		}
	}

	public function existe($idActividad){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from actividad where idActividad='$idActividad'");


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

	public function mostraractividad(){

		
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
		$sql=$co->query("SELECT *from actividad");
	
			return $sql;
		  
		}




}
?>
