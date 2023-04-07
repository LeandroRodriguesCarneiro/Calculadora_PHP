<?php
function adicao($A,$B){
    return $A + $B;
}

function subtracao($A,$B) {
    return $A - $B;
}

function multiplicacao($A,$B){
    return $A * $B;
}

function divisao($A,$B){
    if($A && $B){
        return $A / $B;
    }
}

function potencia($A,$B){
    return pow($A, $B);
}

function raiz($A){
    return sqrt($A);
}

function bhaskara($A,$B,$C){
    $delta = pow($B, 2) - 4 * $A * $C;
    if ($delta == 0) { 
        return ((-$B)+sqrt($delta))/2*$A;
    }else{
        $X1 = ((-$B)+sqrt($delta))/2*$A;
        $X2 = ((-$B)-sqrt($delta))/2*$A;
        $arr = array($X1,$X2);
        return $arr;
    }
    
}

function pitagoras($A, $B, $C){
    if($A == 0){
        $A = pow($B,2)+pow($C,2);
        return sqrt($A);
    }if($C == 0){
        $C = pow($A,2)-pow($B,2);
        return sqrt($C);
    }elseif($B == 0){
        $B = pow($A,2)-pow($C,2);
        return sqrt($B);
    }
}
?>