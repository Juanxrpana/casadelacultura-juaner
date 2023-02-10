<?php
//llamda al archivo que contiene la clase
//datos, en ella posteriormente se colcora el codigo
//para enlazar a su base de datos
require_once('modelo/Conexion.php');

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

	

	//ahora la misma cosa pero para leer, es decir get

	function get_idSalon($valor){
		$this->idSalon = $valor; //fijencen como se accede a los elementos dentro de una clase
		//this que singnifica esto es decir esta clase luego -> simbolo que indica que apunte
	}

	function get_NombreSalon($valor){
		$this->NombreSalon = $valor;
	}

	function get_CantidadPersonasSalon($valor){
		$this->CantidadPersonasSalon = $valor;
	}

	function get_CantidadSillas($valor){
        $this->CantidadSillas = $valor;
    }



	//Lo siguiente que demos hacer es crear los metodos para incluir, consultar y eliminar

	function incluir(){
		//Ok ya tenemos la base de datos y la funcion conecta dentro de la clase
		//datos, ahora debemos ejecutar las operaciones para realizar las consultas

		//Lo primero que debemos hacer es consultar por el campo clave
		//en este caso la idSalon, para ello se creo la funcion existe
		//que retorna true en caso de exitir el registro

		if(!$this->existe($this->idSalon)){
			//si estamos aca es porque la idSalon no existe es decir se puede incluir
			//los pasos a seguir son
			//1 Se llama a la funcion conecta
			$co = $this->conecta();
			$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//2 Se ejecuta el sql
			try {
					$co->query("Insert into salon(
						idSalon,
                        NombreSalon,
                        CantidadPersonasSalon,
                        CantidadSillas)
						Values(
						'$this->idSalon',
                        '$this->NombreSalon',
                        '$this->CantidadPersonasSalon',
                        '$this->CantidadSillas'
						
                        )");
						return "Registro incluido";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "Ya existe la idSalon que desea ingresar";
		}

		//Listo eso es todo y es igual para el resto de las operaciones
		//incluir, modificar y eliminar
		//solo cambia para buscar
	}

	function modificar(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if($this->existe($this->idSalon)){
			try {
					$co->query("Update empleados set
					    idSalon = '$this->idSalon',
                        NombreSalon = '$this->NombreSalon',
                        CantidadPersonasSalon = '$this->CantidadPersonasSalon',
                        CantidadSillas = '$this->CantidadSillas'
						where
						idSalon = '$this->idSalon'
						");
						return "Salon Modificado";
			} catch(Exception $e) {
				return $e->getMessage();
			}
		}
		else{
			return "idSalon no registrada";
		}

	}

	function eliminar(){
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


	

	private function existe($idSalon){
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

	function consultatr(){
		$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		try{

			$resultado = $co->query("Select * from salon where idSalon='$this->idSalon'");
			$fila = $resultado->fetchAll(PDO::FETCH_BOTH);
			if($fila){

				$envia = array('resultado'=>"encontro");

				$envia += $fila;

				return json_encode($envia);

			}
			else{

				$envia = array('resultado'=>"noencontro");
				return json_encode($envia);


			}

		}catch(Exception $e){
			$envia = array('resultado'=>$e->getMessage());
			return json_encode($envia);
		}

	}





}
?>
