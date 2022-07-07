<?php


require 'model/categoriaModel.php';
require 'model/produtoModel.php';

class Home{
    function __construct()
    {
        $this->categoria = new categoriaModel(); 
        $this->produto = new produtoModel();    
    }

    function index($id = null){
        $categorias = $this->categoria->buscarTodos();
        if(!$id){
            $produtos = $this->produto->buscarTodos();
        }else{
            $produtos = $this->produto->buscarPorCategoria($id);
        }
        
        include 'view/template/cabecalho.php';
        include 'view/template/menu_home.php';
        include 'view/home/listagem.php';
        include 'view/template/rodape.php';
    }

    function ver($id){
        $categorias = $this->categoria->buscarTodos();
        $produto = $this->produto->buscarPorId($id);
        include 'view/template/cabecalho.php';
        include 'view/template/menu_home.php';
        include 'view/home/ver.php';
        include 'view/template/rodape.php';
    }

    function search(){
        $categorias = $this->categoria->buscarTodos();
        $produtos = $this->produto->buscarPorLikeNome($_POST['search']);
        
        include 'view/template/cabecalho.php';
        include 'view/template/menu_home.php';
        include 'view/home/listagem.php';
        include 'view/template/rodape.php';
    }

}
?>