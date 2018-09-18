<?php
	include "conexao.inc";
	if (isset($_POST['nome'])) {
		$sqlcat = "SELECT id FROM categoria WHERE nome = '".$_POST['select']."'";
		$querycat = mysqli_query($con,$sqlcat);
	 	while ($idcat =  mysqli_fetch_assoc($querycat)) {
	 	 	$sql = "INSERT INTO produtos VALUES (DE)";
	 	 } 
	 	
	// 	$sql = "SELECT * FROM produtos WHERE id_cat = '".$_POST['']."'";
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
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
	<?php
    include "menu.php";

  ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cadastro
        <small>Fashe</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Fashe</a></li>
        <li class="active">Cadastro de Produtos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<form method="post" enctype="multipart/form-data">
    	  <div class="form-group">
    	    <label for="email">Nome</label>
    	    <input name="nome" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Nome">
    	    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos suas informações</small>
    	  </div>
    	  <div class="form-group">
    	    <label for="pass">Informações adicionais</label>
    	    <textarea cols="7" rows="8" name="infos" class="form-control" placeholder="Escreva aqui!"></textarea>
    	  </div>
    	  <div class="form-group">
    	    <label for="pass">Preco</label>
    	    <input name="preco" type="number" class="form-control" placeholder="Preço aqui"></textarea>
    	  </div>
    	  <div class="form-group">
    	    <label for="Select">Categoria</label>
    	    <select name="select" class="form-control" id="Select">
    	      <?php
    	      
    	      	$sql = "SELECT * FROM categoria";
    	      	$query = mysqli_query($con,$sql);

    	      	while ($r = mysqli_fetch_assoc($query)) {
    	      		echo '<option>'.$r['nome'].'</option>';
    	      	}

    	      ?>

    	    </select>
    	  </div>
    	  <div class="form-group">
    	    <label for="file">Adicione fotos</label>
    	    <small>Coloque pelo menos uma foto</small>
    	    <input required="" name="foto1" type="file" class="form-control-file" id="file">
    	  </div>
    	  <div class="form-group">
    	    <input name="foto2" type="file" class="form-control-file" id="file">
    	  </div>
    	  <div class="form-group">
    	    <input name="foto3" type="file" class="form-control-file" id="file">
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