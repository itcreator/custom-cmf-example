<? return function($vars) { ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title><?= $vars['this']->getHelper('Title')->getTitle() ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <?= $vars['this']->getHelper('Meta')->buildCode() ?>
    <?= $vars['this']->getHelper('JS')->buildCode() ?>
    <?= $vars['this']->getHelper('Style')->buildCode() ?>
</head>
<body>
    <?= $vars['layout'] ?>
</body>
</html>

<? };
