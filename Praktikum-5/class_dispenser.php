<?php
    class Dispenser{
        public $volume;
        public $hargaSegelas;
        public $volumeGelas;
        public $namaMinuman;
        const PHI = 3.14;
        public $jari_jari;
        public $tinggi;
    
        public function __construct($r, $tinggi){
            $this -> jari_jari = $r;
            $this -> tinggi = $tinggi;
            echo "<br/>Jari-jari = " . $r . " cm";
            echo "<br/>Tinggi = " . $tinggi . " cm";
        }
    
        public function volumeWadah(){
            return self::PHI * $this -> jari_jari * $this -> jari_jari * $this -> tinggi;
        }
    }
    
    class Harga extends Dispenser{
    
        public function __construct($hargaSegelas){
            $this -> hargaSegelas = $hargaSegelas;
            echo "<br/>Harga 1 gelas = " . "Rp. " . $hargaSegelas . "-,";
        }
        public function harga(){
            return $this -> hargaSegelas * 9 ;
        }
    }
    
        echo "<b><i> Diketahui: </i></b><br/>";
        echo "<br/>  PHI = " . Dispenser :: PHI;
    
        $volumegelas = new Dispenser(40, 90);
        echo "<br/> Volume Wadah = " . $volumegelas -> volumeWadah() . " cm3";
    
        echo "<br/>";
        echo "<br/>";
        echo "<hr/>";
        
        echo "<br/><b><i>Diketahui :</i></b><br/>";
        $harga = new Harga(7500);
        echo "<br/> Maka, harga untuk 9 gelas adalah " . "<b>Rp. " . $harga -> harga(). "-,</b>";
    
?>