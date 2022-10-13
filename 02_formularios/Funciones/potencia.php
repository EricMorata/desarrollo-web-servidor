<?php
    function potencia (int $base,int $exponente){
        $resultado = 1;
        if($exponente < 0){
            $resultado = -1;

        }else if ($exponente == 0){
            $resultado = 1;
        } else{
            for($i = 1; $i <= $exponente; $i++){
                $resultado = $resultado * $base;
            }
        }
        return $resultado;
    }
?>