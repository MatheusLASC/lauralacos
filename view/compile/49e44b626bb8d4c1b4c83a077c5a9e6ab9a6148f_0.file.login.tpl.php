<?php
/* Smarty version 3.1.36, created on 2020-11-18 03:45:44
  from 'C:\xampp\htdocs\lauralacos\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb48ad861f220_13434571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49e44b626bb8d4c1b4c83a077c5a9e6ab9a6148f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\login.tpl',
      1 => 1605666843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb48ad861f220_13434571 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>

<?php } else { ?>
<section class="login">

    <form name="cliente_login" method="post" action="" >
        <div class="campos">
    
            <label>E-mail: </label>
            <input type="email" name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off">        

            <label>Senha: </label>
            <input type="password" name="txt_senha" value="" placeholder="Digite sua senha" required>        

            <button class="entrar">Entrar </button>
  
        </div>
        <div class="esqueceu">
        
            <span>Não tem cadastro?</span>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
">Me Cadastrar</a>
            <br>
            <span>Esqueceu a senha?</span>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
">Esqueci a Senha</a>
                   
        </div>

    </form>
      
</section>
<?php }
}
}
