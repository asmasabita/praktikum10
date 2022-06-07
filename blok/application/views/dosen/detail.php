<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dosen</title>
</head>
<body>
    <div class="col-md-12">
    <h3> Detail Dosen</h3>
    <table border="1" class="table"> 
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dsn ->id ?></td>
                <td><?php echo $dsn ->nama ?></td>
                <td><?php echo $dsn ->nidn ?></td>
                <td><?php echo $dsn ->gender ?></td>
                <td><?php echo $dsn ->tmp_lahir ?></td>
                <td><?php echo $dsn ->tgl_lahir ?></td> 
                <td><?php echo $dsn ->pendidikan ?></td> 
        </tbody>
    </table>
    </div>
</body>
</html>
