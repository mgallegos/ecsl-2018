<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <p>Se registró la recepción del siguiente pago:</p>
		<ul>
			<li><strong>Fecha y hora:</strong> {{ $datetime }}</li>
			<li><strong>Opción de pago:</strong> {{ $type }}</li>
			<li><strong>Monto:</strong> ${{ $amount }}</li>
			<li><strong>Número de aprobación:</strong> {{ $reference }}</li>
			<li><strong>Realizado por:</strong> {{ $name }}</li>
		</ul>
		<p>Puede descargar el comprobante de su pago en la sección “Realizar pago”, del sitio web oficial del evento.</p>
		<p>Un saludo,<br>Comité Organizador del ECSL 2018.</p>
	</body>
</html>
