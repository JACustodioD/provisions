<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Posible cliente</title>
</head>
<body>
    <h1>Empresa: {{$data['company']}}</h1>

    <ul>
        <li><b>Responsable:</b> {{$data['name']}}</li>
        <li><b>Contacto:</b> {{$data['email']}} | {{$data['phone']}}</li>
        <li><b>Mensaje:</b> {{$data['message']}}</li>
    </ul>
</body>
</html>