<?php
    include("conn.php");
    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM pedido WHERE id_pedido = $id");

    header('location:painel.php');
?>