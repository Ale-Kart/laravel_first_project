@extends("layout.render")

@section("TITLE", "Novo Evento")

@section("MAIN")
<main>
  <div class="container">
    <h1>Crie um Evento!</h1>

    <div class=" my-4">
      <form action="/events" method="POST" id="form-create-event">
        @csrf
        <div class="from-group">
          <label for="title">Evento</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="from-group">
          <label for="city">City</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do Evento">
        </div>
        <div class="from-group">
          <label for="private">Evento Privado?</label>
          <select class="form-select" name="private" id="private">
            <option value="0">Não</option>
            <option value="1">Sim</option>
          </select>
        </div>
        <div class="from-group">
          <label for="description">Descrição</label>
          <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrição do Evento"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
      </form>
    </div>
  </div>
</main>
@endsection
