<?php
    $step = $_POST['step'] ?? false;
    $params = [];

    if (!empty($step)) {

        $params['login'] = $_POST['login'] ?? '';
        $params['password'] = $_POST['password'] ?? '';

        if ($step == 'step_3') {
            // INSERT to DB 
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация(employeer)</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <!-- Форма авторизациии -->

<form  action="wizard.php" method="post" enctype="multipart/form-data">

    <?php if ($step == 'step_2') {?>
        <label>Финиш</label>
        <input type="hidden" name="step" value="step_3" />
        <input type="hidden" name="login" value="<?php echo $params['login']; ?>" />
        <input type="hidden" name="password" value="<?php echo $params['password']; ?>" />
    <?php } else if ($step == 'step_1') {?>
        <label>Вторая страница</label>
        <input name="password" />
        <input type="hidden" name="step" value="step_2" />
        <input type="hidden" name="login" value="<?php echo $params['login']; ?>" />
    <?php} else {?>
        <label>Начало</label>
        <input type="hidden"  name="step"  value="step_1" />
        <input name="login" />
    <?php}?>

<button type="submit">Go</button>

</form>
</body>
</html>
