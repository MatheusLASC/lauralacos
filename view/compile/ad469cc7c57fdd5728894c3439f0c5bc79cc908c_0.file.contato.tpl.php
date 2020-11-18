<?php
/* Smarty version 3.1.36, created on 2020-11-18 20:32:22
  from 'C:\xampp\htdocs\lauralacos\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb576c6b62f84_53701100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad469cc7c57fdd5728894c3439f0c5bc79cc908c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\contato.tpl',
      1 => 1605727808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb576c6b62f84_53701100 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contato"> 
    <form id="frmcontato" action="envio">
    
        <h1>Contato</h1>
        <fieldset>
            <div class="field">
                <label for="name">Nome</label>
                <input  id="txtinputnome" placeholder="Insira seu nome" required="required" class="form-control input-md" type="text" name="txtinputnome">      
                </div>   

            <div class="field">
                <label for="email">E-mail</label>
                <input id="txtinputemail" placeholder="Insira seu e-mail" required="required" class="form-control input-md" type="email" name="txtinputemail">
          
            </div>
            
            <div class="field">
                <label for="celular">Celular</label>
                <input id="txtcelular" placeholder="Insira seu número de celular" required="required" class="form-control input-md" type="text" name="txtcelular">
        
            </div>
           
            <div class="field">
                <label for="assunto">Assunto</label>
                <input id="txtinputassunto" placeholder="Insira o assunto" required="required" class="form-control input-md" type="text" name="txtinputassunto">
    
            </div>
        

            <div class="field-text">
                <label for="content">Texto</label>
                <textarea class="form-control" name="txtinputtexto" id="txtinputtexto" placeholder ="Digite sua mensagem" required="required" cols="30" rows="6"></textarea>
            </div>
            <div class="form-button">
             <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">ENVIAR</button>
            </div>
        </fieldset>
        
       
    </form>
    
</div>
    

<?php }
}
