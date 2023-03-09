<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
        $f1 = $_POST['food'][0];
        $f2 = $_POST['food'][1];
        $f1 = htmlspecialchars( $f1, ENT_QUOTES, 'UTF-8' );
        $f2 = htmlspecialchars( $f2, ENT_QUOTES, 'UTF-8' );
        echo 'あなたは「', $f1,'」が好きなんですね。<br>', PHP_EOL;
        echo '「', $f2,'」も好きなんですね。<br>', PHP_EOL;
    ?>
</body>
</html>