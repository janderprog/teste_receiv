<?php
    require_once ("dashboard.controller.php");

?>

<h1 class="mt-4">Dashboard</h1>
<div class="row">
    <!-- Titulos Geral -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4 d-flex justify-content-between">
            <div class="card-body"  style='font-size:24px;'>
                <i class="far fa-file-alt"></i>
                Titulos <?php echo $tot_titulos?>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                R$ <?php echo $val_titulos?>
                
            </div>
        </div>
    </div>

    <!-- Abertos -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4 d-flex justify-content-between">
            <div class="card-body"  style='font-size:24px;'>
                <i class="far fa-file-alt"></i>
                Abertos <?php echo $tot_abertos?>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                Total R$ <?php echo $val_abertos?>
                
            </div>
        </div>
    </div>

    <!-- Vencidos -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4 d-flex justify-content-between">
            <div class="card-body"  style='font-size:24px;'>
                <i class="far fa-file-alt"></i>
                Vencidos <?php echo $tot_vencidos?>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                Total R$ <?php echo $val_vencidos?>
                
            </div>
        </div>
    </div>

    <!-- Fechados -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4 d-flex justify-content-between">
            <div class="card-body"  style='font-size:24px;'>
                <i class="far fa-file-alt"></i>
                Fechados <?php echo $tot_fechados?>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                Total R$ <?php echo $val_fechados?>
                
            </div>
        </div>
    </div>
</div>

<div>
    <a href='?pag=cadastrar' class="btn btn-primary">Cadastrar Título</a>
</div>
    
<div class="row">
    <table class="table table-hover">
        <thead>
          <tr>
            <th>Nome</th>
            <th>cpf/cnpj</th>
            <th>Título</th>
            <th>Valor</th>
            <th>Data venc.</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $clientes) :?>
                <tr>
                    <td><?php echo $clientes->nome; ?></td>
                    <td><?php echo $clientes->cpf_cnpj; ?></td>
                    <td><?php echo $clientes->descricao_titulo; ?></td>
                    <td><?php echo $clientes->valor; ?></td>
                    <td><?php echo $clientes->data_vencimento; ?></td>
                    <td>
                        <a href="?pag=editar&id=<?php echo $clientes->id; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="?pag=excluir&id=<?php echo $clientes->id; ?>" class="btn btn-danger"><i class="fa fa-close"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>