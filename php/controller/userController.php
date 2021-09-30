<?php
// require("../apiConfig/requestApi.php");
// require("../apiConfig/userClient.php");
function insert($endPoint, $data) {
    $result = post($endPoint, $data);
    return $result; 
}
function login($endPoint, $data) {
    $result = post($endPoint, $data);
    return $result; 
}

?>