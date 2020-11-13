 {foreach from=$PRO item=P}



 <li class="cards">
            </a>    
                    <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">

                        <img class="thumbnail" src="{$P.pro_img}" width="200" height="200" alt="" > 

                        <div class="caption">

                            <h2 class="text-center"> {$P.pro_nome}</h2> 

                            <h3 class="text-center text-danger">{$P.pro_valor}</h3>

                              
                        </div>     
                    </a>
                </div>
            </li>
{* 
      <h3 class="text-center">{$P.pro_nome} </h3>
<hr>

<div class="row">
    
  
     div da esquerda imagem do produto 
    <div class="cards">

        <img class="thumbnail" src="{$P.pro_img}" alt="" > 

    </div>

   
	   div da direita info produtos   
    <div class="cards">
        
          <img src="{$TEMA}/images/logo-pagseguro.png" alt="">
  <hr>
            
        
        <div>
           <h3>R$ {$P.pro_valor}</h3>   
            
        </div>
      
        <div>
            <form name="carrinho" method="post" action="">
                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                <input type="hidden" name="acao" value="add">
            <button  class="btn btn-success btn-lg">Comprar</button>
             </form> 
            
        </div>
           
    </div>




</div>
        <!-- -->
          listagem de imagens extras 
        <div class="row">
            <hr>
              <h4 class="text-center">Mais imagens</h4>

              <ul style="list-style: none">
                 

                      <li class="col-md-3 ">
                          <img src="" alt="" class="thumbnail">


                      </li>

                 
              </ul>
              

        </div>
               <!-- descrição do produto--> 
      
        <div class="row">
            <hr>
            <h4 class="text-center">Descrição do produto</h4>

            {$P.pro_desc} 

        </div>  
            <br>
            <br> *}


  {/foreach}