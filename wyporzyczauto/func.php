<?php

/*funkcja - pobieranie parametrów z URLa*/
function pobierz_parametr($id){
    
   if(isset($_GET["$id"])){
      $id=$_GET["$id"];
   }else{
      $id=false;
   }
   return $id;
}

function menu($id){
    
    return "ok";//require_once("widok/menu");
}