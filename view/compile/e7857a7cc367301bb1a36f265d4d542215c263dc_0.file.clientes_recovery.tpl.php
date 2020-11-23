<?php
/* Smarty version 3.1.36, created on 2020-11-23 12:13:02
  from 'C:\xampp\htdocs\lauralacos\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbbd17e9a0b33_93871413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7857a7cc367301bb1a36f265d4d542215c263dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\clientes_recovery.tpl',
      1 => 1606144380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbbd17e9a0b33_93871413 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<div style="margin: 25px">
    
    <h4 style="font-size: 25px; font-family: var(--font-laura); margin-bottom: 15px">Digite seu email cadastrado para receber uma nova senha </h4>
  
    <form name="recuperarsenha" method="post" action="">
        
         <div class="col-md-4"></div>
            
            <div class="col-md-4">
                <label style="margin-bottom: 0.2em; display: block; font-size: 20px;">Digite seu email cadastrado</label>
                <input type="email" name="cli_email" id="cli_email" style="padding: 0.2em;
                border: 2px dotted var(--color-rosa);
                border-radius: 6px;
                display: block" required>
                <br>
                <button type="submit" style="background-color: var(--color-rosa);
                width: 120px;
                padding: 8px;
                font-size: 18px;
                font-weight: bold;
                border-radius: 8px;
                border-width: 0;"> Recuperar </button>
            </div>
            <br>
        
    </form>
</div>
</center><?php }
}
