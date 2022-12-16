<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <title>Welcome to Vökuró</title>

    <?= $this->assets->outputCss('css') ?>
</head>
<body class="d-flex flex-column h-100">
    <?= $this->getContent() ?>

    <?= $this->assets->outputJs('js') ?>
</body>
</html>
