<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <p>Estimado/a: {{ $name }}</p>
		<p>Nos es grato informarle que su ponencia ha sido aceptada y agendada en el siguiente horario y aula:</p>
		<ul>
			<li><strong>Fecha y hora:</strong> {{ $schedule_label }}</li>
			<li><strong>Aula:</strong> {{ $space_label }}</li>
			<li><strong>Ponencia:</strong> {{ $title }}</li>
		</ul>
		<p>Por favor, tome en cuenta lo siguiente:</p>
		<ul>
			<li>Revise que la descripción ingresada describa de la mejor manera de que trata su ponencia, esta descripción puede visualizarse desde el sitio web.</li>
			<li>Si desea que su fotografía se muestre junto a su ponencia en el sitio web, puede asociar una imagen a su correo electrónico en <a href="http://gravatar.com" target="_blank">gravatar.com</a></li>
			<li>Se habilitó la opción de "Adjuntar archivo" en la sección "Administrar mis ponencia" para que pueda adjuntar su presentación.</li>
			<li>Puede compartir su ponencia en redes sociales, a través del siguiente enlace directo: <a href="https://ecsl2018.softwarelibre.ca/cms/agenda/{{$id}}" target="_blank">https://ecsl2018.softwarelibre.ca/cms/agenda/{{$id}}</a></li>
			<li>Si tiene alguna consulta o comentario, puede ponerse en contacto con nosotros a través del correo <a href="mailto:ecsl2018@softwarelibre.ca">ecsl2018@softwarelibre.ca</a>.</li>
		</ul>
		<p>Un saludo,<br>Comité Organizador del ECSL 2018.</p>
	</body>
</html>
