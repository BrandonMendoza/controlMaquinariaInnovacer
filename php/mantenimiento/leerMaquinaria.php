<?php
    // include Database connection file 
    include("../db_conexion.php");
    

    
    // Design initial table header 
    $data = "";
    $data = '<table class="table table-striped">
                        <tr>
                            <th class="align-middle text-center">Numero</th>
                            <th class="align-middle text-center">Tipo</th>
                            <th class="align-middle text-center">Clave</th>
                            <th class="align-middle text-center">Color</th>
                            <th class="align-middle text-center">Fecha De ultimo Servicio</th>
                            <th class="align-middle text-center">Dias sin Servicio</th>
                            <th class="align-middle text-center">Estado</th>
                            <th class="align-middle text-center"></th>
                            <th class="align-middle text-center"></th>
                        </tr>';
 
    $query = "SELECT * FROM maquinaria";
 
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
 
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
                <td class="align-middle text-center">'.$number.'</td>
                <td class="align-middle text-center">'.$row['tipoMaq'].'</td>
                <td class="align-middle text-center">'.$row['claveMaq'].'</td>
                <td class="align-middle text-center">'.$row['colorMaq'].'</td>
                <td class="align-middle text-center">'.$row['fechaUServMaq'].'</td>
                <td class="align-middle text-center">'.$row['diasSinServMaq'].'</td>
                <td class="align-middle text-center">'.$row['estadoMaq'].'</td>
                <td class="align-middle text-center">
                    <button onclick="GetInformacionMaq('.$row['idmaquinaria'].')" class="glyphicon glyphicon-pencil btn btn-default"></button>
                </td>
                <td class="align-middle text-center">
                    <button onclick="eliminarMaq('.$row['idmaquinaria'].')" class="glyphicon glyphicon-trash btn btn-default"></button>
                </td>
            </tr>';
            $number++;
        }
    }
    else
    {
        // records now found 
        $data .= '<tr><td colspan="6">No se encontraron registros</td></tr>';
    }
 
    $data .= '</table>';
 
    echo $data;
?>