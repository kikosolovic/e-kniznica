<?php

function get($prop="") {
    $json = file_get_contents('data.json');
    $json_data = json_decode($json,true);
    if ($prop!="")
    return $json_data[$prop];
    else{
        return $json_data;
    }
}

function set($name="",$surname="",$logged=false) {
    $rootDir = $_SERVER["DOCUMENT_ROOT"];

    $json = file_get_contents("$rootDir/data.json");
    $json_data = json_decode($json,true);
    if ($name!=""){
        $json_data["name"] = $name;
    }
    if ($surname!=""){
        $json_data["surname"] = $surname;
    }
    if ($logged!=""){
        $json_data["logged"] = $logged;
    }

    $jsonString = json_encode($json_data, JSON_PRETTY_PRINT);
    $fp = fopen("$rootDir/data.json", 'w');
    fwrite($fp, $jsonString);
    fclose($fp);
}
?>