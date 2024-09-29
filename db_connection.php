<?php
function connectDB() {
    $host = 'localhost'; 
    $dbname = 'dbgapecongo';
    $username = 'root'; 
    $password = ''; 

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        return null;
    }
}
?>