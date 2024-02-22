<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking plus</title>

    <link rel="stylesheet" href="<link rel=" preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="estilos.css">    
    
</head>

<body class="inter-400">
    <div class="contenedor">
        <div class="contenedor-logo">
            <!--este es el logo-->
            <i class="fa-solid fa-square-parking rojo" style="font-size: 4rem;"></i>
        <h1>
            <span class="gris-oscuro">Parking</span>
            <span class="rojo">plus</span>
        </h1>

        </div>
        <div class="contenedor-formulario">
            <p style="text-align: center;color: var(--grisOscuro);">Ingreso al sistema</p>
            <form>
                <label style="font-weight: bold;">Usuario</label>
                <input type="text" id="Usuario"/>
        
                <label style="font-weight: bold;">Clave</label>
                <input type="password" id="Clave"/>
        
                <button onclick="ingresarAlSistema()">Ingresar</button>
        
            </form>
        </div>
        <p>&copy;Loren Rodriguez-SystemPlus Popayan</p>
    </div>

    <script>
     function ingresarAlSistema(){ 
        const inputUsuario = document.getElementById('Usuario');
        const inputClave = document.getElementById('Clave');

        if(inputUsuario.value == "loren" && inputClave.value == 456789){
            alert("puedes ingresar al sistema");
        } else {
            alert("No estas autorizado a ingresar");

        }

    }
    </script>

    

</body>

</html>