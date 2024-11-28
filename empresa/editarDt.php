<?php
 require_once("conexao.php");
  function Dt_Br($data){
    $d = explode("-", $data);
    $dtBr = $d[2]."/".$d[1]."/".$d[0];
    return $dtBr;
  }
