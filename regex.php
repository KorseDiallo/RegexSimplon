<?php
    $email_erreur="";
    
    if(isset($_POST["valider"])){
        $email= $_POST["email"];
         
        function emailValide($email){
            $pattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";
            return preg_match($pattern, $email);
        }
        $verifieEmail= emailValide($email);
        if(!$verifieEmail){
            $email_erreur="l'email n'est pas valide";
        }else{
            echo "Votre email est envoyé";
        }
    }


?>


<form action="" method="post">
    <label for="email">Addresse Email</label>
    <input type="text" name="email" id="email">
    <input type="submit" name="valider" value="valider">
    <span style="color:red"><?php echo $email_erreur; ?></span>
</form>