<?php
    function get ($endPoint) {
        $client = curl_init($endPoint);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);

        $result = json_decode($response);
        curl_close($client);
        return $result;
    }

    function post ($endPoint, $data) {
        $client = curl_init($endPoint);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($client);

        $result = json_decode($response);
        curl_close($client);
        return $result;
    }
?>