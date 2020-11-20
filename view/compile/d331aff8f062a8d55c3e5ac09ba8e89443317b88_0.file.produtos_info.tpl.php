<?php
/* Smarty version 3.1.36, created on 2020-11-20 05:45:27
  from 'C:\xampp\htdocs\lauralacos\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb749e773a318_65887422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd331aff8f062a8d55c3e5ac09ba8e89443317b88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\produtos_info.tpl',
      1 => 1605847526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb749e773a318_65887422 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="loja"> 
    <main>

        <ul style="list-style: none">

    <!--Aviso ao usuário quando uma categoria está vazia -->

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

                    </div>     
                </a>
            </li>

  
            <div class="row">
            <br>
            <br>
            <hr>
            
            <h1 class="text-center">Descrição do produto</h1>
            <br>
            <br>
            <h2> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</h2> 
            <br>
            <br>
            <h2 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h2>
            <br>
            <br>
             <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                <input type="hidden" name="acao" value="add">
            <button  class="btn btn-success btn-lg">Comprar</button>
             </form> 
            </div>  
        </div>


    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <hr>
    </div>
    </main>
    </section>

    

</div><?php }
}
