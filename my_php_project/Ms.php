<?php

    
CLASS Utilisateur { 

    private $name ;
    private $email ;

    public function __constract(){

    }
    public function setNome($name){
        $this->name=$name;
    }
    public function getNome(){
       return $this->name;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
       return $this->email;
    }  
    public function afficherDeteils(){

    }



}
$user = new utilisateur ;
$user =setNome('hallow wolde');
$user =setEmail('hallowwolde@gmail.com');
$user = echo '';
$user = echo '';
$user =echo()



CLASS  Auteur extends  Utilisateur{ 
    // proiete 
    private $piograohie;
    
    // Methode 
    public function setpiograohie($piograohie){
        $this->piograohie=$piograohie;
    }
    public function getpiograohie(){
         return $this->piograohie;
    }
    public function creerArticle ($tittre, $contenu){
        $this->titre =$tittre;
        $this->contenu =$contenu;
    }
    public function suppremerArticle (){
        
    }
    
}

CLASS Article {
    // proiete 
   private $role ;
  

    public function __constract(){
     $this->role=$role ;
    }
     public function setRole($role){
     $this->role=$role;
   }
    public function getRole(){
     return $this->role;
   }  
   public function suppremerArticle(){
        
   }
}

$user = new administrateur  ;
$user =settitre('gestion de temps');
$user = echo '';


CLASS Article {
    // proiete 
   private $titre ;
   private $contenu  ;
   private $datePubliction ;
   private $auteur ;

    public function __constract(){
     $this->titre=$titre ;
     $this->contenu=$contenu ;
     $this->datePubliction=$datePubliction ;
     $this->auteur=$auteur ;
    }
     public function setTitre($titre){
     $this->titre=$titre;
   }
    public function getTitre(){
     return $this->Titre;
   }  
   public function AfficherArticle (){
        
   }
}

