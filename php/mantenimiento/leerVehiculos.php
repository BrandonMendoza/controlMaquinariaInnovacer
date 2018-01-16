<?php
    // include Database connection file 
    include("../db_conexion.php");
 
    // Design initial table header 
    $data = '<table class="table table-striped">
                        <tr>
                            <th class="align-middle text-center">Numero</th>
                            <th class="align-middle text-center">Tipo</th>
                            <th class="align-middle text-center">Marca</th>
                            <th class="align-middle text-center">Modelo</th>
                            <th class="align-middle text-center">Color</th>
                            <th class="align-middle text-center">Placas</th>
                            <th class="align-middle text-center">Fecha de ultimo servicio</th>
                            <th class="align-middle text-center">Dias Sin Servicio</th>
                            <th class="align-middle text-center">Estado</th>
                            <th class="align-middle text-center"></th>
                            <th class="align-middle text-center"></th>
                        </tr>';
 
    $query = "SELECT * FROM vehiculo";
 
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
                <td class="align-middle text-center">'.$row['tipoVei'].'</td>
                <td class="align-middle text-center">'.$row['marcaVei'].'</td>
                <td class="align-middle text-center">'.$row['modeloVei'].'</td>
                <td class="align-middle text-center">'.$row['colorVei'].'</td>
                <td class="align-middle text-center">'.$row['placasVei'].'</td>
                <td class="align-middle text-center">'.$row['fechaUServicioVei'].'</td>
                <td class="align-middle text-center">'.$row['diasSinServVei'].'</td>
                <td class="align-middle text-center">'.$row['estado'].'</td>
                <td class="align-middle text-center">
                    <button onclick="GetInformacionVeh('.$row['idvehiculo'].')" class="glyphicon glyphicon-pencil btn btn-default"></button>
                </td>
                <td class="align-middle text-center">
                    <button onclick="eliminarVeh('.$row['idvehiculo'].')" class="glyphicon glyphicon-trash btn btn-default"></button>
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