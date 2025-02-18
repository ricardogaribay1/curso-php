<?php
 $name = "Miguel";
 $isDev = true;
 $age = 78;
 
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/thumbs/2x/jaguar-cars-logo.png');

$output = "Hola $name, con una edad de $age. 🙂";

if ($age < 2) {
    $outputAge = "Eres un bebé, $name 👶";
} 
elseif($age < 10) {
    $outputAge = "Eres un niño, $name 👦";
}

elseif($age < 18) {
    $outputAge = "Eres un adolescente, $name 🧑‍🎓";
}

elseif($age == 18) {
    $outputAge = "Eres mayor de edad, $name 🍺";
}

elseif($age < 40) {
    $outputAge = "Eres un adulto joven, $name 🧑";
}

elseif($age < 60) {
    $outputAge = "Eres un adulto viejo, $name 👨‍🚀";
}

else {
    $outputAge = "Hueles mas a madera que a fruta, $name 👴 ";
}

/*Arrays*/

$bestLanguages = ["PHP", "JavaScript", "Python"]; 
$bestLanguages[] = "Java";
$bestLanguages[] = "TypeScript";

/*Crear un diccionario */

$person = [
    "name" => "Miguel",
    "age"  => 78,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Python"],
];

$person["name"] = "pheralb";
$person["languages"][] = "Java";

/* 
Usamos el localhost: 8000
Diferentes maneras de hacer ternarias, La función Match no esta implementada
en la version 7.2.24 de php que es la que nosotros estamos usando

<?php if ($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif ($isDev) : ?>
    <h2>No eres viejo, pero eres dev. Estas jodido</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>


 $outputAge = $isOld 

    ? 'Eres viejo, lo siento'
    : 'Eres joven, felicidades';


$output = "Hola $name, con una edad de $age. 🙂";
 $outputAge = match (age) {
    0, 1, 2 => "Eres un bebé, $name 👶",
    default => "Eres un adulto, $name 🧑",
 }
  */


  /*Iteración de Arrays: con Foreach
    PHP Antes Personal HomePage
    PHP Ahora PHP Hypertext Preprocesor
  */

?>


<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " .$language ?></li>
    <?php endforeach; ?>
</ul>

<h3>
    El mejor lenguaje es <?= $bestLanguages[1] ?>
</h3>

<h2><?= $outputAge ?></h2>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">

<h1>
<?= $output ?>
</h1>
