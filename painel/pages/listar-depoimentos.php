<?php 
$depoimentos = Painel::getAll('tb_admin.depoimentos');
?>

<div class="box-content">
    <h2><i class="fas fa-database"></i> Depoimentos cadastrados</h2>

    <table>
        <tr>
            <td>Data</td>
            <td>Nome</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
        <tr>
            <td>28/01/2025</td>
            <td>Lucas</td>
            <td><a href="" class="edit"><i class="fas fa-edit"></i></a></td>
            <td><a href="" class="delete"><i class="fas fa-trash"></i></a></td>
        </tr>
    </table>
</div>
<!--box content-->