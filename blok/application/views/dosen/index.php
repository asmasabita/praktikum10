<!doctype html>
<html lang="en">
  <head>
    
    <title>Dosen</title>
  </head>
  <?php 
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2> Selamat Datang $username</h2>";
}
?>
  <body>
    <h3 style="text-align: center;">Dosen</h3>
    <div >
    <table border="1">
        <thead>
            <tr>
                <th >No</th>
                <th >NIDN</th>
                <th >Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach($list_dsn as $dsn){
            ?>
            <tr>
                <td><?= $nomor ?></th>
                <td><?= $dsn -> nidn ?></td>
                <td><?= $dsn -> pendidikan ?></td>
            </tr>
            <?php
                $nomor++;
                }
            ?>
        </tbody>
    </table>
    </div>
  </body>
</html>