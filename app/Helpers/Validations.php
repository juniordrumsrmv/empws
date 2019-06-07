<?php

/**
 * Funcao para validar data
*/
function validateDate($date){
    $aData = explode("-","$date");
    $d = $aData[2];
    $m = $aData[1];
    $y = $aData[0];

    // verifica se a data é válida!
    // 1 = true (válida)
    // 0 = false (inválida)
    $res = checkdate($m,$d,$y);
    if ($res == 1){
        return true;
    } else {
        return false;
    }
}