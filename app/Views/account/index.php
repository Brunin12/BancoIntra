<form action="<?= $active_page == 'entrar' ? base_url('account/login') : base_url('account/register') ?>" method="POST">
    <div class="login-box mx-auto w-75">
        <div class="card rounded shadow p-3">
            <div class="card-body login-card-body">
                <h3 class="text-center"><?= $active_page == 'cadastrar' ? 'Cadastrar Novo Usuário' : 'Login' ?></h3>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" autocomplete="email">
                        <div class="input-group-append">
                            <span class="input-group-text fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" placeholder="Senha" name="password" autocomplete="current-password">
                        <div class="input-group-append">
                            <span class="input-group-text fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?php if ($active_page == 'cadastrar'): ?>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="name" placeholder="Nome" name="name" autocomplete="name">
                            <div class="input-group-append">
                                <span class="input-group-text fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="profession">Profissão:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="profession" placeholder="Profissão" name="profession" autocomplete="profession">
                            <div class="input-group-append">
                                <span class="input-group-text fas fa-briefcase"></span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block"><?= $active_page == 'cadastrar' ? 'Cadastrar' : 'Entrar' ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
