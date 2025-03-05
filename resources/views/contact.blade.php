<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/crear-contacto" method="POST">
        @csrf
        <ul>
            <li>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="nombre" />
            </li>
            <li>
            <label for="mail">Correo electrónico:</label>
            <input type="email" id="mail" name="correo" />
            </li>
            <li>
            <label for="msg">Mensaje:</label>
            <textarea id="msg" name="mensaje"></textarea>
            </li>
            <button type="submit">
                enviar
            </button>
        </ul>
    </form>
</body>
</html>