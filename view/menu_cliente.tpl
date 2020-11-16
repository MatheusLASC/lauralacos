<!--  Esta página é o menu completo das funções do cliente
Deixarei numa pasta chamada referências a imagem da tela
Dai você monta estrutura conforme você imagina, mantendo o que precisamos
-->
<h4 class="text-center text-danger"> Olá <b>{$USER}</b>, seja bem vindo! O que deseja fazer agora?</h4> 
<section class="row">
    
    <div class="text-center">
        
        <a href="{$PAG_CONTA}" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Minha Conta</a>
        
        <a href="{$PAG_CLIENTE_PEDIDOS}" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Pedidos</a>
        
        <a href="" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Meus Dados </a>
        <a href="{$PAG_CARRINHO}" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho </a>
        <a href="" class="btn btn-warning"> Alterar Senha </a>
        <a href="{$PAG_LOGOFF}" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
           
        
    </div>              
    
</section>