<a href="{{route('cadastro')}}">Voltar</a>

@foreach ($imoveis as $imovel)
    <h1>Usuario dono do imóvel: {{$usuario->name}}</h1>
    <h1>Local: {{$imovel->localizacao}}</h1>
    <h1>Valor: {{$imovel->valor}}</h1> 
    <h1>Número de quartos: {{$imovel->numero_quartos}}</h1>
    @if ($imovel->piscina == 1)
        <h1>Esse imóvel tem piscina</h1>
    @endif
    <br>
@endforeach