<?php
/* Smarty version 3.1.36, created on 2020-11-08 23:54:36
  from 'C:\xampp\htdocs\lauralacos\view\loja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa8772ce9ed79_00610369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6299d3f7703a8e3cc3f647409f011bbcf352656c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\loja.tpl',
      1 => 1604864960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa8772ce9ed79_00610369 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="thumbnail">
                <a href "">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">

                    <div class="caption">
                        <h2><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2>
                        Sob encomenda
                        <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
        
                    </div>
                </a>    
            </div>
            
            
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </main>

</div>

    
<?php }
}
