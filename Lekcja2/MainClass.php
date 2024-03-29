<?php
class MainClass {
    static function dbConnect() {
        return $dbConnection = require __DIR__ . '/database.php';
    }

    static function blockEntrance($move_to = 'login.php'){
        if(!isset($_SESSION['user_name'])){
            header("Location: $move_to");
        }
    }

    static function printHead($title = 'Document', $stylesPath = './styles/main.css'){
        echo "
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='$stylesPath'>
                <link rel='icon' href='styles/favico.ico'>
                <title>$title</title>
            </head>
        ";
    }

    static function printFoot(){
        echo "
        <footer>
            <p>Prawa autorskie © Grzegorz Tereszkiewicz</p>
        </footer>
        ";
    }


}