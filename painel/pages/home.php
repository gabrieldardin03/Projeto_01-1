<?php $usuariosOnline = Painel::listUserOnline(); ?>

<div class="box-content left w100">
    <h2><i class="fa-solid fa-house"></i> Painel de Controle - <?php echo NOME_EMPRESA;?></h2>
    <div class="box-metricas">
        <div class="box-metrica-single">
            <h2>Usuários Online</h2>
            <p>10</p>
        </div>
        <div class="box-metrica-single">
            <h2>Visitas Hoje</h2>
            <p>20</p>
        </div>
        <div class="box-metrica-single">
            <h2>Visitas Totais</h2>
            <p>30</p>
        </div>
    </div>
    <!--box-metricas-->
</div>
<!--box-content-->

<div class="box-content left w100">
    <h2><i class="fa-brands fa-chrome"></i> Usuários Online</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col left w50">
                <h2>IP</h2>
            </div>
            <!--col-->
            <div class="col left w50">
                <h2>Última Ação</h2>
            </div>
            <!--col-->
            <div class="clear"></div>
        </div>
        <!--row-->

        <?php foreach ($s as $key => $value) {
            # code...
        } ?>

        <!--Exemplo de inputs-->
        <div class="row">
            <div class="col left w50">
                <h2>127.0.0.0</h2>
            </div>
            <!--col-->
            <div class="col left w50">
                <h2>11/12/2024 20:43:00</h2>
            </div>
            <!--col-->
            <div class="clear"></div>
        </div>
        <!--row-->
    </div>
    <!--table-responsive-->
</div>
<!--box-content-->