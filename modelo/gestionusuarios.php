
<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('Conexion.php');

//declaracion de la clase usuarios que hereda de la clase datos
//la herencia se declara con la palabra extends y no es mas
//que decirle a esta clase que puede usar los mismos metodos
//que estan en la clase de dodne hereda (La padre) como sir fueran de el

class registro_usuario extends Conexion{
	//el primer paso dentro de la clase
	//sera declarar los atributos (variables) que describen la clase
	//para nostros no es mas que colcoar los inputs (controles) de
	//la vista como variables aca
	//cada atributo debe ser privado, es decir, ser visible solo dentro de la
	//misma clase, la forma de colcoarlo privado es usando la palabra private

    private $IdUsuario;
	private $Usuario;
	private $clave;
	private $respuesta;
	private $Seguridad_idPregunta;
	private $privilegio;
	//Ok ya tenemos los atributos, pero como son privados no podemos acceder a ellos desde fueran
	//por lo que debemos colcoar metodos (funciones) que me permitan leer (get) y colocar (set)

	function set_IdUsuario($valor){
		$this->IdUsuario = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
	}

	function set_Usuario($valor){
		$this->Usuario = $valor;
	}

	function set_clave($valor){
		$this->clave = $valor;
	}

	function set_Seguridad_idPregunta($valor){
		$this->Seguridad_idPregunta = $valor;
	}

	function set_respuesta($valor){
		$this->respuesta = $valor;
	}

	function set_privilegio($valor){
		$this->privilegio = $valor;
	}


	

		
		
		
		

	//ahora la misma cosa pero para leer, es decir get


	function get_IdUsuario($valor){
		$this->IdUsuario = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
	}

	function get_Usuario($valor){
		$this->Usuario = $valor;
	}

	function get_clave($valor){
		$this->clave = $valor;
	}

	function get_respuesta($valor){
		$this->respuesta = $valor;
	}

	function get_Seguridad_idPregunta($valor){
		$this->Seguridad_idPregunta = $valor;
	}

	function get_privilegio($valor){
		$this->privilegio = $valor;
	}




	//Lo siguiente que demos hacer es crear los metodos para incluirusuario, consultar y eliminar

	
	public function consultapregunta(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql=$co->prepare("SELECT idPregunta, Pregunta FROM seguridad");
		$sql->execute();
		$pregunta = $sql->fetchAll(PDO::FETCH_ASSOC);
		
		return $pregunta;
	}


	function incluirusuario(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if(!$this->existe($this->IdUsuario)){
		  try {
			$co->query("INSERT INTO user(
			  IdUsuario,
			  privilegio,
			  Usuario,
			  clave,
			  Seguridad_idPregunta,
			  respuesta

			  
			 )
			  VALUES(
			  '$this->IdUsuario',
			  '$this->privilegio',
			  '$this->Usuario',
			  '$this->clave',
			  '$this->Seguridad_idPregunta',
			  '$this->respuesta'
			  

			  )");
			$response = array('message' => 'done');
			echo json_encode($response);

		  } catch(Exception $e) {
			return json_encode(array("status" => "error", "message" => $e->getMessage()));
		  }
		}
		else{
		  return json_encode(array("status" => "error", "message" => "Ya existe la IdUsuario que desea ingresar"));
		}
	  }


	function modificarUsuario(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->IdUsuario)){
			try {
					$co->query("Update user set
						Usuario = '$this->Usuario',
						clave = '$this->clave',
						Seguridad_idPregunta = '$this->Seguridad_idPregunta',
						respuesta = '$this->respuesta'
						

                       
						where
						IdUsuario = '$this->IdUsuario'
						");
						return "usuario Modificado";
			} catch(Exception $e) {
				return json_encode(array("status" => "error", "message" => $e->getMessage()));
			}
		}
		else{
			return json_encode(array("status" => "error", "message" => "IdUsuario que desea ingresar no se encuentra registrada"));
		}

	}

	function eliminarUsuario(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->IdUsuario)){
			try {
					$co->query("delete from user
						where
						IdUsuario = '$this->IdUsuario'
						");
						return "usuario Eliminado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "IdUsuario no registrada";
		}
	}

	public function existe($IdUsuario){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from user where IdUsuario='$IdUsuario'");


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

	public function mostrarDatosusuario(){

		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
		$sql=$co->query("SELECT *from user");
	
			return $sql;
		  
		}




}
?>
