<?php
    class Lingkaran{
        private $jari;
        const PHI =3.14;
        function __construct($r){
            $this->jari = $r;
        }
        function getLuas(){
            return self :: PHI * $this->jari * $this->jari;
        }
        function getKeliling(){
            return 2 * self :: PHI * $this->jari;
        }
    }

    echo "NILAI PHI " . Lingkaran::PHI;
    $lingkaran1 = new Lingkaran( 10 );
    $lingkaran2 = new Lingkaran( 4 );

    echo "<br/>Luas Lingkaran I : ".$lingkaran1->getLuas();
    echo "<br/>Luas Lingkaran II : ".$lingkaran2->getLuas();

    echo "<br/>Keliling Lingkaran I : ".$lingkaran1->getKeliling();
    echo "<br/>Keliling Lingkaran II : ".$lingkaran2->getKeliling();
?>