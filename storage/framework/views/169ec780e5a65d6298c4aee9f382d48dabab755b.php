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
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($client->id); ?></td>
                  <td><?php echo e($client->name); ?></td>
                  <td><?php echo e($client->age); ?></td>
                  <td><?php echo e($client->address); ?></td>
                  <td><?php echo e($client->email); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
            
            <a href="/clients/new" class="btn btn-primary">Cadastrar</a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\validacaoLaravel\resources\views/clients.blade.php ENDPATH**/ ?>