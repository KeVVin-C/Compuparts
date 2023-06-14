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
        <link href="EstiloLogin.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <form action="conexion.php" method="post" class="form_clientes">
            
            <h2 class="titulo_form_clientes">Ingresar</h2>
            <div class="contenedor-input">
                <table class="tabla-clientes" border="1">
                <tr>
                    <td class="celda-Email"> Email</td>
                    <td><input type="text" name="Email" class="input-50" placeHolder="Email"></td>
                </tr>
                <tr>
                    <td class="celda-Contraseña"> Contraseña</td>
                    <td><input type="text" name="Contraseña" class="input-50" placeHolder="Contraseña"></td>
                </tr>
                </table>
                
                <table>
                    <tr>
                        <td><input type="submit" value="Ingresar" class="btn-Login" name="ingresar"></td>
                    </tr>
                </table>
                <table>
                    <tr onclick=window.open("Form_clientes.php")>
                        <td><input type="submit" value="Registrarse"class="btn-registrarse"></td>
                    </tr>
                </table>
            </div>
        </form>   
    </body>
</html>
