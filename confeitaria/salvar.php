<?php
    include("conn.php");

    if(isset($_POST['upload'])){
        //gerando dados do bolo----
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

        if(mysqli_query($conn, "INSERT INTO  bolo (`img_bolo`,`nome_bolo`, `desc_bolo`, `num_fatias`, `categoria`, `valor_bolo`) VALUES ('$img_des', '$nome_bolo','$desc_bolo','$num_fatias','$categoria','$valor_bolo')")==true){
            print "<script>alert('Dados do bolo foram salvos!')</script>";
            print "<script>location.href='index.html';</script>";
        }else{
            print "<script>alert('Não foi possível guardar dados...')</script>";
            print "<script>location.href='index.html';</script>";
        }
    }
?>