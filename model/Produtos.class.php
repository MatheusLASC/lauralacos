<?php

Class Produtos extends Conexao {
    function __construct()
    {
        parent::__construct();
    }

    function GetProdutos()
    {
        //busca produtos de uma determinada categoria
        // caso o modelo for diferente, possa ter alterações
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c 
        ON p.pro_categoria = c.cate_id";

        $query .= " ORDER BY pro_id DESC"; // exibe os produtos mais recentes adicionados

        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos");

        $this->ExecuteSQL($query);

        $this->GetLista();

    }


    function GetProdutosID($id)
    {
        //busca produtos de uma determinada categoria
        // caso o modelo for diferente, possa ter alterações
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

		$query .= " AND pro_id = :id";

		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params);

		$this->GetLista();

    }

    function GetProdutosCateID($id)
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        //busca produtos de uma determinada categoria
        // caso o modelo for diferente, possa ter alterações
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c 
        ON p.pro_categoria = c.cate_id";

       $query .= " AND pro_categoria = :id"; // exibe os produtos mais recentes adicionados

       $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos WHERE pro_categoria=".(int)$id);

       $params = array(':id'=>(int)$id);

        $this->ExecuteSQL($query, $params);

        $this->GetLista();

    }

    function GetLista()
    {
        //conseguindo todas as informações de produto a produto
        // Caso haver mudanças na tabela de produtos, alterar aqui as propriedades
        $i = 1;

        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'pro_id' => $lista['pro_id'],
            'pro_nome' => $lista['pro_nome'],
            'pro_desc' => $lista['pro_desc'],
            'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
            'pro_valor_us' => ($lista['pro_valor']),
            'pro_img' => Rotas::ImageLink($lista['pro_img'], 180, 180),
            'pro_slug' => $lista['pro_slug'],
            'pro_estoque' => $lista['pro_estoque'],
            'pro_ref' => $lista['pro_ref'],
            'pro_comprimento' => $lista['pro_comprimento'],
            'pro_apliques' => $lista['pro_apliques'],
            'pro_cores' => $lista['pro_cores'],
            'pro_prendedor' => $lista['pro_prendedor'],
            'pro_ativo' => $lista['pro_ativo'],
            'pro_fretefree' => $lista['pro_fretefree'],
            'cate_id' => $lista['cate_id'],
            'cate_nome' => $lista['cate_nome']
        );
        $i++;
      endwhile;
    }
}


?>