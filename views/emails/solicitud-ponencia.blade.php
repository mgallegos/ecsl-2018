<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <p>Se registró la siguiente solicitud de ponencia:</p>
		<ul>
			<li><strong>Solitado por:</strong> {{ $user }}</li>
			<li><strong>Título:</strong> {{ $name }}</li>
			<li><strong>Tipo:</strong> {{ $type }}</li>
			<li><strong>Duración:</strong> {{ $duration }} hora(s)</li>
			<li><strong>Eje temático:</strong> {{ $eje }}</li>
			<li><strong>Descripción:</strong> {{ $description }}</li>
		</ul>
		<p>Un saludo,<br>Comité Organizador del ECSL 2018.</p>
	</body>
</html>
