<?php

//conexion a base de datos

$servidor="localhost";
$usuario="root";
$clave="";
$bddatos="pmv";
$conexion=mysqli_connect($servidor, $usuario,$clave,$bddatos) or die("Conexion fallida");

/*
if($conexion){
    echo "conexion exitosa";
    
}else{
    echo"No se conecto a la base de datos";
}
*/

//Insertar datos 
if(isset($_POST["registrarse"])){
    $ID_cliente= $_POST['ID_Cliente'];
    $Nombres= $_POST['Nombres'];
    $Apellidos=$_POST['Apellidos'];
    $Telefono=$_POST['Telefono'];
    $Numerodedocumento=$_POST['Numerodedocumento'];
    $Direccion=$_POST['Direccion'];
    $Email=$_POST['Email'];
    $Contraseña=$_POST['Contraseña'];
    
    $insertar="insert into cliente values('".$ID_Cliente."','".$Nombres."','".$Apellidos."','".$Telefono."',
            '".$Numerodedocumento."','".$Direccion."','".$Email."','".$Contraseña."')";
    $resultado= mysqli_query($conexion,$insertar) or die("ERROR AL INSERTAR REGISTROS");
    mysqli_close($conexion);
        echo"<script>alert('DATOS INSERTADOS CORRECTAMENTE')</script>";
        echo"<script>location.href='Form_login.php'</script>";
    }
    
    //Registro de compra
    if(isset($_POST["Confirmar"])){
    $ID_venta= $_POST['ID_venta'];
    $Nombre_producto= $_POST['Nombre_producto'];
    $Precio_producto=$_POST['Precio_producto'];
    $Numero_documento=$_POST['Numero_documento'];
    $Telefono=$_POST['Telefono'];
    $Metodo_pago=$_POST['Metodo_pago'];
    
    $insertar="insert into venta_producto values('".$ID_venta."','".$Nombre_producto."','".$Precio_producto."','".$Numero_documento."',
            '".$Telefono."','".$Metodo_pago."')";
    $resultado= mysqli_query($conexion,$insertar) or die("ERROR AL INSERTAR REGISTROS");
    mysqli_close($conexion);
        echo"<script>alert('MUCHAS GRACIAS POR SU COMPRA :3')</script>";
        echo"<script>location.href='Gracias.php'</script>";
    }
    //Registro productos
    if(isset($_POST["Confirmar"])){
    $ID_Pedido= $_POST['ID_Pedido'];
    $Cantidad=$_POST['Cantidad'];
    $Direccion_Entrega=$_POST['Direccion_Entrega'];
    $Fecha_Hora=$_POST['Fecha_Hora'];
    $Barrio_Entrega=$_POST['Barrio_Entrega'];
    $Metodo_Pago=$_POST['Metodo_Pago'];
    
    $insertar="insert into pedido values('".$ID_Pedido."','".$Cantidad."',
            '".$Direccion_Entrega."','".$Fecha_Hora."','".$Barrio_Entrega."','".$Metodo_Pago."')";
    $resultado= mysqli_query($conexion,$insertar) or die("ERROR AL INSERTAR REGISTROS");
    mysqli_close($conexion);
        echo"<script>alert('PEDIDO GUARDADO, MUCHAS GRACIAS :3')</script>";
        echo"<script>location.href='index1.php'</script>";
    }
    
    
    //Inicio de sesion 
    if(isset($_POST["ingresar"])){
        $Email=$_POST['Email'];
        $Contraseña=$_POST['Contraseña'];
        $sentencia=$conexion->prepare("SELECT * FROM cliente WHERE Email=? AND Contraseña=?");
        $sentencia->bind_param('ss',$Email,$Contraseña);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
            if($fila = $resultado->fetch_assoc()) {
                echo"<script>alert('BIENVENIDO')</script>";
                header("location:index1.php");
            }else{
                echo"<script>alert('USUARIO O CONTRASEÑA INCORRECTA')</script>";
                echo"<script>location.href='Form_login.php'</script>";
            }
    $sentencia->close();
    $conexion->close();
    }
    //Mostar datos de la tabla clientes
    if(isset($_POST["ConsultarInformacion"])){
        $consulta = mysqli_query($conexion, "select * from cliente") or die ("ERROR AL TRAER LOS DATOS");
        echo '<table border="1">';
        echo '<tr>';
        echo '<th name="ID_Cliente">ID_Cliente</th>';
        echo '<th name="Nombres">Nombre</th>';
        echo '<th name="Apellidos">Apellido</th>';
        echo '<th name="Telefono">Telefono</th>';
        echo '<th name="Numerodedocumento">Numerodedocumento</th>';
        echo '<th name="Direccion">Direccion</th>';
        echo '<th name="Email">Email</th>';
        echo '<th name="Contraseña">Contraseña</th>';
        while($extraido = mysqli_fetch_array($consulta)){
            echo'<tr>';
            echo'<th>'.$extraido['ID_Cliente'].'</th>';
            echo'<th>'.$extraido['Nombre'].'</th>';
            echo'<th>'.$extraido['Apellido'].'</th>';
            echo'<th>'.$extraido['Telefono'].'</th>';
            echo'<th>'.$extraido['Numerodedocumento'].'</th>';
            echo'<th>'.$extraido['Direccion'].'</th>';
            echo'<th>'.$extraido['Email'].'</th>';
            echo'<th>'.$extraido['Contraseña'].'</th>';
     }
    mysqli_close($conexion);
    echo '</table>';
        
    }
    //Mostrar datos tabla clientes
    if(isset($_post["buscardatos"])){
        $Numerodedocumento=$_POST['Numerodedocumento'];
        $consulta= mysqli_query($conexion,"select * from cliente where Numerodedocumento='$Numerodedocumento'") or die ("ERROR AL TRAER LOS DATOS");
        echo'<Table border="1">';
        echo'<tr>';
        echo'<th name="ID_Cliente">Nombres</th>';
        echo'<th name="Nombre">Nombre</th>';
        echo'<th name="Apellido">Apellido</th>';
        echo'<th name="Telefono">Telefono</th>';
        echo'<th name="Numerodedocumento">Numerodedocumento</th>';
        echo'<th name="Direccion">Direccion</th>';
        echo'<th name="Email">Email</th>';
        echo'<th name="Contraseña">Contraseña</th>';
        while($extraido=mysqli_fetch_array($consulta)){
            echo'<tr>';
            echo'<th>'.$extraido['ID_Cliente'].'</tr>';
            echo'<th>'.$extraido['Nombre'].'</tr>';
            echo'<th>'.$extraido['Apellido'].'</tr>';
            echo'<th>'.$extraido['Telefono'].'</tr>';
            echo'<th>'.$extraido['Numerodedocumento'].'</tr>';
            echo'<th>'.$extraido['Direccion'].'</tr>';
            echo'<th>'.$extraido['Email'].'</tr>';
            echo'<th>'.$extraido['Contraseña'].'</tr>';
        }
        mysqli_close($conexion);
        echo'</table>';
    }
 
?>
    