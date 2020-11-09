<div class="contato"> 
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
    
