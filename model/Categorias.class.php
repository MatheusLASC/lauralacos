<?php

Class Categorias extends Conexao{

    private $cate_id, $cate_nome, $cate_slug;
    function __construct(){
        parent::__construct();
    }

    function GetCategorias()
    {
        //busca produtos de uma determinada categoria
        // caso o modelo for diferente, possa ter alterações
        $query = "SELECT * FROM {$this->prefix}categorias";

        $this->ExecuteSQL($query);

        $this->GetLista();

    }

    //listando todas as categorias
    function GetLista()
    {
     
        $i = 1;

        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'cate_id' => $lista['cate_id'],
            'cate_nome' => $lista['cate_nome'],
            'cate_slug' => $lista['cate_slug'],
            //forma a URL para o filtro
            'cate_link' => Rotas::pag_Produtos(). '/' .$lista['cate_id']. '/' .$lista['cate_slug'],
        );
        $i++;
      endwhile;
    }
}


?>