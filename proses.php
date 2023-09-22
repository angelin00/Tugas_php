<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $pekerjaan = $_POST["pekerjaan"];
    $hobby = $_POST["hobby"];

    echo "<table border='1'>
            <tr>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Hobby</th>
            </tr>
            <tr>
                <td>$nama</td>
                <td>$pekerjaan</td>
                <td>$hobby</td>
            </tr>
          </table>";
}
?>
