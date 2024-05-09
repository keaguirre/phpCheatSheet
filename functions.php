<?php
declare (strict_types=1);
function get_data(string $url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return json_decode($result, true);
}

function render_template (string $template, array $data = []) {
    extract($data);
    require "sections/$template.php";
    //Ejecuta un warning debido a que el require se ejecuta dentro de una funcion y no reconoce los scope globales
}
?>
