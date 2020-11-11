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
        //busca produtos de uma determinada categoria
        // caso o modelo for diferente, possa ter alterações
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c 
        ON p.pro_categoria = c.cate_id";

       $query .= " AND pro_categoria = :id"; // exibe os produtos mais recentes adicionados

       $params = array(':id'=>(int)$id);

        $this->ExecuteSQL($query, $params);

        $this->GetLista();

    }

    // Ainda não consegui testar o código devido ao template fixo
    function GetLista()
    {
        //conseguindo todas as informações de produto a produto
        // não se coloca aqui os atributos dependentes de outras tabelas
        $i = 1;

        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'pro_id' => $lista['pro_id'],
            'pro_nome' => $lista['pro_nome'],
            'pro_desc' => $lista['pro_desc'],
            'pro_valor' => $lista['pro_valor'],
            'pro_img' => Rotas::ImageLink($lista['pro_img'], 180, 180),
            'pro_slug' => $lista['pro_slug'],
            'pro_comprimento' => $lista['pro_comprimento'],
            'pro_apliques' => $lista['pro_apliques'],
            'pro_cores' => $lista['pro_cores'],
            'pro_prendedor' => $lista['pro_prendedor'],
            'cate_id' => $lista['cate_id'],
            'cate_nome' => $lista['cate_nome']
        );
        $i++;
      endwhile;
    }
}


?>