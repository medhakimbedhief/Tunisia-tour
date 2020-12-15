<?php
session_start();
session_destroy();
echo 'Vous êtes déconnecté. <a href="../../BACK/signin.php">Se connecter ?</a>';
if (!empty($_SESSION['e'])) {
	// Si inexistante ou nulle, on redirige vers le formulaire de login
	header('Location:../index.php');
}
?>