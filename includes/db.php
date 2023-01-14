<?php
    // Pobieramy z konfigu konfiguracje:
    // $host = config('db')['host'];
    // $user = config('db')['user'];
    // $password = config('db')['password'];
    // $database = config('db')['database'];

    // Zwraca nowo utworzone połączenie do bazy danych
    function createConnection(){
        return new mysqli(
            config('db')['host'],
            config('db')['user'],
            config('db')['password'],
            config('db')['database']
        );
    }

    function w($value=null){
        return "'" . $value . "'";
    }