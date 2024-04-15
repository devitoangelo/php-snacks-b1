<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60


$score_Basket = array(

    array('squadra_casa' => 'Squadra1', 'squadra_ospite' => 'Squadra2', 'punti_casa' => 20, 'punti_ospite' => 10,),
    array("squadra_casa" => "Squadra 3", "squadra_ospite" => "Squadra 4", "punti_casa" => 50, "punti_ospite" => 80),
    array("squadra_casa" => "Squadra 5", "squadra_ospite" => "Squadra 6", "punti_casa" => 10, "punti_ospite" => 5),
);
//array di squadre



foreach ($score_Basket as $partita) {
    echo $partita['squadra_casa'] . " vs " . $partita['squadra_ospite'] . ": " . $partita['punti_casa'] . " - " . $partita['punti_ospite'] . "<br>";
}

// stampo a schermo i risultati dell'array