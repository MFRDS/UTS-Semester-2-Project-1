<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'header.php' ; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
<?php include_once 'navbar.php' ; ?>
<?php include_once 'sidebar.php' ; ?>
<?php include_once 'content_wrapper.php' ; ?>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-secondary">
            <div class="card-header">
            <h3 class="card-title">Kalkulator BMI</h3>
            </div>
            <form action="index.php" method="POST">
        <div class="card-body">
        <div class="form-group">
                <label for="kode">Tanggal Periksa</label>
                <input type="date" class="form-control" id="periksa" name="periksa" >
            </div>
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan kode" >
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" >
            </div>
            <div class="form-group">
                <label for="nama">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Masukkan tempat lahir" >
            </div>
            <div class="form-group">
                <label for="kode">Tanggal Lahir</label>
                <input type="date" class="form-control" id="lahir" name="lahir" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" >
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select id="gender" name="gender" class="custom-select" >
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="berat">Tinggi Badan (cm)</label>
                <input type="number" class="form-control" id="tinggi" name="tinggi" placeholder="Masukkan Berat Badan">
            </div>
            <div class="form-group">
                <label for="tinggi">Berat Badan (kg)</label>
                <input type="number" class="form-control" id="berat" name="berat" placeholder="Masukkan Tinggi Badan">
            </div>
            <div class="card-footer">
            <button type="submit" name="Proses" class="btn btn-primary">Hitung</button>
            </div>
            </form>
              <div class="card-footer">
              </div>
            </div>
            <div class="card-body">
            <?php include_once 'Project1/BMIPasien.php' ; ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once 'footer.php' ; ?>

</body>
</html>
