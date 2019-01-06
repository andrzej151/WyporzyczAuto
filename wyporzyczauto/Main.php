<?php


class Main{
    
    
    protected $plik;
    protected $paramer1;
    protected $parametr2;
    
    public function __construct()
    {
         $this->plik= pobierz_parametr('id1');
         $this->paramer1= pobierz_parametr('id2');
         $this->parametr2= pobierz_parametr('id3');
    
    }
    
    public function controler(){
        
        
        if(file_exists( "controler/".$this->plik.".php"))
        {
            
            require_once "controler/".$this->plik.".php";
        }
        else 
        {
            require_once "controler/index.php";
        }
    }

    
}