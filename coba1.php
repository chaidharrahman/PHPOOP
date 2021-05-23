<?php
 class Product_Brand_Lokal{
     public $sepatu="sepatu",
            $jaket="jaket",
            $hoddie="hoddie",
             $kaos="kaos";
            public function getLabel() {
                return "$this->sepatu, $this->jaket,$this->hoddie,$this->kaos";
            }

 }
 $Product_Brand_Lokal1= new Product_Brand_Lokal();
 $Product_Brand_Lokal1->sepatu="Ventela";
 $Product_Brand_Lokal1-> jaket="Erigo";
 $Product_Brand_Lokal1-> hoddie="bloods";
 $Product_Brand_Lokal1-> kaos="Erigo";
 

  $Product_Brand_Lokal2=new Product_Brand_Lokal();
  $Product_Brand_Lokal2->sepatu="Sepatu Compass";
  $Product_Brand_Lokal2-> jaket="Memphis Indonesia Culture";
  $Product_Brand_Lokal2-> hoddie="Thanksomnia";
  $Product_Brand_Lokal2->kaos="Imagine.co";


  echo"Brand Lokal Terlaris=".$Product_Brand_Lokal1->getLabel(); 
  echo"<br>";
  echo "Brand Lokal Favoritku=". $Product_Brand_Lokal2->getLabel();

  ?>