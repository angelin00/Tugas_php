<?php
// Buatlah Class KonversiSuhu
class KonversiSuhu {
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    public function CelciusToFahrenheit() {
        if ($this->satuanSuhuAwal === "Celcius" && $this->satuanSuhuTujuan === "Fahrenheit") {
            return ($this->besaranSuhu * 9/5) + 32;
        }
        return null;
    }

    public function FahrenheitToCelcius() {
        if ($this->satuanSuhuAwal === "Fahrenheit" && $this->satuanSuhuTujuan === "Celcius") {
            return ($this->besaranSuhu - 32) * 5/9;
        }
        return null;
    }

    public function CelciusToRheamur() {
        if ($this->satuanSuhuAwal === "Celcius" && $this->satuanSuhuTujuan === "Rheamur") {
            return $this->besaranSuhu * 4/5;
        }
        return null;
    }

    public function RheamurToCelcius() {
        if ($this->satuanSuhuAwal === "Rheamur" && $this->satuanSuhuTujuan === "Celcius") {
            return $this->besaranSuhu * 5/4;
        }
        return null;
    }

    public function cetak() {
        $hasil = $this->fungsiKonversi();
        if ($hasil !== null) {
            echo "<tr>";
            echo "<td>{$this->satuanSuhuAwal}</td>";
            echo "<td>{$this->besaranSuhu}</td>";
            echo "<td>{$this->satuanSuhuTujuan}</td>";
            echo "<td>{$hasil}</td>";
            echo "</tr>";
        }
    }

    private function fungsiKonversi() {
        switch ($this->satuanSuhuAwal) {
            case "Celcius":
                switch ($this->satuanSuhuTujuan) {
                    case "Fahrenheit":
                        return $this->CelciusToFahrenheit();
                    case "Rheamur":
                        return $this->CelciusToRheamur();
                }
                break;
            case "Fahrenheit":
                switch ($this->satuanSuhuTujuan) {
                    case "Celcius":
                        return $this->FahrenheitToCelcius();
                }
                break;
            case "Rheamur":
                switch ($this->satuanSuhuTujuan) {
                    case "Celcius":
                        return $this->RheamurToCelcius();
                }
                break;
        }
        return null;
    }
}

// Buat objek-objek KonversiSuhu
$dataKonversiSuhu1 = new KonversiSuhu("Celcius", 30, "Fahrenheit");
$dataKonversiSuhu2 = new KonversiSuhu("Fahrenheit", 86, "Celcius");
$dataKonversiSuhu3 = new KonversiSuhu("Rheamur", 20, "Celcius");
$dataKonversiSuhu4 = new KonversiSuhu("Celcius", 25, "Rheamur");

// Cetak hasil konversi suhu dalam format tabel
echo "<table>";
echo "<tr><th>Satuan Awal</th><th>Besaran Suhu</th><th>Satuan Tujuan</th><th>Hasil Konversi Suhu</th></tr>";
$dataKonversiSuhu1->cetak();
$dataKonversiSuhu2->cetak();
$dataKonversiSuhu3->cetak();
$dataKonversiSuhu4->cetak();
echo "</table>";
?>