<?php
    include ("conn.php");

    if(isset($_POST['update'])){
        //gerando dados do bolo----
        $id = $_REQUEST["id_bolo"];
        $nome_bolo = $_POST["nome_bolo"];
        $desc_bolo = $_POST["desc_bolo"];
        $num_fatias = $_POST["num_fatias"];
        $categoria = $_POST["categoria_bolo"];
        $valor_bolo = $_POST["valor_bolo"];

        //gerando imagem do bolo----
        $img_bolo = $_FILES["img_bolo"];
        print_r($_FILES["img_bolo"]);

        $img_local = $_FILES["img_bolo"]["tmp_name"];
        $img_name = $_FILES["img_bolo"]["name"];
        $img_des = "img-uploads/" . $img_name;
        move_uploaded_file($img_local, 'img-uploads/'.$img_name);
        
        $update = mysqli_query($conn, "UPDATE bolo SET nome_bolo='{$nome_bolo}', img_bolo='{$img_des}', desc_bolo='{$desc_bolo}', num_fatias='{$num_fatias}', categoria='{$categoria}', valor_bolo='{$valor_bolo}' WHERE id_bolo=".$_REQUEST["id_bolo"]);
        
        if ($update ==true){
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='admin.php';</script>";
        }else{
            print "<script>alert('Não foi possível editar :(');</script>";
            print "<script>location.href='admin.php';</script>";
        }
    }
?>