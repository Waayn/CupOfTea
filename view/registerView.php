<div>
    <h1>Créer un compte  </h1>
    <div class="form">
        <form action='index.php?page=register' method="POST" class="flex form-register">
            <div>
                <label for="Mail"> Mail :</label>
                <input type="email" name="Mail" id="Mail"/>
            </div>
            <div>
                <label for="Password"> Mot de passe :</label>
                <input type="password" name="Password" id="Password"/>
            </div>
            <div>
                <label for="Password2"> Confirmer le mot de passe :</label>
                <input type="password" name="Password2" id="Password2"/>
            </div>
            <div>
                <label for="Address"> Adresse :</label>
                <input type="text" name="Address" id="Address"/>
            </div>
            <div>
                <label for="firstName"> Prénom :</label>
                <input type="text" name="firstName" id="firstName"/>
            </div>
            <div>
                <label for="lastName"> Nom :</label>
                <input type="text" name="lastName" id="lastName"/>
            </div>
            <div class='submit-register'>
               <input type="submit" value="S'enregistrer"/> 
            </div>
    
        </form>      
    </div>
</div>