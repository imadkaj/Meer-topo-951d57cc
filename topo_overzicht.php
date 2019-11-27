<?php
$line = readline("Hoeveel landen ga je toevoegen?" . PHP_EOL);
$b = array();


for($i = 1; $i <= $line; $i++){
    $a = readline("Welk land wil je toevoegen?" . PHP_EOL);
    $c = readline("Wat is de hoofdstad van " . $a . PHP_EOL);
    $array = array(
        'landen' => $a,
        'steden' =>$c
    );
    array_push($b, $array);
}


foreach ($b as $b) {
    print($b['landen'] . PHP_EOL );
    print($b['steden'] . PHP_EOL );
}
?>