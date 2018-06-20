<?php
echo 
'
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Images-->
        <div class="carousel-inner">
            <div id="pic1" class="item active">
                <div class="carousel-text">
                    <h2>O FUTURO DAS REDES</h2>
                    <h4>Fique por dentro de todas as novidades do IPV6</h4>
                </div>
            </div>
            <div id="pic2" class="item">
                <div class="carousel-text">
                    <h2>ARTIGO: CONVÍVIO COM A ROBÓTICA</h2>
                    <h4>Os robôs vão substituir você</h4>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
';
?>