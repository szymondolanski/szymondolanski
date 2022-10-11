<?php
session_start();
unset($_SESSION['login_uzytkownika']);
session_destroy();
echo'<h3>Wylogowales sie z systemu </h3>';
echo '<a href="loguj.php">zaloguj sie ponownie</a>'
?>