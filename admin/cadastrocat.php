<?php
  include "conexao.inc";
  if (isset($_POST['nome'])) {
    $sql = "INSERT INTO categoria VALUES (DEFAULT,'".$_POST['nome']."')";
    $query = mysqli_query($con,$sql);
    if ($query) {
      
echo '
<script type="text/javascript">
  alert("Categoria cadastrada");
  location.href = "cadastrocat.php";
</script>
';    }
  }
   
  


?>  


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Cadastro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script type="text/javascript">
    function Espera() {
      setInterval("Atualiza()",500);
    }
    function Atualiza() {
      $("#num_notify").load("Refres.php?a=1");
      $("#msgs").load("Refres.php?a=2");

    }
  </script>
</head>
<body onload="Espera()" class="hold-transition skin-blue sidebar-mini">
  <?php
    include "menu.php";

  ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastro de categoria
        <small>Fashe</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Fashe</a></li>
        <li class="active">Cadastro de Categoria</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="email">Nome da categoria</label>
          <input name="nome" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Nome">
          <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos suas informações</small>
        </div>
  
        
      
        
        <input type="submit" value="Cadastrar" class="btn btn-success" name="">
      </form>
    </section>
    <!-- /.content -->
  </div>







<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>