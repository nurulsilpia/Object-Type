<?php
class produk{
     public $JenisKendaraan,
            $Merk, 
            $Kecepatan;        
     public function getCetak() {
       return "$this->JenisKendaraan, $this->Merk, $this->Kecepatan";
     }
     public function __construct($JenisKendaraan="Jenis Kendaraan", $Merk="Merk", $Kecepatan="0 Km/h"){
       $this->JenisKendaraan = $JenisKendaraan;
       $this->Merk = $Merk;
       $this->Kecepatan = $Kecepatan;
     }
   }
   class cetakInfoProduk {
       public function cetakInfo($produk){
           $str = "{$produk->JenisKendaraan}, {$produk->getCetak()}";
           return $str;
       }
   }
   $produk1 = new produk("Motor", "CBR", "80 km/h");
   $produk2 = new produk("Mobil", "Avanza", "100 km/h");
   $produk3 = new produk("Motor", "Genio", "50 km/h");
   $infoProduk = new cetakInfoProduk();

   echo "Kendaraan 1: " . $produk1->getCetak(); 
   echo "<br>";
   echo "Kendaraan 2: " . $produk2->getCetak();
   echo "<br>";
   echo "Kendaraan 3: " . $produk3->getCetak();
   echo "<br>";
   echo $infoProduk-> cetakInfo($produk1);

?>