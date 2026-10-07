<?php
class A{
    public static function miFuncion(){
        echo  __CLASS__ ;
      //muestra el nombre de la clase actual;
    }
    public static function otraFuncion(){
        self::miFuncion();
     //fin de a
    }
}    
Class B extends A{
    public static function miFuncion(){
        //mostrara el nombre de la clase actual
        echo  __CLASS__ ;
    }
}

 B::otraFuncion();
 ?>