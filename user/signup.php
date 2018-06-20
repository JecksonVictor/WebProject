<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["email"])){
        $users = fopen("users.txt", "r");
        $userAvailable = true;
        while(!feof($users)){
            $line = fgets($users);
            $existingUsername = strtok($line, ":");

            if($existingUsername == $_POST["username"]){
                $userAvailable = false;
                echo
                '<script type="text/javascript">
                    alert("Usuário já existente.");                            
                </script>';
                break;
            }
        }
        fclose($users);

        if ($userAvailable){
            $users = fopen("users.txt", "a");
            $newUser = $_POST["username"].":".$_POST["password"].":0:".$_POST["email"].":\n";
            fwrite($users, $newUser) or die ("Fail to write");
            fclose($users);

            $_SESSION["user"] = $_POST["username"];
            $_SESSION["admin"] = false;
            
            echo '<script type="text/javascript">
            alert("Cadastro feito com sucesso.");
            window.location = "../index.php";
            </script>';
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>JeckTech - Cadastrar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/style/colors.css">
</head>

<body class="mainBackground">
    <div class="container" >
    <div class="row">
	<div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
			    <h2 class="panel-title">JeckTech</h2>
		    </div>  

            <div class="panel-body">
                <form id="signup" method="post" role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nome de Usuario" id="username" name="username" type="text" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-Mail" id="email" name="email" type="email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Senha" id="password" name="password" type="password" required>
                        </div>
                        <input class="btn btn-success btn-block mainBackground" style="height: 34px" type="submit" value="Cadastrar">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>
