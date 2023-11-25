<div class="row">
    <div class="col">
        <div class="card p-3 shadow ">
            <form action="<?=
                            $active_page == 'registrar' ?
                                base_url('register/store') :
                                base_url('update/store/' . $movement->id_movement)
                            ?>" method="post">
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="description" class="form-control" id="description" name="description" value="<?= isset($movement) ? $movement->description : '' ?>" required>
                </div>
                <div class="form-group">
                    <label for="value">Valor</label>
                    <input type="number" step="0.01" class="form-control" id="value" name="value" value="<?= isset($movement) ? $movement->value : '' ?>" required>
                </div>


                <div class="form-group">
                    <label for="type">Tipo</label>
                    <select class="form-control" id="type" name="type" required>
                        <option value="deposit">Entrada</option>
                        <option value="exit" <?= isset($movement) && $movement->type == 'exit' ? 'selected' : '' ?>>Saída</option>
                    </select>
                </div>
                <?=
                $active_page == 'alterar' ?
                    '<input type="hidden" name="id" value="<?= $id ?>">' :
                    ''
                ?>



                <div class="row">
                    <div class="col"><a href="<?= base_url() ?>" class="btn btn-warning w-100">Voltar</a></div>
                    <div class="col"><button type="submit" class="btn btn-primary w-100"><?= $active_page == 'registrar' ?
                                                                                                'Registrar' :
                                                                                                'Atualizar'
                                                                                            ?></button></div>

                </div>
            </form>
        </div>
    </div>
</div>