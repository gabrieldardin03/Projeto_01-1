<?php
    session_start(); // Cria uma sessão ou retorna a atual com base em um identificador passado por meio de uma solicitação GET ou POST ou passado por meio de um cookie 

    define('INCLUDE_PATH', 'http://localhost/Projeto_01/'); // Definir o domínio do site
    
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/'); // Definir a URL do painel

    $autoload = function($class){
        include('assets/classes/'.$class.'.php'); // Carregando a classe: 'Email'
    };

    spl_autoload_register($autoload);
?>