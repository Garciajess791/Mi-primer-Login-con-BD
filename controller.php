<?php

function ConectarBD(){
$host = "localhost:8889";
$user = "Datos_Examen";
$bd = "Datos_Examen";
$pass = "1234";
$con = mysqli_connect($host,$user,$pass,$bd,8889);
return $con;
}

if($_POST){
    if(isset($_POST['accion']) and !empty($_POST['accion'])){ 
        if($_POST['accion'] == 'ENVIO'){   
                if(isset($_POST['name']) and !empty($_POST['name'])){
                    if(isset($_POST['email']) and !empty($_POST['email'])){            
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            AddDatosUsuario($name,$email); 
                    }
                }
        }                            
    }     
}

function AddDatosUsuario($name,$email){
    $con = ConectarBD();
    $sql = "INSERT INTO `Datos_Examen` (`rowid`,`nombre`,`email`) VALUE (NULL,'".$name."','".$email."')";
    $datos = $con->query($sql)or die( "Error en la base de datos de Usuarios");
    print_r($datos);
    if($datos != 0){
        $msn = "Todo correcto";
        header('location:http://localhost:8080/EX_UF1845/index.php?msn='.$msn);
    }else{
        $msn = "Error en la conexion";
        header('location:http://localhost:8080/EX_UF1845/index.php?msn='.$msn);
    }
    mysqli_close($con);
}
function CargarDatosUsuario(){
    $con = ConectarBD();
    $sql = "SELECT * FROM `Datos_Examen`;";
    $datos = $con->query($sql)or die( "base de datos no guardada");
    $total = mysqli_num_rows($datos);
    if($total != 0){
        return $datos;
    }else{
        return $error = "No se puede conectar con la tabla Users.";
    }
    mysqli_close($con);
}




?>