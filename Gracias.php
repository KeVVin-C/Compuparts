<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
<head>
<style>
/* Estilos para la ventana emergente */
#ventana-emergente {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #BBBBBB;
  padding: 20px;
  text-align: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  z-index: 9999;
}
</style>
</head>
<body>
<!-- Contenedor de la ventana emergente -->
<div id="ventana-emergente">
  <h1>GRACIAS POR TU COMPRA :D</h1>
  <img src="imagen/ef97747d4982e70c1c1d7377dd736e5c536408f7_hq.gif" alt=""/>
</div>
<table>
    <tr onclick=window.open("index1.php")>
        <td><input type="submit" value="Volver"class="btn-registrarse"name="Volver"></td>
    </tr>
</table>
</body>
</html>
