<div class='container'>
    <legend class="text-center mt-4">
        <h2>Formulário - Cadastro de Cliente</h2>
    </legend>
    <a href='<?= BASE_URL ?>/client' class="fa fa-arrow-left btn btn-success my-3" aria-hidden="true"> voltar</a>

    <fieldset>

        <form action="<?= BASE_URL ?>/client/add" method="post" enctype='multipart/form-data'>

            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="id">Codigo</label>
                    <input type="id" class="form-control" id="id" name="id" placeholder="Novo" readonly=true>
                </div>
                <div class="form-group col-sm-8">
                    <label for="dateRegister">Data de Cadastro</label>
                    <input type="text" class="form-control" id="dateRegister" name="dateRegister"
                           value="<?= date("d/m/Y"); ?>" readonly=true">
                </div>
            </div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Infome o Nome" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="Informe o E-mail" required>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="cpf">CPF</label>
                    <input type="cpf" class="form-control" id="cpf" maxlength="14" name="cpf"
                           placeholder="Informe o CPF">
                </div>

                <div class="form-group col-sm-4">
                    <label for="rg">RG</label>
                    <input type="rg" class="form-control" id="rg" maxlength="14" name="rg" placeholder="Informe o RG">
                </div>

                <div class="form-group col-sm-4">
                    <label for="dateBirth">Data de Nascimento</label>
                    <input type="text" class="form-control" id="dateBirth" name="dateBirth">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="telephone">Telefone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone"
                           placeholder="Informe o Telefone">
                </div>
                <div class="form-group col-sm-6">
                    <label for="phone">Celular</label>
                    <input type="phone" class="form-control" id="phone" name="phone" required
                           placeholder="Informe o Celular">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-3">
                    <label for="address_zipcode">CEP</label>
                    <input type="text" class="form-control" id="address_zipcode" name="address_zipcode"
                           placeholder="Informe o CEP">
                </div>
                <div class="form-group col-sm-6">
                    <label for="address">Endereco</label>
                    <input type="text" class="form-control" id="address" name="address"
                           placeholder="Informe o endereco">
                </div>
                <div class="form-group col-sm-3">
                    <label for="address_number">Numero</label>
                    <input type="number" class="form-control" id="address_number" name="address_number"
                           placeholder="Informe o numero">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="celular">Bairro</label>
                    <input type="text" class="form-control" id="address_neighb" name="address_neighb"
                           placeholder="Informe o complemento">
                </div>
                <div class="form-group col-sm-6">
                    <label for="celular">Complemento</label>
                    <input type="celular" class="form-control" id="address_complement" name="address_complement"
                           placeholder="Informe o complemento">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="addresscity">Cidade</label>
                    <input type="text" class="form-control" id="address_city" name="address_city"
                           placeholder="Infome o Cidade">
                </div>
                <div class="form-group col-sm-6">
                    <label for="address_state">Estado</label>
                    <input type="text" class="form-control" id="address_state" name="address_state"
                           placeholder="Infome o Estado">
                </div>
            </div>


            <input type="hidden" name="acao" value="incluir">
            <button type="submit" class="btn btn-primary">
                Gravar
            </button>
            <a href='<?= BASE_URL ?>/client' class="btn btn-danger">Cancelar</a>
        </form>
    </fieldset>
</div>
