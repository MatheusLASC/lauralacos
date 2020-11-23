<center>
<div style="margin-left: 25px">
    <h3 style="font-size: 25px; font-family: var(--font-laura); margin-bottom: 15px">Alteração de senha de acesso</h3>


    <form name="alterarsenha" method="post" action="">
        
        <section>
            <div class="col-md-4"></div>
            
            <div class="col-md-4">
                <label style="margin-bottom: 0.2em; display: block; font-size: 20px;">Digite sua senha atual</label>
                <input type="password" name="cli_senha_atual" id="cli_senha_atual" style="padding: 0.2em;
                border: 2px dotted var(--color-rosa);
                border-radius: 6px;
                display: block" required>
            

                <label style="margin-bottom: 0.2em; display: block; font-size: 20px;">Digite sua nova senha</label>
                <input type="password" name="cli_senha" id="cli_senha" style="padding: 0.2em;
                border: 2px dotted var(--color-rosa);
                border-radius: 6px;
                display: block" required>
                <br>
            
                
                
                <button type="submit" style="background-color: var(--color-rosa);
                width: 100px;
                padding: 8px;
                font-size: 18px;
                font-weight: bold;
                border-radius: 8px;
                border-width: 0;"> Alterar </button>
            </div>
            <br>
            
            
        </section>

    </form>
</div>
</center>