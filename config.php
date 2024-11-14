<?php
    define('INCLUDE_PATH', 'http://localhost/Projeto_01/'); // Definir o domínio do site
    
    $autoload = function($class){
        include('assets/classes/'.$class.'.php'); // Carregando a classe: 'Email'
    };

    spl_autoload_register($autoload);
?>