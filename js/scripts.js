
//AGREGAR MAQUINARIA
function addMaquinaria() {
    // get values

    var tipo = $("#tipo").val();
    var clave = $("#clave").val();
    var color = $("#color").val();
    var fechaUS = new Date('yyyy/mm/dd');
    fechaUS = $("#fecha1").data('date');

    var fechaActual = new Date('yyyy/mm/dd');
    fechaActual = getActualDate();
    
    $.post("php/mantenimiento/nuevoMaquinaria.php", {
        tipo: tipo,
        clave: clave,
        color: color,
        fechaUS: fechaUS,
        fechaActual: fechaActual
    }, function (data, status) {
        // close the popup
        $("#agregar_nueva_maq_modal").modal("hide");
 
        // read records again
       leerMaq();
 
        // clear fields from the popup
        $("#tipo").val("");
        $("#clave").val("");
        $("#color").val("");
        //$("#fecha_servicio").val();
    });
}

//AGREGAR VEHICULO
function addVehiculo() {
    // get values
    var tipo = $("#tipoV").val();
    var marca = $("#marcaV").val();
    var modelo = $("#modeloV").val();
    var color = $("#colorV").val();
    var placas = $("#placasV").val();
    var fechaUS = new Date('yyyy/mm/dd');
    fechaUS = $("#fechaV").data('date');

    var fechaActual = new Date('yyyy/mm/dd');
    fechaActual = getActualDate();

 
    // Add record
    $.post("php/mantenimiento/nuevoVehiculo.php", {
        tipo: tipo,
        marca:marca,
        modelo:modelo,
        color:color,
        placas: placas,
        fechaUServ: fechaUS,
        fechaActual: fechaActual
    }, function (data, status) {
        // close the popup
        $("#agregar_nuevo_veh_modal").modal("hide");
 
        // read records again
        leerVeh();
 
        // clear fields from the popup
        $("#tipoV").val("");
        $("#marcaV").val("");
        $("#modeloV").val("");
        $("#colorV").val("");
    });
}



//CONSULTASS MAQUINARIA
function leerMaq() {
    $.get("php/mantenimiento/leerMaquinaria.php", {}, function (data, status) {
        $(".maq_content").html(data);
    });
}

//CONSULTA VEHICULO
function leerVeh() {
    
    $.get("php/mantenimiento/leerVehiculos.php", {}, function (data, status) {
        $(".veh_content").html(data);
    });
}


//ELIMINAR MAQUINARIA
function eliminarMaq(id) {
    var conf = confirm("Estas seguro de eliminar maquinaria?");
    if (conf == true) {
        $.post("php/mantenimiento/eliminarMaquinaria.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                leerMaq();

            }
        );
    }
}

//ELIMINAR VEHICULO
function eliminarVeh(id) {
    var conf = confirm("Estas seguro de eliminar Vehiculo?");
    if (conf == true) {
        $.post("php/mantenimiento/eliminarVehiculo.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                leerVeh();
                
            }
        );
    }
}


//GET INFORMACION MAQUINARIA
function GetInformacionMaq(id) {
    // Add User ID to the hidden field for furture usage

    $("#escondido_idM").val(id);
    $.post("php/mantenimiento/getInformacionMaq.php", {
            id: id
        },
        function (data, status) {
            // PARSE json dataalert("test1");
            var maq = JSON.parse(data);
            
            // Assing existing values to the modal popup fields
            $("#actualizar_tipoM").val(maq.tipoMaq);
            $("#actualizar_colorM").val(maq.colorMaq);
            $("#actualizar_fechaM").val(maq.fechaUServMaq);
            //+" "+maq.colorMaq+" "maq.fechaUServ+" "+maq.idmaquinaria
        }
    );
    // Open modal popup
    $("#actualizar_maquinaria_modal").modal("show");
}
//GET INFORMACION VEHICULO
function GetInformacionVeh(id) {
    // Add User ID to the hidden field for furture usage
    $("#escondido_idV").val(id);

    $.post("php/mantenimiento/getInformacionVeh.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var veh = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#actualizar_tipoV").val(veh.tipoVei);
            $("#actualizar_marcaV").val(veh.marcaVei);
            $("#actualizar_modeloV").val(veh.modeloVei);
            $("#actualizar_colorV").val(veh.colorVei);
            $("#actualizar_placasV").val(veh.placasVei);
            $("#actualizar_fechaV").val(veh.fechaUServicioVei);
        }
    );
    // Open modal popup
    $("#actualizar_vehiculo_modal").modal("show");
}

//ACTUALIZAR INFO MAQUINARIA
function actualizarInformacionMaq() {
    // get values
    var tipo = $("#actualizar_tipoM").val();
    var color = $("#actualizar_colorM").val();
    var fechaUS = $("#actualizar_fechaM").data('date');
    var fechaActual = new Date('yyyy/mm/dd');
    fechaActual = getActualDate();
    // get hidden field value
    var id = $("#escondido_idM").val();
 
    // Update the details by requesting to the server using ajax
    $.post("php/mantenimiento/actualizarMaq.php", {
            id:id,
            tipo: tipo,
            color: color,
            fechaUS: fechaUS,
            fechaActual: fechaActual
        },
        function (data, status) {
            // hide modal popup
            $("#actualizar_maquinaria_modal").modal("hide");
            // reload Users by using readRecords();

            leerMaq();
        }
    );
}

//ACTUALIZAR INFO VEHICULO
function actualizarInformacionVeh() {
    // get values
    var tipo = $("#actualizar_tipoV").val();
    var marca = $("#actualizar_marcaV").val();
    var modelo = $("#actualizar_modeloV").val();
    var color = $("#actualizar_colorV").val();
    var placas = $("#actualizar_placasV").val();
    var fechaUS = $("#actualizar_fechaV").data('date');


    //alert(tipo+" "+marca+" "+modelo+" "+color+" "+placas+" "+fechaUS);
    var fechaActual = new Date('yyyy/mm/dd');
    fechaActual = getActualDate();
 
    // get hidden field value
    var id = $("#escondido_idV").val();
 
    // Update the details by requesting to the server using ajax
    $.post("php/mantenimiento/actualizarVeh.php", {
            id: id,
            tipo: tipo,
            marca: marca,
            modelo: modelo,
            color: color,
            placas: placas,
            fechaUS: fechaUS,
            fechaActual: fechaActual
        },
        function (data, status) {
            // hide modal popup
            $("#actualizar_vehiculo_modal").modal("hide");
            // reload Users by using readRecords();
            leerVeh();
        }
    );
}
//FECHA ACTUAL
function getActualDate(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd='0'+dd
    } 

    if(mm<10) {
        mm='0'+mm
    } 

    today = yyyy+'/'+mm+'/'+dd;

    return today;
}


function parseDate(str) {
    var mdy = str.split('/');
    return new Date(mdy[2], mdy[0]-1, mdy[1]);
}

function actualizarFechas(){
    var fechaActual = new Date('yyyy/mm/dd');
    fechaActual = getActualDate();

    $.post("php/mantenimiento/actualizarInfo.php", {
        fechaActual: fechaActual
    }, function (data, status) {
        //alert(data);
        leerMaq();
        leerVeh();
    });

    /*
    TO DO LIST:
        1. obtener fecha actual
        2. consultarl la fecha en laBD
        3. Hacer la operacion de resta de fechas
        4. Hacer el update en la BD
        5. Mostrar los registros
        6. Cambiar el color del mensaje de acuerdo a los dias 

    */
    
}

function iniciarValidacion(){
    $("span.help-block").hide();
    
    $("#AgregarMaqBtn").click(validar);
}
function validar(){
    var tipo = $("#tipo").val();
    var clave = $("#clave").val();
    var color = $("#color").val();
    var fechaUS = new Date('yyyy/mm/dd');
    fechaUS = $("#fecha1").data('date');


}


$(document).ready(function () {
    actualizarFechas();
    iniciarValidacion();
    


    $('.form_date').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        startDate: '-1y',
        endDate: '+0d',
        format: 'yyyy/mm/dd'
    });
});