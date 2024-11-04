<?php 
//echo "Funciona mi php";


//phpinfo();
$db= mysqli_connect('localhost','root','123456','stock');
if($db){
    echo "Conexion Exitosa";
}else{
    echo "Error de conexion";
    exit;
}

//$sql = "INSERT INTO ciudad(ciudad_per) VALUES ('fernando de la mora');";
//$sql = "INSERT INTO ciudad(ciudad_per) VALUES ('fernando de la mora');";


$sql = "INSERT INTO ciudad(PERS_CIUDAD_NOMBRE) VALUES ('Fernando de la Mora');";
$result = mysqli_query($db,$sql);

//INSERT INTO ciudad1 (nombre_ciudad) VALUES ('Fernando de la Mora');

//$sql = "UPDATE PERSONAS SET PERS_NOMBRE1 = 'Felipe', PERS_APELLIDO1 = 'Sosa' WHERE PERS_NOMBRE1 = 'Alejandro' AND PERS_APELLIDO1 = 'Chaparro';";
//$sql = "DELETE FROM PERSONAS WHERE PERS_NOMBRE1 = 'ara' AND PERS_APELLIDO1 = 'fariña';";

//codigo funcionando


//$sql = "UPDATE PERSONAS SET PERS_NOMBRE1 = 'Alejandro', PERS_APELLIDO1 = 'chaparro' WHERE PERS_COD_PERSONA = '1';";
//$sql = "DELETE FROM PERSONAS WHERE PERS_COD_PERSONA = '4';";



//$sql = "SELECT * FROM ciudad1;";
/*
$sql = "INSERT INTO nacio (PERS_COD_NACIO,PERS_NACIO,PERS_PAIS_ORIGEN,) VALUES ('1','BRASILERO','BRASIL');";
$result = mysqli_query($db,$sql);
*/

 if($resultado){
     echo "Registro Act";
 }
 
if($resultado){
    echo "BIEN SE INSERTO";
}
 echo "<pre>";
 var_dump(mysqli_fetch_assoc($resultado));
 echo "<pre>";
 


?>
