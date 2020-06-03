<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <!-- <script src="https://kit.fontawesome.com/4adcf1a323.js" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="./css/style.css">

  <script>
    document.documentElement.className += ' js';
  </script>
</head>
<body>
  <div id="login">
    <div class="container">
      <div class="left">
        
      </div>
      <div class="right">       
        <div class="form">
           
          <form action="cad_usuario.php" method="POST" class="cadastro">
            <h1>Faça o seu <span>cadastro!</span></h1>
            <div class="input">
              <input name="nome" type="text" placeholder="Nome e sobrenome" required>
              <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>  
            <div class="input">
              <input name="email" type="email" placeholder="E-mail" required>
              <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
            </div>            
            <div class="input">
              <input name="senha" type="password" placeholder="Senha" required>
              <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
            </div>        
            
            <div class="botoes">
              <a href="index.php" class="btn-ghost">Voltar</a>
              <button type="submit" class="btn">Cadastre-se</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

   <!--JavaScript-->
   <script src="./js/scripts.js"></script>
   <!--JavaScript-->
</body>
</html>