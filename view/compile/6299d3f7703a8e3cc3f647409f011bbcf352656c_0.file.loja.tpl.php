<?php
/* Smarty version 3.1.36, created on 2020-11-09 02:31:06
  from 'C:\xampp\htdocs\lauralacos\view\loja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa89bda026402_77610093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6299d3f7703a8e3cc3f647409f011bbcf352656c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\loja.tpl',
      1 => 1604885447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa89bda026402_77610093 (Smarty_Internal_Template $_smarty_tpl) {
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


                </a>    
		                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">

		                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" width="200" height="200" alt="" > 

		                    <div class="caption">

		                        <h2 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2> 

		                        <h3 class="text-center text-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

                            <img class="carrinho" src="view/assets/carrinho.svg" alt="Adicionar ao carrinho">
                            <img class="coracao" src="view/assets/coracao.png" alt="Adicionar aos favoritos">
		                    
                            </div>

		                </a>

                    
		            </div>


		        </li>

		        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </main>

</div><?php }
}
