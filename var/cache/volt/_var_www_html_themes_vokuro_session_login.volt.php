<h1 class="mt-3">Log In</h1>

<?= $this->flash->output() ?>

<form method="post">
    <div class="form-group">
        <label for="email-input">Email address</label>
        <?= $form->render('email', ['class' => 'form-control', 'id' => 'email-input', 'aria-describedby' => 'emailHelp', 'placeholder' => 'Enter email']) ?>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="password-input">Password</label>
        <?= $form->render('password', ['class' => 'form-control', 'id' => 'password-input', 'placeholder' => 'Password']) ?>
    </div>

    <div class="form-group form-check">
        <?= $form->render('remember', ['class' => 'form-check-input']) ?>
        <?= $form->label('remember', ['class' => 'form-check-label', 'for' => 'login-remember']) ?>
    </div>

    <?= $form->render('csrf', ['value' => $this->security->getToken()]) ?>

    <?= $form->render('Login') ?>
</form>

<hr>
<p><?= \Phalcon\Tag::linkTo(['session/forgotPassword', 'Forgot my password']) ?></p>
<p><?= \Phalcon\Tag::linkTo(['session/signup', 'Sign up']) ?></p>
