<?php
/* Smarty version 3.1.36, created on 2020-11-23 11:55:12
  from 'C:\xampp\htdocs\lauralacos\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fbbcd50cce989_07024501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f48ca779131c4338f944b1ba3ef76f4d34c3d1c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\carrinho.tpl',
      1 => 1606143310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbbcd50cce989_07024501 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="carrinho">

<?php echo '<script'; ?>
>
$(document).ready(function(){    

   // validar frete
     $('#buscar_frete').click(function(){  
        
      var CEP_CLIENTE = $('#cep_frete').val();
      var PESO_FRETE = $('#peso_frete').val();
       
        if (CEP_CLIENTE.length !== 8 ) {
        alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');  
         $('#frete').addClass(' text-center text-danger');
         $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
        $('#cep_frete').focus();
        } else {
     
       
        $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
        $('#frete').addClass(' text-center text-danger');
      
        // carrego o combo com os bairros
       
        $('#frete').load('controller/frete.php?cepcliente='+CEP_CLIENTE+'&pesofrete='+PESO_FRETE);
 
 } // fim do IF digitei o CEP
      
 
    }); // fim do change
    
   
} ); // fim do ready

<?php echo '</script'; ?>
>

    <h3>Meu Carrinho</h3>
    <!-- botoes e opções de cima -->
    <section class="row">
        
        <div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="comprar-mais" title="">Comprar Mais</a>
        </div>
                
    </section>
    <br>

    <!--  table listagem de itens -->
    <section class="tabela-carrinho">
    
        <table class="table table-bordered" style="width: 95%">
        
            <tr class="cabecalho">
                <td></td> 
                <td>Produto</td> 
                <td>Valor R$</td> 
                <td>Quantidade</td> 
                <td>Sub Total R$</td>
                <td>Remover</td> 
                <td></td> 
                
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROC']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                
            
            <tr>
                
                <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['proc_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['proc_nome'];?>
"> </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_nome'];?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_valor'];?>
 </td>
                <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_qtd'];?>
  </td>
                <td> R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_subTotal'];?>
 </td>
                <td> 
                
           <!--  Estilizar botão - mander os paremetros do form e do input iguais -->
                    <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                    
                        <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['proc_id'];?>
">    
                        <input type="hidden" name="acao" value="del">    
                        
                       <button class="limpar"><img src="view/assets/lixeira.png"></button>
                    </form>
                </td>
                
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>

    </section><!-- fim da listagem itens -->
    
           <!--  bloco frete Editar Aqui Amanda (mander os names e id iguais)
           Manter tbm o id da session "dadosfrete" -->
   <section class=dadosfrete id="dadosfrete">

       <div>
           
           <!-- campos para tratar  do  frete -->
           <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" class="form-control " readonly>
    
           <input type="text" name="cep_frete" class="cep" id="cep_frete" value="" placeholder="Digite seu CEP">
          
           <input type="hidden" name="frete_valor" id="frete_valor" value="0">
                    
       </div> 
           
        <div>
            <!-- botão frete -->
            <button class="frete" id="buscar_frete" name="buscar_frete">Calcular Frete </button>
        </div>          
                                               
  </section>

            <!-- botoes de baixo e valor total -->
            <section class="total-limpar" id="total">
                        
                <div class="col-md-4 text-right">
            
                </div>
                <h4> Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
 </h4>
                
                <!-- botão de limpar-->
                <div class="col-md-4">

                    <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                        <input type="hidden" name="acao" value="limpar">
                        <input type="hidden" name="pro_id" value="1">

                        <button class="limpar"><img src="view/assets/lixeira.png"> Limpar Tudo</button>

                    </form>

                </div>
            </section>
            <br>

            <!-- botão finalzar =- Precisei adicionar um form para o finalizar o pedido-->
             <!--Aqui abaixo no span frete exibe o valor calculado do frete baseado no JS
                        Você pode mudar para onde ficar melhor-->
            <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
            <span id="frete"></span>
            <button class="confirmar" type="submit"> Confirmar Pedido </button>
            </form>
            
            
        </form>  
        
        </div>
              
    </section>
    <br>
    <br>
    <br>
    <br>
</div>

<?php }
}
