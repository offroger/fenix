<?php

// Solicitando a execução da classe template que herda as extensões da classe Smarty.
Class Template extends Smarty{
    function __construct(){
        parent::__construct();

        // $this = essa classe. Possuindo referência da classe Smarty. Solicitação de proriedades e métodos da classe Smarty.
        // Definindo o diretório de templates com o caminho de view
        $this->setTemplateDir('view/');
        // Definindo o compilador para executar o código PHP
        $this->setCompileDir('view/compile/');
        // Definindo o diretório de cache para armazenar os arquivos compilados
        $this->setCacheDir('view/cache/');
    }
}

?>