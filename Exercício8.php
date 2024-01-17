<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>
<body>

  <h2>Informe seu Nome e Idade</h2>

  <form action="#" method="post">
 
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

   
    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" required>

  
    <input type="submit" value="Enviar">
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
     
      $nome = $_POST["nome"];
      $idade = $_POST["idade"];

      echo "<h2>Bem-vindo, $nome!</h2>";
      echo "<p>Idade: $idade anos.</p>";
?>
</body>
</html>
