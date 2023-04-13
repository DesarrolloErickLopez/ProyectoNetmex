<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home-estilos.css')}}">
</head>
<body>
<div class="container">
        <p>Recibiste un mensaje de {{ $msg['name'] }} - {{ $msg['email'] }}</p>
		<p><strong>Asunto: </strong> {{ $msg['subject'] }} </p>
		<p><strong>Contenido: </strong> {{ $msg['content'] }} </p>
</div>
</body>
</html>