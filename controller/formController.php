<?php

namespace App\controller;

class formController {
    
    
    protected  $userModel;
    
    public function __construct($userModel){
        
        $this->userModel = $userModel;
        
    }

    public function controlLogin() {
            
            if(!empty($_POST['mail']) && !empty($_POST['password']) )
            {
                
                $user = $this->userModel->findOne($_POST['mail']);
                
                if($user == false || password_verify($_POST['password'], $user['password']) == false){
                    
                    return ["Mot de passe incorrect ou mail incorrect "];
                    
                }else{
                           
                        // je rajoute htmlspecialchars au cas ou il y'a du code js a la place du pseudo 
                        $_SESSION['mail']       = htmlspecialchars($user['email']);
                        $_SESSION['id']         = $user['id'];
                        $_SESSION['role']       = $user['role'];
                        $_SESSION['firstName']  = $user['firstName'];
                        
                        return ['Connexion réussie'];
                }
            } else {
                return [" Veuillez remplir les champs"];
            
            }
        }
        
        
        
}