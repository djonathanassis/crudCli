<div class='container'>

    <legend class="text-center mt-4"><h1>Listagem de Clientes</h1></legend>

    <a href='<?= BASE_URL ?>/client/add' class="btn btn-success pull-right my-4">Cadastrar Cliente</a>
    <div class='clearfix'></div>

    <?php if (!empty($client)): ?>

        <table class="table table-striped">
            <tr class='active'>
                <th>Codigo</th>
                <th>Data</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Açãos</th>
            </tr>
            <?php foreach ($client as $c): ?>
                <tr>
                    <td><?= $c->id; ?></td>
                    <td><?= date("d/m/Y", strtotime($c->dateRegister));?></td>
                    <td><?= $c->name; ?></td>
                    <td><?= $c->mail; ?></td>
                    <td><?=$c->phone; ?></td>
                    <td>
                        <a class="btn btn-primary" href='<?php echo BASE_URL; ?>/client/edit/<?= $c->id; ?>'>Editar</a>
                        <a class="btn btn-danger" href="<?php echo BASE_URL; ?>/client/delete/<?= $c->id; ?>"
                           onclick="return confirm('Deseja excluir ?')">Excluir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    <?php else: ?>

        <h3 class="text-center text-primary">Não existem clientes cadastrados!</h3>
    <?php endif; ?>
    </fieldset>
</div>