<?php
  $server = "localhost";
  $user = "root";
  $password = "admin";
  $database = "empresa";
  
  $conect= mysqli_connect($server, $user, $password, $database);
if(!$conect){
    die ("Falha na conexão". mysqli_connect_error());
}
