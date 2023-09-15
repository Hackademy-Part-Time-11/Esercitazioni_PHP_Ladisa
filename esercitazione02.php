<?php

//  Esercitazione 2 PHP:


// Traccia 1:

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

// Es. 


    // $users = [
    //     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M']
    // ]

$users = [
    ['name' => 'Naruto', 'surname' => 'Uzumaki', 'gender' => 'M'],
    ['name' => 'Sakura', 'surname' => 'Haruno', 'gender' => 'F'],
    ['name' => 'Andrea', 'surname' => 'Andrei', 'gender' => 'N.B.']
];

foreach($users as $user) {
    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig.{$user['name']} {$user['surname']}\n";
    } else if ($user['gender'] == 'F') {
        echo "Buongiorno Sig.ra {$user['name']} {$user['surname']}\n";
    } else {
        echo "Buongiorno {$user['name']} {$user['surname']}\n";
    }
};

// Traccia 2: 
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$numbers = [4, 5, 7, 13, 22, 8, 4];
$numbsum = 0;
$indexsum = 0;

foreach($numbers as $number) {
    if ($number % 2 == 0) {
        $numbsum += $number;
        $indexsum ++;
    }
} 
echo $numbsum / $indexsum;






// Traccia 3: 

// - Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// - Se il numero è multiplo di 3 stampare “PHP” al posto del numero; 
// - se multiplo di 5 stampare “JAVASCRIPT”;
// - se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY"

// Traccia 4:

// - Creare una variabile $temperatura ed utilizzando if, stampare il testo “Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.
// - Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.
// - Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi.

// Traccia 5:

// - Integra il seguente array con la traccia precedente, stampando per ogni riga la stringa “A <nome città> fa <freddo/caldo/molto caldo> con <temperatura>°C”


//     $temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

// Traccia 6 (extra facoltativo):

// Popola un array con i numeri da 0 a 90, dove ogni decina di numeri deve appartenere ad un'array separato

// Es. risultato

//     $tombola = [ 
//     [0,1,,2,3,4,5,6,7,8,9], [10,11,12,13,14,15,16,17,18,19] , [20,21,23,24,25,26,27,28,29], ... ,[90,91,92,93,94,95,96,97,98,99]
//     ];

// Fare il var_dump dell’array e verificare che sia stato popolato correttamente

// HINT: utilizza due cicli for annidati -->