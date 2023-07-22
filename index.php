<?php
include 'mathOperations.php';

if (isset($_GET['send'])) {
    $arg1 = $_GET['arg1'];
    $arg2 = $_GET['arg2'];
    $operation = $_GET['operation'];
} else {
    $res = 0;
    $arg1 = 0;
    $arg2 = 0;
    $operation = '+';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="GET">
    <input type="text" name="arg1" value="<?=$arg1?>">
    <select name="operation" id="">
        <option <?php if ($_GET['operation'] == '+') echo 'selected';?> value="+">+ </option>
        <option <?php if ($_GET['operation'] == '-') echo 'selected';?> value="-">-</option>
        <option <?php if ($_GET['operation'] == '*') echo 'selected';?> value="*">*</option>
        <option <?php if ($_GET['operation'] == '/') echo 'selected';?> value="/">/</option>
    </select>
    <input type="text" name="arg2" value="<?=$arg2?>">
    <input type="submit" value="=" name="send">
    <input type="text" name="result" readonly value="<?=MathOperations($arg1, $arg2, $operation)?>">
</form>
</body>
</html>