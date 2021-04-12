<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Pegawai</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Pegawai Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
       
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
        </p>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>