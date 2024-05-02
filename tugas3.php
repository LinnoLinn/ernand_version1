<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulir Data Diri</title>
</head>

<style>
    input[type="text"],
    input[type="date"],
    textarea {
        width: calc(100% - 22px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    textarea {
        height: 100px;
    }

    h2,
    .container {
        margin-left: 2%;
        width: 30%
    }
    input[type="submit"],
    input[type="reset"] {
        cursor: pointer;
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 5px;
        margin-bottom: 2px;
    }

    select {
        padding: 5px;
        width: 100%;
    }
</style>

<body>
<h2>From Registrasi</h2>
<div class="container">
    <form action="tugas3proses.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br>
        <label for="alamat">Isikan Alamat:</label>
        <textarea name="alamat"></textarea><br><br>
        <label for="tempatlahir">Tempat Lahir:</label>
        <input type="text" id="tempatlahir" name="tempatlahir"><br>
        <label for="tanggallahir">Tanggal Lahir:</label>
        <input type="date" id="tanggallahir" name="tanggallahir"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
        <label for="perempuan">Perempuan</label><br><br>

        <label for="pendidikan">Pendidikan:</label>
        <select id="pendidikan" name="pendidikan">
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
            <option value="Lainya">Lainya</option>
        </select><br><br>
        <input type="submit" value="Submit" name='submit'>
        <input type="reset" value="Reset" name='reset'>
    </form> 
</div>  

</body>
</html>