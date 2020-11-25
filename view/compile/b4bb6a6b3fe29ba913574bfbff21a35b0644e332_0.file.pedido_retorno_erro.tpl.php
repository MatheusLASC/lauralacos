<?php
/* Smarty version 3.1.36, created on 2020-11-24 21:47:20
  from 'C:\xampp\htdocs\lauralacos\view\pedido_retorno_erro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbda998271dc2_13798028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4bb6a6b3fe29ba913574bfbff21a35b0644e332' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\pedido_retorno_erro.tpl',
      1 => 1606265239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbda998271dc2_13798028 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="margin:25px">
    <h3 style="     font-size: 30px;
                    font-family: var(--font-laura);"> Ocorreu um problema no pagamento, ou foi cancelado</h3>
    <section>
                
        <div>
            
            <p style=" font-size: 16px"> Caso tenha algum problema entre em contato conosco, informando <br>
            o código de referência:<b> <?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
 </b>
            </p> 
            <br>
            <p style=" font-size: 16px"> Ou pode tentar novamente o pagamento na seção "Pedidos" clicando em "Detalhes",<br>
            verá seus itens comprados e o abaixo o botão "Completar Pagamento Agora"
            </p>  
            <br>
            <p style=" font-size: 16px"> Para ir a tela do pedido e efetivar o pagamento, clique no botão.</p>  
            <br>
            <p>
            <form name="pagamento" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                <input type="hidden" name="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['REF']->value;?>
">  
                <button style="    background-color: var(--color-vinho);
                                    color: var(--color-rosa);
                                    line-height: 25px;
                                    font-size: 25px;
                                    font-weight: bold;
                                    padding: 10px;
                                    border-width: 0;
                                    border-radius: 15px;"> Fazer Pagamento Agora</button>

            </form>        
            </p>
        </div>
    </section>
</div><?php }
}
