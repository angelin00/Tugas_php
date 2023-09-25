<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Mahasiswa</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Data mahasiswa dan nilai
            $mahasiswa = [
                ["nama" => "Mahasiswa 1", "nilai" => 75],
                ["nama" => "Mahasiswa 2", "nilai" => 90],
                // Tambahkan data mahasiswa lainnya di sini
            ];

            // Fungsi untuk menghitung grade
            function hitungGrade($nilai) {
                if ($nilai >= 90) return "A";
                else if ($nilai >= 80) return "B";
                else if ($nilai >= 70) return "C";
                else if ($nilai >= 60) return "D";
                else return "E";
            }

            // Fungsi untuk menghitung predikat
            function hitungPredikat($grade) {
                switch ($grade) {
                    case "A":
                        return "Sangat Baik";
                    case "B":
                        return "Baik";
                    case "C":
                        return "Cukup";
                    case "D":
                        return "Kurang";
                    case "E":
                        return "Sangat Kurang";
                    default:
                        return "Tidak Valid";
                }
            }

            $totalNilai = 0;
            $nilaiTertinggi = -INF;
            $nilaiTerendah = INF;

            foreach ($mahasiswa as $index => $mhs) {
                $grade = hitungGrade($mhs["nilai"]);
                $predikat = hitungPredikat($grade);
                $keterangan = ($mhs["nilai"] >= 60) ? "Lulus" : "Tidak Lulus";

                $totalNilai += $mhs["nilai"];
                $nilaiTertinggi = max($nilaiTertinggi, $mhs["nilai"]);
                $nilaiTerendah = min($nilaiTerendah, $mhs["nilai"]);

                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";
                echo "<td>" . $mhs["nama"] . "</td>";
                echo "<td>" . $mhs["nilai"] . "</td>";
                echo "<td>" . $keterangan . "</td>";
                echo "<td>" . $grade . "</td>";
                echo "<td>" . $predikat . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Total Mahasiswa</td>
                <td><?= $totalNilai ?></td>
                <td><?= $nilaiTertinggi ?></td>
                <td><?= $nilaiTerendah ?></td>
                <td><?= number_format($totalNilai / count($mahasiswa), 2) ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
