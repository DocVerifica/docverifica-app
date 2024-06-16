<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem de Contato</title>
</head>
<body>
    <h1>Nova Mensagem de Contato</h1>
    <p><strong>Nome:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Mensagem:</strong> {{ $details['message'] }}</p>
</body>
</html>
