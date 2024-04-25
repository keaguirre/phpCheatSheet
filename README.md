# PHP CheatSheet
```shell 
sudo apt-get install php-curl #para que no lance errores con curl en php en debian
```
para que no lance errores con curl en php en debian
```php 
php -S localhost:8000  #para levantar el local server
```
# Main
```php
define('CONSTANTE_GLOBAL', 'valor'); //Constante global fija
const CONSTANTE_LOCAL = 'value'; //No funcionan en tiempo de ejecucion, no puedes tener constantes dentro de un bucle PARA QUE SEAN DINAMICAS, para esos usos hay variables

if ($age >= 18) {
    echo "Eres mayor de edad";
} else if ($age >= 13) { //el else if funciona tanto junto como separado, pero solo permite junto cuanto se ocupa a modo plantilla
    echo "Eres un adolescente";
} else {
    echo "Eres menor de edad";
}

$isOld = true;

//sintaxis if a modo plantillas
<?php if ($isOld): ?>
    <h2> Eres viejo, lo siento</h2>
<?php elseif ($isDev): ?> //en esta sintaxis para insertar code, solo permite que el elseif sea solamente junto
    <h2> No eres viejo, pero eres dev. </h2>
<?php else: ?>
    <h2> Eres joven, feticidades </h2>
<?php endif; ?>

$age = 18;
$name = "pope";
$outputAge = match (true){
    $age > 2 => "$name, eres un bebé",
    $age > 10 => "$name, eres un niño",
    $age > 18 => "$name, eres un adolescente",
    $age === 18 => "$name, eres un adulto joven",
    $age > 40 => "$name, eres un adulto viejo",
    default => "$name, Eres un anciano"
}
//Arrays
$bestLanguages = [ "PHP", "JavaScript ", "Python"];
$bestLanguages[] = "Java"; //Asignar un valor de esta manera se inserta al final del array
$bestLanguages[] = "TypeScript" ;
?>
//For Each
<ul>
    <?php> foreach ($bestLanguages as $key => $language): ?> //$key es el indice y $language es el iterador
        <li><?= $key . " " . $language ?></li> //Texto concatenado: <?= para indicar que habra interpretacion de variables, . para concatenar
    <?php endforeach; ?>
</ul>
//Arrays como diccionarios o submap, estos son arrays asociativos
$person = [
    "name" => "Kevin",
    "age" => "26",
    "isOld" => true,
    "languages" => ["PHP", "JS", "Python"],
]
//Asignacion
$person["name"] = "pope";
$person["languages"][] = "Java";

$result = file_get_contents(API_URL); //si solo quieres hacer un get de una api
```# PHP CheatSheet
```shell 
sudo apt-get install php-curl #para que no lance errores con curl en php en debian
```
para que no lance errores con curl en php en debian
```php 
php -S localhost:8000  #para levantar el local server
```
# Main
```php
define('CONSTANTE_GLOBAL', 'valor'); //Constante global fija
const CONSTANTE_LOCAL = 'value'; //No funcionan en tiempo de ejecucion, no puedes tener constantes dentro de un bucle PARA QUE SEAN DINAMICAS, para esos usos hay variables

if ($age >= 18) {
    echo "Eres mayor de edad";
} else if ($age >= 13) { //el else if funciona tanto junto como separado, pero solo permite junto cuanto se ocupa a modo plantilla
    echo "Eres un adolescente";
} else {
    echo "Eres menor de edad";
}

$isOld = true;

//sintaxis if a modo plantillas
<?php if ($isOld): ?>
    <h2> Eres viejo, lo siento</h2>
<?php elseif ($isDev): ?> //en esta sintaxis para insertar code, solo permite que el elseif sea solamente junto
    <h2> No eres viejo, pero eres dev. </h2>
<?php else: ?>
    <h2> Eres joven, feticidades </h2>
<?php endif; ?>

$age = 18;
$name = "pope";
$outputAge = match (true){
    $age > 2 => "$name, eres un bebé",
    $age > 10 => "$name, eres un niño",
    $age > 18 => "$name, eres un adolescente",
    $age === 18 => "$name, eres un adulto joven",
    $age > 40 => "$name, eres un adulto viejo",
    default => "$name, Eres un anciano"
}
//Arrays
$bestLanguages = [ "PHP", "JavaScript ", "Python"];
$bestLanguages[] = "Java"; //Asignar un valor de esta manera se inserta al final del array
$bestLanguages[] = "TypeScript" ;
?>
//For Each
<ul>
    <?php> foreach ($bestLanguages as $key => $language): ?> //$key es el indice y $language es el iterador
        <li><?= $key . " " . $language ?></li> //Texto concatenado: <?= para indicar que habra interpretacion de variables, . para concatenar
    <?php endforeach; ?>
</ul>
//Arrays como diccionarios o submap, estos son arrays asociativos
$person = [
    "name" => "Kevin",
    "age" => "26",
    "isOld" => true,
    "languages" => ["PHP", "JS", "Python"],
]
//Asignacion
$person["name"] = "pope";
$person["languages"][] = "Java";

$result = file_get_contents(API_URL); //si solo quieres hacer un get de una api
```
