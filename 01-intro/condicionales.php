<?php 

// if (condition) {
//   # code...
// }

/*

== Igualdad
<  Menor que
>  Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
!  Negación

&6     - Evalua que se cumpla una de las dos condicioones
||, or - Evalua que se cumpla al menos una condición 
xor    - Evalua que se cumpla una y sola una condición

*/

$edad = 17;
$nombre = 'Fokker';

if ($edad >= 18 && $nombre == 'Fokker') {
  echo '<h1> Bienvenido!! </h1>';
}

if ($edad < 18 or $nombre != 'Fokker') {
  echo '<h1> Eres menor de edad y/o no te llamas Fokker! </h1>';
}

?>