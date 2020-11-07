<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/styles.css">
    <link  rel="icon"   href="Images/favicon.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    
    <title>Tecno Store</title>
</head>
<body>
    <header>Tecno Store</header>
    <nav class="menu">
        <div>
            <label for="">&#x2630;</label>
        </div>
        <ul> 
            <input type="checkbox" name="desplegar" id="desplegar"> 
            <li><a href="">Inicio</a></li>
            <li><a href="">Catálogo</a> </li>
            <li><a href="">Contáctanos</a></li>
            <li><a href="">Sesión</a></li>
        </ul>
    </nav>
    
    
    <div class="slider">
        <div class="miSlider fade">
            <img src="Images/img1.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="Images/img2.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="Images/img3.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="Images/img4.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="Images/img5.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="Images/img6.jpg" alt="">
        </div>
        <div class="miSlider fade">
            <img src="Images/img7.jpg" alt="">
        </div>
        <div class="direcciones">
            <a href="#" class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
            <a href="#" class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
        </div>
        <div class="barras">
            <span class="barra active" onclick="posicionSlide(1)"></span>
            <span class="barra" onclick="posicionSlide(2)"></span>
            <span class="barra" onclick="posicionSlide(3)"></span>
            <span class="barra" onclick="posicionSlide(4)"></span>
            <span class="barra" onclick="posicionSlide(5)"></span>
            <span class="barra" onclick="posicionSlide(6)"></span>
            <span class="barra" onclick="posicionSlide(7)"></span>
        </div>
    </div>

    <script src="Js/main.js"></script>
</body>
</html>