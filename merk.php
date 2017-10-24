<?php
// buat class merk
class merk {
 
   public $Adidas,$Compass,$Swallow ;
  
   public function __construct($adidas,$compass,$swallow)
   {
   $this->Adidas =$adidas;
   $this->Compass=$compass;
   $this->Swallow=$swallow;
   }
  
   public function get_ad(){
     return $this->Adidas;
   }
   public function get_cs(){
     return $this->Compass;
 }
   public function get_sw(){
    return $this->Swallow;
   }
 }
  ?>