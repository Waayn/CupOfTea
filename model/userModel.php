<?php

namespace App\model;

use App\core\connect as Connect;
use \PDO;

class UserModel extends Connect{
    
    
    public function findOne(string $mail){
        
        // verifier que l'user n'existe pas deja 
        $sql = "SELECT * FROM `users` WHERE `email` = ?";
        $q = $this->_pdo->prepare($sql);
        $q->execute([ $mail ]);
        
        return $q->fetch(PDO::FETCH_ASSOC);
        
    }
    
    public function updatePseudo(string $pseudo, int $id){
        
        $sql = "UPDATE `users` SET `pseudo_users` = ? WHERE `Users`.`id_users` = ?;";
        $q = $this->_pdo->prepare($sql);
        $q->execute([ $pseudo, $id ]);
        
        return ['Le pseudo a été changé'];
        
    }
    
    public function findAll(){
        
    }
    
    public function deleteOne(){
        
    }
    
    public function addOne(string $password, string $mail , string $address, string $firstName, string $lastName) :void {
        
        $sql= "INSERT INTO `users`(`password`, `email`, `address`, `firstName`, `lastName`, `role`) VALUES (?, ?, ?, ?, ?, 'User')";
        $q = $this->_pdo->prepare($sql);
        $q->execute([ password_hash($_POST['Password'], PASSWORD_DEFAULT), $mail, $address, $firstName, $lastName ]);
        
        
    }
    
    // public function login() {
    //     require_once 'app/Functions.php';
    //     $func = new Functions();
        
    //     if(!empty($_POST['mail']) && !empty($_POST['Password']) )
    //     {
    //         // je deplace l'ancienne fonction ExistUser pour la mettre dans le model  
    //         $user = $this->findOne($_POST['mail']); 
            
    //         if($user == false || password_verify($_POST['Password'], $user['psw']) == false){
                
    //             return ["Mot de passe incorrect ou pseudo incorrect "];
                
    //         }else{
                       
    //                 // if(isset($_POST['remember'])){
    //                 //     // Attention j'ai modifié la fonction 
    //                 //     $func->setCookies(['mail','psw'],[ 'mail' => $_POST['mail'], 'psw' => $_POST['Password']]);
                    
    //                 // }else{
    //                 //     // attention j'ai modifié la fonction 
    //                 //     $func->deleteCookie(['mail','psw']);
    //                 // }

    //                 // je rajoute htmlspecialchars au cas ou il y'a du code js a la place du pseudo 
    //                 $_SESSION['mail']       = htmlspecialchars($user['mail']);
    //                 $_SESSION['id']         = $user['id_users'];
    //                 $_SESSION['role']       = $user['role'];
                    
    //                 //header('Location: index.php?action=accueil');
    //                 // exit;
                
    //         }
    //     } else {
    //         return [" veuillez remplir les champs"];
        
    //     }
    // }
    
    public function register(){
        
        if(!empty($_POST['Password']) && !empty($_POST['Password2']) && !empty($_POST['Mail']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['Address'])){
        
            $message = [];
            // verifier que le pseudo fait minimum 3 caracteres 
            if(strlen($_POST['lastName']) <= 3) {
                $message[] = ' Nom trop court';
            }

            if(strlen($_POST['firstName']) <= 3) {
                $message[] = ' Prénom trop court';
            }
            // verifier que le mot de passe et celui de confirmation sont les memes 
            if($_POST['Password'] !== $_POST['Password2'] ) {
                $message[] = ' Mot de passe et confirmation différents';
            }
            // verifier que l'adresse email est bien une adresse e-mail 
            if(!filter_var($_POST['Mail'], FILTER_VALIDATE_EMAIL)){
                $message[] = 'Ce n\'est pas une adresse e-mail ';
            }

            if (!empty($message)){
                return $message;
            }

            $user = $this->findOne($_POST['Mail']); 

            if($user === false && count($message) === 0){
            
                $password =  $_POST['Password'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $mail = $_POST['Mail'];
                $lastName = $_POST['lastName'];
                $address = $_POST['Address'];

                $this->addOne($password, $mail, $address, $firstName, $lastName );

                            
                return ["Bravo l'enregistrement à bien été effectué "];
                // enregistrer le user
            
            } else {
                return ["Cette adresse mail est déjà utilisée"];  
            }

        }else{
        
            
            return ["Veuillez remplir tous les champs"];
            
        }
        
    }
    
    
    
}