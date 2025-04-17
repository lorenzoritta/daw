<?php
// echo "<pre>";
// print_r($_POST);
include_once "../class/produto.class.php";
include_once "../class/produtoDAO.class.php";

$obj = new Produto();
$obj->setNome($_POST["nome"]);
$obj->setEditora($_POST["editora"]);
$obj->setDescricao($_POST["descricao"]);
$obj->setAutor($_POST["autor"]);
$obj->setPreco($_POST["preco"]);
$obj->setData_lancamento($_POST["data_lancamento"]);
$obj->setPais_origem($_POST["pais_origem"]);
$obj->setNum_volumes($_POST["num_volumes"]);

$objDAO = new ProdutoDAO();
$retorno = $objDAO->inserir($obj);

if ($retorno)
    echo "Produto adicionado com sucesso";
else
    echo "Erro! Por favor, consulte um administrador.";
?>
