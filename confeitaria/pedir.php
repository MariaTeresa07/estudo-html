<?php
    include("conn.php");

    if(isset($_POST['order'])){
        //gerando dados do cliente e do pedido----
        $id_bolo = $_REQUEST["id_bolo"];
        $nome_cliente = $_POST["nome_cliente"];
        $email_cliente = $_POST["email_cliente"];
        $telefone_cliente = $_POST["telefone_cliente"];

        $likes = $_POST["likes"];
        $dislikes = $_POST["dislikes"];
        $theme = $_POST["theme"];
        $extra = $_POST["extra"];
        $obs = $_POST["obs"];
        $pedido = $_POST["status_pedido"];
        $venda = $_POST["status_venda"];

        //gerando imagem referência----
        $img_ref = $_FILES["img_ref"];
        print_r($_FILES["img_ref"]);

        $img_local = $_FILES["img_ref"]["tmp_name"];
        $img_name = $_FILES["img_ref"]["name"];
        $img_des = "img-uploads/" . $img_name;
        move_uploaded_file($img_local, 'img-uploads/'.$img_name);


        if(mysqli_query($conn, "INSERT INTO `pedido`(`id_bolo`, `nome_cliente`, `email_cliente`, `telefone_cliente`, `likes`, `dislikes`, `theme`, `extra`, `obs`, `img_ref`, `status_pedido`, `status_venda`) VALUES ('$id_bolo','$nome_cliente','$email_cliente','$telefone_cliente','$likes','$dislikes','$theme','$extra','$obs','$img_des', '$pedido', '$venda')")==true){
            print "<script>alert('Dados do pedido foram salvos!')</script>";
            print "<script>location.href='index.html';</script>";
        }else{
            print "<script>alert('Não foi possível guardar dados...')</script>";
            print "<script>location.href='index.html';</script>";
        }
    }
?>