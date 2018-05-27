<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <p>Se registró un comprobante de transferencia bancaria:</p>
		<ul>
			<li><strong>Subido por:</strong> {{ $name }}</li>
			<li><strong>Fecha y hora:</strong> {{ $datetime }}</li>
		</ul>
		<p>Haga clic <a href="{{ $url }}" target="_blank">aquí</a> para ver el archivo subido.</p>
		<p>Un saludo,<br>Comité Organizador del ECSL 2018.</p>
	</body>
</html>
