<div class='container'>
    <legend class="text-center mt-3">
        <h2>Editar Formulário - Cadastro de Cliente</h2>
    </legend>
    <a href='<?= BASE_URL ?>/client' class="fa fa-arrow-left btn btn-success my-3" aria-hidden="true"> voltar</a>

    <fieldset>

        <form method="post">

            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="cpf">Codigo</label>
                    <input type="codigo" class="form-control" id="id" name="id" value="<?=$client[0]->id; ?>" readonly = true>
                </div>
                <div class="form-group col-sm-8">
                    <label for="dateRegister">Data de Cadastro</label>
                    <input type="text" class="form-control" id="dateRegister" name="dateRegister"
                           value="<?=date("d/m/Y", strtotime($client[0]->dateRegister)); ?>" readonly = true>
                </div>
            </div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="<?=$client[0]->name;?>" placeholder="Infome o Nome" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="mail" name="mail" value="<?=$client[0]->mail;?>" placeholder="Informe o E-mail">
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="cpf">CPF</label>
                    <input type="cpf" class="form-control" id="cpf" maxlength="14" name="cpf" value="<?=$client[0]->cpf; ?>" placeholder="Informe o CPF">
                </div>
                <div class="form-group col-sm-6">
                    <label for="dateBirth">Data de Nascimento</label>
                    <input type="data_nascimento" class="form-control" id="dateBirth" name="dateBirth" value="<?=$client[0]->dateBirth; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="telephone">Telefone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" value="<?=$client[0]->telephone; ?>" placeholder="Informe o Telefone">
                </div>
                <div class="form-group col-sm-6">
                    <label for="cel">Celular</label>
                    <input type="celular" class="form-control" id="phone" name="phone" value="<?=$client[0]->phone; ?>" placeholder="Informe o Celular">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-3">
                    <label for="address_zipcode">CEP</label>
                    <input type="text" class="form-control" id="address_zipcode" name="address_zipcode" value="<?=$client[0]->address_zipcode; ?>"
                           placeholder="Informe o CEP">
                </div>
                <div class="form-group col-sm-6">
                    <label for="address">Endereco</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?=$client[0]->address; ?>"
                           placeholder="Informe o endereco">
                </div>
                <div class="form-group col-sm-3">
                    <label for="address_number">Numero</label>
                    <input type="number" class="form-control" id="address_number" name="address_number" value="<?=$client[0]->address_number; ?>"
                           placeholder="Informe o numero">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="celular">Bairro</label>
                    <input type="text" class="form-control" id="address_neighb" name="address_neighb" value="<?=$client[0]->address_neighb; ?>"
                           placeholder="Informe o complemento">
                </div>
                <div class="form-group col-sm-6">
                    <label for="celular">Complemento</label>
                    <input type="celular" class="form-control" id="address_complement" name="address_complement" value="<?=$client[0]->address_complement; ?>"
                           placeholder="Informe o complemento">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="address_city">Cidade</label>
                    <input type="text" class="form-control" id="address_city" name="address_city" value="<?=$client[0]->address_city; ?>"
                           placeholder="Infome o Cidade">
                </div>
                <div class="form-group col-sm-6">
                    <label for="address_state">Estado</label>
                    <input type="text" class="form-control" id="address_state" name="address_state" value="<?=$client[0]->address_state; ?>"
                           placeholder="Infome o Estado">
                </div>
            </div>

            <input type="hidden" name="acao" value="incluir">
            <button type="submit" class="btn btn-primary" >
                Gravar
            </button>
            <a href='<?= BASE_URL ?>/client' class="btn btn-danger">Cancelar</a>
        </form>
    </fieldset>
</div>