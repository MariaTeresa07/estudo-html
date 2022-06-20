<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="style-cliente.css">
        <title>Seu Pedido | 🍰 Bolo Capricho</title>
    </head>
    <body>
    <header>          
        <div class="logo">
          <img src="logo.png" height="20%" width="10%">
        </div>
        <img class="bolo" src="https://i.pinimg.com/originals/6a/f9/f3/6af9f391b4d513fe39d93fabfbe88d94.jpg" height="250px" width="100%"><br><br>
        <nav>
            <ul class="navbar_horizontal">
                <li><a href="index.html">INÍCIO</a></li>
                <li><a href="bolos.php">BOLOS</a></li>
                <li><a href="sobremim.html">SOBRE MIM</a></li>
            </ul>
        </nav>            
    </header>
    <div class="conteudo">
        <h2>Confira seu pedido aqui</h2>
        <table align="center" border="1" cellpadding="6">
            <thead>
                <th>Seu Bolo</th>
                <th>Imagem</th>
                <th>Valor</th>
            </thead>
            <tbody>
                <?php
                    include("conn.php");
                    $id=$_GET['id'];
                    $img = mysqli_query($conn, "SELECT * FROM bolo WHERE id_bolo=$id");                    
                    while($row = mysqli_fetch_array($img)){
                        echo "
                            <tr>                                        
                                <td>$row[nome_bolo]</td>
                                <td><img src='$row[img_bolo]' height='150px'></td>
                                <td>R$ $row[valor_bolo]</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
        <h3>Preencha seus dados para entrar em contato!</h3>
        <div class="pedido">
            <form action="pedir.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_bolo" value="<?php echo $id?>"><br>
                <label>*Seu nome: </label><input type="text" name="nome_cliente" value="Nome Completo"><br>
                <label>*Seu e-mail: </label><input type="text" name="email_cliente" value="E-mail"><br>
                <label>*Seu número de Whatsapp: </label><input type="text" name="telefone_cliente" value="Telefone"><br><br><br>
                
                <h4>Agora, só mais umas perguntinhas...<br>Nos dê mais detalhes do que vai querer para o bolo!</h4><br>
                <label>*O que você gostou no bolo?</label><br>
                <textarea name="likes" class="form-control" rows="4" cols="30">Sua resposta...</textarea><br><br>
                <label>*O que você quer mudar no bolo?</label><br>
                <textarea name="dislikes" class="form-control" rows="4" cols="30">Sua resposta...</textarea><br><br>
                <label>*Qual seria o tema do bolo?</label><br>
                <input type="text" name="theme" width="250px"  value="Sua resposta..."><br><br>
                <label>*O que você quer no topo do bolo?</label><br>
                <input type="text" name="extra" width="250px"  value="Sua resposta..."><br><br>
                <label>*Observações gerais:</label><br>
                <textarea name="obs" class="form-control" rows="4" cols="30">Sua resposta...</textarea><br><br>
                <label>*Imagem de referência:</label><br>
                <input type="file" name="img_ref" class="btn-img"><br><br>
                <input type="hidden" name="status_pedido" value="Não respondida">
                <input type="hidden" name="status_venda" value="Sem venda">
                
                <button type="submit" name="order" class="btn">Fazer meu pedido!</button><br><br><br>
            </form>
        </div>
    </div>
    <div class="footer">
        <h3>ENTRE EM CONTATO:</h3>
        <p style="color:darkred;"> Email: <a style="color:crimson;" href="mailto:bolocaprichoprofissional@gmail.com"> bolocaprichoprofissional@gmail.com</a> </p>
        <p style="color:green;"> WhatsApp: <a style="color:crimson;" href="https://web.whatsapp.com/send?phone=5585987169700" target="_blank"> (85)98716.9700</a> </p>
    </div>
    </body>
</html>