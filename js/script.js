$(document).ready(function(){

    mostrar();
    insertarDatos();










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
            console.log("1");

            $.ajax({
                url:'modelo/insertarDatos.php',
                data:$('#frminsert').serialize(),
                succes:function(r){
                    if(r==1){
                        $('#frminsert').reset();//limpiar formulario
                        mostrar();
                        swal("¡Agregado correctamente!",":D","success")
                    }else{
                        swal("Error",":(error)");
                    }        
                }
                
             }).done(function(r){
                console.log("3");
                      console.log(r);
                       
            });
            return false;        
        }