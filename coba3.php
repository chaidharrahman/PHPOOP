<?php
 class Product_Brand_Lokal{
     public $sepatu,
            $jaket,
            $hoddie,
            $kaos;
            public function getLabel() {
                return "$this->sepatu, $this->jaket,$this->hoddie,$this->kaos";
            }
            public function __construct($sepatu,$jaket,$hoddie,$kaos) {
            $this->sepatu= $sepatu;
            $this->jaket=$jaket;
            $this->hoddie=$hoddie;
            $this->kaos=$kaos;

            }
}
class CetakinformasiProduk{
    public function cetak($produk){
        $str="{$produk->getLabel()}";
            
        return $str;
    }
}
 $Product_Brand_Lokal1= new Product_Brand_Lokal("Ventela","Erigo","Bloods","Roughneck");
 $Product_Brand_Lokal2=new Product_Brand_Lokal("Geofmax","Kickchick","Thinksomnia","Imgine.Co");
 $Product_Brand_Lokal3=new Product_Brand_Lokal("Brodo","Iwearzule","Thistime","07:45");


  echo"Brand Lokal Terlaris=".$Product_Brand_Lokal1->getLabel(); 
  echo"<br>";
  echo "Brand Lokal Favoritku=". $Product_Brand_Lokal2->getLabel();
  echo "<br>";
  echo"Brand Lokal Rekomendasi=". $Product_Brand_Lokal3->getLabel();
  $infoproduk1=new CetakinformasiProduk();
  echo"<br>";
  echo $infoproduk1->cetak($Product_Brand_Lokal2);

  ?>