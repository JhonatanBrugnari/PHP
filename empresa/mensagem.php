<?php

function mensagem ($texto, $tipo){
    echo"<div class='alert alert-$tipo'role='alert'>
    $texto 
       <a class='icon-link icon-link-hover' style='--bs-link-hover-color-rgb: 25, 135, 84;' href='index.php'>
                    Voltar a tela de cadastro!
                    <svg class='bi' aria-hidden='true'>
                        <use xlink:href='#arrow-right'></use>
                    </svg>
                </a>
</div>";
};