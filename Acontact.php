<?php

include "conexao.inc";

$nome = $_POST['name'];
$phone = $_POST['phone-number'];
$email = $_POST['email'];
$ass = $_POST['assunto'];
$msg = $_POST['messagem'];

$sql = "INSERT INTO contato VALUES (DEFAULT,'$nome','$ass','$email','$phone','$msg')";
$query = mysqli_query($con,$sql);

//Como pegar ultimo id inserido $sql = "SELECT LAST_INSERT_ID()";
// $sql = "SELECT MAX(id) FROM contato";

$sqlbu = "SELECT LAST_INSERT_ID()";
$querybu = mysqli_query($con,$sqlbu);
$res = mysqli_fetch_row($querybu);

$idcontato = $res[0];



$sqlins = "INSERT INTO notificacoes VALUES (DEFAULT,'$idcontato','0')";
$queryins = mysqli_query($con,$sqlins);

if ($query) {
	echo '<script type="text/javascript">
	alert("Messagem Entregue!");
	location.href = "index.html";
</script>';
	
}

//Como mandar email para admin do site
//Configurar depois o sendmail
//mail(to, subject, message);



?>

