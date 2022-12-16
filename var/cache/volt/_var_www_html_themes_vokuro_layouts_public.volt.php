<?php $menus = ['Home' => 'index', 'About' => 'about']; ?><nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <?= \Phalcon\Tag::linkTo([null, 'class' => 'navbar-brand', 'Vökuró']) ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"><?php foreach ($menus as $key => $value) { ?>
                <?php if ($value == $this->dispatcher->getControllerName()) { ?>
                <li class="nav-item active">
                    <?= \Phalcon\Tag::linkTo([$value, 'class' => 'nav-link', $key]) ?>
                </li>
                <?php } else { ?>
                <li class="nav-item"><?= \Phalcon\Tag::linkTo([$value, 'class' => 'nav-link', $key]) ?></li>
                <?php } ?><?php } ?></ul>

        <ul class="navbar-nav my-2 my-lg-0"><?php if (isset($logged_in) && !(empty($logged_in))) { ?><li class="nav-item"><?= \Phalcon\Tag::linkTo(['users', 'class' => 'nav-link', 'Users Panel']) ?></li>
            <li class="nav-item"><?= \Phalcon\Tag::linkTo(['session/logout', 'class' => 'nav-link', 'Logout']) ?></li>
        <?php } else { ?>
            <li class="nav-item"><?= \Phalcon\Tag::linkTo(['session/login', 'class' => 'nav-link', 'Login']) ?></li>
        <?php } ?>
        </ul>
    </div>
</nav>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= $this->getContent() ?>
    </div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">
            Made with love by the Phalcon Team

            <?= \Phalcon\Tag::linkTo(['privacy', 'Privacy Policy']) ?>
            <?= \Phalcon\Tag::linkTo(['terms', 'Terms']) ?>

            © <?= date('Y') ?> Phalcon Team.
        </span>
    </div>
</footer>
