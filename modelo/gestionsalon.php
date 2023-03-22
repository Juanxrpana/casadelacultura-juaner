
<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('Conexion.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class registro_salon extends Conexion{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private

    private $idSalon;
	private $NombreSalon; //recuerden que en php, las variables no tienen tipo predefinido
	private $CantidadPersonasSalon;
	private $CantidadSillas;
	private $Nombredirector;
	private $Nombredirector2;
	private $Apellidodirector;
	private $Apellidodirector2;
	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)

	function set_idSalon($valor){
		$this->idSalon = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
	}

	function set_NombreSalon($valor){
		$this->NombreSalon = $valor;
	}

	function set_CantidadPersonasSalon($valor){
		$this->CantidadPersonasSalon = $valor;
	}

	function set_CantidadSillas($valor){
        $this->CantidadSillas = $valor;
    }

	function set_Nombredirector($valor){
		$this->Nombredirector = $valor;
	}

	function set_Nombredirector2($valor){
		$this->Nombredirector2 = $valor;
	}

	function set_Apellidodirector($valor){
		$this->Apellidodirector = $valor;
	}

	function set_Apellidodirector2($valor){
		$this->Apellidodirector2 = $valor;
	}

		
		
		
		

	//ahora la misma cosa pero para leer, es decir get


	function get_idSalon(){//fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
        return $this->idSalon;
    }

    function get_NombreSalon(){
        return $this->NombreSalon;
    }

    function get_CantidadPersonasSalon(){
        return $this->CantidadPersonasSalon;
    }

    function get_CantidadSillas(){
        return $this->CantidadSillas;
    }
	
	function get_Nombredirector(){
        return $this->Nombredirector;
    }

	function get_Nombredirector2(){
        return $this->Nombredirector2;
    }

	function get_Apellidodirector(){
        return $this->Apellidodirector;
    }

	function get_Apellidodirector2(){
        return $this->Apellidodirector2;
    }



	//Lo siguiente que demos hacer es crear los metodos para incluirsalon, consultar y eliminar

	
	


	function incluirsalon(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if(!$this->existe($this->idSalon)){
		  try {
			$co->query("INSERT INTO salon(
			  idSalon,
			  NombreSalon,
			  CantidadPersonasSalon,
			  CantidadSillas,
			  Nombredirector,
			  Nombredirector2,
			  Apellidodirector,
			  Apellidodirector2)
			  VALUES(
			  '$this->idSalon',
			  '$this->NombreSalon',
			  '$this->CantidadPersonasSalon',
			  '$this->CantidadSillas',
			  '$this->Nombredirector',
			  '$this->Nombredirector2',
			  '$this->Apellidodirector',
			  '$this->Apellidodirector2')");
			$response = array('message' => 'done');
			echo json_encode($response);

		  } catch(Exception $e) {
			return json_encode(array("status" => "error", "message" => $e->getMessage()));
		  }
		}
		else{
		  return json_encode(array("status" => "error", "message" => "Ya existe la idSalon que desea ingresar"));
		}
	  }


	function modificarDatos(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->idSalon)){
			try {
					$co->query("Update salon set
					    idSalon = '$this->idSalon',
                        NombreSalon = '$this->NombreSalon',
                        CantidadPersonasSalon = '$this->CantidadPersonasSalon',
                        CantidadSillas = '$this->CantidadSillas',
						Nombredirector= '$this->Nombredirector',
						Nombredirector2= '$this->Nombredirector2',
						Apellidodirector= '$this->Apellidodirector',
						Apellidodirector2= '$this->Apellidodirector2',
						where
						idSalon = '$this->idSalon'
						");
						return "Salon Modificado";
			} catch(Exception $e) {
				return json_encode(array("status" => "error", "message" => $e->getMessage()));
			}
		}
		else{
			return json_encode(array("status" => "error", "message" => "idSalon que desea ingresar no se encuentra registrada"));
		}

	}

	function eliminarDatos(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->idSalon)){
			try {
					$co->query("delete from salon
						where
						idSalon = '$this->idSalon'
						");
						return "Salon Eliminado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "idSalon no registrada";
		}
	}

	public function existe($idSalon){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from salon where idSalon='$idSalon'");


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

	public function mostrarDatosSalon(){

		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
		$sql=$co->query("SELECT *from salon");
	
			return $sql;
		  
		}




}
?>
