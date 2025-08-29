<?php
    include_once("Pessoa.php");

    
    $pessoa1 = new Pessoa ("pUALO");
    //$pessoa1->mudarNome("Denis");
    echo $pessoa1->obterNome();