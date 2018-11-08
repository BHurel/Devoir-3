<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="assets/JS/mesFonctions.js"></script>
	<script src="assets/JQuery/jquery-3.1.1.js"></script>
	<script>
		$(
		function()
		{
			$("#connexion").click(function()
			{
				if ($("#nom").val() == "Royer" || $("#nom").val() == "royer")
				{
					Connexion_Invite();
				}
				else if ($("#nom").val() == "Girard" || $("#nom").val() == "girard")
				{
					Connexion_admin();
				}
				else
				{
                alert('Erreur: Saisie du nom incorrecte')
            	}
			});
		}
	)
	</script>
</head>
<body>
	<h1>Devoir 3: Notation regions</h1><br>
	<h2> Votre nom </h2>
	<input type="text" id="Nom" value=""><br><br>
	<input type="button" id="Connexion" value="Connexion"><br>
	<div id="listeRegions"></div>
	<div id="listeVilles"></div>
</body>
</html>