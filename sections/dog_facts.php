<?php
define('DOG_FACTS_APIURL', 'https://dog-api.kinduff.com/api/facts'); // Define the API_URL constant
$ch = curl_init(DOG_FACTS_APIURL); //curl por default hace un echo con el resultado
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //se setea que retorne el valor y asi no haga el echo
#ejecutamos la peticion
$result = curl_exec($ch);
$dataResult = json_decode($result, true); //el true, agrega el resultado a un array asociativo en vez de dejar una cadena de texto plana en la variable
curl_close($ch); //cerramos la sesion de cURL
?>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<h2 class="text-3xl font-bold text-gray-900 md:text-4xl">
    <?php echo $dataResult;?>
    <?php echo $dataResult["facts"][0]; ?>
</h2>