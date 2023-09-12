<?php

// A schermo, fai comparire il tipo di dato delle varie variabili.

$Integer = 6;
$Float = 6.5;
$Strg = "Ciao!";
$Boolean = true;

var_dump($Strg);
var_dump($Integer);
var_dump($Float);
var_dump($Boolean);

// Traccia 2: 
// Date le seguenti variabili:

// $1text = "Marco"; 
// “text2 = "hai"; 
// $text.3 = "sete"; 
// “text4 = "?"; 
// “text5 = "Perchè";
// “te-xt6 = '$text2';
// $text 7 = 'bevuto';
// “text8 = "tutto"

// correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“

$text1 = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè";
$text6 = $text2;
$text7 = 'bevuto';
$text8 = "tutto";

echo $text1 ." " .$text2 ." " .$text3 ." " .$text4 ." " .$text5 ." " .$text6 ." " .$text7 ." " .$text8 .".";

// Traccia 3: 
// Dati i seguenti array:

//                                                     6                      3          1                  2                2                       
$words1 = [ 'una', 67,'vita', 'colle', 'mi', 'rosso', [ 'oscura', 'era', 89, [ 'mezzo', [ 'cammin', 'Nel', [ 'selva', 'la', [ 'via', 'una', true, ] ], ] ], 'ritrovai', 'per' ], 'diritta' ]; $words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] ];

// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

// HINT: Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.


$results = $words1[6][3][1][1] . " " . $words1[6][3][0] . " " . "di" . " " . $words1[6][3][1][0] . " " . "di" . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6]
//              Nel                        mezzo                 di                   cammin               di           nostra                   vita              mi                ritrovai
[4] . " " . $words1[6][5] . " " . $words1[0] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . ", " . $words2['elemento3'][2] . " " . $words1[6][3][1][2][1] . " " . $words1[7] . " " 
//              per                  una                      selva                     oscura                              che                              la                       diritta
 . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $words2['elemento3'][1] . "."; 
//              via                        era                   smarrita            

var_dump($results);

// Traccia 4
//  Create 4 variabili: $x = 10; $y = 20; $z = "20"; $w = 10; ed utilizzando var_dump() per visualizzare l'esito dei seguenti confronti: 
//  $x < $y [esempio: var_dump($x < $y); ] 
//  $x <= $w 
//  $y == $z 
//  $y === $z 
//  $y !== $z
//   $y != $z

$x = 10;
$y = 20;
$z = "20";
$w = 10;

var_dump($x < $y);
var_dump($x <= $w);
var_dump($y == $z);
var_dump( $y === $z);
var_dump($y !== $z);
var_dump($y != $z);

// Traccia 5 (extra)
  
// Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”
// con valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso

// Es.
// $corsoHackademy = [ "docenti" => ["daniele", "emanuele"], "studenti" => ["pippo", "franco", "coppola"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"], ];

// Usate questo array per stampare in console una frase di presentazione a piacere:
// Es.
// “Sono pippo e sto studiando bootstrap con daniele”

$corsoHackademy = [ "docenti" => [ "il docente Andrea", "il docente Jeremy", "il docente Emanuele"], "studenti" => [ "Dario", "Tolotra", "io", "Cristiano", "Giovanni"], "materie" => [ "HTML5", "CSS3", "JS", "PHP"]];

$presentazione = "Ciao sono " . $corsoHackademy["studenti"][0] . " e con i miei compagni" . " " . 
//                   Ciao sono                   Dario             e con i miei compagni
$corsoHackademy["studenti"][1] . ", " . $corsoHackademy["studenti"][3] . " e " . $corsoHackademy
//                  Tolotra                           Cristiano           e        
["studenti"][4] . " studio" . ": " . $corsoHackademy["materie"][0] . " e " . $corsoHackademy["materie"][1]
// Giovanni         studio     :                 HTML5                e             CSS3
 . " con " . $corsoHackademy["docenti"][0] . ", " . $corsoHackademy["materie"][2] . " con " .
//  con      il docente  Andrea              ,                     JS                 con
$corsoHackademy["docenti"][1] . " e infine " . $corsoHackademy["materie"][3] . " con " . $corsoHackademy
//       il docente Jeremy       e infine                    PHP                con  
["docenti"][2] . ".";
// il docente Emanuele

echo $presentazione;