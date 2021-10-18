<?php session_start(); session_destroy(); ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
body{
	background-color: #87CEEB;

}
#luffy{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#luffy h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #87CEEB;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #800000;
    border: 1px solid #800000;
}
a:link, a:visited {color: #87CEEB; text-decoration: none;}
a:hover,a:active {color: #87CEEB;}
#lien{
	position: relative;
	margin-left: 300px;
}
	</style>
	<title></title>
</head>

<body>
	<div id="luffy">
			<form method="POST" action="../Modele/verification.php">
			    <h1>Connexion</h1>
				    <label><b>Nom d'utilisateur</b></label>
				    <input type="text" placeholder="Entrer le nom d'utilisateur" name="LOGIN" required>
				    <label><b>Mot de passe</b></label>
				    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
				    <input type="submit" id='submit' value="LOGIN" >
				    <p><a href="page_0.php" id="lien">S'inscrire ?</a></p>
				    <?php
				    if(isset($_GET['erreur'])){
				        $err = $_GET['erreur'];
				        if($err==1 || $err==2)
				            echo "<p style='color: #DC143C;'>Utilisateur ou mot de passe incorrect</p>";
				    }
				    ?>
            </form>
    </div>
</body>
</html>
