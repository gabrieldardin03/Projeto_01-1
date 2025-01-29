<div class="box-content">
    <h2><i class="fas fa-plus"></i> Adicionar Depoimento</h2>

    <form method="post" enctype="multipart/form-data">
        <?php 
        if (isset($_POST['acao'])){
            if(Painel::insert($_POST)){
            Painel::messageToUser('sucesso', 'Depoimento cadastrado com sucesso!');
            }else{
                Painel::messageToUser('erro', 'Não foi possível cadastrar o depoimento');
            }
        }
        ?>
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome">
        </div>
        <!--form group-->
        <div class="form-group">
            <label for="nome">Depoimento: </label>
            <textarea name="depoimento"></textarea>
        </div>
        <!--form group-->
        <div class="form-group">
            <label for="nome">Data: </label>
            <input formato="data" type="text" name="data">
        </div>
        <!--form group-->
        <div class="form-group">
            <input type="hidden" name="acao" value="tb_admin.depoimentos">
            <input type="submit" name="acao" value="Cadastrar">
        </div>
        <!--form group-->
    </form>
</div>
<!--box content-->