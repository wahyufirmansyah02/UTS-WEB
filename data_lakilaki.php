<?php
    include 'koneksi.php'; 
    
    $jenis_kelamin = $_GET['jenis_kelamin'];
    $sql = "SELECT * FROM tb_anggaran WHERE jenis_kelamin = '$jenis_kelamin'";
    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Website Iuran</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="uts.php">
            <img src="gambar2.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            UTS PEMROGRAMAN WEB
          </a>
        </div>
      </nav>
      <div class="container">
        <figure>
            <blockquote class="blockquote">
              <h1>DATA LAKI LAKI</h1>
            </blockquote>
            <figcaption class="blockquote-footer">
              CRUD <cite title="Source Title">Sederhana</cite>
            </figcaption>
          </figure>
      </div>
      <div class="container">

        <a href="tambah.php" type="button" class="btn btn-primary">Tambah Data</a>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <form method="GET" action="">
            <a href="data_lakilaki.php?jenis_kelamin=Laki-Laki" type="button" class="btn btn-primary">Laki-Laki</a>
            <a href="data_perempuan.php?jenis_kelamin=Perempuan" type="button" class="btn btn-primary">Perempuan</a>
        </div>

      </div>
      
      <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Anggaran</th>
                <th scope="col">Nominal</th>
                <th scope="col">Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php
                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <th scope="row">
                    <?php echo $i; ?>
                </th>
                <td>
                    <?php echo $row['nama'];?>
                </td>
                <td>
                    <?php echo $row['jenis_kelamin'];?>
                </td>
                <td>
                    <?php echo $row['anggaran'];?>
                </td>
                <td>
                    <?php echo $row['nominal'];?>
                </td>
                <td>
                    <a href="edit.php?edit=<?php echo $row['no'];?>" type="button" class="btn btn-warning">Edit</a>
                    <a href="proses.php?hapus=<?php echo $row['no']; ?>" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php
                        $i++;
                        }
                    } else {
                        echo '<tr><td colspan="6">Tidak ada data dengan jenis kelamin ' . $jenis_kelamin . '.</td></tr>';
                    }
                }
            ?>
            </tbody>
        </table>
        </div>
        </div>
        </div>
      
</body>
</html>
