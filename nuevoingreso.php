<?php 
    $nombrePagina = "Nuevo Ingreso";
    include 'plantilla.php'; 
    include 'header.php';

    // verificar si se ha enviado el formulario
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //CAPTURAR DATOS DEL FORMULARIO
        $tipoVehiculo = $_POST['tipoVehiculo'];
        $Marca = $_POST['Marca'];
        $Color = $_POST['Color'];
        $Placa = $_POST['Placa'];
        $Observaciones= $_POST['Observaciones'];

        //realizar la conexion a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $basedatos ="parking_plus_db";

        //crear una nueva conexion
        $conexion = new mysqli($servername, $username, $password, $basedatos);

        // verificar la conexion
        if( $conexion->connect_error ) {
            die("La conexion a la base de datos tuvo un error". $conexion->connect_error);
         }
         //armar la consulta SQL para la insercion
         $insertar = "INSERT INTO vehiculos (tipoVehiculo,Marca,Color,Placa,Observaciones)
         VALUES ('$tipoVehiculo','$Marca','$Color','$Placa','$Observaciones')";

         //ejecutar la consulta
         if($conexion->query($insertar) === TRUE) {
            //Redirigir al archivo exito.php despues de la insercion en la base de datos
            header("Location: exito.php");
            exit;
         }
        else {
            echo "Error". $insertar . "<br>" . $conexion->error;
    }
    // Cerrar la conexion
        $conexion->close();
     }
  ?>

<div class="contenedor-nuevo-ingreso">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="nuevoIngreso" method="post">
        <h3>informacion del vehiculo</h3>

        <div class="control-form">
            <label>tipo Vehiculo</label>
            <select name="tipoVehiculo">
                <option value="">Carro</option>
                <option value="">Moto</option>
                <option value="">Otro</option>
            </select>
        </div>

        <div class="control-form">
            <label>Marca</label>
            <input type="text" id="Marca" name="Marca" />
        </div>
        <div class="control-form">
            <label>Color</label>
            <input type="text" id="Color" name="Color" />
        </div>
        <div class="control-form">
            <label>Placa</label>
            <input type="text" id="Placa" name="Placa" />
        </div>
        <div class="control-form">
            <label>Observaciones</label>
            <input type="text" id="Observaciones" name="Observaciones" />
        </div>
        <button class="botonNuevoVehiculo" type="submit">Ingresar Vehiculos</button>

    </form>
</div>
<?php include 'footer.php'; ?>