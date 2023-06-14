<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="EstiloRegistro.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42ec7ee6fe.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="conexion.php" method="post" class="form_clientes">
            
            <h2 class="titulo_form_clientes">Registrarse</h2>
            <div class="contenedor-input">
                <table class="tabla-clientes" border="1">
                <tr>
                    <td class="celda-Nombres"> Nombres</td>
                    <td><input type="text" name="Nombres" class="input-50" placeHolder="Nombres"></td>
                </tr>
                <tr>
                    <td class="celda-Apellidos"> Apellidos</td>
                    <td><input type="text" name="Apellidos" class="input-50" placeHolder="Apellidos"></td>
                </tr>
                <tr>
                    <td class="celda-Apellidos"> Numero de documento</td>
                    <td><input type="text" name="Numerodedocumento" class="input-50" placeHolder="Numerodedocumento"></td>
                </tr>
                <tr>
                    <td class="celda-Email"> Direccion</td>
                    <td><input type="text" name="Direccion" class="input-50" placeHolder="Direccion"></td>
                </tr>
                <tr>
                    <td class="celda-Email"> Email</td>
                    <td><input type="text" name="Email" class="input-50" placeHolder="Email"></td>
                </tr>
                <tr>
                    <td class="celda-Contraseña"> Constraseña</td>
                    <td><input type="text" name="Contraseña" class="input-50" placeHolder="Contraseña"></td>
                </tr>
                <tr>
                    <td class="celda-Telefono"> Telefono</td>
                    <td><input type="text" name="Telefono" class="input-50" placeHolder="Telefono"></td>
                </tr>
                </table>
                
                <div class="form-group">
                    <table border="1">
                        <tr>
                            <td><input type="submit" class="btn-warning" value="Registrarse" id="registro" name="registrar"></td>
                            <td><input type="submit" class="btn-info" value="ConsultarInformacion" id="ConsultarInformacion" name="ConsultarInformacion"></td>
                            <td><input type="submit" class="btn-danger" value="EliminarDatos" id="EliminarDatos" name="EliminarDatos"></td>
                        </tr>
                    </table>
                </div>
                
                <table>
                    <tr>
                        <td><input type="submit" value="Registrarse"class="btn-registrarse"name="registrarse"></td>
                    </tr>
                </table>
                <table>
                    <tr onclick=window.open("Form_login.php")>
                        <td><input type="submit" value="Login"class="btn-Login"></td>
                    </tr>
                </table>
                
            </div>
        </form>   
    </body>
</html>
