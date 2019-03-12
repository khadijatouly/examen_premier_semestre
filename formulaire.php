<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<style type="text/css">
		fieldset{
			background-color: none;
			width: 25%;
			height: 60%;
			align: center;
		}
	</style>
</head>
<body>
	<marquee><h2 style="..." > Veuillez renseignez vos champs</h2></marquee>
	<form method="POST" action="traitement.php" style="...">
		<center>
		<legend>Vos informations</legend>
		<fieldset align="center">
			<table>
			<p>
				<tr>
					<th><label for="Nom">NOM : </label></th>
						<th><input type="text" name="Nom"></th>
					</tr>
					</p>
			<p>
				<tr>
					<th><label for="Prenom">PRENOM : </label></th>
						<th><input id="PRENOM" type="text" name="Prenom"></th>
					</tr>
						</p>
			<p>
				<tr>
					<th><label for="Adresse">ADRESSE : </label></th>
					<th><input type="text" name="Adresse"></th>
				</tr>
				</p>
			<p>
				<tr>
					<th><label for="Profession">PROFESSION : </label></th>
					<th><input type="text" name="Profession"></th>
				</tr>
				</p>
			</table>
					<p><input type="submit" name="valider"></p>
		</fieldset>
	</center>
	</form>

</body>
</html>