<?php

function chargementAuto($nomDeLaClasse)
{
    require_once './classes/'.$nomDeLaClasse.'.php';
}
spl_autoload_register('chargementAuto');