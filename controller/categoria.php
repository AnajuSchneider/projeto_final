<?php

require "../model/categoriaModel.php";

$categoria = new categoriaModel();
$categoria->inserir("Produto Limpeza");
$categoria->excluir(1);
$categoria->atualizar(2, "SmartPhone");
var_dump($categoria->buscarPorId(3));
var_dump($categoria->buscarTudo());