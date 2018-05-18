<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <p>Se registró la siguiente solicitud de transporte:</p>
		<ul>
			<li><strong>Solitado por:</strong> {{ $name }}</li>
			<li><strong>Fecha y hora:</strong> {{ $datetime }}</li>
			<li><strong>Origen:</strong> {{ $origin }}</li>
			<li><strong>Destino:</strong> {{ $destination }}</li>
			<li><strong>Empresa y número de vuelo/autobús:</strong> {{ $transport_number }}</li>
			<li><strong>Observaciones del viaje:</strong> {{ $remark }}</li>
		</ul>
		<p>Un saludo,<br>Comité Organizador del ECSL 2018.</p>
	</body>
</html>
