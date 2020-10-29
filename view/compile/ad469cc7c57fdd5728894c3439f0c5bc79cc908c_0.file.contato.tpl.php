<?php
/* Smarty version 3.1.36, created on 2020-10-29 18:33:37
  from 'C:\xampp\htdocs\lauralacos\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9afcf1344da6_96643945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad469cc7c57fdd5728894c3439f0c5bc79cc908c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\contato.tpl',
      1 => 1603990079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9afcf1344da6_96643945 (Smarty_Internal_Template $_smarty_tpl) {
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
