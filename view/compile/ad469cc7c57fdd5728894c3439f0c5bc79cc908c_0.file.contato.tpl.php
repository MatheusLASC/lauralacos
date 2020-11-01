<?php
/* Smarty version 3.1.36, created on 2020-11-01 22:09:41
  from 'C:\xampp\htdocs\lauralacos\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9f2415e50587_88112668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad469cc7c57fdd5728894c3439f0c5bc79cc908c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\contato.tpl',
      1 => 1604264886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f2415e50587_88112668 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contato"> 
    <form action="envio" id="frmcontato" method="Post">
        <h1>Contato</h1>
        <fieldset>
            <div class="field">
                <label for="name">Nome</label>
                <input  id="txtnome" placeholder="Insira seu nome" required="required" type="text" name="name">      
            </div>   

                 <!-- Finalizar verificação com o arquivo contato.js do curso-->
            <div class="field">
                <label for="email">E-mail</label>
                <input id="txtemail" placeholder="Insira seu e-mail" required="required" type="email" onblur="validarEmail()" onfocus="redefinirMsg()" name="email">
                <span id="error-email"></span>
            </div>
            
             <!-- Fazer verificação de formato do número de telefone -->
            <div class="field">
                <label for="celular">Celular</label>
                <input id="txtcelular" placeholder="Insira seu número de celular" required="required" type="tel" name="celular">
            </div>
           
            <div class="field">
                <label for="assunto">Assunto</label>
                <input id="txtassunto" placeholder="Insira o assunto" required="required" type="text" name="assunto">
            </div>
        

            <div class="field-text">
                <label for="content">Texto</label>
                <textarea name="texto" id="txttexto" placeholder ="Digite sua mensagem" required="required" cols="30" rows="6"></textarea>
            </div>
             <button id="btnenviar" name="enviar" type="submit">ENVIAR</button>
        </fieldset>
        
       
    </form>
    
</div>
    
<?php }
}
