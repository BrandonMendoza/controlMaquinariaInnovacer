<?php
    // include Database connection file 
    include("../db_conexion.php");
    

    
    // Design initial table header 
    $data = "";
    $data = '<table class="table table-striped">
                        <tr>
                            <th class="align-middle text-center"></th>
                            <th class="align-middle text-center">Nombre</th>
                            <th class="align-middle text-center">Apellidos</th>
                            <th class="align-middle text-center">Fecha de nac</th>
                            <th class="align-middle text-center">Puesto</th>
                            <th class="align-middle text-center">Sueldo</th>
                            <th class="align-middle text-center">no imss</th>
                            <th class="align-middle text-center">RFC</th>
                            <th class="align-middle text-center">Curp</th>
                            <th class="align-middle text-center">Acta de nac</th>
                            <th class="align-middle text-center">Comp de Domicilio</th>
                            <th class="align-middle text-center">Carta de No antecedentes</th>
                        </tr>';
 
    $query = "SELECT * FROM empleado";
 
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
 
    // if query results contains rows then featch those rows      onclick="eliminarMaq('.$row['idempleado'].')"
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
                <td class="align-middle text-center">'.$number.'</td>
                <td class="align-middle text-center">'.$row['nomEmp'].'</td>
                <td class="align-middle text-center">'.$row['apEmp'].' '.$row['amEmp'].'</td>
                <td class="align-middle text-center">'.$row['fecNacEmp'].'</td>
                <td class="align-middle text-center">'.$row['puesto'].'</td>
                <td class="align-middle text-center">'.$row['sueldo'].'</td>
                <td class="align-middle text-center">
                    <button class="glyphicon btn btn-default"> IMSS</button>
                </td>
                <td class="align-middle text-center">
                    <button class="glyphicon btn btn-default">RFC</button>
                </td>
                <td class="align-middle text-center">
                    <button class="glyphicon btn btn-default">CURP</button>
                </td>
                <td class="align-middle text-center">
                    <button class="glyphicon btn btn-default">ACTA</button>
                </td>
                <td class="align-middle text-center">
                    <button class="glyphicon btn btn-default">COMP</button>
                </td>
                <td class="align-middle text-center">
                    <button class="glyphicon btn btn-default">NO ANTECEDENTES</button>
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