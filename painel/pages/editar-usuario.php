<div class="box-content">
    <h2><i class="fas fa-edit"></i>Editar Usuário</h2>

    <form method="post" enctype="multipart/form-data">
        <?php 
        if (isset($_POST['acao'])){
            Painel::messageToUser('sucesso', 'Atualizado com sucesso!');
        }
        ?>
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" required value="<?php echo $_SESSION['nome']; ?>">
        </div><!--form group-->
        <div class="form-group">
            <label for="senha">Senha: </label>
            <input type="password" name="password" required value="<?php echo $_SESSION['password']; ?>">
        </div><!--form group-->
        <div class="form-group">
            <label for="imagem">Imagem: </label>
            <input type="file" name="imagem">
            <input type="hidden" name="imagem-atual" value="<?php echo $_SESSION['img']; ?>">
        </div><!--form group-->
        <div class="form-group">
            <input type="submit" name="acao" value="Atualizar">
        </div><!--form group-->
    </form>
</div> <!--box content-->