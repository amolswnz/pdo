<?php
    define("HOST","localhost");
    define("DATABASE","dbname");
    define("USERNAME","root");
    define("PASSWORD","root");

    /*
        Creating connection
    */
    try {
        $pdo = new PDO("mysql:host=" .HOST . ";dbname=" . DATABASE, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch(PDOException $e) {
        die("<div class='alert alert-error'>ERROR : " . $e->getMessage() . "</div>");
    }