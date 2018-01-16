// CONSULTAR EMPLEADOS
function leerEmp() {
    $.get("php/empleados/leerEmpleados.php", {}, function (data, status) {
        $(".emp_contenido").html(data);
    });
}


//DAR DE ALTA EMPLEADP
function agregarEmp(){

    var nom = $("#nom").val();
    var ap = $("#ap").val();
    var am = $("#am").val();
    var puesto = $("#puesto").val();
    var sueldo = $("#sueldo").val();
    var rfc = $("#rfc").val();
    //rfc = rfc.slice(11, 50);
    //alert(rfc);
    var fechaNac = new Date('yyyy/mm/dd');
    fechaNac = $("#fechaNac").data('date');

    var fechaActual = new Date('yyyy/mm/dd');
    fechaActual = getActualDate();
    
    $.post("php/empleados/nuevoEmpleado.php", {
        nom: nom,
        ap: ap,
        am: am,
        puesto: puesto,
        sueldo: sueldo,
        rfc: rfc,
        //fechaNac: fechaNac,
        //fechaActual: fechaActual
    }, function (data, status) {
        // close the popup
        $("#agregar_nuevo_emp_modal").modal("hide");
        
        // read records again
       leerEmp();
 
        // clear fields from the popup
        $("#nom").val("");
        $("#ap").val("");
        $("#am").val("");
        $("#puesto").val("");
        $("#sueldo").val("");
        //$("#rfc").val("");
        $("#fechaNac").val("");
        //$("#fecha_servicio").val();
    });
}

//OBTENER FECHA ACTUAL
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

$(document).ready(function () {
    leerEmp();

    $(".file-1").fileinput({
        uploadUrl: "php/empleados/subirArchivo.php",
        uploadAsync: false,
        minFileCount:1,
        maxFileCount:20,
        showUpload: true,
        showRemove:false,   
        showPreview: false,
        showUpload:false
        /*
        showCaption: false,
        browseClass: "btn btn-default",
        fileType: "any",
        showPreview: true,
        showUpload:false*/
    });
    /*
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
    });*/
});