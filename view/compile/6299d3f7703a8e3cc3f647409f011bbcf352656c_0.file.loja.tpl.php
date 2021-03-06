<?php
/* Smarty version 3.1.36, created on 2020-11-24 21:14:12
  from 'C:\xampp\htdocs\lauralacos\view\loja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbda1d4d9a566_73799425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6299d3f7703a8e3cc3f647409f011bbcf352656c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\loja.tpl',
      1 => 1606263013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbda1d4d9a566_73799425 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="loja"> 
    <main>
        <div class="lista-categorias">
            <span class="list-group-item-nome active">Categorias</span>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right">Produtos</span></a>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</span></a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
        </div>
        <ul style="list-style: none">

    <!--Aviso ao usuário quando uma categoria está vazia -->
    <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?> 
    <H1 class="alert alert-danger">Ops... Nosso estoque está esgotado, volte mais tarde!</H2>
    <?php }?>
        <div class="grid"> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <li class="cards">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">

                    <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" width="200" height="200" alt="" > 

                    <div class="caption">

                        <h2 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2> 

                        <h3 class="text-center text-danger">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
                        
                    <p>Ver mais</p>      
                    </div>     
                </a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </main>
        </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center> <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>
 </center>
    </section>
</div><?php }
}
