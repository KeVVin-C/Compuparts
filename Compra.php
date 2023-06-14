<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<!DOCTYPE html>
<html>
<head>
<title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Style/poner Aqui Nombre Hoja Estilo" />
        <link href="Compra_estilo.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42ec7ee6fe.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <h2>Compra de productos</h2>
  <form action="conexion.php" method="post" class="Compra">
    <div class="form-group">
      <label for="Nombre_producto">Nombre_producto:</label>
      <select id="Nombre_producto" name="Nombre_producto" onchange="mostrarPrecios()">
        <option value="teclado">Teclado</option>
        <option value="audio">Audio</option>
        <option value="mouse">Mouse</option>
        <option value="tarjeta_video">Tarjeta de video</option>
        <option value="procesador">Procesador</option>
        <option value="monitor">Monitor</option>
      </select>
    </div>
    <div class="form-group">
      <label for="Precio_producto">Precio_producto:</label>
      <select id="Precio_producto" name="Precio_producto"></select>
    </div>
    <div class="form-group">
      <label for="Numero de documento">Numero de documento</label>
      <input type="text" id="Numero de documento" name="Numero_documento" placeholder="Ingrese texto">
    </div>
    <div class="form-group">
      <label for="elefono">Telefono</label>
      <input type="text" id="Telefono" name="Telefono" placeholder="Ingrese texto">
    </div>
    <div class="form-group">
      <label for="Metodo de pago">Metodo de pago</label>
      <input type="text" id="campo2" name="Metodo_pago" placeholder="Ingrese texto">
    </div>
    <div class="form-group">
      <input type="submit" value="Confirmar" class="btn" name="Confirmar">
    </div>
  </form>
</div>

<script>
function mostrarPrecios() {
  var opciones = document.getElementById("Nombre_producto");
  var precio = document.getElementById("Precio_producto");
  var optionSelected = opciones.options[opciones.selectedIndex].value;
  
  precio.innerHTML = "";

  if (optionSelected === "teclado") {
    var option1 = document.createElement("option");
    option1.value = "343000";
    option1.text = "MSI VIGOR GK50 MECANICO LOW PROFILE - $343.000";
    precio.appendChild(option1);

    var option2 = document.createElement("option");
    option2.value = "345000";
    option2.text = "TECLADO LOGITECH G413 MECANICO - $345.000";
    precio.appendChild(option2);

    var option3 = document.createElement("option");
    option3.value = "349000";
    option3.text = "MOUSE MSI GM41 RGB - $349.000";
    precio.appendChild(option3);

    var option4 = document.createElement("option");
    option4.value = "379000";
    option4.text = "TECLADO CORSAIR K60 PRO RED - $379.000";
    precio.appendChild(option4);

    var option5 = document.createElement("option");
    option5.value = "459000";
    option5.text = "TECLADO BLACKWIDOW V3 TKL - $459.000";
    precio.appendChild(option5);
  } else if (optionSelected === "audio") {
    var option1 = document.createElement("option");
    option1.value = "90000";
    option1.text = "MSI GAMING DS501 RED - $90.000";
    precio.appendChild(option1);

    var option2 = document.createElement("option");
    option2.value = "147000";
    option2.text = "STEELSERIES ARCTIS 1 XBOX SERIES - $147.000";
    precio.appendChild(option2);

    var option3 = document.createElement("option");
    option3.value = "319000";
    option3.text = "ASTRO A10 GEN2 - $319.000";
    precio.appendChild(option3);

    var option4 = document.createElement("option");
    option4.value = "360000";
    option4.text = "STEELSERIES ARTIS PRIME - $360.000";
    precio.appendChild(option4);

    var option5 = document.createElement("option");
    option5.value = "499000";
    option5.text = "LOGITECH G535 WIRELESS - $499.000";
    precio.appendChild(option5);
  } else if (optionSelected === "mouse") {
    var option1 = document.createElement("option");
    option1.value = "89000";
    option1.text = "COOLER MASTER MM710 - $89.000";
    precio.appendChild(option1);

    var option2 = document.createElement("option");
    option2.value = "99000";
    option2.text = "MOUSE HYPERX PULSEFIRE CORE RGB - $99.000";
    precio.appendChild(option2);

    var option3 = document.createElement("option");
    option3.value = "115000";
    option3.text = "MOUSE MSI GM41 RGB - $115.000";
    precio.appendChild(option3);

    var option4 = document.createElement("option");
    option4.value = "339000";
    option4.text = "MOUSE STEELSERIES AEROX 5 - $339.000";
    precio.appendChild(option4);

    var option5 = document.createElement("option");
    option5.value = "399000";
    option5.text = "STEELSERIES RIVAL 650 WIRELESS - $399.000";
    precio.appendChild(option5);
  } else if (optionSelected === "tarjeta_video") {
    var option1 = document.createElement("option");
    option1.value = "1150000";
    option1.text = "AMD RADEON RX 6500 XT 4GB GDDR6 - $1.150.000";
    precio.appendChild(option1);

    var option2 = document.createElement("option");
    option2.value = "1650000";
    option2.text = "GIGABYTE GTX 1660 OC 6 GB GDDR5 - $1.650.000";
    precio.appendChild(option2);

    var option3 = document.createElement("option");
    option3.value = "1990000";
    option3.text = "ASUS TUF GAMING RTX 3050 OC EDITION - $1.990.000";
    precio.appendChild(option3);

    var option4 = document.createElement("option");
    option4.value = "2550000";
    option4.text = "ASUS RTX 3060 TI OC DUAL 8 GB DDR6 - $2.550.000";
    precio.appendChild(option4);

    var option5 = document.createElement("option");
    option5.value = "3629000";
    option5.text = "MSI GAMING RTX 4070 GAMING X TRIO 12 GB OC DDR6 - $3.629.000";
    precio.appendChild(option5);
  } else if (optionSelected === "procesador") {
    var option1 = document.createElement("option");
    option1.value = "635000";
    option1.text = "INTEL CORE I3 12100F 4.3 GHZ - $635.000";
    precio.appendChild(option1);

    var option2 = document.createElement("option");
    option2.value = "1694000";
    option2.text = "INTEL CORE I5 13600KF 5.1 GHZ - $1.694.000";
    precio.appendChild(option2);

    var option3 = document.createElement("option");
    option3.value = "3395000";
    option3.text = "INTEL CORE I9 13900K 5.8 GHZ - $3.395.000";
    precio.appendChild(option3);

    var option4 = document.createElement("option");
    option4.value = "839000";
    option4.text = "AMD RYZEN 5 5600G 3.9 4.4 GHZ - $839.000";
    precio.appendChild(option4);

    var option5 = document.createElement("option");
    option5.value = "3424000";
    option5.text = "AMD RYZEN 9 7950X 4.5 5.7 GHZ - $3.424.000";
    precio.appendChild(option5);
  } else if (optionSelected === "monitor") {
    var option1 = document.createElement("option");
    option1.value = "750000";
    option1.text = "ACER NITRO 24\" 1MS 75 HZ FHD - $750.000";
    precio.appendChild(option1);

    var option2 = document.createElement("option");
    option2.value = "899000";
    option2.text = "ACER NITRO 27\" 1MS 75HZ FHD - $899.000";
    precio.appendChild(option2);

    var option3 = document.createElement("option");
    option3.value = "940000";
    option3.text = "ASUS TUF 24\" 165HZ 1MS FHD PLANO - $940.000";
    precio.appendChild(option3);

    var option4 = document.createElement("option");
    option4.value = "999000";
    option4.text = "ACER NITRO 24\" 165HS 1MS FHD - $999.000";
    precio.appendChild(option4);

    var option5 = document.createElement("option");
    option5.value = "1569000";
    option5.text = "LG 27 165HZ 1MS, FHD GQ50F - $1.569.000";
    precio.appendChild(option5);
  }
}
</script>

</body>
</html>
