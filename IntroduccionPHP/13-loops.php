<?php include 'includes/header.php';

// While

$i = 0; // Inicializador

while($i < 10) {

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While
$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while($i < 10);



/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */

// For Loop.
// for($i = 1; $i < 1000; $i++ ):
//     if($i % 3 === 0 && $i % 5 === 0):
//         echo $i . " - FIZZ BUZZ <br/>";
//     elseif($i % 3 === 0):
//         echo $i . " - Fizz <br/>";
//     elseif($i % 5 === 0 ):
//         echo $i . " - Buzz <br/>";
//     else:
//         echo $i . "<br/>";
//     endif;
// endfor;



/*

Escribe, en el lenguaje de programación que desees,
un programa que muestre en pantalla los números del 1 al 100,
sustituyendo los múltiplos de 3 por la palabra “Fizz” y,
a su vez, los múltiplos de 5 por “Buzz”. 
Para los números que al tiempo son múltiplos de 3 y 5 
(como 15), utiliza el combinado “FizzBuzz”.

*/

/*
for ($j=1; $j < 100; $j++) { 
    echo "<br>";
    if ($j % 3 == 0 && $j % 5 == 0) {
        echo "FizzBuzz";
        echo $j;
    } else if ($j % 3 == 0){
        echo "Fizz";
        echo $j;
    } else if ($j % 5 == 0){
        echo "Buzz";
        echo $j;
    } else {
        echo $j;
    }
}
*/

$clientes = ["pedro", "maria", "juan"];

foreach ($clientes as $cliente) {
    echo $cliente."<br>";
}

/*
$clientes = ["pedro", "maria", "juan"];

foreach ($clientes as $key => $cliente) {
    echo  $key." - ".$cliente."<br>";
}
*/

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];
foreach ($cliente as $key => $valor) {
    echo $key." - ".$valor."<br>";
}




include 'includes/footer.php';