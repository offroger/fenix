<?php

Class Rotas{

    public static $pag; // Variável para armazenar a página atual

    
            static function get_SiteHOME(): string{
                return config::SITE_URL .'/'.Config::SITE_PASTA;  //Vai acessar a raiz do site
            }

// Selecionando a página existente dentro do diretório controller
            static function get_pagina(){
                            // Verifica se a variável $_GET['pag'](URL) existe e não está vazia
                                if(isset($_GET['pag'])){// Se existir, verifica se o valor de $_GET['pag'] é igual a 'index' ou 'home'

                                     // Atribui o valor de $_GET['pag'] à variável $pagina
                                    $pagina = $_GET['pag'];
                                    
                                    // Utilização de explode para dividir a string em partes, separando por '/' e atribuindo o resultado à variável $pag que é decalarada como estática
                                    self::$pag = explode(separator: '/', string: $pagina);
                                    
                                    //Debug
                                    // echo '<pre>';
                                    // var_dump(self::$pag); // Debug
                                    // echo '</pre>'; 

                                    // traduzir a URL para o nome do arquivo PHP correspondente, recebendo a pasta controller
                                    $pagina = 'controller/'.self::$pag[0] . '.php'; // Atribui o valor de $_GET['pag'] concatenado com 'php' à variável $pagina
                                    // $pagina = 'controller/'.$_GET['pag'] . '.php';
                                    // Verifica se o arquivo existe no diretório controller
                                    if(file_exists(filename: $pagina)){
                                        include $pagina; // Se existir, inclui o arquivo correspondente

                                    }else{
                                        include 'erro.php'; // Se não existir, inclui o arquivo 'erro.php'
                }
                        // Aula 27
                                // static function pag_Contato(){
                                     // return self::get_SiteHOME().'/contato'; // Retorna o caminho para a página de contato
                                // }

                                // static function pag_MinhaConta(){
                                    // return self::get_SiteHOME().'/minhaconta'; // Retorna o caminho para a página da conta do usuário

                                // }
        }
    }
}
?>