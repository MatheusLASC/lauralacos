<?php
/* Smarty version 3.1.36, created on 2020-11-09 03:40:10
  from 'C:\xampp\htdocs\lauralacos\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fa8ac0aa370a6_43888685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad469cc7c57fdd5728894c3439f0c5bc79cc908c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\contato.tpl',
      1 => 1604889606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa8ac0aa370a6_43888685 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contato"> 
    <form action="envio" id="frmcontato" method="GET">
        <h1>Contato</h1>
        <fieldset>
            <div class="field">
                <label for="name">Nome</label>
                <input  id="txtinputnome" placeholder="Insira seu nome" required="required" class="form-control input-md" type="text" name="txtinputnome">      
                <span class="help-block"></span>  
                </div>   

            <div class="field">
                <label for="email">E-mail</label>
                <input id="txtinputemail" placeholder="Insira seu e-mail" required="required" class="form-control input-md" type="email" name="txtinputemail">
                <span class="help-block"></span>  
            </div>
            
            <div class="field">
                <label for="celular">Celular</label>
                <input id="txtcelular" placeholder="Insira seu número de celular" required="required" class="form-control input-md" type="text" name="celular">
                <span class="help-block"></span>  
            </div>
           
            <div class="field">
                <label for="assunto">Assunto</label>
                <input id="txtinputassunto" placeholder="Insira o assunto" required="required" class="form-control input-md" type="text" name="txtinputassunto">
                <span class="help-block"></span>  
            </div>
        

            <div class="field-text">
                <label for="content">Texto</label>
                <textarea class="form-control" name="txtinputtexto" id="txtinputtexto" placeholder ="Digite sua mensagem" required="required" cols="30" rows="6"></textarea>
            </div>
             <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">ENVIAR</button>
        </fieldset>
        
       
    </form>
    
</div>
    
<?php }
}
