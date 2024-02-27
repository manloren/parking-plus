<?php
$nombrePagina = "parqueados";
include 'plantilla.php';
include 'header.php';

//realizar la conexion a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$basedatos = "parking_plus_db";

//crear una nueva conexion
$conexion = new mysqli($servername, $username, $password, $basedatos);

// verificar la conexion
if ($conexion->connect_error) {
    die("La conexion a la base de datos tuvo un error" . $conexion->connect_error);
}

//consultar los vehiculos parqueados
$vehiculosparqueados = "SELECT * FROM vehiculos WHERE estado = 'parqueado'";
$resultado = $conexion->query($vehiculosparqueados);

//Obtener los datos como un array multidimensional
$vehiculos = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<div class="contenedor-listado-parqueados">
    <h3>Vehiculos parqueados</h3>

    <table class="tabla">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Ingreso</th>
            </tr>
        </thead>
        <?php

        if (!empty($vehiculos)) {
            foreach ($vehiculos as $vehiculo) {
                echo "<tr>";
                echo "<td>";
                if ($vehiculo["tipoVehiculo"] == "carro") {
                    echo "<i class='fa-solid fa-car'></i>";
                } elseif ($vehiculo["tipoVehiculo"] == "moto") {
                    echo "<i class='fa-solid fa-motorcycle'></i>";
                } else {
                    echo "<i class='fa-solid fa-bullseye'></i>";
                }
                echo $vehiculo["placa"] . "</td>";

                echo "<td>" . $vehiculo["fechaHoraIngreso"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr> <td colspan='5'> No hay vehiculos parqueados </td> </tr>";

        }
        ?>

    </table>
</div>
<?php include 'footer.php'; ?>