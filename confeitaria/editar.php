<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style-admin.css">
        <title>Editar Cadastro | Admin Bolo Capricho</title>
    </head>
    <body>
        <div class="page" style="margin: 0 auto">
            <div class="page-form">
                <h2>🍰 Editar bolo cadastrado</h2>
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <?php
                        include("conn.php");
                        $id = $_GET['id'];
                        $rec = mysqli_query($conn, "SELECT * FROM bolo WHERE id_bolo = $id");
                        $data = mysqli_fetch_array($rec);
                    ?>
                    <label>Nome do Bolo:</label>
                    <input type="text" name="nome_bolo" class="form-control" value="<?php echo $data['nome_bolo']?>"></input><br><br>
                    <label>Imagem do bolo: </label>
                    <input type="file" name="img_bolo" class="btn-img"></input><br><img height="200px" src="<?php echo $data['img_bolo']?>"><br><br>
                    <input type="hidden" name="id_bolo" value="<?php echo $data['id_bolo']?>">
                    <label>Descrição do bolo:</label><br>
                    <input type="text" name="desc_bolo" class="form-control" value="<?php echo $data['desc_bolo']?>"></textarea><br><br>
                    <label>Número de fatias: </label>
                    <input type="number" name="num_fatias" class="form-control" value="<?php echo $data['num_fatias']?>"><br><br>
                    <label>Valor do bolo: </label>
                    R$<input type="text" name="valor_bolo" class="form-control" value="<?php echo $data['valor_bolo']?>"><br><br>
                    <label>Categoria:</label>
                    <input type="text" name="categoria_bolo" class="form-control"value="<?php echo $data['categoria']?>"><br>
                    <button type="submit" name="update" class="btn">Atualizar!</button><br><br><br>
                </form>
            </div>
            <!---Aualizar o cadastro--->


        </div>
    </body>
</html>