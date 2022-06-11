$(document).ready(()=>{
        cargarListaRegiones();
})
/*
$("#formulario_crear_conductor").submit((event)=>{
    event.preventDefault()
})
*/
$("#registrar_usuario").click(()=>{

            const cliente_o_conductor = $("input[name=cliente_o_conductor]:checked").val();
            const nombre_usuario = $("#nombre_usuario").val();
            const apellido_usuario = $("#apellido_usuario").val();
            const fecha_nacimiento_usuario = $("#fecha_nacimiento_usuario").val();
            const cedula_usuario = $("#cedula_usuario").val();
            const contrasena_usuario = $("#contrasena_usuario").val();
            const correo_usuario = $("#correo_usuario").val();
            const region_usuario = $("#region_usuario").val();
            const comuna_usuario = $("#comuna_usuario").val();
            const action = "registrarUsuario";
            console.log(cliente_o_conductor)

            $.ajax({
                url  : "php/ajaxData.php",
                type : "POST",
                async: true,
                data :{
                    cliente_o_conductor:cliente_o_conductor,
                    nombre_usuario:nombre_usuario, 
                    apellido_usuario:apellido_usuario, 
                    correo_usuario:correo_usuario,
                    fecha_nacimiento_usuario:fecha_nacimiento_usuario,
                    cedula_usuario:cedula_usuario,
                    contrasena_usuario:contrasena_usuario,
                    region_usuario:region_usuario,
                    comuna_usuario:comuna_usuario,
                    action:action
                },
                beforeSend: function(){

                },
                success   : function(response){

                    if(response == "notData"){
                        Swal.fire({
                            icon: 'error',
                            title: 'Usuario no creado',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            allowEnterKey: false,
                            stopKeydownPropagation: false
                            })
                    }else{
                        Swal.fire({
                            icon: 'success',
                            title: 'Usuario creado',
                            confirmButtonText: 'Aceptar',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            allowEnterKey: false,
                            stopKeydownPropagation: false
                            })

                            $("#myModal").hide()
                    }
                },
                error     : function(error){
                    console.log(error);
                }
            });
})  

$("#region_usuario").change(()=>{ 
    const id_region = $("#region_usuario").val()
    
const cargarListaComunas = id_region
    const action = "listarComunas";

    $.ajax({
        url  :"php/ajaxData.php",
        type : "Post",
        async: true,
        data :{
            action:action,
            id_region:id_region
        },
        beforeSend:function(){

        },
        success:function(response){
            if(response == "notData"){
                response = "No hay datos para mostrar.";
                $("#comuna_usuario").html(response);
            }else{
                $("#comuna_usuario").prop("disabled","")
                $("#comuna_usuario").html(response);
            } 
        },
        error: function(error){

        }
    });
    
})

function cargarListaRegiones(){
    const action = "listarRegiones";

    $.ajax({
        url  :"php/ajaxData.php",
        type : "Post",
        async: true,              
        data :{
            action:action
        },
        beforeSend:function(){

        },
        success:function(response){
            if(response == "notData"){
                response = "No hay datos para mostrar.";
                $("#region_usuario").html(response);
            }else{
                $("#region_usuario").html(response);
            }
            
        },
        error: function(error){

        }
    });
}

$("#abrir_modal").click(()=>{
    $("#myModal").show()
})