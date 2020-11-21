<?php
/* Smarty version 3.1.36, created on 2020-11-21 04:31:41
  from 'C:\xampp\htdocs\lauralacos\view\clientes_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb88a1dbe8f07_00677872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f4864ba9567c28f3ec565dcdea1f73c912e408' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\clientes_senha.tpl',
      1 => 1605929466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb88a1dbe8f07_00677872 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form>

<?php }
}
