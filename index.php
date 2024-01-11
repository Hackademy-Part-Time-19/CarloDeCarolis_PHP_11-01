<?php

/* Traccia 1:

Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente 
stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere, 
utilizzando if…elseif…else
Implementa nuovamente l’esercizio utilizzando uno switch */


$utenti = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

foreach ($utenti as $elemento) {
    $saluto = "";
    
    if ($elemento['gender'] == 'M') {
        $saluto = "Buongiorno Sig. ";
    } elseif ($elemento['gender'] == 'F') {
        $saluto = "Buongiorno Sig.ra ";
    } else {
        $saluto = "Buongiorno ";
    }
    
    echo $saluto . $elemento['name'] . ' ' . $elemento['surname']."\n";
}



foreach ($utenti as $elemento) {
    $saluto = "";

    switch ($elemento['gender']) {
        case 'M':
            $saluto = "Buongiorno Sig. ";
            break;
        case 'F':
            $saluto = "Buongiorno Sig.ra ";
            break;
        default:
            $saluto = "Buongiorno ";
            break;
    }

    echo $saluto . $elemento['name'] . ' ' . $elemento['surname']."\n";
}



/*Traccia 2: 
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

Hint: per verificare se un numero è pari utilizzare l’operatore modulo %  */

$numeri_scelta = [1,2,5,6,11,13,14,18];
$somma_numeri_pari = 0;
$conta_numeri_pari = 0;

for ($i=0; $i<count($numeri_scelta) ; $i++) { 
    if ($numeri_scelta[$i] % 2 == 0) {
        $somma_numeri_pari += $numeri_scelta[$i];
        $conta_numeri_pari++;
        $media_numeri_pari = $somma_numeri_pari / $conta_numeri_pari;
    }
}
echo $media_numeri_pari ."\n";


/* Traccia 3: 

- Scrivere un programma che stampi in console tutti i numeri da uno a cento.
- Se il numero è multiplo di 3 stampare “PHP” al posto del numero; 
- se multiplo di 5 stampare “JAVASCRIPT”;
- se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY" */


for ($i=1; $i <= 100; $i++) { 
    $programma = "";

    if ($i % 3 == 0 && $i % 5 == 0) {
       $programma = "HACKADEMY" ;
    } elseif ($i % 3 == 0) {
        $programma = "PHP" ;
    } elseif ($i % 5 == 0) {
        $programma = "JAVASCRIPT" ;
    } else {
        $programma = $i;
    }
    
    echo $programma ."\n" ;
}


/*Traccia 4:

- Creare una variabile $temperatura ed utilizzando if, stampare il testo “Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.
- Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.
- Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi.*/

$temperatura = 20; 

if ($temperatura < 15) {
    echo "Fa freddo";
} elseif ($temperatura >= 15 && $temperatura <= 25) {
    echo "Fa caldo" ."\n";
} else {
    echo "Fa molto caldo";
}


/* Traccia 5:

- Integra il seguente array con la traccia precedente, stampando per ogni riga la stringa “A <nome città> fa <freddo/caldo/molto caldo> con <temperatura>°C”*/

$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

foreach ($temperature as $chiave => $valore) {
    $tempo = "";

    if ($valore < 15) {
        $tempo ="Fa freddo";
    } elseif ($valore >= 15 && $valore <= 25) {
        $tempo ="Fa caldo";
    } else {
        $tempo ="Fa molto caldo";
    }

    echo "A $chiave $tempo con $valore °C" ."\n";
}

/* Traccia 6 (extra facoltativo):

Genera in una variabile un array di lunghezza 4 con al suo interno array da 5 valori interi randomici compresi tra 1 e 100
Es. risultato

    $tombola = [ 
    [1,123,52,64,34], [10,2,42,63,15] , [100,99,42,78,54], [25,75,42,76,8]
    ];

Fare il var_dump dell’array e verificare che sia stato popolato correttamente

HINT: utilizza due cicli for annidati e la funzione rand(nmin , nmax) per generare gli interi randomici*/


$tombola = [];

for ($i = 0; $i < 4; $i++) {
    $arrayInterno = [];

    for ($j = 0; $j < 5; $j++) {
        $arrayInterno[] = rand(1, 100);
    }

    $tombola[] = $arrayInterno;
}
var_dump($tombola);




