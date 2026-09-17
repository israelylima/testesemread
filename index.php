<?php 

$velocidade = 14;
$cansada = true;
$chovendo = false;

if ($velocidade >= 10 and $velocidade <= 20 and
    (!$cansada or $velocidade <= 15) and
    (!$chovendo or $velocidade <= 12)) {
    echo "Corrida permitida.";
} else {
    echo "Corrida não permitida.";
}

?>


