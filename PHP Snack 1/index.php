
<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array
i quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla
squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php

/*{
 $punteggioSingolo = rand(1, 100);
    //var_dump($punteggioSingolo);

    $matches = [
        "squadra 1" => [
            "gioco" => "casa",
            "punti" => rand(1, 100),
        ],
        "squadra 2" => [
            "gioco" => "casa",
            "punti" => rand(1, 100),
        ],
        "squadra 3" => [
            "gioco" => "casa",
            "punti" => rand(1, 100),
        ],
        "squadra 4" => [
            "gioco" => "ospite",
            "punti" => rand(1, 100),
        ],
        "squadra 5" => [
            "gioco" => "ospite",
            "punti" => rand(1, 100),
        ],
        "squadra 6" => [
            "gioco" => "ospite",
            "punti" => rand(1, 100),
        ],
    ];
    var_dump($matches); */

    /* for ($i = 0; $i < count($matches); $i++) { 
        var_dump($matches[$i]);
    } */



    /* function randomNumber($min, $max, $nItems)
    {
        $newArray = [];

        while (count($newArray) < $nItems) {
            $number = rand($min, $max);
            if(!in_array($number, $newArray)) {
                $newArray[] = $number;
            }
        }
        return $newArray;
    } */
    

    /* $casa = ["squadra 1", "squadra 3", "squadra 7", "squadra 9"];
    $ospite = ["squadra 2", "squadra 4", "squadra 6", "squadra 8"]; */
    //var_dump($casa, $ospite);

    /* $squadre = array_merge($casa, $ospite);
    var_dump($squadre); */

    /* $combinazioniSquadre = shuffle($squadre);
    var_dump($combinazioniSquadre); 


}*/

    $matches = [

        
    [
        "squadraCasa" => "milan",
        "squadraOspite" => "inter",
        "punteggioCasa" => "35",
        "punteggioOspite" => "50",
    ],
    [
        "squadraCasa" => "juve",
        "squadraOspite" => "roma",
        "punteggioCasa" => "20",
        "punteggioOspite" => "47",
    ],
    [
        "squadraCasa" => "sassuolo",
        "squadraOspite" => "napoli",
        "punteggioCasa" => "33",
        "punteggioOspite" => "5",
    ],
    [
        "squadraCasa" => "torino",
        "squadraOspite" => "lazio",
        "punteggioCasa" => "52",
        "punteggioOspite" => "34",
    ],
        
        /* $match = [$casa["squadra 1"], $fuoriCasa["squadra 3"]],
        var_dump($match), */
 

        /* for ($i=0; $i < 2; $i++) { 
           
        } */

    ]
    
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            for ($i=0; $i < count($matches); $i++) { 
                echo $matches[$i]["squadraCasa"] . "-" . $matches[$i]["squadraOspite"] . " " . "|" . " " . $matches[$i]["punteggioCasa"] . "-" . $matches[$i]["punteggioOspite"] . "<br>";
            }
        ?>
    </body>
</html>