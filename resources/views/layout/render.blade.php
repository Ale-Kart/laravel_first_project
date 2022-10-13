<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/index.css">
  <title>
    {{-- rendering the title --}}
    @yield("TITLE")
  </title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg mavbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          LOGO
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/events/create" class="nav-link">Criar Evento</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">Entrar</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">Cadastrar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  {{-- rendering the page --}}
  @yield("MAIN")
  @if (session("message" ))
    <div class="alert alert-success" id="alert[NewEvent]">{{ session("message") }}</div>
  @endif

  <footer>
    <a href="/">Logo</a>
  </footer>

  {{-- * Icons --}}
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
