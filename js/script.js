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
                    if(re == "1"){
                        console.log("entrando al if");
                        $('#frminsert').reset();//limpiar formulario
                        mostrar();
                        alert("si se agrego");
                        swal("¡Agregado correctamente!",":D","success")
                    }else{
                        swal("Error",":(error)");
                    }        
                }
             });
            console.log("saliendo de la function");
            return false;        
        }