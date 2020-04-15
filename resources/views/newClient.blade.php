<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <title>Validacao de Formulários - Laravel</title>
</head>
<body  class="mt-3">

  <main role="main">
    <div class="row">
      <div class="container col-md-8 offset-md-2">
        <div class="card border">
          <div class="card-header">
            <div class="card-title">Cadastro de Clientes</div>
          </div>

          <div class="card-body">
            <form action="/clients" method="POST">
              @csrf
              <div class="form-group">
                <label for="clientName">Nome</label>
                <input type="text" class="form-control" name="clientName" placeholder="Nome do Cliente">
              </div>

              <div class="form-group">
                <label for="clientAge">Idade</label>
                <input type="text" class="form-control" name="clientAge" placeholder="Idade do Cliente">
              </div>

              <div class="form-group">
                <label for="clientAddress">Endereço</label>
                <input type="text" class="form-control" name="clientAddress" placeholder="Endereço do Cliente">
              </div>

              <div class="form-group">
                <label for="clientEmail">Email</label>
                <input type="text" class="form-control" name="clientEmail" placeholder="Email do Cliente">
              </div>

              <button type="submit" class="btn btn-sm btn-primary">Cadastrar</button>
              <a href="/clients" class="btn btn-sm btn-danger">Cancelar</a>
            </form>
          </div>
@if ($errors->any())
          <div class="card-footer">
  @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
              {{ $error }}
            </div>
  @endforeach
          </div>
@endif
        </div>
      </div>
    </div>
  </main>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>