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
<body class="mt-3">

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
                <input type="text" 
                  class="form-control 
                    {{ $errors->has('clientName') ? 'is-invalid' : '' }}" 
                  name="clientName" 
                  placeholder="Nome do Cliente"> 
                  
                  @if ($errors->has('clientName'))
                <div class="invalid-feedback">
                  {{ $errors->first('clientName') }}
                </div>
                  @endif

              </div>

              <div class="form-group">
                <label for="clientAge">Idade</label>
                <input type="text" 
                  class="form-control
                    {{ $errors->has('clientAge') ? 'is-invalid' : '' }}" 
                  name="clientAge" 
                  placeholder="Idade do Cliente">

                  @if($errors->has('clientAge'))
                <div class="invalid-feedback">
                  {{ $errors->first('clientAge') }}
                </div>
                  @endif

              </div>

              <div class="form-group">
                <label for="clientAddress">Endereço</label>
                <input type="text" 
                  class="form-control
                    {{ $errors->has('clientAddress') ? 'is-invalid' : '' }}" 
                  name="clientAddress" 
                  placeholder="Endereço do Cliente">

                  @if ($errors->has('clientAddress'))
                <div class="invalid-feedback">
                  {{ $errors->first('clientAddress') }}
                </div>
                  @endif

              </div>

              <div class="form-group">
                <label for="clientEmail">Email</label>
                <input type="text" 
                  class="form-control
                    {{ $errors->has('clientEmail') ? 'is-invalid' : '' }}" 
                  name="clientEmail" 
                  placeholder="Email do Cliente">
              </div>

                @if ($errors->has('clientEmail'))
              <div class="invalid-feedback">
                {{ $errors->first('clientEmail') }}
              </div>
                @endif

              <button type="submit" 
                class="btn btn-sm btn-primary">Cadastrar</button>
              <a href="/clients" class="btn btn-sm btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>