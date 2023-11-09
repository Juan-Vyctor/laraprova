<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Cadastre Imóvel</h1>

    <form action="{{route('register.imovel')}}" method="POST">
        @csrf
        <label for="localizacao">Localização</label>
        <input type="text" name="localizacao">
        <label for="valor">Valor</label>
        <input type="text" name="valor">
        <label for="numero_quartos">Número de quartos</label>
        <input type="text" name="numero_quartos">
        <label for="piscina">Tem piscina?</label>
        <select name="piscina">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
        <button>Enviar</button>
    </form>
    
</body>
</html>