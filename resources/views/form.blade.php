<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de envio de arquivos</title>
</head>
<body>
    <form action="uploads" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="arquivos[]" multiple>
        <input type="submit">
    </form>
</body>
</html>