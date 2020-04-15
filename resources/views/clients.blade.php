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
            <table class="table table-bordered tablehover" id="products-table">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Endereço</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clients as $client)
                <tr>
                  <td>{{ $client->id }}</td>
                  <td>{{ $client->name }}</td>
                  <td>{{ $client->age }}</td>
                  <td>{{ $client->address }}</td>
                  <td>{{ $client->email }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            
            <a href="/clients/new" class="btn btn-primary">Cadastrar</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>