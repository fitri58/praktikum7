<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>
<body>
    <h3>Matakuliah</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Sks</th>
                <th>Kode</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_mkl as $mkl) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mkl -> nama ?> </td>
                <td><?php echo $mkl -> sks ?></td>
                <td><?php echo $mkl -> kode ?></td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>