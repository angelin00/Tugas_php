<?php

// Abstract Class Bentuk2D
abstract class Bentuk2D {
    abstract public function luasBidang();
    abstract public function kelilingBidang();
}

// Kelas Lingkaran
class Lingkaran extends Bentuk2D {
    private $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang() {
        return "Lingkaran";
    }

    public function luasBidang() {
        return pi() * pow($this->jari2, 2);
    }

    public function kelilingBidang() {
        return 2 * pi() * $this->jari2;
    }
}

// Kelas PersegiPanjang
class PersegiPanjang extends Bentuk2D {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() {
        return "Persegi Panjang";
    }

    public function luasBidang() {
        return $this->panjang * $this->lebar;
    }

    public function kelilingBidang() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Kelas Segitiga
class Segitiga extends Bentuk2D {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        return "Segitiga";
    }

    public function luasBidang() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    public function kelilingBidang() {
        // Untuk segitiga sembarang, perhitungan keliling tidak disediakan dalam soal.
        return "Tidak Dapat Diukur (segitiga sembarang)";
    }
}

// Membuat object Lingkaran
$lingkaran = new Lingkaran(7);

// Membuat object PersegiPanjang
$persegiPanjang = new PersegiPanjang(5, 10);

// Membuat object Segitiga
$segitiga = new Segitiga(4, 6);

// Data bidang dalam array
$bidangArray = [
    $lingkaran,
    $persegiPanjang,
    $segitiga,
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Bidang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
        }

        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Bidang</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bidangArray as $index => $bidang) { ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $bidang->namaBidang(); ?></td>
                    <td><?php echo $bidang instanceof Segitiga ? "Segitiga Sembarang" : ""; ?></td>
                    <td><?php echo $bidang->luasBidang(); ?></td>
                    <td><?php echo $bidang->kelilingBidang(); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
