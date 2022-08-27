<?php

include("config.php");
include("pegawai.php");
$pegawai = new pegawai;
$connection = new config;
$allPegawai = $pegawai->query($connection->conn,"SELECT * FROM pegawai");
// var_dump($allPegawai);die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ | 1 | OOP</title>
    <style>
        .container {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        thead {
            background-color: green;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div class="container">
    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Mulai Kerja</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($allPegawai as $pegawai){
                    echo "<tr>";

                    echo "<td>".$pegawai['nip']."</td>";
                    echo "<td>".$pegawai['nama']."</td>";
                    echo "<td>".$pegawai['jns_kel']."</td>";
                    echo "<td>".$pegawai['tgl_lahir']."</td>";
                    echo "<td>".$pegawai['status']."</td>";
                    echo "<td>".$pegawai['mulai_kerja']."</td>";

                    echo "<tr>";
                }
            ?>
        </tbody>
    </table>
    </div>
    <br>
    <a href="../index.php">Kembali</a>
</body>
</html>