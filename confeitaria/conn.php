<?php
$host = "sql100.epizy.com";
$user = "epiz_31862230";
$pass = "U1Omn7lga7pOS";
$banco = "epiz_31862230_db_confeitaria";

$conn = MySQLi_connect($host, $user, $pass);

if (!$conn) {
    die("Falha na Conex�o: " . mysqli_connect_error());
  }

  // Selecionando banco
  if (!mysqli_select_db($conn,$banco)) {
      echo "N�o foi poss�vel selecionar base de dados \"$banco\": " . mysqli_error($conn);
      exit;
  }

?>