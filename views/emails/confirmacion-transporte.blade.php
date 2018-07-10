<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<p>Estimado/a: {{ $name }}</p>
    <p>Nos es grato informarle que se le ha asignado un transporte a su solicitud:</p>
		<ul>
			<li><strong>Transporte:</strong> {{ $assigned_transport_label }}</li>
			<li><strong>Responsable:</strong> Manuel Flores}</li>
			<li><strong>Número de télefono:</strong> +503 78548471</li>
			<li><strong>Correo electrónico:</strong> neozeroes@gmail.com</li>
			<li><strong>Usuario telegram:</strong> @neozerosv</li>
		</ul>
		<p>Por favor, verifique los datos de su solicitud, cualquier observación favor de notificarlo al reponsable de su solicitud:</p>
		<ul>
			<li><strong>Fecha y hora:</strong> {{ $pickup_datetime }}</li>
			<li><strong>Origen:</strong> {{ $origin }}</li>
			<li><strong>Destino:</strong> {{ $destination }}</li>
			<li><strong>Empresa y número de vuelo/autobús:</strong> {{ $transport_number }}</li>
			<li><strong>Observaciones del viaje:</strong> {{ $remark }}</li>
		</ul>
		<p>Un saludo,<br>Comité Organizador del ECSL 2018.</p>
	</body>
</html>
