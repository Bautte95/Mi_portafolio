<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Mi_portafolio_web/CSS/estilo_portafolio.css">
    <link rel="stylesheet" href="http://localhost/Mi_portafolio_web/CSS/estilo_portafolio_responsive.css">
    <link rel="stylesheet" href="http://localhost/Mi_portafolio_web/CSS/normalize.css">
    <script src="https://kit.fontawesome.com/d86715601a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css"/>
    <title>Document</title>
</head>
<body>
    <div class="barra_menu_lateral">
        <div class="icono__nav">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="menu__lateral">
            <div><a class="enlaces__lat" href="#inicio">Inicio</a></div>
            <div><a class="enlaces__lat" href="#sobre_mi">Sobre mi</a></div>
            <div><a class="enlaces__lat" href="#habilidades">Habilidades</a></div>
            <div><a class="enlaces__lat" href="#proyectos">Proyectos</a></div>
            <div><a class="enlaces__lat" href="#contactame">contactame</a></div>
        </div>
    </div>
    <div class="contenedor__header" id="inicio">
        <header class="barra__menu">
            <div class="contenedor__logo">
                <i class="fa-solid fa-code"></i>
            </div>
            <div class="contenedor__menu">
                <nav>
                    <ul class="listado__menu">
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#sobre_mi">Sobre mi</a></li>
                        <li><a href="#habilidades">Habilidades</a></li>
                        <li><a href="#proyectos">Proyectos</a></li>
                        <li><a href="#contactame">contactame</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="contenedor__titulo">
            <div class="texto__titulo">
                <div class="div__nombre">
                    <h2>Dimas_Bautte</h2>
                    <i class="fa-solid fa-computer"></i>
                </div>
                <div class="div__perfil">
                    <h3>Desarrollador frontend</h3>
                </div>
            </div>
        </div>
    </div>
    <main class="contenedor__contenido">
        <section class="seccion__sobreMi" id="sobre_mi">
            <div class="titulo__seccion titulo__sobreMi">
                <h2>SOBRE MI</h2>
                <hr>
            </div>
            <div class="caja__sobreMi">
                <div>
                    <div class="caja__foto sobreMi__responsive">
                        <img src="http://localhost/Mi_portafolio_web/IMG/foto_perfil.jpg" alt="">
                    </div>
                </div>
                <div class="caja__miDescripcion sobreMi__responsive">
                    <p>Hola, soy Dimas Bautte, desarrollador Frontend autodidacta con conocimientos y habilidades para diseñar y desarrollar páginas web utilizando herramientas como HTML, CSS, lenguajes de programación como JavaScript y PHP, adicional a eso tengo conocimientos en el manejo de la plataforma GitHub y de base de datos relacionales como MySql. Actualmente también me estoy certificando como tecnólogo en análisis y desarrollo de sistemas de información en donde aprendo a evaluar las necesidades de una empresa para brindar y desarrollar una solución tecnológica.
                    Me considero una personas apasionada e innovadora que se encuentra siempre en busca de nuevos conocimientos, me comprometo mucho con el cumplimiento de mis objetivos y responsabilidades, soy bueno trabajando en equipo y adaptándome a los cambios.
 </p>
                    <div class="caja__cv">
                        <a href="http://localhost/Mi_portafolio_web/CV/CV-Dimas_Bautte.pdf" download="CV-Dimas_Bautte.pdf"><button class="boton__descarga__cv">Descargar CV</button></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="seccion__habilidades" id="habilidades">
            <div class="titulo__seccion titulo__habilidades">
                <h2>HABILIDADES</h2>
                <hr>
            </div>
            <div class="caja__habilidades">
                <div><img id="img__html" src="http://localhost/Mi_portafolio_web/IMG/html.png" alt=""></div>
                <div><img id="img__CSS" src="http://localhost/Mi_portafolio_web/IMG/css-3.png" alt=""></div>
                <div><img id="img__BOOTSTRAP" src="http://localhost/Mi_portafolio_web/IMG/Bootstrap_logo.svg.png" alt=""></div>
                <div><img id="img__JS" src="http://localhost/Mi_portafolio_web/IMG/js.png" alt="" srcset=""></div>
                <div><img id="img__GIT" src="http://localhost/Mi_portafolio_web/IMG/github.png" alt=""></div>
                <div><img id="img__MYSQL" src="http://localhost/Mi_portafolio_web/IMG/mysql.png" alt=""></div>
                <div><img id="img__PHP" src="http://localhost/Mi_portafolio_web/IMG/php.png" alt=""></div>
            </div>
        </section>
        <section class="seccion__proyectos" id="proyectos">
            <div class="titulo__seccion titulo__proyectos">
                <h2>PROYECTOS</h2>
                <hr>
            </div>
            <div class="caja__proyectos">
                <div class="proyecto__portafolio">
                    <img src="http://localhost/Mi_portafolio_web/IMG/proyecto_portafolio.jpg" alt="">
                    <div class="descripcion__proyecto">
                        <h4>Mi portafolio</h4>
                        <div class="enlaces__proyectos">
                            <a href=""><i class="fa-solid fa-earth-americas"></i>  Sitio web</a>
                            <a href=""><i class="fa-brands fa-github"></i>  Repositorio</a>
                        </div>
                    </div>
                </div>
                <div class="proyecto__portafolio">
                    <img src="http://localhost/Mi_portafolio_web/IMG/proyecto_sena.jpg" alt="">
                    <div class="descripcion__proyecto">
                        <h4>Proyecto Sena</h4>
                        <div class="enlaces__proyectos">
                            <a href=""><i class="fa-solid fa-earth-americas"></i>  Sitio web</a>
                            <a href=""><i class="fa-brands fa-github"></i>  Repositorio</a>
                        </div>
                    </div>
                </div>
                <div class="proyecto__portafolio">
                    <img src="http://localhost/Mi_portafolio_web/IMG/imagen.jpg" alt="">
                </div>
                <div class="proyecto__portafolio">
                    <img src="http://localhost/Mi_portafolio_web/IMG/imagen.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="seccion__contacto" id="contactame">
            <div class="titulo__seccion titulo__contacto">
                <h2>Contactame</h2>
                <hr>
            </div>
            <div class="caja__formulario" >
                <form id = "envio__form" class="contenedor__formulario" method="post">
                    <div class="fila1__form">
                        <input type="text" id="nombre" class="focus__nombre focus" placeholder="Nombre" name="nombre" require="">
                        <input type="email" id="email" class="focus__email focus" placeholder="Email" name="email" require="">
                    </div>
                    <div class="fila2__form">
                        <textarea type="text" id="comentarios" class="focus__comentarios focus" placeholder="Comentarios" name="comentarios" require=""></textarea>
                        <button id="enviar__datos" type="button" class="boton__enviar" name = "enviar">Enviar</button>
                    </div>
                </form>
                <div id="error"></div>
            </div>
        </section>
    </main>
    <footer>
        <div class="iconos__contacto">
            <div><a href="https://www.linkedin.com/in/dimas-bautte-350423209" target="_blank"><i class="fa-brands fa-linkedin"></i></a></div>
            <div><a href="https://www.instagram.com/dimas_bautte/" target="_blank"><i class="fa-brands fa-instagram"></i></a></div>
            <div><a href="https://github.com/Bautte95" target="_blank"><i class="fa-brands fa-github"></i></a></div>
        </div>
        <div class="caja__copyright">
            <h4>© 2022 Copyright: Dimas Bautte Rodriguez</h4>
        </div>
    </footer>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script src="http://localhost/Mi_portafolio_web/JS/portafolio.js"></script>
</body>
</html>