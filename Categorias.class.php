<!-- <?php
// private $cate_id, $cate_nome, $cate_slug

// Class Categorias extends Conexao {
//     //incializando a página categorias e inicie a conexão da classe pai
// function __construct(){
//    parent::__construct();
// }
// function GetCategorias(){
//     // irá fazer busca de produtos de uma categoria específica
//     $query = "SELECT * FROM categorias";
//     //executa a query 
//     $this ->ExecuteSQL($query);
//     $this ->GetLista();
// }

// private function GetLista(){
//     $i = 1;
//     while($lista = $this ->Listardados()):
//         $this ->itens[$i] = array(
//         'cate_id' => $lista ['cate-id'],
//         'cate_nome' => $lista ['cate_nome'],
//         'cate_slug' => $lista['cate_slug'],
//         'cate_link' => Rotas::pag_Produtos(). '/' .$lista[
//             'cate_id'] . '/' . $lista['cate_slug'],
//          // Entra na página de produtos
//         );
//     //url que será usada para buscar as informações
//     // localhost/produtos/2/categoria/camisas

//         $i++;
//     endwhile;
// }

// }
// ?>

private $cate_id, $cate_nome, $cate_slug

Class Categorias extends Conexao {
    //incializando a página categorias e inicie a conexão da classe pai
function __construct(){
   parent::__construct();
}
function GetCategorias(){
    // irá fazer busca de produtos de uma categoria específica
    $query = "SELECT * FROM categorias";
    //executa a query 
    $this - >ExecuteSQL($query);
    $this - >GetLista();
}

private function GetLista(){
    $i = 1;
    while($lista = $this - >Listardados()):
        $this - >itens[$i] = array(
        'cate_id' = >$lista ['cate-id'],
        'cate_nome' = > $lista ['cate_nome'],
        'cate_slug' = > $lista['cate_slug'],
        'cate_link' = > Rotas::pag_Produtos(). '/' .$lista[
            'cate_id'] . '/' . $lista['cate_slug'],
         // Entra na página de produtos
        );
    //url que será usada para buscar as informações
    localhost/produtos/2/categoria/camisas

        $i++;
    endwhile;
}


}
?>
