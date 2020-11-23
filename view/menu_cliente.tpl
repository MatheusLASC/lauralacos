<!--  Esta página é o menu completo das funções do cliente
Deixarei numa pasta chamada referências a imagem da tela
Dai você monta estrutura conforme você imagina, mantendo o que precisamos
-->
<center> 
<div id="menuCliente" style="margin: 25px">
    <h4 style="font-size: 30px; font-family: var(--font-laura)"> Olá <b>{$USER}</b>, seja bem vindo! O que deseja fazer agora?</h4> 
    <br>
    <center> 
  <!--  <section style="display: flex"> -->
    

        <a href="{$PAG_CONTA}" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Minha Conta</a>
        
        <a href="{$PAG_CLIENTE_PEDIDOS}" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Pedidos</a>
        
        <a href="{$PAG_CLIENTE_DADOS}" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Meus Dados</a>
        <a href="{$PAG_CARRINHO}" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Carrinho</a>
        <a href="{$PAG_CLIENTE_SENHA}" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Alterar Senha</a>
        <a href="{$PAG_LOGOFF}" style="padding: 10px; margin: 15px; background:var(--color-cinza); border-radius: 8px; font-size: 20px; color: var(--color-vinho)">Sair</a>
  
  <!--  </section> -->
    </center> 
</div>
</center> 