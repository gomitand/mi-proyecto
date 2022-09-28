<?php
function conectar (){
    $user="root";
    $pass="";
    $SERVER="localhost"; 
    $db="facilitophp";
    $con=myspl_connect($server,$user,$pass) or die ("error al conectar a la base de datos".mysql_error())
mysql_select_db ($db,$con);
return $con;

}


?>