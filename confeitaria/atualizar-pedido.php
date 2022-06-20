<?php
    include ("conn.php");

    if(isset($_POST['atualize'])){
        //gerando dados do status----
        $id = $_REQUEST["id_pedido"];
        $pedido = $_POST["status_pedido"];
        $venda = $_POST["status_venda"];

        $update = mysqli_query($conn, "UPDATE `pedido` SET status_pedido='{$pedido}', status_venda='{$venda}' WHERE id_pedido =".$_REQUEST["id_pedido"]);
        
        if ($update ==true){
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='teste.php';</script>";
        }else{
            print "<script>alert('Não foi possível editar :(');</script>";
            print "<script>location.href='teste.php';</script>";
        }
    }
?>