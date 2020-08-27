<?PHP
    class baju{
        public $merkbaju = "cardinal",
                $ukuran = "xl",
                    $harga = 100000;
        public function getmerkbaju(){
            return "Hai ini baju saya";
            }
        public function getukuran(){
             return "ukurannya adalah xl";
            }
    }

    $baju1 = new baju();

    echo $baju1->getmerkbaju();

    echo "<br>";

    echo $baju1->getukuran();
?>