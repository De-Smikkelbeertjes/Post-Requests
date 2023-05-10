<?php

class ApiLibrary {
    private $base_url;
    private $headers;

    public function __construct($base_url, $api_key) {
        $this->base_url = $base_url;
        $this->headers = [
            'Authorization: Bearer ' . $api_key,
            'Content-Type: application/json'
        ];
    }

    public function createData($data) {
        $url = $this->base_url . '/data';
        $ch = curl_init($url);
        $payload = json_encode($data);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}