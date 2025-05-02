// function GetProdutosCateID($id){
   //query para buscar os produtos de uma categoria especifica. 
// $query = "SELECT * FROM {$this - > prefix}produtosp INNER
JOIN {$this - > prefix}categorias c ON p.pro_categoria
= c.cate_id";  

$query .= " AND pro_categoria = {$id}";

$this - > ExecuteSQL($query);

$this - > GetLista();
}