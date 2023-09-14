<?php
require('template/header.php');
?>
<div class="row">
    <div class="col-xl-6 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <h4>Produtos</h4>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="produtos.php">Ver Detalhes</a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h4>Funcionários</h4>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="funcionarios.php">Ver Detalhes</a>
                <div class="small text-white">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>
<?php
require('template/footer.php');
?>