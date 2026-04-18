<!DOCTYPE html>
<html>

    <head>

        <meta lang="es">
        <meta charset="utf-8"><meta lang="es"
        <title>Clientes</title>
        <style>
            body{
                text-align: center;
            }

            .form{
                font-family: "Lucida Calligraphy";
                font-size: 25px;
                background-color: aquamarine;
            }

            .enviar{
                color: white;
                background-color: darkblue;
            }

        </style>

    </head>

    <body>
        <br><br><br>

        <div class="form">
            <form method="POST" action="clientes.php">

                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Carlos" required>

                <br><br>

                <label>Apellido</label>
                <input type="text" name="apellido" placeholder="Páez" required>

                <br><br>

                <label>Cedula</label>
                <input type="number" name="ci" placeholder="31470100" required>

                <br><br><br><br>

                <input type="submit" class="enviar">
            </form>
        </div>

    </body>

</html>
