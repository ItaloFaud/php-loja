<?php

include "conexao.inc";

$nome = $_POST['name'];
$phone = $_POST['phone-number'];
$email = $_POST['email'];
$ass = $_POST['assunto'];
$msg = $_POST['messagem'];

$sql = "INSERT INTO contato VALUES (DEFAULT,'$nome','$ass','$email','$phone','$msg')";
$query = mysqli_query($con,$sql);

if ($query) {
	header("location:index.html");
}

//Como mandar email para admin do site
//Configurar depois o sendmail
mail(to, subject, message);



?>