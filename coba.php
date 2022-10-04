<html>
<head>
<title>Laundry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

</head>
<body>
<div class="p-5 bg-primary text-white text-center">
  <h1>Laundry Room</h1>
  <p>Anda banyak kerjaan tapi tidak sempat mencuci laundry room solusinya</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link " href="index.php">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data-konsumen.php">Konsumen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="data-karyawan.php">Karyawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="data-cucian.php">Buat Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="data-riwayat.php">Lihat Transaksi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="laporan.php">Laporan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php">Log Out</a>
      </li>
    </ul>
  </div>
</nav>

<?php
include "config/koneksi.php";
?>
  <div class="container mt-3">
  <h2 align='center'>Buat Transaksi</h2>
  <h5><a href="form_cucian.php">Tambah Transaksi</a></h5>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Konsumen</th>
        <th>Tanggal Transaksi</th>
        <th>Total</th>
        <th>Aksi</th>
      
      </tr>
    <?php
    include "config/koneksi.php";
    $sql_transaksi = "SELECT * from transaksi2,konsumen
    where transaksi2.id_konsumen = konsumen.id_konsumen order by id_transaksi";
    $sql = mysqli_query($koneksi, $sql_transaksi);
    $no = 1;
    while ($data_buku = mysqli_fetch_array($sql)) {
    ?>
        <tr class="odd gradeX">
        <td><?php echo $no ?></td>
            <td><?php echo $data_buku['nama_konsumen']; ?></td>
            <td><?php echo $data_buku['tgl_trans']; ?></td>
            <td class="center"><?php echo $data_buku['total']; ?></td>
            <td><a href="aksi-hapus-cucian.php?id_transaksi=<?php echo $data_buku['id_transaksi']; ?>"> Hapus</a> </td>

        </tr>
    <?php $no++;
    } ?>
    </table>
 

</body>
</html>