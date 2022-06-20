<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style-admin.css">
        <title>Painel do Administrador | Admin Bolo Capricho</title>
    </head>
    <body>
        <div class="page" style="margin: 0 auto">
            <a href="index.html">Voltar</a><br><br>
            <a href="painel.php">Abrir painel de pedidos</a><br><br>
            <a href="teste.php">Abrir painel de mensagens</a><br><br>

            <div class="page-form">
                <h2>🍰 Cadastre um novo bolo</h2>
                <form action="salvar.php" method="POST" enctype="multipart/form-data">
                    <label>*Imagem do bolo: </label>
                    <input type="file" name="img_bolo" class="btn-img"></input><br><br>
                    <label>*Nome do Bolo:</label>
                    <input type="text" name="nome_bolo" class="form-control"></input><br><br>
                    <label>*Descrição do bolo:</label><br>
                    <textarea name="desc_bolo" class="form-control" rows="4" cols="30"></textarea><br><br>
                    <label>*Número de fatias: </label>
                    <input type="number" name="num_fatias" class="form-control"><br><br>
                    <label>*Valor do bolo: </label>
                    R$<input type="text" name="valor_bolo" class="form-control"><br><br>
                    <label>*Categoria:</label>
                    <input type="text" name="categoria_bolo" class="form-control"><br>
                    <p>* campos obrigatórios</p>
                    <button type="submit" name="upload" class="btn">Enviar</button><br><br><br>
                </form>
            </div>
            <div class="page-view">
                <h2>🍰 Confira seus bolos cadastrados</h2>
                <table border ="1" cellpadding="10">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Nome</th>
                            <th>Imagem</th>
                            <th>Descrição</th>
                            <th>Núm. Fatias</th>
                            <th>Valor Unit. (R$)</th>
                            <th>Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("conn.php");
                            $img = mysqli_query($conn, "SELECT * FROM bolo");
                            while($row = mysqli_fetch_array($img)){
                                echo "
                                    <tr>                                        
                                        <td>$row[id_bolo]</td>
                                        <td>$row[nome_bolo]</td>
                                        <td><img src='$row[img_bolo]' height='150px'></td>
                                        <td>$row[desc_bolo]</td>
                                        <td>$row[num_fatias]</td>
                                        <td>$row[valor_bolo]</td>
                                        <td>$row[categoria]</td>
                                        <td><a href='editar.php? id= $row[id_bolo]'>Editar</a><br><br><a onclick=\"if(confirm('Tem certeza de que quer excluir?')){location.href='excluir.php? id= $row[id_bolo]';}\">Excluir</a></td>                              
                                    </tr>
                                    ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
