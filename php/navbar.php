<?php
session_start();

echo 
'
    <div>
        <!-- Default Navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-transparent">
            <div class="navbar-panel-transparent">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">JECKTECH</a>
                </div>
                <ul class="nav navbar-nav navbar-centre">
                    <li><a href="news.html"><i class="fa fa-newspaper-o"></i> NOTÍCIAS</a></li>
                    <li><a href="tutorials.html"><i class="fa fa-terminal"></i> TUTORIAIS</a></li>
                    <li><a href="articles.html"><i class="fa fa-file-text-o"></i> ARTIGOS</a></li>
                    <li><a href="about.html"><i class="fa fa-user"></i> SOBRE</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                <li><a><i class="fa fa-search"></i> PESQUISAR</a></li>
';
if (!isset($_SESSION["user"])){
                echo'
                    <li><a href="/user/login.php"><i class="fa fa-user"></i> ENTRAR</a></li>
                    <li><a href="/user/signup.php"><i class="fa fa-user"></i> CADASTRAR</a></li>
                ';
} else {
                if ($_SESSION["admin"] == true){
                    echo '
                        <li><a href="/posts/write.php"><i class="fa fa-penciL"></i> ESCREVER</a></li>
                    ';
                }
                echo '
                    <li><a href="/user/logout.php"> <i class="fa fa-user"></i> LOGOUT</a></li>
                ';
}
echo '    	
                </ul> 
            </div>
        </nav>
    </div>
';
?>