<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Cadastro</h1>

    <form action="{{route('register')}}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="name">Nome</label>
        <input type="text" name="name">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password">
        <button>Enviar</button>
    </form>

    <h1>Login</h1>

    <form action="{{route('login')}}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password">
        <button>Enviar</button>
    </form>
    
</body>
</html>