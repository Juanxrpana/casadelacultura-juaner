$(document).ready(function(){

    mostrar();
    










    });

        function mostrar(){
                console.log("1");

            $.ajax({
                url:'modelo/mostrarDatos.php'
              
                   
                
            }).done(function(r){
                console.log("3");
                      console.log(r);
                       $('#tablaDatos').html(r);
            })
        }
        function modificarDatos(id){

        }

        function eliminarDatos(id){

        }

        function insertarDatos(id){
            console.log("entrando a insertar datos");
            var dato = $('#frminsert').serialize();
            console.log(dato);/* pa saber si tomó los datos */
            $.ajax({
                async: true,
                url:'./modelo/insertarDatos.php',
                method: 'POST',
                data:dato,
                
                success:function(re){
                    console.log("entrando a success");
                    alert(re);
                    console.log(re);
                    a = re;
                    if (a === "positivo"){
                       swal ("Error","No se ingreso correctamente","error");
                    }
                    else{
                        console.log("entrando al else");
                        $('#frminsert');//limpiar el formulario para otro registro
                        mostrar();
                        alert("si se agrego correctamente: " + Nombre1);
                        swal("¡"+re+"!",":D","success");
                    }        
                }
             });
            console.log("saliendo de la function");
            return false;        
        }