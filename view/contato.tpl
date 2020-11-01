<div class="contato"> 
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
    
