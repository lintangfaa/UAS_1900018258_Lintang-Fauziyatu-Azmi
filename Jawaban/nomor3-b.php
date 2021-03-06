<?php

interface Kalkulator_BangunRuang {
    public function hitungBangunRuang($satuan);
}

class PersegiPanjang implements Kalkulator_BangunRuang {
    public $panjang;
    public $lebar;

    public function hitungBangunRuang($satuan) {
        $this->panjang = $satuan['panjang'];
        $this->lebar = $satuan['lebar'];
        return ('Bangun Ruang : Persegi Panjang<br>'.
                'Panjang : '.$this->panjang.' m<br>'.
                'Lebar : '.$this->lebar.' m<br>'.
                'Rumus : panjang x lebar<br>'.
                'Luas Persegi Panjang : '.$this->panjang * $this->lebar.' m2');
    }
}

class Bola implements Kalkulator {
    public $jari;

    public function hitungBangunRuang($satuan) {
        $this->jari = $satuan['jari'];
        return ('Bangun Ruang : Bola<br>'.
                'Jari-jari (r) : '.$this->jari.' m<br>'.
                'Rumus : 4/3 x phi x r x r x r<br>'.
                'Volume Bola : '.(4/3) * pi() * $this->jari * $this->jari * $this->jari.' m3');
    }
}

class Kerucut implements Kalkulator {
    public $tinggi;
    public $jari;

    public function hitungBangunRuang($satuan) {
        $this->tinggi = $satuan['tinggi'];
        $this->jari = $satuan['jari'];
        return ('Bangun Ruang : Kerucut<br>'.
                'Tinggi : '.$this->tinggi.' m<br>'.
                'jari (r) : '.$this->jari.' m<br>'.
                'Rumus : 1/3 x luas alas (lingkaran: phi*r*r) x t<br>'.
                'Volume Kerucut : '.(1/3) * pi() * $this->jari * $this->jari * $this->tinggi.' m3');
    }
}

class Kubus implements Kalkulator {
    public $rusuk;

    public function hitungBangunRuang($satuan) {
        $this->rusuk = $satuan['rusuk'];
        return ('Bangun Ruang : Kubus<br>'.
                'Panjang Rusuk (r) : '.$this->rusuk.' m<br>'.
                'Rumus : r x r x r<br>'.
                'Volume Kubus : '.$this->rusuk * $this->rusuk * $this->rusuk.' m3');
    }
}

class Lingkaran implements Kalkulator {
    public $jari;
    public function hitungBangunRuang($satuan) {
        $this->jari = $satuan['jari'];
        return ('Bangun Ruang : Lingkaran<br>'.
                'jari (r) : '.$this->jari.' m<br>'.
                'Rumus : 2 x phi x r<br>'.
                'Keliling Lingkaran : '.(2 * pi() * $this->jari.' m'));
    }
}

class KalkulatorBangunRuangFactory {
    public function initializeKalkulatorBangunRuang($menu) {
        if ($menu === 'luasPersegiPanjang') {
            return new PersegiPanjang();
        }
        if ($menu == 'volumeBola') {
            return new Bola();
        }
        if ($menu === 'volumeKerucut') {
            return new Kerucut();
        }
        if ($menu === 'volumeKubus') {
            return new Kubus();
        }
        if ($menu === 'kelilingLingkaran') {
            return new Lingkaran();
        }

        throw new Exception("Tidak ada pilihan tersebut!");
    }
}

$satuan = ['rusuk'=> 12, 'panjang'=> 0, 'lebar'=> 0, 'jari'=> 0, 'tinggi'=>0];
class Json {
    public static function form($data){
        return json_encode($data);
    }
}
echo 'Input : <br>';
print(Json::form($satuan));
echo '<br><br>';

$pilihanKalkulatorBangunRuang = 'volumeKubus';
$kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();
$kalkulatorBangunRuang = $kalkulatorBangunRuangFactory->initializeKalkulatorBangunRuang($pilihanKalkulatorBangunRuang);
$hasilKalkulatorBangunRuang = $kalkulatorBangunRuang->hitungBangunRuang($satuan);
print_r($hasilKalkulatorBangunRuang);