<?php

class ExeptionService {
    public static function error(Exception $e, $side){
        http_response_code( $e->getCode());

        error_log("Exeption: " . $e->getMessage());

        $code =  $e->getCode();
        $massage = $e->getMessage();

        include_once __DIR__ . "/../../../$side/views/exeptions/400.php";
    }
}