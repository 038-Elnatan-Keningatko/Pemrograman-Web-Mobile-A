<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Pegawai</title>
</head>

<body>
    <header>
        <h3>Pegawai yang sudah mendaftar</h3>
    </header>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_pegawai";
        $query = mysqli_query($db, $sql);

        while($peg = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$peg['id']."</td>";
            echo "<td>".$peg['nama']."</td>";
            echo "<td>".$peg['jenis_kelamin']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$peg['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$peg['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <a href="index.php">Kembali ke Menu Utama</a>

    </body>
</html>