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
            var dato = $('#frminsert').serialize();
            console.log(dato);/* pa saber si tomó los datos */
            $.ajax({
                async: true,
                url:'./modelo/insertarDatos.php',
                method: 'POST',
                data:dato,
                
                success:function(re){
                    console.log("2");
                    alert(re);
                    if(re == "si"){
                        $('#frminsert').reset();//limpiar formulario
                        console.log("3");
                        mostrar();
                        alert("si se agrego");
                        swal("¡Agregado correctamente!",":D","success")
                    }else{
                        swal("Error",":(error)");
                    }        
                }
             });
            console.log("4");
            return false;        
        }