<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

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
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <label for="clientName">Nome</label>
                <input type="text" 
                  class="form-control 
                    <?php echo e($errors->has('clientName') ? 'is-invalid' : ''); ?>" 
                  name="clientName" 
                  placeholder="Nome do Cliente"> 
                  
                  <?php if($errors->has('clientName')): ?>
                <div class="invalid-feedback">
                  <?php echo e($errors->first('clientName')); ?>

                </div>
                  <?php endif; ?>

              </div>

              <div class="form-group">
                <label for="clientAge">Idade</label>
                <input type="text" 
                  class="form-control
                    <?php echo e($errors->has('clientAge') ? 'is-invalid' : ''); ?>" 
                  name="clientAge" 
                  placeholder="Idade do Cliente">

                  <?php if($errors->has('clientAge')): ?>
                <div class="invalid-feedback">
                  <?php echo e($errors->first('clientAge')); ?>

                </div>
                  <?php endif; ?>

              </div>

              <div class="form-group">
                <label for="clientAddress">Endereço</label>
                <input type="text" 
                  class="form-control
                    <?php echo e($errors->has('clientAddress') ? 'is-invalid' : ''); ?>" 
                  name="clientAddress" 
                  placeholder="Endereço do Cliente">

                  <?php if($errors->has('clientAddress')): ?>
                <div class="invalid-feedback">
                  <?php echo e($errors->first('clientAddress')); ?>

                </div>
                  <?php endif; ?>

              </div>

              <div class="form-group">
                <label for="clientEmail">Email</label>
                <input type="text" 
                  class="form-control
                    <?php echo e($errors->has('clientEmail') ? 'is-invalid' : ''); ?>" 
                  name="clientEmail" 
                  placeholder="Email do Cliente">
              </div>

                <?php if($errors->has('clientEmail')): ?>
              <div class="invalid-feedback">
                <?php echo e($errors->first('clientEmail')); ?>

              </div>
                <?php endif; ?>

              <button type="submit" 
                class="btn btn-sm btn-primary">Cadastrar</button>
              <a href="/clients" class="btn btn-sm btn-danger">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\validacaoLaravel\resources\views/newClient.blade.php ENDPATH**/ ?>