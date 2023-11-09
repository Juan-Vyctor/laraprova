<a href="{{route('cadastro')}}">Voltar</a>
@foreach ($imoveis as $item)
    <h1>Local: {{$item->localizacao}}</h1>  
    <h1>Valor: {{$item->valor}}</h1>  
    <h1>Número de quartos: {{$item->numero_quartos}}</h1>
    @if ($item->piscina == 1)
        <h1>Esse imóvel tem piscina</h1>
    @endif
    <br>
@endforeach