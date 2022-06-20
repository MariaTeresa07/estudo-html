<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style-admin.css">
        <title>Pedidos | Admin Bolo Capricho</title>
    </head>
    <body>
        <div class="page" style="margin: 0 auto; width:100%">
            <a href="admin.php">Voltar</a>
            <h2>🍰 Confira seus pedidos de clientes:</h2>
            <?php
                include ("conn.php");
                $img = mysqli_query($conn, "SELECT * FROM `pedido`, `bolo` WHERE `pedido`.`id_bolo`=`bolo`.`id_bolo`");
                while($row = mysqli_fetch_assoc($img)){
            ?>
            <div class="display-grid" style="display:inline-grid">
                <div class="container" style="border:2px solid #f8afd2; border-radius:8px; margin: 8px; padding:21px">
                    <h2>Pedido nº <?php echo $row['id_pedido'];?></h2>
                    <h3><?php echo $row['nome_cliente'];?></h3>
                    <p><?php echo $row['email_cliente'];?></p>
                    <p><?php echo $row['telefone_cliente'];?></p><br>
                    <h3>Bolo pedido:</h3>
                    <h3><?php echo $row['nome_bolo'];?></h3>
                    <img src="<?php echo $row['img_bolo']?>" height="150px"><br><br>
                    <label>O que gostou no bolo:</label><br>
                    <h4><?php echo $row['likes']?></h4>
                    <label>O que quer mudar no bolo:</label><br>
                    <h4><?php echo $row['dislikes']?></h4>
                    <label>Qual seria o tema do bolo:</label><br>
                    <h4><?php echo $row['theme']?></h4>
                    <label>O que quer no topo do bolo:</label><br>
                    <h4><?php echo $row['extra']?></h4>
                    <label>Observações gerais:</label><br>
                    <h4><?php echo $row['obs']?></h4>
                    <label>Imagem de referência:</label><br>
                    <img src="<?php echo $row['img_ref']?>" height="150px"></p>
                    <br>
                    <a onclick="if(confirm('Tem certeza de que quer excluir?')){location.href='excluir-pedido.php? id=<?php echo $row['id_pedido']; ?>';}">*Excluir Pedido</a>
                    <p style="color: darkred">*Essa ação não pode ser desfeita!</p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </body>
</html>