<?php
// solicitando o caminho do autoload
// e carregando as classes necessárias
require './lib/autoload.php';


// Importando a classe(blioteca) Template
$smarty = new Template();
Rotas::get_pagina() ;
// aula 5 $categorias = new categorias();
// aula 5 $categorias - > GetCategorias;

// Valores para o template
    // Aula 27
        //  chamando as páginas de acesso
        // $smarty->assign('NOME', 'FÊNIX ESSENCE CLOTHING');
        // $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
        // $smarty->assign('GET_HOME', Rotas::get_SiteHOME());
        // $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
echo Rotas:: get_SiteHOME .'<br>'();
        // $smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
        // $smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
        //aula 5 $smarty - >assign('CATEGORIAS', $categorias ->GetItens()); // Faz a consulta das categorias
        // Solicitando a inicialização do index.tpl
$smarty->display('index.tpl');

?>