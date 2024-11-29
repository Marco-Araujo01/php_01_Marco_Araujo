<?php
// Traccia 1:

// Installare PHP
// Definisci 4 variabili:
// Integer
// Float
// String
// Boolean
// A schermo, fai comparire il tipo di dato delle varie variabili.
// Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.
// Pusha il codice su GitHub con il nome php_01_nome_cognome. Integra anche le altre tracce e poi pusha tutto.


// $integer = 1;
// $float = 1.5;
// $string = "1";
// $boolean = true;


// var_dump($integer);
// var_dump($float);
// var_dump($string);
// var_dump($boolean);


// const INTEGER = 1;
// const FLOAT = 1.5;
// const STRING = "1";
// const BOOLEAN = true;


// var_dump($INTEGER);
// var_dump($FLOAT);
// var_dump($STRING);
// var_dump($BOOLEAN);



// Traccia 2:

// Date le seguenti variabili:
// $1text = "Marco";
// $text2 = "hai";
// $text.3 = "sete";
// $text4 = "?";
// @text5 = "Perchè";
// $te-xt6 = '$text2';
// $text 7 = 'bevuto';
// $text8 = "tutto"
// correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“

// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = "$text2";
// $text7 = "bevuto";
// $text8 = "tutto.";

// echo "$text1 $text2 $text3$text4 $text5 $text6 $text7 $text8";



// Traccia 3:

// Dati i seguenti array:
// $words1 = [
//   'una',
//   67,
//   'vita',
//   'colle',
//   'mi',
//   'rosso',
// [
//   'oscura',
//   'era',
//   89,
//   [
//   'mezzo',
//   [
//     'cammin',
//     'Nel',
//     [
//       'selva',
//       'la',
//       [
//         'via',
//         'una',
//         true,
//       ]
//     ],
//   ]
// ],
//     'ritrovai',
//     'per'
//   ],
// 'diritta'
// ];
// $words2 = [
//   'elemento1' => 25.89,
//   'elemento2' => 'nostra',
//   'elemento3' => [
//     'Virgilio',
//     'smarrita',
//     'ché'
//   ]
// ];
// Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.
// HINT:

// Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc.

// echo $words1[6][3][1][1] , ' ', $words1[6][3][0], ' ', 'di', ' ', $words1[6][3][1][0], ' ', 'di', ' ', $words2['elemento2'], ' ', $words1[2], ' ', $words1[4], ' ', $words1[6][4], ' ', $words1[6][5], ' ', $words1[6][3][1][2][2][1], ' ', $words1[6][3][1][2][0], ' ', $words1[6][0], ',', ' ', $words2['elemento3'][2], ' ', $words1[6][3][1][2][1], ' ', $words1[7], ' ', $words1[6][3][1][2][2][0], ' ', $words1[6][1], ' ', $words2['elemento3'][1], '.';



// Traccia 4:

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// $users = [
//   ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
// ];
// Pushate su Github chiamando la repository php_01_nome_cognome. Integra anche gli altri esercizi e poi pusha tutto.

// $users = [
//     ['name' => 'Goku', 'surname' => 'Son', 'gender' => 'M'],
//     ['name' => 'Chichi', 'surname' => 'Son', 'gender' => 'F'],
//     ['name' => 'Majin', 'surname' => 'Bu', 'gender' => 'NB'],
// ];

// foreach ($users as $user) {
//     if ($user['gender'] == 'M') {
//         echo "Buongiorno Sig.", ' ', $user['name'], ' ', $user['surname'], "\n";
//     }elseif ($user['gender'] == 'F'){
//         echo "Buongiorno Sig.ra", ' ', $user['name'], ' ', $user['surname'], "\n";
//     }else{
//         echo "Buongiorno", ' ', $user['name'], ' ', $user['surname'], "\n";
//     }
// };



// Traccia 5:

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $arrayNumeri = [51, 5, 49, 73, 78, 62, 6, 84, 65, 49, 28];
// $somma = 0;
// $media = 0;
// $divisore = 0;

// foreach ($arrayNumeri as $arrayNumero) {
//     if ($arrayNumero % 2 == 0) {
//         $somma += $arrayNumero;
//         $divisore++;
//         $media = $somma / $divisore;
//     }
// }
// echo $media;



// Traccia 6:

// Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// se multiplo di 5 stampare “JAVASCRIPT”;
// se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

// for ($i=0; $i < 100; $i++) { 
//     if ($i % 3 && $i % 5 == 0) {
//         echo "HACKADEMY", "\n";
//     }elseif ($i % 5 == 0) {
//         echo "PHP", "\n";
//     }elseif ($i % 3 == 0) {
//         echo "JAVASCRIPT", "\n";
//     }else{
//         echo $i, "\n";
//     }
// }