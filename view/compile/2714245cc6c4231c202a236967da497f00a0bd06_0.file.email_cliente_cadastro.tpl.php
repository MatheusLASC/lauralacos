<?php
/* Smarty version 3.1.36, created on 2020-11-21 03:53:01
  from 'C:\xampp\htdocs\lauralacos\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb8810d199641_85415218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2714245cc6c4231c202a236967da497f00a0bd06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\email_cliente_cadastro.tpl',
      1 => 1504563136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb8810d199641_85415218 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Olá <?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
 , obrigado por se cadastrar em <?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h3>

<p> Cadastro efetuado com sucesso,  para fazer  o login use seu email cadastrado ( <?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
 )
<br>
com a sua senha, sua senha neste momento é ( <?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
 )

</h3>
<p>
    Para acessar o site e sua conta basta usar este endereço <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    
</p>
<?php }
}
