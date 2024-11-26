<?php
    class Painel{
        public static function logado(){
            return isset($_SESSION['login']) ? true : false; //Operador ternário
        }

        public static function logout(){
            session_destroy();
        }
    }
?>