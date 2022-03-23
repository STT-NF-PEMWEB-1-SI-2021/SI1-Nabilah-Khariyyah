<?php
    class PersegiPanjang{
        private $panjang;
        private $lebar;

        function __construct($panjang, $lebar){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
        function getLuas(){
            return $this->panjang * $this->lebar;
        }
        function getKeliling(){
            return 2 * ($this->panjang + $this->lebar);
        }
    }

    $PersegiPanjang1 = new PersegiPanjang( 30,10 );
    $PersegiPanjang2 = new PersegiPanjang( 50,20 );

    echo "<br/>Luas Persegi Panjang I : ".$PersegiPanjang1->getLuas(). "cm2";
    echo "<br/>Luas Persegi Panjang II : ".$PersegiPanjang2->getLuas(). "cm2";

    echo "<br/>Keliling Persegi Panjang I : ".$PersegiPanjang1->getKeliling(). "cm";
    echo "<br/>Keliling Persegi Panjang II : ".$PersegiPanjang2->getKeliling(). "cm";

?>