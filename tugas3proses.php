<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses</title>
</head>
<style>
    table {
        border-collapse: collapse;
        margin-left: 2%;
        margin-top: 3%;
        width: 35%;
        height: 250px;
    }

    td {
        border: 1px solid black;
        padding: 5px;
        text-align: left;

    }

    th {
        background-color: cadetblue;
        text-align: center;
        font-size: 25px;
        padding: 7px;
    }
    td:first-child {
        width: 30%;
    }

    td {
        font-size: 20px;
        word-wrap: break-word;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        color: black;
        text-align: center;
        text-decoration: none;
        border: 1px solid black;
        cursor: pointer;
        margin-left: 2%;
    }
</style>
<body>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $tempatlahir = $_POST["tempatlahir"];
        $tanggallahir = $_POST["tanggallahir"];
        $jenis_kelamin = !empty($_POST["jenis_kelamin"]) ? $_POST["jenis_kelamin"] : "";
        $pendidikan = $_POST["pendidikan"];
        
        if (empty($nama) || empty($alamat) || empty($tempatlahir) || empty($tanggallahir)) {
            echo "Mohon lengkapi semua inputan.<br><br>";
            echo "<a href='tugas3.php' class='button'>Kembali</a>";
        } else {
            echo "<table class=''border='1'>";
            echo "<tr><th colspan='2'>Data Registrasi</th></tr>";
            echo "<tr><td>Nama Anda:</td><td>$nama</td></tr>";
            echo "<tr><td>Alamat Anda:</td><td>$alamat</td></tr>";
            echo "<tr><td>Tempat Lahir:</td><td>$tempatlahir</td></tr>";
            echo "<tr><td>Tanggal Lahir:</td><td>$tanggallahir</td></tr>";
            if (!empty($jenis_kelamin)) {
                echo "<tr><td>Jenis Kelamin:</td><td>$jenis_kelamin</td></tr>";
            } else {
                echo "<tr><td>Jenis Kelamin:</td><td>Tidak Dicantumkan</td></tr>";
            }
            echo "<tr><td>Pendidikan:</td><td>$pendidikan</td></tr>";
            echo "</table>";
            echo "<br>";
            echo "<a href='tugas3.php' class='button'>Kembali</a>";
        }
    }

    ?>
    
</body>
</html>