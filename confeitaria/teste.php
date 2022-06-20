<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style-admin.css">
        <title>Mensagens | Admin Bolo Capricho</title>
    </head>
    <body>
        <div class="page" style="margin: 0 auto; width:100%">
            <a href="admin.php">Voltar</a>
            <h2>🍰 Administrador de mensagens</h2>
            <?php
                include ("conn.php");
                $sql= mysqli_query($conn, "SELECT `bolo`.`nome_bolo`, 
                                    `bolo`.`img_bolo`, 
                                    `pedido`.`id_pedido`, 
                                    `pedido`.`nome_cliente`, 
                                    `pedido`.`telefone_cliente`, 
                                    `pedido`.`email_cliente`,
                                    `pedido`.`data_pedido`, 
                                    `pedido`.`status_pedido`, 
                                    `pedido`.`status_venda` 
                                    FROM `bolo`, `pedido` 
                                    WHERE `bolo`.`id_bolo`=`pedido`.`id_bolo`");
                while($row = mysqli_fetch_assoc($sql)){
            ?>
            <div class="display-grid" style="display:inline-grid">
                <div class="container" style="border:2px solid #f8afd2; border-radius:8px; margin: 8px; padding:21px">
                    <h2>Pedido nº <?php echo $row['id_pedido'];?></h2>
                    <p>(<?php echo $row['data_pedido'];?>)</p>
                    <h3><?php echo $row['nome_cliente'];?></h3>
                    <p><?php echo $row['email_cliente'];?></p>
                    <p><?php echo $row['telefone_cliente'];?></p><br>
                    <h3>Bolo pedido:</h3>
                    <p><?php echo $row['nome_bolo'];?></p>
                    <img src="<?php echo $row['img_bolo']?>" height="150px"><br>
                    <h3>Status do pedido:</h3>
                    <p><?php echo $row['status_pedido']?></p>
                    <h3>Status da venda:</h3>
                    <p><?php echo $row['status_venda']?></p>
                    <h3>Ação:</h3>
                    <a href="atualizar.php? id=<?php echo $row['id_pedido']?>">Atualizar</a>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </body>
</html>