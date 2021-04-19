<?php
// idw-03_player 

class Connect {

    public $host       = 'localhost';
    // ici le nom de ma base de donnée 
    public $dbName     = 'ronanbea_tea';
    // ici ce qui se trouve dans home-wecode mes identifiant 
    public $user       = 'root';
    public $password   = '';
    
    protected $_pdo;

    
    public function __construct(){
        
        $this->_pdo = $this->connection();
        
    }
    
    public function connection(){ 
        // objet qui appartient a php et qui me permet ma connexion 
        $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user,$this->password);
        // $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user,$password); <- chez vous 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
        $pdo->exec('SET NAMES UTF8');
        
        return $pdo;
    }
    
}