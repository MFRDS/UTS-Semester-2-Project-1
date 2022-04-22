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
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">BANK</h3> <br>
            <?php include_once 'Praktikum5/bank/account.php' ; ?>
      </div>
     </div>
    </div>
  </div>
</div>

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Dispenser</h3> <br>
            <?php include_once 'Praktikum5/dispenser/class_dispenser.php' ; ?>
      </div>
     </div>
    </div>
  </div>
</div>

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Fruit</h3> <br>
            <?php include_once 'Praktikum5/fruit/class_strawberry.php' ; ?>
      </div>
     </div>
    </div>
  </div>
</div>
          </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once 'footer.php' ; ?>

</body>
</html>
