<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" href="../img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <script src="https://kit.fontawesome.com/6e1bf200d6.js" crossorigin="anonymous"></script>
</head>

<body class="fondocontacto">
    <header>
        <img src="../img/index.JPG" alt="" class="logo">
        <nav>
            <ul>
                <li><a href="../index.php"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="company.php"><i class="fa-solid fa-circle-info"></i>Nuestro producto</a></li>
                <li><a href="contact.php"><i class="fa-solid fa-id-badge"></i>Contacto</a></li>
                <li><a href="workwithus.php"><i class="fa-solid fa-person-chalkboard"></i>Trabaja con nosotros</a></li>
                <div id="loginbutton">
                    <a href="/views/login.php" class="loginicon"><i class="fa-solid fa-user-secret"
                            aria-hidden="true"></i></a>
                </div>

            </ul>
        </nav>
    </header>
    <article class="contacto">
        <div>
            <h1>CONTACTO</h1>
        </div>
        <div class="formulario">
            <form class="contact-form" action=" " method="POST">
                <input type="text" id="nombre" name="Nombre" placeholder="NOMBRE*">
                <input type="text" id="correo" name="Correo" placeholder="CORREO*">
                <input type="text" id="asunto" name="Asunto" placeholder="ASUNTO*">
                <label for="">COMUNIDAD AUTÓNOMA*</label>
                <select value="COMUNIDAD AUTÓNOMA" id="comunidades" name="Comunidad Autónoma">
                    <option value="andalucia">Andalucía</option>
                    <option value="aragon">Aragón</option>
                    <option value="asturias">Asturias</option>
                    <option value="canarias">Canarias</option>
                    <option value="cantabria">Cantabria</option>
                    <option value="castilla_la_mancha">Castilla-La Mancha</option>
                    <option value="castilla_y_leon">Castilla y León</option>
                    <option value="cataluna">Cataluña</option>
                    <option value="extremadura">Extremadura</option>
                    <option value="galicia">Galicia</option>
                    <option value="madrid">Comunidad de Madrid</option>
                    <option value="murcia">Región de Murcia</option>
                    <option value="navarra">Comunidad Foral de Navarra</option>
                    <option value="pais_vasco">País Vasco</option>
                    <option value="rioja">La Rioja</option>
                    <option value="valencia">Comunidad Valenciana</option>
                </select>
                <label for="provincias">Selecciona una Provincia:</label>
                <select id="provincias" name="provincia">
                    <script src="../scripts/form.js"></script>
                </select>
                <textarea name="Mensaje" id="mensaje" cols="30" rows="9" placeholder="MENSAJE"></textarea>
                <input type="submit" value="Enviar formulario" id="enviar">


                <input type="hidden" name="_next" value="http://localhost/web/contact.html">
                <input type="hidden" name="_captcha" value="false">
            </form>
        </div>
        <div class="map-info">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2706793.5108729145!2d3.9518813007980493!3d48.507296645864635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c00afb84cbf80d%3A0x8455924a28b277b9!2sAgroBrain!5e0!3m2!1ses!2ses!4v1710491149330!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe-mapa"></iframe>
            <div class="listado">
                <ul>
                    <li><label for=""><i class="fa-solid fa-globe"></i><a href="https://www.agrobrain.info"
                                target="_blank">www.agrobrain.info</a></label></li>
                    <li><label for=""><i class="fa-solid fa-envelope"></i>soporte@agrobrain.es</label></li>
                    <!--<li><label for=""><i class="fa-solid fa-square-phone"></i>+34 640 569 911</label></li>
                    <li><label for=""><i class="fa-solid fa-square-phone"></i>+34 644 719 392</label></li>-->
                </ul>
            </div>
    </article>
    <footer>
        <img src="../img/index.JPG" alt="">
        <h4>Copyright © 2023 Agrobrain Analytics</h4>
        <ul>
            <li>
                <a href="avisolegal.php">Aviso Legal</a>
            </li>
            <li>
                <a href="politicaprivacidad.php">Política de privacidad</a>
            </li>
            <li>
                <a href="contact.php">Contacto</a>
            </li>
        </ul>
    </footer>
</body>
<script src="scripts/background.js"></script>

</html>