<?php

require "model/categoriaModel.php";

    class categoria{
        function __construct() {
            $this->modelo = new categoriaModel();
        }
        function index(){
            include "view/template/conteudo.php";
        }
        function add(){
            echo "mostrar form categoria";
        }
        function excluir($id){
            echo "excluir categoria";
        }
    }

//$categoria = new categoriaModel();
//$categoria->inserir("Produto Limpeza");
//$categoria->excluir(1);
//$categoria->atualizar(2, "SmartPhone");
//var_dump($categoria->buscarPorId(3));
//var_dump($categoria->buscarTudo());