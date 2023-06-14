<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="Estilo_Productos.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42ec7ee6fe.js" crossorigin="anonymous"></script>      
    </head>
     
    <body>
            <form action="conexion.php" method="post" class="productos">
            <h2 class="titulo_form_clientes">Pedido</h2>
            <div class="contenedor-input">
                <table class="tabla-clientes" border="1">
                <tr>
                    <td class="celda-Cantidad"> Cantidad</td>
                    <td><input type="text" name="Cantidad" class="input-50" placeHolder="Cantidad"></td>
                </tr>
                <tr>
                    <td class="celda-Direccion_Entrega"> Direccion_Entrega</td>
                    <td><input type="text" name="Direccion_Entrega" class="input-50" placeHolder="Direccion_Entrega"></td>
                </tr>
                <tr>
                    <td class="celda-Fecha_Hora"> Fecha_hora</td>
                    <td><input type="text" name="Fecha_Hora" class="input-50" placeHolder="Fecha_Hora"></td>
                </tr>
                <tr>
                    <td class="celda-Barrio_Entrega"> Barrio_entrega</td>
                    <td><input type="text" name="Barrio_Entrega" class="input-50" placeHolder="Barrio_Entrega"></td>
                </tr>
                <tr>
                    <td class="celda-Metodo_Pago"> Metodo_Pago</td>
                    <td><input type="text" name="Metodo_Pago" class="input-50" placeHolder="Metodo_Pago"></td>
                </tr>
                </table>
                
                <table>
                    <tr>
                        <td><input type="submit" value="Confirmar"class="btn-Confirmar"name="Confirmar"></td>
                    </tr>
                </table>
                <table>
                    <tr onclick=window.open("index.php")>
                        <td><input type="submit" value="Regresar"class="btn-Regresar"></td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>
