<?php
/* Smarty version 3.1.36, created on 2020-11-18 01:01:03
  from 'C:\xampp\htdocs\lauralacos\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fb4643fa2e9f0_11966812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8386e0657fbd4ca1b796afb8299a65f4dbbc8e96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lauralacos\\view\\pedido_finalizar.tpl',
      1 => 1605657517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb4643fa2e9f0_11966812 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Parte em que a pessoa finaliza o seu pedido-->
  <h3>Finalizar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
   
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">


   <!--  Manter o alerta -->
    <center>
    <div class="alert alert-success">Pedido Finalizado com Sucesso</div>
    <table class="table table-bordered" style="width: 95%">

<!--
        <tr> 
        
            
            <td colspan="6" align="right"><a href="" class="btn btn-success" title="">Comprar Mais</a></td> 
        </tr> -->
       
        <tr class="text-danger bg-danger">
        
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>Quantidade</td> 
            <td>Sub Total R$</td> 
            
            
        </tr>
     
        
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROC']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        
        <tr>
            
           
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_qtd'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['proc_subTotal'];?>
 </td>
            
            
            
        </tr>
        
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-12 text-right text-danger bg-warning" align="right">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
            <h4>
               Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

            </h4>
            <h4>
               Total do Pedido : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

            </h4>
            </div>
            
           
              
          

        </section>
                    <br>
                    
    
                   
           
           <hr>
           
       </form>  
       
       </div>
       
                   
                        
  </section>


   <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">


            <!--FORMAS DE PAGAMENTO AQUI
            Você pode ou gerar um texto ou imagem para exibir no site
            Pode ser replicado em outros locais -->

            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 


                
            </div>
            

            <div class="col-md-4">
              
            </div>
         
            
        </section>


       <br>
       <br>
       <br>
       <br><?php }
}
