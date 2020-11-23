<?php
/* Smarty version 3.1.36, created on 2020-11-22 16:04:38
  from 'C:\xampp\htdocs\lauralacos\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbab646011223_12995547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd331aff8f062a8d55c3e5ac09ba8e89443317b88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\produtos_info.tpl',
      1 => 1606071875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbab646011223_12995547 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="loja-info"> 
    <main>

        <ul style="list-style: none">
        <!-- ESTRUTURA NOVA -->
        <h1 class="titulo-info">Descrição do produto</h1>
        <div class="grid-info"> 
            
            <br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>    
                <div class="infos">
                    <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" width="200" height="200" alt="">
                    <div class=info>
                        <h1 class="nome"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2>
                        <h3>Ref. <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>
                        <br>
                        <h2 class="desc"> Descrição: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</h2>
                        <h2>Comprimento: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_comprimento'];?>
 cm</h2>
                        <h2>Cor: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_cores'];?>
</h2>
                        <h2>Tamanho do prendedor: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_prendedor'];?>
 cm</h2>
                        <h2>Possui aplique? <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_apliques'];?>
</h2>
                        <br>
                        <h1 class="preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h1>
                    </div>
                    <br>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['P']->value['pro_estoque'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['P']->value['pro_ativo'];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 >= 1 && $_prefixVariable2 == 'Sim') {?>
                    <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                        <input type="hidden" name="acao" value="add">
                        <button  class="comprarInfo">COMPRAR</button>
                    </form> 
                    <?php } else { ?>
                    <h2>Produto Indisponível no momento!</h2>
                  <?php }?>
                </div>  
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
            



    </main> 

</div><?php }
}
