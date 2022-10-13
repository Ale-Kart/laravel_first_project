@extends("layout.render")

@section("TITLE", "Home")

@section("MAIN")

<main>
  <div class="container">
    <h1>Página de Eventos</h1>

    <div class="row my-4">
      @foreach ($events as $event)
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            {{$event->title}}
          </div>
          <div class="card-body">
            {{$event->description}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>

@endsection
