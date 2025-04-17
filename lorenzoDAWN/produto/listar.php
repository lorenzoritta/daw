<?php
include_once "../class/produto.class.php";
include_once "../class/produtoDAO.class.php";

$objProdutosDAO = new ProdutoDAO();
$retorno = $objProdutosDAO->listar();

/*
echo "<pre>";
print_r($retorno);
*/

if (isset($_POST["editarOK"]))
    echo "<h2>Editado com sucesso!</h2>";
if (isset($_POST["editarErro"]))
    echo "<h2>Erro ao editar!</h2>";

echo "<a href='inserir.php'>Inserir</a><br />";

foreach ($retorno as $linha) {
    echo "Nome: " . $linha["nome"];
    echo "<br/>Autor: " . $linha["autor"];
    echo "<br/>Preço: R$" . $linha["preco"];
    echo "<br/>Editora: " . $linha["editora"];
    echo "<br/>Data de Lançamento: " . $linha["data_lancamento"];
    echo "<br/>
        <a href='editar.php?id=" . $linha["id_manga"] . "'>Editar</a>
        <a href='excluir.php?id=" . $linha["id_manga"] . "'>Excluir</a>
    <br /><br />";
}
?>
