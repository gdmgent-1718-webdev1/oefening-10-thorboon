<html>
<body>

<form action="" method="POST">
Voornaam <input type="text" name="voornaam"><br>
Familienaam <input type="text" name="familienaam"><br>
Emailadres <input type="email" name="emailadres"><br>
Wachtwoord <input type="password" name="wachtwoord"><br>
Bericht <textarea name="bericht" rows="4" cols="50" ></textarea><br>
<input name="formSent" type="submit" value="verzenden">
</form>

<?php
$formSent = isset($_REQUEST['formSent']);
if ($formSent) {
 echo $_POST['voornaam'].PHP_EOL.$_POST['familienaam'].PHP_EOL.$_POST['emailadres'].PHP_EOL.$_POST['wachtwoord'].PHP_EOL.$_POST['bericht'].PHP_EOL;
}
?>

</body>
</html>