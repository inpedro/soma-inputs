<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="icon" href="../sesan/logo/icone.png" type="image/png">
<link rel="stylesheet" href="./css/style.css">

</head>
<body  style="text-align: center;">
<section class="formularioindex">
      <img src="../sesan/logo/logoindex.png" id="logoindex">
<br>

    <form action="cadastro.teste.php" method="POST"  style="text-align: center;">

           <label for="email"></label>
           <input type="email" id="email" name="email" class="input-padrao" required placeholder="E-mail" required>
<br>
            <label for="senha"></label>
            <input type="password" id="senha" name="senha" class="input-padrao" required placeholder="Senha" required>

                <input type="submit" name="submit" value="Entrar" class="enviar">

       </form>

</section>

</body>


</html>
