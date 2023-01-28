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