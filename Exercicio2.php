<form action= "submit.php" method="POST">
Nome: <input type="text" name="username" />
<input type="submit" value "Enviar" />
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = htmlspecialchars($_POST['USERNAME']);
echo "Olá,". $username . "!";
}                                 
?> 
