<?php
/* Smarty version 3.1.36, created on 2020-10-29 02:58:55
  from 'C:\xampp\htdocs\LauraLacos\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9a21df720fa8_61095035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ece39b39aafda185ad9c98f77b87c32771ef5925' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LauraLacos\\view\\contato.tpl',
      1 => 1603772485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9a21df720fa8_61095035 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contato"> 
    <form action="">
        <h1>Contato</h1>

        <fieldset>
            <div class="field">
                <label for="name">Nome</label>
                <input type="text" name="name">      
            </div>   
            <div class="field">
                <label for="email">E-mail</label>
                <input type="text" name="email">
            </div>
            <div class="field">
                <label for="celular">Celular</label>
                <input type="number" name="celular">
            </div>
            <div class="field">
                <label for="subject">Assunto</label>
                <input type="text" name="subject">
            </div>
            <div class="field-text">
                <label for="content">Texto</label>
                <textarea name="content" id="" cols="30" rows="5"></textarea>
                <!-- <input type="text" name="content"> -->
            </div>
        </fieldset>
        
        <button type="submit">ENVIAR</button>
    </form>
    
</div>
    
<?php }
}
