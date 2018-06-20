<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (!empty($_POST["username"]) && !empty($_POST["password"])){
        $users = fopen("users.txt", "r") or die("file error");
        while(!feof($users)){
            $line = fgets($users);
            $username = strtok($line, ":");      
            $password = strtok(":");
            $admin    = strtok(":");

            if($username == $_POST["username"]){
                if ($password == $_POST["password"]){
                    echo '
                    <script type="text/javascript">
                            alert("Login Sucesso");                            
                    </script>
                    ';
                    $_SESSION["user"] = $_POST["username"];
                    if ($admin == 1){
                        $_SESSION["admin"] = true;
                    }
                    header('Location: ../index.php');
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>JeckTech - Entrar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/style/colors.css">
</head>

<body class="mainBackground" style="height: 100%">
    <div class="container mt-1" >
    <div class="row">
	<div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
			    <h2 class="panel-title">JeckTech</h2>
		    </div>  

            <div class="panel-body">
                <form id="login" method="post" role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nome de Usuario" id="username" name="username" type="text" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Senha" id="password" name="password" type="password" required>
                        </div>
                        <input class="btn btn-success btn-block mainBackground" style="height: 34px" type="submit" value="Entrar">
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
