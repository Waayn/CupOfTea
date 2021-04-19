<?php 



class toolController{
    
    // fonction qui me permet de rediriger a l'endroit definit par $path
    public function redirect(string $path) :void {
        
        header('Location: '.$path);
        exit;
        
    }    
    

    // fonction qui me retourne une valeur si elle existe, sinon elle me retourne une string 
    public function ifExistValue(?string $value,string $text) :string{
        
        if(isset($value)){
            
            return $value;
            
        }else{
            
            return $text;
            
        }
    
    }    
    

    // verifie l'ecart entre deux dates est peut retourner une valeur si l'on veut 
    public function verifEcartDate(string $date1,string $date2,int $ecart,?string $string = null) :?string {
        
        if(($date1 - $date2 ) < $ecart)
        {
            return $string;
        }else{
            
            return null;
        }
         
    }    
    
    
    // si je suis admin je peux ajouter un magasin en supprimer un et bonus en modifier un 
    public function isAdmin() :?bool {
        
        // va retourner true si $_SESSION['role'] est Admin 
        if (array_key_exists('role', $_SESSION) && $_SESSION['role'] === 'Admin') {
            
            return true;
            
        }else{
        // va rediriger sur index.php si pas admin;
            
            $this->redirect('index.php');
            return null;
            
        }
        
    }
    
    // si je suis un user je peux juste ajouter un magasin. 
    public function isUser() :bool{
        
        // va retourner true si $_SESSION['role'] est User
        if (array_key_exists('role', $_SESSION) && $_SESSION['role'] === 'User') {
            
            return true;
            
        }else{
            // çà veut dire que c'est un admin 
            return false;
        }
        
        
    }
    
    // si je suis connecté j'ai accés a certaines page et d'autre non, ex : si je suis connecté je peux plus aller sur login.php
    public function isConnected() :bool {
        
        // verifie qu'une personne est connectée 
        if (array_key_exists('role', $_SESSION)) {
            
            return true;
            
        }else {
        // return soit true soit false 
            return false;
        }
        
    }

    
    // verifie si un cookie existe pour l'afficher dans un input 
    public function checkCookie(string $cookieName) :void{
        
        if(array_key_exists($cookieName,$_COOKIE)){
                                                            
            echo "value='".$_COOKIE[$cookieName]."'";
                                                            
        }
        
    }
    
    // supprime les cookies appelé en parametre 
    public function deleteCookie(array $cookies) :void{
        
        foreach($cookies as $cookieName){
            
        
            if(array_key_exists($cookieName,$_COOKIE)){
                // pour supprimer un cookie il faut l'appeler juste avant
                setcookie($cookieName);                                                
                unset($_COOKIE[$cookieName]);
                                                                
            }
            
            
        }
        
    }
    
    // supprime les cookies appelé en parametre 
    public function setCookies(array $cookies,array $array) :void{
       //var_dump($array);
       foreach($cookies as $cookieName){
            // setcookie('password',$user['password'], time()+365*24*3600)
            setcookie($cookieName,$array[$cookieName],time()+365*24*3600);

        }
        
        
        
    }
}





