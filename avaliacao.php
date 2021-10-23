<?php
$title = "Avaliação - Curriculum Vitor Fidelis";
$page = "skill";
include("part/head.php");
include("link/menu.php")
?>
<h1>Formulário Simples em Html com PHP</h1>

<form action="avaliacao.php" method="POST">
  <p>
    <label>Informe o seu nome:</label>
    <input type="text" name="name" required>
  </p>
  <p>
    <label>Qual sua avaliação sobre o site?</label>
    <select name='site'>
      <option value="1">Não quero avaliar</option>
      <option value="2">Ruim</option>
      <option value="3">Regular</option>
      <option value="4">Bom</option>
    </select>
  </p>
  <button type="submit" name="enviar"> ENVIAR </button>
  <button type="reset"> Resetar </button>
</form>

<?php

if (isset($_POST['enviar'])) {
  $name = $_POST["name"];
  $nota = $_POST['site'];




  if ($nota == 1) {
    echo "<h6> Obrigado $name por acessar meu primeiro site.<br>
    <h6> Se quiser dar uma dica ou sugestão pode entrar em contato comigo nas minhas redes sociais :D.</h6>";
  } else if ($nota == 2) {
    echo "<h6> Obrigado $name por acessar meu primeiro site.</h6>";
    echo "<h6>Sei que tenho muito a melhorar, se quiser dar uma dica ou sugestão pode entrar em contato comigo nas minhas redes sociais :D.</h6>";
  } else if ($nota == 3) {
    echo "<h6> Obrigado $name por acessar meu primeiro site.</h6>";
    echo "<h6>Obrigado pela sua avaliação, se quiser dar uma dica ou sugestão pode entrar em contato comigo nas minhas redes sociais :D.</h6>";
  } else {
    echo "<h6> Obrigado $name por acessar meu primeiro site.</h6>";
    echo "<h6>Ótimo que tenha gostado, se quiser dar uma dica ou sugestão pode entrar em contato comigo nas minhas redes sociais :D.</h6>";
  }
}


?>

<?php
include("link/social.php");
include("part/footer.php")
?>