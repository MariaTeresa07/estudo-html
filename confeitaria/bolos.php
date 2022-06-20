<!---Script para adicionar ao carrinho--->
<?php
  include("conn.php");

  if(isset($_POST['adicionar'])){
    
    //gerando dados do bolo----
    $nome_bolo = $_POST["nome_bolo"];
    $categoria = $_POST["categoria"];
    $valor_bolo = $_POST["valor_bolo"];
    $quantidade = 1;

    $sql = mysqli_query($conn, "INSERT INTO carrinho (nome_bolo, categoria, valor_bolo, quantidade) VALUES ('$nome_bolo', '$categoria', '$valor_bolo', '$quantidade')");
    if($sql==true){
      print "<script>alert('Bolo adicionado ao pedido!')</script>";
    }
  }
?>
<!---Fim do script--->

<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="style-cliente.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&family=PT+Sans&display=swap" rel="stylesheet">
        <style>
          a.one{
            background-color: #bdc089;
            padding: 8px 8px;
            border-radius: 4px;
            margin-bottom: 2%;
          }
          a.one:hover{
            background-color: #9aa467;
          }
        </style>
        <title>Bolos | 🍰​ Bolo Capricho</title>
    </head>
    <body>
        <header>          
            <div class="logo">
              <img class="img" style="border-radius:50%" src="WhatsApp-Image-2022-06-20-at-14.14.43.png" height="248px">
            </div>
            <img class="bolo" src="https://i.pinimg.com/originals/6a/f9/f3/6af9f391b4d513fe39d93fabfbe88d94.jpg" height="250px" width="100%"><br><br>
            <nav>
              <ul class="navbar_horizontal">
                <li><a href="index.html">INÍCIO</a></li>
                <li><a href="bolos.php">BOLOS</a></li>
                <li><a href="sobremim.html">SOBRE MIM</a></li>
                <li class="direita" style="float:right"><a href="admin.php" target="_blank">ADMIN</a></li>
              </ul>
            </nav>            
        </header>
        <div class="conteudo">
          <h2>🍰 Confira nossos bolos!</h2>
          <?php
            $img = mysqli_query($conn, "SELECT * FROM bolo");
            while($row = mysqli_fetch_assoc($img)){
          ?>
          <div class="display-grid" style="display:inline-grid">
            <div class="container">
              <img height="250" src="<?php echo $row['img_bolo'];?>" alt="">
              <h3><?php echo $row['nome_bolo'];?></h3>
              <div class="preco">R$<?php echo $row['valor_bolo']?></div>
              <div class="descricao"><p><?php echo $row['desc_bolo']?></p></div>
              <div class="num_fatias"><p>Rende <?php echo $row['num_fatias']?> porções</p></div>
              <a class="one" href="pedido.php?id=<?php echo $row['id_bolo'];?>">Quero esse!</a><br><br>
            </div>
          </div><br>
          <?php
            }
          ?>
        </div>        
        <div class="footer">
          <h3>ENTRE EM CONTATO:</h3>
          <p style="color:darkred;"> Email: <a style="color:crimson;" href="mailto:bolocaprichoprofissional@gmail.com"> bolocaprichoprofissional@gmail.com</a> </p>
          <p style="color:green;"> WhatsApp: <a style="color:crimson;" href="https://web.whatsapp.com/send?phone=5585987169700" target="_blank"> (85)98716.9700</a> </p>
        </div>
    </body>
</html>