<?php
/* Smarty version 3.1.36, created on 2020-11-09 01:59:02
  from 'C:\xampp\htdocs\lauralacos\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa89456b102a0_83347846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd331aff8f062a8d55c3e5ac09ba8e89443317b88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\produtos_info.tpl',
      1 => 1604879472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa89456b102a0_83347846 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

      <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>
<hr>

<div class="row">
    
  
        <div class="col-md-6 ">

        <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" > 

    </div>

   
	           <h3>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>   
            
        </div>
      
           
         
      

     
        
    

    </div>




</div>
        <!-- -->
                 <div class="row">
            <hr>
              <h4 class="text-center">Mais imagens</h4>

              <ul style="list-style: none">
                 

                      <li class="col-md-3 ">
                          <img src="" alt="" class="thumbnail">


                      </li>

                 
              </ul>
              

        </div>
                  
        <div class="row">
            <hr>
            <h4 class="text-center">Descrição do produto</h4>

            <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
 

        </div>  
            <br>
            <br>


  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}