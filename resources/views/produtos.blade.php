@extends("layout.render")

@section("TITLE", "Produtos")

@section("MAIN")
  <h1>Tela de Produtos</h1>


  @if ($busca != "")
  <p>
    resultados encontrados com a palavra <strong>{{$busca}}</strong>
  </p>
  @endif

@endsection
