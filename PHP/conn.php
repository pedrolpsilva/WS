<?php
    date_default_timezone_set('Brazil/east');

    try {
        $conn = new PDO('mysql:host=localhost;port=3306;dbname=ws','root','1234');

    } catch (PDOException $e) {
        echo $e;
        die();
    }
?>