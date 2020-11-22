<?php
/* Smarty version 3.1.36, created on 2020-11-22 01:20:00
  from 'C:\xampp\htdocs\lauralacos\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb9e6f0b1b3c4_32585556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd331aff8f062a8d55c3e5ac09ba8e89443317b88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\produtos_info.tpl',
      1 => 1606018774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb9e6f0b1b3c4_32585556 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="loja-info"> 
    <main>

        <ul style="list-style: none">

        <!--Aviso ao usuário quando uma categoria está vazia -->
        <!-- ESTRUTURA ANTIGA-->

        <!--
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

                        <h2 class="s"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2> 

                        <h3 class="text-danger">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

                    </div>     
                </a>
            </li>
  
            <div class="row">
            <br>
            <br>
                <h1 class="text-center">Descrição do produto</h1>
            <br>
            <br>
                <h2> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</h2> 
            <br>
            <br>
                <h2 class="preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h2>
            <br>
            <br>
                <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                    <input type="hidden" name="acao" value="add">
                    <button  class="comprarInfo">Comprar</button>
                </form> 
            </div>  
        </div>


        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        -->
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
                        <h3>Ref. <!--inserir ref--></h3>
                        <br>
                        <h2 class="desc"> Descrição: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</h2>
                        <h2>Comprimento: <!--inserir comp--></h2>
                        <h2>Cor: <!--inserir cor--></h2>
                        <h2>Tamanho do prendedor:<!--inserir tamanho--></h2>
                        <h2>Possui aplique?<!--inserir aplique--></h2>
                        <br>
                        <h1 class="preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h1>
                    </div>
                    <br>
                    <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                        <input type="hidden" name="acao" value="add">
                        <button  class="comprarInfo">COMPRAR</button>
                    </form> 
                </div>  
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
            



    </main> 

</div><?php }
}
