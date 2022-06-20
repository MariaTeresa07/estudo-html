<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style-admin.css">
        <title>Editar Pedido | Admin Bolo Capricho</title>
    </head>
    <body>
        <div class="page-edit" style="margin: 0 auto">
            <div class="page-form">
                <a href="teste.php">Voltar</a>
                <form action="atualizar-pedido.php" method="POST" enctype="multipart/form-data">
                    <?php
                        include("conn.php");
                        $id = $_GET['id'];
                        $rec = mysqli_query($conn, "SELECT `pedido`.`id_pedido` FROM `pedido` WHERE `id_pedido` = $id");
                        $data = mysqli_fetch_array($rec);
                    ?>
                    
                    <h3>Atualizar Pedido nº <?php echo $data['id_pedido']; ?></h3>
                    <input type="hidden" name="id_pedido" value="<?php echo $data['id_pedido']; ?>">
                    <h4>Status do pedido:</h4>
                    <select name="status_pedido">
                        <option value="Não Respondida">Não Respondida</option>
                        <option value="Respondida via e-mail">Respondida via e-mail</option>
                        <option value="Respondida via WhatsApp">Respondida via WhatsApp</option>
                        <option value="Respondida via e-mail e WhatsApp">Respondida via e-mail e WhatsApp</option>
                    </select><br>
                    <h4>Status da venda:</h4>
                    <select name="status_venda">
                        <option value="Sem venda">Sem venda</option>
                        <option value="Com venda">Com venda</option>
                    </select><br><br>
                    <button type="submit" name="atualize" class="btn">Atualizar</button><br><br><br>
                </form>
            </div>
        </div>
    </body>
</html>