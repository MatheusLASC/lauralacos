<?php
/* Smarty version 3.1.36, created on 2020-10-29 15:39:54
  from 'C:\xampp\htdocs\LauraLacos\view\loja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9ad43a890bc4_37994321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '782cf556a71c6286c575b091f467764739a2b64d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LauraLacos\\view\\loja.tpl',
      1 => 1603982386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9ad43a890bc4_37994321 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="loja"> 
    <main>
        <div class="categorias">
            <a href="#">PRONTA ENTREGA</a>
            <a href="#">SOB ENCOMENDA</a>
        </div>
        <ul style="list-style: none">
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

        
            

        <li class="cards">
            <div class="card">
                <img src="imagens/laco1" alt="">

                <div class="thumbnail">
                    <h2><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2>
                    Sob encomenda
                    <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
    
                    <img class="carrinho" src="view/assets/carrinho.svg" alt="Adicionar ao carrinho">
                    <img class="coracao" src="view/assets/coracao.png" alt="Adicionar aos favoritos">
                </div>
            </div>
            
            
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </main>

</div>

    
<?php }
}
