<?php

include ("conexion.php");
$conexion = conectar();

if(isset($_POST['enviar']) ){
        if (!empty($_POST['name']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) ){
            $name = $_POST['name'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];

            date_default_timezone_set('America/Mexico_City');
            $fechareg = date("Y-m-d H:i:s");
            $consulta = "INSERT INTO datos(nombre, telefono, email, asunto, mensaje, fechareg) VALUES('$name','$telefono','$email','$asunto','$mensaje','$fechareg')";
            $resultado = mysqli_query($conexion,$consulta);

            /*
            $header = "Enviado desde un formulario de contacto";
            mail($email, $asunto, $mensaje,$header);
            header("Location: index.html?mailsend");
           */

            if($resultado){
                echo " <script language='JavaScript'> 
                alert('Mensaje enviado exitosamente');
                location.assign('index.html');
                </script>";
            } else{
                echo " <script language='JavaScript'> 
                alert('Hubo un error');
                location.assign('index.html');
                </script>";
            }
            mysqli_close($conexion);
        }
    }
?>